<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'email';
    protected $useAutoIncrement = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['email', 'name', 'password', 'role'];

    public function checkUser($email)
    {
        return $this->where('email', $email)->first();
    }
}
