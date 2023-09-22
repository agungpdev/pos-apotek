<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\DrugsModel;
use App\Models\LocationsModel;
use App\Models\UnitsModel;
use CodeIgniter\CodeIgniter;

class ObatController extends BaseController
{
    protected $unitModel;
    protected $categoryModel;
    protected $locationModel;
    protected $drugModel;
    protected $validation;

    public function __construct()
    {
        $this->unitModel = new UnitsModel();
        $this->categoryModel = new CategoriesModel();
        $this->locationModel = new LocationsModel();
        $this->drugModel = new DrugsModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Apotech | Data Obat',
            'unit' => $this->unitModel->findAll(),
            'category' => $this->categoryModel->findAll(),
            'location' => $this->locationModel->findAll()
        ];
        return view('dashboard/obat/v-obat', $data);
    }

    public function getObat()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }
        $data = $this->drugModel->findAll();
        return $this->response->setJSON(['status' => 'success', 'result' => $data]);
    }

    public function store()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $validate = $this->validate([
            'code' => [
                'rules' => 'required|is_unique[drug.code]',
                'label' => 'code obat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'barcode' => [
                'rules' => 'required|is_unique[drug.barcode]',
                'label' => 'barcode',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[3]',
                'label' => 'nama obat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakter'
                ]
            ],
            'units' => [
                'rules' => 'required',
                'label' => 'unit / satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'category' => [
                'rules' => 'required',
                'label' => 'category',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'location' => [
                'rules' => 'required',
                'label' => 'location',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'stock-min' => [
                'rules' => 'required',
                'label' => 'minimal stock',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expired' => [
                'rules' => 'required',
                'label' => 'tgl expired',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_code' => $this->validation->getError('code'),
                    'error_barcode' => $this->validation->getError('barcode'),
                    'error_name' => $this->validation->getError('name'),
                    'error_units' => $this->validation->getError('units'),
                    'error_category' => $this->validation->getError('category'),
                    'error_location' => $this->validation->getError('location'),
                    'error_stock_min' => $this->validation->getError('stock-min'),
                    'error_expired' => $this->validation->getError('expired'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {
            $data = [
                'code' => $this->request->getVar('code'),
                'barcode' => $this->request->getVar('barcode'),
                'name' => $this->request->getVar('name'),
                'unit' => $this->request->getVar('units'),
                'category' => $this->request->getVar('category'),
                'location' => $this->request->getVar('location'),
                'stock_minimum' => $this->request->getVar('stock-min'),
                'expired' => $this->request->getVar('expired'),
                'description' => $this->request->getVar('description'),
                'token' => csrf_hash(),
                'status' => 'success'
            ];
            if ($this->drugModel->save($data)) {
                $res = [
                    'status' => 'success',
                    'message' => 'Berhasil disimpan',
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

    public function edit()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        }

        $id = $this->request->getVar('id');
        if ($this->drugModel->findDrugById($id)) {
            $res = [
                'success' => 'success',
                'token' => csrf_hash(),
                'result' => $this->drugModel->findDrugById($id)
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
        $validate = $this->validate([
            'code_up' => [
                'rules' => 'required',
                'label' => 'code obat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'barcode_up' => [
                'rules' => 'required',
                'label' => 'barcode',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                ]
            ],
            'name_up' => [
                'rules' => 'required|min_length[3]',
                'label' => 'nama obat',
                'errors' => [
                    'required' => '{field} tidak boleh kosong',
                    'min_length' => '{field} minimal 3 karakter'
                ]
            ],
            'units_up' => [
                'rules' => 'required',
                'label' => 'unit / satuan',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'category_up' => [
                'rules' => 'required',
                'label' => 'category',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'location_up' => [
                'rules' => 'required',
                'label' => 'location',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'stock-min_up' => [
                'rules' => 'required',
                'label' => 'minimal stock',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'expired_up' => [
                'rules' => 'required',
                'label' => 'tgl expired',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]
        ]);
        if (!$validate) {
            $res = [
                'error' => [
                    'error_code_up' => $this->validation->getError('code_up'),
                    'error_barcode_up' => $this->validation->getError('barcode_up'),
                    'error_name_up' => $this->validation->getError('name_up'),
                    'error_units_up' => $this->validation->getError('units_up'),
                    'error_category_up' => $this->validation->getError('category_up'),
                    'error_location_up' => $this->validation->getError('location_up'),
                    'error_stock_min_up' => $this->validation->getError('stock-min_up'),
                    'error_expired_up' => $this->validation->getError('expired_up'),
                ],
                'token' => csrf_hash()
            ];
            return $this->response->setJSON($res);
        } else {

            $id = $this->request->getVar('id');
            $data = [
                // 'code' => $this->request->getVar('code_up'),
                // 'barcode' => $this->request->getVar('barcode_up'),
                'name' => $this->request->getVar('name_up'),
                'unit' => $this->request->getVar('units_up'),
                'category' => $this->request->getVar('category_up'),
                'location' => $this->request->getVar('location_up'),
                'stock_minimum' => $this->request->getVar('stock-min_up'),
                'expired' => $this->request->getVar('expired_up'),
                'description' => $this->request->getVar('description_up'),
            ];
            // return $this->response->setJSON($data);
            if ($this->drugModel->update(['drug_id' => $id], $data)) {
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
    }

    public function destroy()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            exit();
        } else {
            $code = $this->request->getVar('id');
            if ($this->drugModel->where(["code" => $code])->delete()) {
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
}
