<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class TestHelpers extends Controller
{
    public function index() {
        helper(['form', 'html', 'cookie', 'array', 'test']);
        echo form_open();
        echo form_input("username", "PHP");
        echo getRandom([10,20,30,40,50]);
        echo randomString();
    }
}