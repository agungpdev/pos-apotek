<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\CustomersModel;

class CustomerController extends BaseController
{
    protected $customerModel;
    protected $validation;
    public function __construct()
    {
        $this->customerModel = new CustomersModel();
        $this->validation =  \Config\Services::validation();
    }
    public function index()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $data = ['success' => 'success', 'code' => $this->customerModel->customerId(), 'result' => $this->customerModel->findAll()];
        return $this->response->setJSON($data);
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $validate = $this->validate([
            'code_cust' => [
                'rules' => 'required|min_length[4]',
                'label' => 'Code customer',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 4 karakater'
                ]
            ],
            'name_cust' => [
                'rules' => 'required|min_length[4]',
                'label' => 'Nama customer',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 4 karakater'
                ]
            ],
            'kontak_cust' => [
                'rules' => 'max_length[14]|is_unique[customer.contact]',
                'label' => 'Kontak customer',
                'errors' => [
                    'is_unique' => '{field} sudah terdaftar',
                    'max_length' => '{field} maximal 14 karakater'
                ]
            ],
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_name_cust' => $this->validation->getError('name_cust'),
                    'error_code_cust' => $this->validation->getError('code_cust'),
                    'error_kontak_cust' => $this->validation->getError('kontak_cust'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $data = [
                'customer_id' => $this->request->getVar('code_cust'),
                'name' => $this->request->getVar('name_cust'),
                'contact' => $this->request->getVar('kontak_cust'),
                'address' => $this->request->getVar('address_cust'),
            ];
            if ($this->customerModel->save($data)) {
                $res = ['success' => 'success', 'token' => csrf_hash(), 'message' => 'Berhasil menambahkan customer'];
                return $this->response->setJSON($res);
            }
            $res = ['erorrs' => 'error', 'token' => csrf_hash(), 'message' => 'Something Wrong!'];
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
        if ($this->customerModel->findCustomerById($id)) {
            $res = [
                'success' => 'success',
                'token' => csrf_hash(),
                'result' => $this->customerModel->findCustomerById($id)
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
        $validate = $this->validate([
            'code_ucust' => [
                'rules' => 'required|min_length[4]',
                'label' => 'Code customer',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 4 karakater'
                ]
            ],
            'name_ucust' => [
                'rules' => 'required|min_length[4]',
                'label' => 'Nama customer',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 4 karakater'
                ]
            ],
            'kontak_ucust' => [
                'rules' => 'max_length[14]',
                'label' => 'Kontak customer',
                'errors' => [
                    'max_length' => '{field} maximal 14 karakater'
                ]
            ],
        ]);
        if (!$validate) {
            $res = [

                'error' => [
                    'error_name_ucust' => $this->validation->getError('name_ucust'),
                    'error_code_ucust' => $this->validation->getError('code_ucust'),
                    'error_kontak_ucust' => $this->validation->getError('kontak_ucust'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $id = $this->request->getVar('id_cust');
            $data = [
                'name' => $this->request->getVar('name_ucust'),
                'contact' => $this->request->getVar('kontak_ucust'),
                'address' => $this->request->getVar('address_ucust'),
            ];
            if ($this->customerModel->update(["id" => $id], $data)) {
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

    public function destroy()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $id = $this->request->getVar('id');
        if ($this->customerModel->where(["id" => $id])->delete()) {
            $res = [
                'success' => 'success',
                'message' => 'Hapus data berhasil',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $res = [
                'error' => 'error',
                'message' => 'Hapus data berhasil',
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        }
    }
}
