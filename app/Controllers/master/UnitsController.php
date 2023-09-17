<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\UnitsModel;

class UnitsController extends BaseController
{
    protected $unitModel;
    protected $validation;
    public function __construct()
    {
        $this->unitModel = new UnitsModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        if ($this->request->isAJAX()) {
            $data = $this->unitModel->findAll();
            echo json_encode(['status' => 'success', 'result' => $data]);
        } else {
            exit('404 Not Found');
        }
    }

    public function edit()
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

    public function destroy()
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

    public function update()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $id = $this->request->getVar('id');
            $validate = $this->validate([
                'unit' => [
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
                        'error_units_up' => $this->validation->getError('unit'),
                    ],
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $data = ["unit_name" => $this->request->getVar('unit')];
                if ($this->unitModel->update(["unit_id" => $id], $data)) {
                    $res = [
                        'success' => 'success',
                        'message' => 'Update data berhasil',
                        'token' => csrf_hash()
                    ];
                    return $this->response->setJSON($res);
                } else {
                    $res = [
                        'errors' => 'error',
                        'message' => 'Something wrong',
                        'token' => csrf_hash()
                    ];
                    return $this->response->setJSON($res);
                }
            }
        }
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $validate = $this->validate([
                'unit' => [
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
                        'error_units' => $this->validation->getError('unit'),
                    ],
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $data = [
                    'unit_name' => $this->request->getVar('unit')
                ];
                if ($this->unitModel->save($data)) {
                    $res = [
                        'success' => 'success',
                        'token' => csrf_hash(),
                        'message' => 'Data berhasil ditambahkan'
                    ];
                    return $this->response->setJSON($res);
                } else {
                    $res = [
                        'errors' => 'error',
                        'token' => csrf_hash(),
                        'message' => 'Data gagal ditambahkan'
                    ];
                    return $this->response->setJSON($res);
                }
            }
        }
    }
}
