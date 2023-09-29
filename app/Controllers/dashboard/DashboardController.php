<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CustomersModel;
use App\Models\DrugsModel;
use App\Models\SuppliersModel;

class DashboardController extends BaseController
{
  protected $obat;
  protected $supplier;
  protected $customer;
  protected $validation;

  public function __construct()
  {
    $this->obat = new DrugsModel();
    $this->supplier = new SuppliersModel();
    $this->customer = new CustomersModel();
    $this->validation = \Config\Services::validation();
  }

  public function index(): mixed
  {
    $data = ["title" => "Apotech | Dashboard"];
    return view('dashboard/v-dashboard', $data);
  }
  public function import_obat()
  {
    if (!$this->request->isAJAX()) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      exit();
    }

    $validate = $this->validate([
      'import_obat' => [
        'rules' => 'uploaded[import_obat]|ext_in[import_obat,xls,xlsx]',
        'label' => 'file',
        'errors' => [
          'uploaded' => '{field} wajib di isi',
          'ext_in' => '{field} bukan file excel'
        ]
      ],
    ]);
    if (!$validate) {
      $res = [
        'error' => [
          'error_file_obat' => 'file tidak ada atau bukan excel',
        ],
        'token' => csrf_hash()
      ];
      return $this->response->setJSON($res);
    } else {
      $file_excel = $this->request->getFile('import_obat');
      $extension = $file_excel->getClientExtension();

      if ($extension == 'xls') {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
      } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
      }
      $spreadsheat = $reader->load($file_excel);
      $data = $spreadsheat->getActiveSheet()->toArray();
      $countError = 0;
      $countSucces = 0;

      foreach ($data as $x => $row) {
        if ($x == 0) {
          continue;
        }
        $code = $row[1];
        $barcode = $row[2];
        $cek_code = $this->obat->where('code', $code)->find();
        $cek_barcode = $this->obat->where('barcode', $barcode)->find();
        if (count($cek_code) > 0 && count($cek_barcode) > 0) {
          $countError++;
        } else {
          $data = [
            'code' => $row[1],
            'barcode' => $row[2],
            'name' => $row[3],
            'unit' => $row[4],
            'category' => $row[5],
            'location' => $row[6],
            'stock_minimum' => $row[7],
            'expired' => $row[8],
            'description' => $row[9],
          ];
          $this->obat->insert($data);
          $countSucces++;
        };
      };

      $res = [
        'status' => 'success',
        'message' => $countSucces . ' Data berhasil disimpan, dan ' . $countError . ' Data gagal di import',
        'token' => csrf_hash(),
        'url' => site_url('dashboard/master/drug')
      ];
      return $this->response->setJSON($res);
    };
  }

  public function import_supplier()
  {
    if (!$this->request->isAJAX()) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      exit();
    }

    $validate = $this->validate([
      'import_supplier' => [
        'rules' => 'uploaded[import_supplier]|ext_in[import_supplier,xls,xlsx]',
        'label' => 'file',
        'errors' => [
          'uploaded' => '{field} wajib di isi',
          'ext_in' => '{field} bukan file excel'
        ]
      ],
    ]);
    if (!$validate) {
      $res = [
        'error' => [
          'error_file_supplier' => 'file tidak ada atau bukan excel',
        ],
        'token' => csrf_hash()
      ];
      return $this->response->setJSON($res);
    } else {
      $file_excel = $this->request->getFile('import_supplier');
      $extension = $file_excel->getClientExtension();

      if ($extension == 'xls') {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
      } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
      }
      $spreadsheat = $reader->load($file_excel);
      $data = $spreadsheat->getActiveSheet()->toArray();
      $countError = 0;
      $countSucces = 0;

      foreach ($data as $x => $row) {
        if ($x == 0) {
          continue;
        }
        $hp = $row[4];
        $email = $row[3];
        $no_rekening = $row[6];
        $cek_hp = $this->supplier->where('num_hp', $hp)->find();
        $cek_email = $this->supplier->where('email', $email)->find();
        $cek_rekening = $this->supplier->where('account_number', $no_rekening)->find();
        if (count($cek_hp) > 0 || count($cek_email) > 0 || count($cek_rekening) > 0) {
          $countError++;
        } else {
          $data = [
            'name' => $row[1],
            'num_telp' => $row[2],
            'email' => $row[3],
            'num_hp' => $row[4],
            'account_name' => $row[5],
            'account_number' => $row[6],
            'city' => $row[7],
            'address' => $row[8],
            'website' => $row[9],
          ];
          $this->supplier->insert($data);
          $countSucces++;
        };
      };

      $res = [
        'status' => 'success',
        'message' => $countSucces . ' Data berhasil disimpan, dan ' . $countError . ' Data gagal di import',
        'token' => csrf_hash(),
        'url' => site_url('dashboard/master/supplier')
      ];
      return $this->response->setJSON($res);
    };
  }

  public function import_customer()
  {
    if (!$this->request->isAJAX()) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      exit();
    }

    $validate = $this->validate([
      'import_customer' => [
        'rules' => 'uploaded[import_customer]|ext_in[import_customer,xls,xlsx]',
        'label' => 'file',
        'errors' => [
          'uploaded' => '{field} wajib di isi',
          'ext_in' => '{field} bukan file excel'
        ]
      ],
    ]);
    if (!$validate) {
      $res = [
        'error' => [
          'error_file_customer' => 'file tidak ada atau bukan excel',
        ],
        'token' => csrf_hash()
      ];
      return $this->response->setJSON($res);
    } else {
      $file_excel = $this->request->getFile('import_customer');
      $extension = $file_excel->getClientExtension();

      if ($extension == 'xls') {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
      } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
      }
      $spreadsheat = $reader->load($file_excel);
      $data = $spreadsheat->getActiveSheet()->toArray();
      $countError = 0;
      $countSucces = 0;

      foreach ($data as $x => $row) {
        if ($x == 0) {
          continue;
        }
        $customer_id = $row[1];
        $contact = $row[3];
        $cek_customer_id = $this->customer->where('customer_id', $customer_id)->find();
        $cek_contact = $this->customer->where('contact', $contact)->find();
        if (count($cek_customer_id) > 0 || count($cek_contact) > 0) {
          $countError++;
        } else {
          $data = [
            'customer_id' => $row[1],
            'name' => $row[2],
            'contact' => $row[3],
            'address' => $row[4],
          ];
          $this->customer->insert($data);
          $countSucces++;
        };
      };

      $res = [
        'status' => 'success',
        'message' => $countSucces . ' Data berhasil disimpan, dan ' . $countError . ' Data gagal di import',
        'token' => csrf_hash(),
        'url' => site_url('dashboard/master/customer')
      ];
      return $this->response->setJSON($res);
    };
  }
}
