<?php

namespace App\Models;

use CodeIgniter\Model;

class PharmacistModel extends Model
{
    protected $table            = 'pharmacist';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['apoteker', 'no_sik'];
    public function findPharmacistById($id)
    {
        return $this->where('id', $id)->first();
    }
}
