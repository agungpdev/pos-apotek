<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\DoctorsModel;

class DokterController extends BaseController
{
    protected $dokter;
    protected $validation;
    public function __construct()
    {
        $this->dokter = new DoctorsModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $data = $this->dokter->findAll();
        if ($data) {

            return $this->response->setJSON(['success' => 'success', 'result' => $data]);
        } else {
            return $this->response->setJSON(['error' => 'error']);
        }
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $validate = $this->validate([
            'doctor' => [
                'rules' => 'required|min_length[6]',
                'label' => 'nama dokter',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 6 karakater'
                ]
            ],
            'spesialis' => [
                'rules' => 'required|min_length[3]',
                'label' => 'spesialis',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
            'address' => [
                'rules' => 'required|min_length[6]',
                'label' => 'alamat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 6 karakater'
                ]
            ],
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_doctor' => $this->validation->getError('doctor'),
                    'error_spesialis' => $this->validation->getError('spesialis'),
                    'error_address' => $this->validation->getError('address'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $data = [
                'name' => $this->request->getVar('doctor'),
                'spesialis' => $this->request->getVar('spesialis'),
                'address' => $this->request->getVar('address')
            ];
            if ($this->dokter->save($data)) {
                $res = ['success' => 'success', 'message' => 'Berhasil ditambahkan', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            } else {
                $res = ['errors' => 'error', 'message' => 'Something wrong!', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            }
        }
    }

    public function edit()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $id = $this->request->getVar('id');
        if ($this->dokter->findDokterById($id)) {
            $res = [
                'success' => 'success',
                'token' => csrf_hash(),
                'result' => $this->dokter->findDokterById($id)
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
    public function cancel_update()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $res = [
            'success' => 'success',
            'token' => csrf_hash(),
            'result' => 'Success canceled'
        ];
        return $this->response->setJSON($res);
    }

    public function update()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $validate = $this->validate([
            'udoctor' => [
                'rules' => 'required|min_length[6]',
                'label' => 'nama dokter',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 6 karakater'
                ]
            ],
            'uspesialis' => [
                'rules' => 'required|min_length[3]',
                'label' => 'spesialis',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
            'uaddress' => [
                'rules' => 'required|min_length[6]',
                'label' => 'alamat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 6 karakater'
                ]
            ],
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_udoctor' => $this->validation->getError('udoctor'),
                    'error_uspesialis' => $this->validation->getError('uspesialis'),
                    'error_uaddress' => $this->validation->getError('uaddress'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $id = $this->request->getVar('id_doc');
            $data = [
                'name' => $this->request->getVar('udoctor'),
                'spesialis' => $this->request->getVar('uspesialis'),
                'address' => $this->request->getVar('uaddress')
            ];
            if ($this->dokter->update(['id' => $id], $data)) {
                $res = ['success' => 'success', 'message' => 'Berhasil update data', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            } else {
                $res = ['errors' => 'error', 'message' => 'Something wrong!', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            }
        }
    }

    public function destroy()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $id = $this->request->getVar('id');
        if ($this->dokter->where("id", $id)->delete()) {
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
