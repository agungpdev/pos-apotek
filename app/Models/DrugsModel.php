<?php

namespace App\Models;

use CodeIgniter\Model;

class DrugsModel extends Model
{
    protected $table            = 'drug';
    protected $primaryKey       = 'drug_id';
    protected $protectFields    = true;
    protected $allowedFields    = ['code', 'barcode', 'name', 'unit', 'category', 'location', 'stock_minimum', 'stock', 'expired', 'general_price', 'doctor_price', 'recipe_price', 'description'];
}
