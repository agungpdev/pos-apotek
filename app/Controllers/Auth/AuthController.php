<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthController extends BaseController
{
  protected $authModel;

  public function __construct()
  {
    $this->authModel = new AuthModel();
  }

  public function index(): string
  {
    $data = ["title" => "POS | APP"];
    return view('auth/login', $data);
  }
  public function signup()
  {
    $data = ["title" => "CRUD | APP"];
    return view('auth/register', $data);
  }

  public function create_account()
  {
    if (!$this->request->isAJAX()) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      exit();
    } else {
      $validation = \Config\Services::validation();
      $validate = $this->validate([
        'name' => [
          'rules' => 'required|min_length[4]',
          'label' => 'nama',
          'errors' => [
            'required' => '{field} tidak boleh kosong',
            'min_length' => '{field} minimal 4 karakater'
          ]
        ],
        'email' => [
          'rules' => 'required|valid_email|is_unique[user.email]',
          'label' => 'email',
          'errors' => [
            'required' => '{field} tidak boleh kosong',
            'is_unique' => '{field} sudah terdaftar',
            'valid_email' => '{field} tidak valid'
          ]
        ],
        'password' => [
          'rules' => 'required|min_length[8]',
          'label' => 'password',
          'errors' => [
            'required' => '{field} tidak boleh kosong',
            'min_length' => '{field} minimal 8 karakter'
          ]
        ]
      ]);
      if (!$validate) {
        $res = [
          'error' => [
            'error_name' => $validation->getError('name'),
            'error_email' => $validation->getError('email'),
            'error_password' => $validation->getError('password'),
          ],
          'token' => csrf_hash()
        ];
        return $this->response->setJSON($res);
      } else {
        $haspass = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
        $data = [
          'email' => $this->request->getVar('email'),
          'name' => $this->request->getVar('name'),
          'password' => $haspass,
          'role' => 'Owner',
        ];
        if ($this->authModel->save($data)) {
          $res = ['url' => site_url(), 'status' => 'success', 'message' => 'Berhasil mendaftar'];
          return $this->response->setJSON($res);
        }
      }
    }
  }

  public function login()
  {
    if (!$this->request->isAJAX()) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      exit();
    } else {
      $validation = \Config\Services::validation();
      $validate = $this->validate([
        'email' => [
          'rules' => 'required|valid_email',
          'label' => 'email',
          'errors' => [
            'required' => '{field} tidak boleh kosong',
            'valid_email' => '{field} email tidak valid'
          ]
        ],
        'password' => [
          'rules' => 'required|min_length[8]',
          'label' => 'password',
          'errors' => [
            'required' => '{field} tidak boleh kosong',
            'min_length' => '{field} minimal 8 karakter'
          ]
        ]
      ]);
      if (!$validate) {
        $res = [
          'error' => [
            'error_email' => $validation->getError('email'),
            'error_password' => $validation->getError('password'),
          ],
          'token' => csrf_hash()
        ];
        return $this->response->setJSON($res);
      } else {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $this->authModel->checkUser($email);
        if (!$user) {
          $res = [
            'token' => csrf_hash(),
            'status' => 'error',
            'message' => 'email or password incorrect!',
          ];
          return $this->response->setJSON($res);
        } else {
          $verifyPass = password_verify($password, $user['password']);
          $verified = $this->authModel->checkPass($verifyPass, $user);
          return $this->response->setJSON($verified);
        }
      }
    }
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to(site_url());
  }
}
