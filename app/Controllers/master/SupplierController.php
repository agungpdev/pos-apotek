<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\SuppliersModel;

class SupplierController extends BaseController
{
    protected $supplierModel;
    protected $validation;

    public function __construct()
    {
        $this->supplierModel = new SuppliersModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        } else {
            $data = $this->supplierModel->findAll();
            if (!$data) {
                return $this->response->setJSON(['error' => 'error']);
            }
            $res = ['status' => 'success', 'result' => $data];
            return $this->response->setJSON($res);
        }
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $validate = $this->validate([
            'name' => [
                'rules' => 'required|min_length[4]',
                'label' => 'Nama',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 4 karakater'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[supplier.email]',
                'label' => 'Email',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah terdaftar',
                    'valid_email' => '{field} tidak valid'
                ]
            ],
            'hp' => [
                'rules' => 'required|numeric|min_length[11]|max_length[14]|is_unique[supplier.num_hp]',
                'label' => 'No hp',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} minimal 11 karakater',
                    'is_unique' => '{field} sudah terdaftar',
                    'max_length' => '{field} maximal 14 karakater'
                ]
            ],
            'bank' => [
                'rules' => 'required|min_length[3]',
                'label' => 'Nama bank',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
            'rekening' => [
                'rules' => 'required|numeric|is_unique[supplier.account_number]',
                'label' => 'No rekening',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'numeric' => '{field} harus berupa angka',
                    'is_unique' => '{field} sudah terdaftar',
                ]
            ],
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_name' => $this->validation->getError('name'),
                    'error_telp' => $this->validation->getError('telp'),
                    'error_email' => $this->validation->getError('email'),
                    'error_hp' => $this->validation->getError('hp'),
                    'error_bank' => $this->validation->getError('bank'),
                    'error_rekening' => $this->validation->getError('rekening'),
                    'error_city' => $this->validation->getError('city'),
                    'error_address' => $this->validation->getError('address'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $data = [
                'name' => $this->request->getVar('name'),
                'num_telp' => $this->request->getVar('telp'),
                'num_hp' => $this->request->getVar('hp'),
                'account_number' => $this->request->getVar('rekening'),
                'account_name' => $this->request->getVar('bank'),
                'email' => $this->request->getVar('email'),
                'website' => $this->request->getVar('website'),
                'address' => $this->request->getVar('address'),
                'city' => $this->request->getVar('city'),
            ];
            if ($this->supplierModel->save($data)) {
                $res = ['status' => 'success', 'token' => csrf_hash(), 'message' => 'Berhasil menambahkan supplier'];
                return $this->response->setJSON($res);
            }
            $res = ['status' => 'error', 'token' => csrf_hash(), 'message' => 'Something Wrong!'];
            return $this->response->setJSON($res);
        }
    }

    public function edit()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $id = $this->request->getVar('id');
        if ($this->supplierModel->findSupplierById($id)) {
            $res = [
                'success' => 'success',
                'token' => csrf_hash(),
                'result' => $this->supplierModel->findSupplierById($id)
            ];
            return $this->response->setJSON($res);
        } else {
            $res = [
                'error' => 'error',
                'token' => csrf_hash(),
                'result' => 'Something wrong!'
            ];
            return $this->response->setJSON($res);
        }
    }

    public function update()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'num_telp' => $this->request->getVar('telp'),
            'num_hp' => $this->request->getVar('hp'),
            'account_number' => $this->request->getVar('rekening'),
            'account_name' => $this->request->getVar('bank'),
            'email' => $this->request->getVar('email'),
            'website' => $this->request->getVar('website'),
            'address' => $this->request->getVar('address'),
            'city' => $this->request->getVar('city'),
        ];
        if ($this->supplierModel->update(["id" => $id], $data)) {
            $res = [
                'success' => 'success',
                'message' => 'Berhasil update data',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $res = [
                'error' => 'error',
                'message' => 'Something wrong!',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        }
    }

    public function destroy()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $id = $this->request->getVar('id');
        if ($this->supplierModel->where("id", $id)->delete()) {
            $res = [
                'success' => 'success',
                'message' => 'Hapus data berhasil',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $res = [
                'error' => 'error',
                'message' => 'Something wrong!',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        }
    }
}
