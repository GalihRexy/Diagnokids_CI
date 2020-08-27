<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AnakModel;

class Profile extends BaseController
{
	public function index()
	{
		if(session()->has('email')){
			$email = session('email');
			$data['name'] = session('name');
 			
 			$anakModel = new \App\Models\AnakModel();
 			$data['anak'] = $anakModel->where('email', $email)->findAll();
			return view('profile', $data);
		} else {
			session()->setFlashdata('alert-info', 'Silahkan login terlebih dahulu...');
			return redirect()->to(base_url('auth'));
		}
	}

	public function tambah_data_anak()
	{
		$awal = microtime(true);

		$nama = $this->request->getPost('nama');
		$jenis_kelamin = $this->request->getPost('jenis_kelamin');
		$umur = $this->request->getPost('umur');

		$data = [
			'email' => session('email'),
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'umur' => $umur,
		];

		$anakModel = new AnakModel();
		$simpan = $anakModel->insert($data);

		$akhir = microtime(true);
		$execute_time = $akhir - $awal;
		var_dump($execute_time);die();

		session()->setFlashdata('alert-success', 'Data berhasil ditambahkan...');
		return redirect()->to(base_url('profile'));
	}

}