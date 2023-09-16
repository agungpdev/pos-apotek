<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\LocationsModel;

class LocationController extends BaseController
{
    protected $locationModel;

    public function __construct()
    {
        $this->locationModel = new LocationsModel();
    }
    public function ajax_get_location()
    {
        if ($this->request->isAJAX()) {
            $data = $this->locationModel->findAll();
            echo json_encode(['status' => 'success', 'result' => $data]);
        } else {
            exit('404 Not Found');
        }
    }

    public function ajax_store_location()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $data = [
                'location_name' => $this->request->getVar('location')
            ];
            if ($this->locationModel->save($data)) {
                $res = ['status' => 'success', 'message' => 'Berhasil ditambahkan', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            } else {
                $res = ['status' => 'error', 'message' => 'Something wrong!', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            }
        }
    }

    public function ajax_form_location()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
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
    }

    public function ajax_delete_location()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
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
    }

    public function ajax_update_location()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $id = $this->request->getVar('id');
            $data = ["location_name" => $this->request->getVar('location')];
            if ($this->locationModel->update(["location_id" => $id], $data)) {
                $res = ['status' => 'success', 'message' => 'Berhasil update data', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            } else {
                $res = ['status' => 'error', 'message' => 'Something wrong!', 'token' => csrf_hash()];
                return $this->response->setJSON($res);
            }
        }
    }
}
