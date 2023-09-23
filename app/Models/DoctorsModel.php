<?php

namespace App\Models;

use CodeIgniter\Model;

class DoctorsModel extends Model
{
    protected $table            = 'doctor';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'spesialis', 'address'];

    public function findDokterById($id)
    {
        return $this->where('id', $id)->first();
    }
}
