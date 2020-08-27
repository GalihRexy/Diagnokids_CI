<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{

	public function _construct()
	{
		$this->user = new UserModel();
	}


	public function index()
	{
		if(session()->has('email')){
			return view('home');
		} else {
			session()->setFlashdata('alert-info', 'Silahkan login terlebih dahulu...');
			return redirect()->to(base_url('auth'));
		}
	}

	public function registrasi()
	{
		$nama = $this->request->getPost('nama');
		$email = $this->request->getPost('email');
		$pass = $this->request->getPost('password');


		$data = [
			'name' => $nama,
			'email' => $email,
			'password' => $pass,
		];

		$simpan = $this->user->inserUser($data);

		if($simpan)
	    {
	        // Deklarasikan session flashdata dengan tipe success
	        session()->setFlashdata('success', 'Created product successfully');
	        // Redirect halaman ke product
	        return redirect()->to(base_url('auth')); 
	    }
	}

	


	//--------------------------------------------------------------------

}
