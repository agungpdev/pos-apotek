<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\DrugsModel;
use App\Models\LocationsModel;
use App\Models\UnitsModel;

class ObatController extends BaseController
{
    protected $unitModel;
    protected $categoryModel;
    protected $locationModel;
    protected $drugModel;

    public function __construct()
    {
        $this->unitModel = new UnitsModel();
        $this->categoryModel = new CategoriesModel();
        $this->locationModel = new LocationsModel();
        $this->drugModel = new DrugsModel();
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

    public function store()
    {
        if (!$this->request->isAJAX()) {
            exit('404 No Found');
        } else {
            $validation = \Config\Services::validation();
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
                        'error_code' => $validation->getError('code'),
                        'error_barcode' => $validation->getError('barcode'),
                        'error_name' => $validation->getError('name'),
                        'error_units' => $validation->getError('units'),
                        'error_category' => $validation->getError('category'),
                        'error_location' => $validation->getError('location'),
                        'error_stock_min' => $validation->getError('stock-min'),
                        'error_expired' => $validation->getError('expired'),
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
    }
}
