<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		$data = [
			'page_title' => 'This is a title',
			'page_heading' => 'This is a heading'
		];
		echo view('homeview');
	}

	public function about()
	{
		$data = [
			'page_title' => 'This is a title',
			'page_heading' => 'This is a heading'
		];
		return view('aboutview', $data);
	}

}
