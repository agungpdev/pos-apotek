<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{

  public function index(): mixed
  {
    $data = ["title" => "POS | APP"];
    return view('dashboard/v-dashboard', $data);
  }
  public function import_obat()
  {
    if (!$this->request->isAJAX()) {
      throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
      exit();
    }

    $validation = \Config\Services::validation();
    $validate = $this->validate([
      'import-obat' => [
        'rules' => 'uploaded[import_obat]|ext_in[import_obat,xls,xlsx]',
        'label' => 'file',
        'errors' => [
          'uploaded' => '{field} wajib di isi',
          'min_length' => '{field} bukan file excel'
        ]
      ],
    ]);
    if (!$validate) {
      $res = [
        'error' => [
          'error_file_obat' => $this->$validation->getError('import-obat'),
        ],
        'token' => csrf_hash()
      ];
      return $this->response->setJSON($res);
    }
  }
}
