<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\UnitsModel;

class UnitsController extends BaseController
{
    protected $unitModel;
    public function __construct()
    {
        $this->unitModel = new UnitsModel();
    }
    public function ajax_get_unit()
    {
        if ($this->request->isAJAX()) {
            $data = $this->unitModel->findAll();
            echo json_encode(['status' => 'success', 'result' => $data]);
        } else {
            exit('404 Not Found');
        }
    }

    public function ajax_form_unit()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $id = $this->request->getVar('id');
            if ($this->unitModel->findUnitById($id)) {
                $res = [
                    'status' => 'success',
                    'token' => csrf_hash(),
                    'result' => $this->unitModel->findUnitById($id)
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'token' => csrf_hash(),
                    'result' => 'Something wrong!'
                ];
                return $this->response->setJSON($res);
            }
        }
    }

    public function ajax_delete_unit()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $id = $this->request->getVar('id');
            if ($this->unitModel->where(["unit_id" => $id])->delete()) {
                $res = [
                    'status' => 'success',
                    'message' => 'Hapus data berhasil',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'message' => 'Something wrong!',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            }
        }
    }

    public function ajax_update_unit()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $id = $this->request->getVar('id');
            $data = ["unit_name" => $this->request->getVar('unit')];
            if ($this->unitModel->update(["unit_id" => $id], $data)) {
                $res = [
                    'status' => 'success',
                    'message' => 'Update data berhasil',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'message' => 'Something wrong',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            }
        }
    }

    public function ajax_store_unit()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $data = [
                'unit_name' => $this->request->getVar('unit')
            ];
            if ($this->unitModel->save($data)) {
                $res = [
                    'status' => 'success',
                    'token' => csrf_hash(),
                    'message' => 'Data berhasil ditambahkan'
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'token' => csrf_hash(),
                    'message' => 'Data gagal ditambahkan'
                ];
                return $this->response->setJSON($res);
            }
        }
    }
}
