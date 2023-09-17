<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\LocationsModel;

class LocationController extends BaseController
{
    protected $locationModel;
    protected $validation;
    public function __construct()
    {
        $this->locationModel = new LocationsModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $data = $this->locationModel->findAll();
        return $this->response->setJSON(['status' => 'success', 'result' => $data]);
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $validate = $this->validate([
            'location' => [
                'rules' => 'required|min_length[3]',
                'label' => 'satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_location' => $this->validation->getError('location'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $data = [
                'location_name' => $this->request->getVar('location')
            ];
            if ($this->locationModel->save($data)) {
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
        $data = $this->locationModel->findLocationById($id);
        if ($data) {
            $res = [
                'status' => 'success',
                'token' => csrf_hash(),
                'result' => $data
            ];
            return $this->response->setJSON($res);
        } else {
            $res = [
                'status' => 'error',
                'token' => csrf_hash(),
                'result' => 'Something Wrong!'
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
        if ($this->locationModel->where(["location_id" => $id])->delete()) {
            $res = [
                'status' => 'success',
                'message' => 'Hapus data berhasil',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $res = [
                'status' => 'success',
                'message' => 'Something wrong!',
                'token' => csrf_hash()
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

        $validate = $this->validate([
            'location-update' => [
                'rules' => 'required|min_length[3]',
                'label' => 'satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakater'
                ]
            ],
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_location_up' => $this->validation->getError('location-update'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $id = $this->request->getVar('id-up-loc');
            $data = ["location_name" => $this->request->getVar('location-update')];
            if ($this->locationModel->update(["location_id" => $id], $data)) {
                $res = ['success' => 'success', 'message' => 'Berhasil update data', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            } else {
                $res = ['errors' => 'error', 'message' => 'Something wrong!', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            }
        }
    }
}
