<?php

namespace App\Models;

use CodeIgniter\Model;

class LocationsModel extends Model
{
    protected $table            = 'location';
    protected $primaryKey       = 'location_id';
    protected $protectFields    = true;
    protected $allowedFields    = ['location_name'];

    public function findLocationById($id)
    {
        return $this->where('location_id', $id)->first();
    }
}
