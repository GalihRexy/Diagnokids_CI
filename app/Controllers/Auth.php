<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends BaseController
{

	public function __construct()
	{
		helper('form');		
	}


	public function index()
	{
		if(session()->has('email')){
			return redirect()->to(base_url('home'));
		} else {
			return view('login');
		}

	}

	public function registrasi()
	{
		$awal = microtime(true);

		$valid = $this->validate([
			'nama' => [
				'label' => 'Nama',
				'rules' => 'required|trim',
				'errors' => [
					'required' => 'tidak boleh kosong',
				]
			],

			'email' => [
				'label' => 'Alamat Email',
				'rules' => 'required|trim|valid_email|is_unique[user.email]',
				'errors' => [
					'required' => 'tidak boleh kosong',
					'valid_email' => 'alamat email tidak valid',
					'is_unique' => 'sudah digunakan',
				]
			],

			'password' => [
				'label' => 'Password',
				'rules' => 'required|trim|min_length[8]',
				'errors' => [
					'required' => 'tidak boleh kosong',	
					'min_length' => 'terlalu pendek'
				]
			],

			'password2' => [
				'label' => 'Konfirmasi Password',
				'rules' => 'required|matches[password]',
				'errors' => [
					'required' => 'tidak boleh kosong',
					'matches' => 'password tidak sama'
				]
			],
		]);


		if (!$valid) {
			$data['errors'] = \Config\Services::validation()->getErrors();
			echo view('register', $data);
		} else {
			$userModel = new UserModel();

			$nama = $this->request->getPost('nama');
			$email = $this->request->getPost('email');
			$pass = $this->request->getPost('password');
			$pass2 = $this->request->getPost('password2');


			$data = [
				'name' => $nama,
				'email' => $email,
				'password' => password_hash($pass, PASSWORD_DEFAULT),
			];

			$simpan = $userModel->insert($data);

			$akhir = microtime(true);
			$execute_time = $akhir - $awal;
			var_dump($execute_time);die();

			session()->setFlashdata('alert-success', 'Berhasil Register! Silahkan login...');
			return redirect()->to(base_url('auth'));
		}

		
	}


	public function proses_login()
	{

		$valid = $this->validate([
			'email' => [
				'label' => 'Alamat Email',
				'rules' => 'required|trim|valid_email',
				'errors' => [
					'required' => 'tidak boleh kosong',
					'valid_email' => 'alamat email tidak valid'
				]
			],

			'password' => [
				'label' => 'Password',
				'rules' => 'required|trim|min_length[8]',
				'errors' => [
					'required' => 'tidak boleh kosong',	
					'min_length' => 'terlalu pendek'
				]
			],
		]);

		if(!$valid){
			$data['errors'] = \Config\Services::validation()->getErrors(); 
			return view('login', $data);
		} 

		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');

		$userModel = new \App\Models\UserModel();

		$user = $userModel->where('email', $email)->first();

		if($user == null){
			session()->setFlashdata('alert-danger', 'Email belum terdaftar! Silahkan register...');
			return redirect()->to(base_url('auth'));
		}

		if (password_verify($password, $user['password'])) {
			$data = [
				'name' => $user['name'],
				'email' => $user['email']
			];

			session()->set($data);

			return redirect()->to(base_url('home'));
			
		} else {
			session()->setFlashdata('alert-danger', 'Password Salah! Silahkan login kembali...');
			echo view('login');
		}


	}


	public function logout()
	{
		session()->destroy();
		session()->setFlashdata('alert-success', 'Berhasil Logout!');
		return redirect()->to(base_url('auth'));
	}





	//--------------------------------------------------------------------

}
