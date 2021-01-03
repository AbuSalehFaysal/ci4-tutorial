<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Libraries\TestLibrary;

class Testmail extends Controller
{
    public function index(){
        $to = 'abusalehfaysal222@gmail.com';
        $subject = 'CI4-Tutorial Mail Part';
        $message = 'Hello my name is faysal <a href="'.base_url().'/testmail/verify" target="_blank">Activate</a>';
        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('asfaysal.bracu@gmail.com');
        $email->setSubject($subject);
        $email->setMessage($message);
        $filepath = 'public/assets/img/about.jpg';
        $email->attach($filepath);
        if($email->send()){
            echo "Account created successfully, please activate your account";
        } else {
            $email->printDebugger(['headers']);
            print_r($data);
        }
        
    }

    public function verify(){
        echo "Account Vverified";
    }
}