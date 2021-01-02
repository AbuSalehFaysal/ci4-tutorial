<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function getUsersList(){
        $db = \Config\Database::connect();
        $query = $db->query("select * from users");
        $result = $query->getResult();
        if (count($result)>0) {
            return $result;
        } else {
            return false;
        }
        
    }
}