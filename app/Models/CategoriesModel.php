<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
    protected $table            = 'category';
    protected $primaryKey       = 'category_id';
    protected $protectFields    = true;
    protected $allowedFields    = ['category_name'];

    public function findCategoryById($id)
    {
        return $this->where('category_id', $id)->first();
    }
}
