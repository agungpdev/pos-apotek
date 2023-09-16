<?php

namespace App\Models;

use CodeIgniter\Model;

class UnitsModel extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'unit';
    protected $primaryKey       = 'unit_id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['unit_name'];

    public function getUnit()
    {
        return $this->findAll();
    }
    public function findUnitById($id)
    {
        return $this->where('unit_id', $id)->first();
    }

    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
