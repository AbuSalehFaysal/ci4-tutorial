<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Libraries\TestLibrary;

class Blog extends Controller
{
    public function index()
    {
        $data = [
            "page_title" => "This is a title",
            "page_heading" => "This is a heading",
            "subjects" => ["HTML", "CSS", "Bootstrap", "JavaScript", "AJAX", "JSON", "jQuery", "PHP", "MySQL", "CodeIgniter", "Laravel"],
        ];
        echo view("myview", $data);
    }
}