<?php

namespace App\Controllers\Master;

use App\Controllers\BaseController;

class MasterController extends BaseController
{
    public function masterUnits($param)
    {
        $data = [
            "title" => "Apotech | Master",
            "param" => $param,
        ];
        return view('dashboard/master/index-units', $data);
    }

    public function masterClient($param)
    {
        $data = [
            "title" => "Apotech | Master",
            "param" => $param
        ];
        return view('dashboard/master/index-client', $data);
    }

    public function masterPartner($param)
    {
        $data = [
            "title" => "Apotech | Master",
            "param" => $param
        ];
        return view('dashboard/master/index-partner', $data);
    }
}
