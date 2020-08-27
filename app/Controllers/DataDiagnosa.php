<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DiagnosaModel;
use App\Models\DiagnosaDetailModel;

class DataDiagnosa extends BaseController
{

	public function index()
	{
		$awal = microtime(true);
		if(session()->has('email')){
			$email = session('email');
			$data['diagnosaModel'] = new DiagnosaModel();
			$data['diagnosa'] = $data['diagnosaModel']->where(['email' => $email])->orderBy('kode_diagnosa', 'desc')->findAll();

			$akhir = microtime(true);
	        $execute_time = $akhir - $awal;
	        var_dump($execute_time);die();

			return view('data_diagnosa', $data);
		} else {
			session()->setFlashdata('alert-info', 'Silahkan login terlebih dahulu...');
			return redirect()->to(base_url('auth'));
		}
	}

	public function detail($id)
	{
		$data['diagnosaModel'] = new DiagnosaModel();
		$data['diagnosaDetailModel'] = new DiagnosaDetailModel();

		$data['diagnosa'] = $data['diagnosaModel']->where('kode_diagnosa', $id)->first();
        $data['detail'] = $data['diagnosaDetailModel']->where('kode_diagnosa', $id)->findAll();
        // var_dump($data['diagnosa']);die();

        return view('data_diagnosa_detail', $data);
	}


	


	//--------------------------------------------------------------------

}
