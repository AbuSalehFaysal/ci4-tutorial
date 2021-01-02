<?php namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Models\UsersModel;

class Users extends Controller
{
    public function index(){
       $usersModel = new UsersModel();
       $data['users'] = $usersModel->getUsersList();
       return view ("userslist_view", $data);
    }
}