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
}
