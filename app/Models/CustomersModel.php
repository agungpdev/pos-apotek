<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table            = 'customer';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['customer_id', 'name', 'contact', 'address'];

    public function findCustomerById($id)
    {
        return $this->where('id', $id)->first();
    }
    public function customerId()
    {
        $sql = "SELECT MAX(MID(customer_id,9,4)) AS customer_no FROM customer WHERE MID(customer_id,3,6) = DATE_FORMAT(CURDATE(), '%y%m%d')";
        $query = $this->db->query($sql);
        if ($query->getNumRows() > 0) {
            $row = $query->getRow();
            $n = ((int)$row->customer_no) + 1;
            $no = sprintf("%'.04d", $n);
        } else {
            $no = "0001";
        }
        $customer_no = "CS" . date('ymd') . $no;
        return $customer_no;
    }
}
