<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Test extends Controller
{
    public $parser;
    public function __construct() {
        $this->parser = \Config\Services::parser();
    }
    public function index() {
        $data = [
            "page_title" => "THIS IS TEST TITLE",
            "page_heading" => "THIS IS TEST HEADING",
            "subjects_list" => [
                ['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Language'],
                ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheet'],
                ['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
                ['subject' => 'AJAX', 'abbr' => 'Asynchronus JavaScript and XML'],
                ['subject' => 'PHP', 'abbr' => 'Hypertext Preprocessor'],
            ],
            "status" => true,
        ];
        return $this->parser->setData($data)->render("myview");
        // echo view("myview", $data);
    }
    public function viewFilter()
    {
        $data = [
            "page_title" => "THIS IS TEST TITLE",
            "page_heading" => "THIS IS TEST HEADING",
            "date" => "25-12-2020",
            "price" => "500",
            "offer" => "10.53",
            "mobile" => "01521323452",
        ];
        return $this->parser->setData($data)->render("filterview");
    }
}