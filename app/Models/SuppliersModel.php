<?php

namespace App\Models;

use CodeIgniter\Model;

class SuppliersModel extends Model
{
    protected $table            = 'supplier';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'num_telp', 'num_hp', 'account_number', 'account_name', 'email', 'website', 'address', 'city'];

    public function findSupplierById($id)
    {
        return $this->where('id', $id)->first();
    }
}
