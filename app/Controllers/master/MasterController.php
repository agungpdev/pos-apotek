<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;

class MasterController extends BaseController
{
    public function index($param)
    {
        $data = [
            "title" => "Apotech | Master",
            "param" => $param,
            "bank" => ['BCA', 'BNI', 'BRI', 'Mandiri', 'CIMB Niaga']
        ];
        if ($param === 'category' || $param === 'satuan' || $param === 'location') {
            return view('dashboard/master/index-units', $data);
        } else if ($param === 'supplier' || $param === 'customer') {
            return view('dashboard/master/index-client', $data);
        } else {
            return view('dashboard/master/index-partner', $data);
        }
    }
}
