<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;

class CategoryController extends BaseController
{
    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new CategoriesModel();
    }

    public function ajax_get_category()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $data = $this->categoryModel->findAll();
            $res = ['status' => 'success', 'result' => $data];
            return $this->response->setJSON($res);
        }
    }

    public function ajax_store_category()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $data = [
                'category_name' => $this->request->getVar('category')
            ];
            if ($this->categoryModel->save($data)) {
                $res = [
                    'status' => 'success',
                    'message' => 'Data berhasil disimpan',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'message' => 'Data gagal disimpan',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            }
        }
    }

    public function ajax_form_category()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
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

    public function ajax_delete_category()
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

    public function ajax_update_category()
    {
        if (!$this->request->isAJAX()) {
            exit('404 Not Found');
        } else {
            $id = $this->request->getVar('id');
            $data = [
                "category_name" => $this->request->getVar('category'),
            ];
            if ($this->categoryModel->update(["category_id" => $id], $data)) {
                $res = [
                    'status' => 'success',
                    'message' => 'Berhasil update data',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            } else {
                $res = [
                    'status' => 'error',
                    'message' => 'Gagal update data',
                    'token' => csrf_hash()
                ];
                return $this->response->setJSON($res);
            }
        }
    }
}
