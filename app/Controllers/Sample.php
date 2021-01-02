<?php namespace App\Controllers;

class Sample extends BaseController
{

    public function create($num, $name)
    {
        echo "THIS IS CREATE METHOD!!!".$num.$name;
    }

}