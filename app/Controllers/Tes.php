<?php 

namespace App\Controllers;

class Tes extends BaseController	
{
	public function index()
	{
		return view('testing');
	}

	public function proses()
	{
		$number1 = $this->request->getPost('number1');
		$number2 = $this->request->getPost('number2');

		return $number1;
	}
}