<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\PharmacistModel;

class ApotekerController extends BaseController
{
    protected $pharmacist;
    protected $validation;
    public function __construct()
    {
        $this->pharmacist = new PharmacistModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $data = $this->pharmacist->findAll();
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
            'apoteker' => [
                'rules' => 'required|min_length[3]',
                'label' => 'apoteker',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
            'nosik' => [
                'rules' => 'required|is_unique[pharmacist.no_sik]|min_length[3]',
                'label' => 'nomor sik',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ]
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_apoteker' => $this->validation->getError('apoteker'),
                    'error_nosik' => $this->validation->getError('nosik'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $data = [
                'apoteker' => $this->request->getVar('apoteker'),
                'no_sik' => $this->request->getVar('nosik'),
            ];
            if ($this->pharmacist->save($data)) {
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
        if ($this->pharmacist->findPharmacistById($id)) {
            $res = [
                'success' => 'success',
                'token' => csrf_hash(),
                'result' => $this->pharmacist->findPharmacistById($id)
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
            'uapoteker' => [
                'rules' => 'required|min_length[3]',
                'label' => 'apoteker',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
            'unosik' => [
                'rules' => 'required|min_length[3]',
                'label' => 'nomor sik',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater',
                ]
            ]

        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_uapoteker' => $this->validation->getError('uapoteker'),
                    'error_unosik' => $this->validation->getError('unosik'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $id = $this->request->getVar('id_apt');
            $data = [
                'apoteker' => $this->request->getVar('uapoteker'),
                'no_sik' => $this->request->getVar('unosik'),
            ];
            if ($this->pharmacist->update(['id' => $id], $data)) {
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
        if ($this->pharmacist->where("id", $id)->delete()) {
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
