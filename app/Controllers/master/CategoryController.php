<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;

class CategoryController extends BaseController
{
    protected $categoryModel;
    protected $validation;
    public function __construct()
    {
        $this->categoryModel = new CategoriesModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        } else {
            $data = $this->categoryModel->findAll();
            $res = ['status' => 'success', 'result' => $data];
            return $this->response->setJSON($res);
        }
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        } else {
            $validate = $this->validate([
                'category' => [
                    'rules' => 'required|min_length[3]',
                    'label' => 'kategori',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'min_length' => '{field} minimal 3 karakater'
                    ]
                ],
            ]);
            if (!$validate) {
                $res = [
                    'error' => [
                        'error_category' => $this->validation->getError('category'),
                    ],
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $data = [
                    'category_name' => $this->request->getVar('category')
                ];
                if ($this->categoryModel->save($data)) {
                    $res = [
                        'success' => 'success',
                        'message' => 'Data berhasil disimpan',
                        'token' => csrf_hash()
                    ];
                    return $this->response->setJSON($res);
                } else {
                    $res = [
                        'error' => 'error',
                        'message' => 'Data gagal disimpan',
                        'token' => csrf_hash()
                    ];
                    return $this->response->setJSON($res);
                }
            }
        }
    }

    public function edit()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        } else {
            $id = $this->request->getVar('id');
            if ($this->categoryModel->findCategoryById($id)) {
                $res = [
                    'status' => 'success',
                    'token' => csrf_hash(),
                    'result' => $this->categoryModel->findCategoryById($id)
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
            if ($this->categoryModel->where(["category_id" => $id])->delete()) {
                $res = [
                    'status' => 'success',
                    'message' => 'Hapus data berhasil',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'message' => 'Hapus data berhasil',
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
                'category-update' => [
                    'rules' => 'required|min_length[3]',
                    'label' => 'kategori',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'min_length' => '{field} minimal 3 karakater'
                    ]
                ],
            ]);
            if (!$validate) {
                $res = [
                    'error' => [
                        'error_category_up' => $this->validation->getError('category-update'),
                    ],
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $data = [
                    "category_name" => $this->request->getVar('category'),
                ];
                if ($this->categoryModel->update(["category_id" => $id], $data)) {
                    $res = [
                        'success' => 'success',
                        'message' => 'Berhasil update data',
                        'token' => csrf_hash()
                    ];
                    return $this->response->setJSON($res);
                } else {
                    $res = [
                        'errors' => 'error',
                        'message' => 'Gagal update data',
                        'token' => csrf_hash()
                    ];
                    return $this->response->setJSON($res);
                }
            }
        }
    }
}
