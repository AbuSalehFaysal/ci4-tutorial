<?php 

namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Models\UsersModel;

class Users extends Controller
{
    public function __construct() {
        helper("form");
    }
    public function index() {
        $data=[];
        $data['validation'] = null;
        // $rules = [
        //     'username' => 'required',
        //     'email' => 'required|valid_email',
        //     'contact' => 'required|numeric'
        // ];
        $rules = [
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username Required'
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email Required',
                    'valid_email' => 'Enter Valid Email',
                ],
            ],
            'contact' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Contact Number Required',
                    'numeric' => 'Contact should be numbers',
                ],
            ],
        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                // READY TO SAVE
                echo "Ready to Save";
            } else {
                $data['validation'] = $this->validator;
            }
        } else {
            # code...
        }
        return view("myform", $data);
    }
}