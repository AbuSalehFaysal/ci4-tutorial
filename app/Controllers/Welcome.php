<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;

class Welcome extends Controller
{
	public function index()
	{
		echo "Welcome to CI4";
    }
    
    public function test($name)
	{
		echo "Welcome to ".$name;
	}

    public function address($city,$country)
	{
		echo "I'm from ".$city.",".$country.".";
    }
    
    public function _remap($method,$param1=null, $param2=null)
	{
		if (method_exists($this, $method)) {
            return $this->$method($param1, $param2);
        } 
        // else {
        //     $this->index();
        // }
        throw PageNotFoundException::forPageNotFound();
         
	}

}