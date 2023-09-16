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
    public function checkPass($verifyPass, $user)
    {
        if (!$verifyPass) {
            return [
                'token' => csrf_hash(),
                'status' => 'error',
                'message' => 'email or password incorrect!',
            ];
        } else {
            session()->set('key', $user['email']);
            session()->set('name', $user['name']);
            session()->set('role', $user['role']);
            return ['url' => site_url() . "dashboard/index"];
        }
    }
}
