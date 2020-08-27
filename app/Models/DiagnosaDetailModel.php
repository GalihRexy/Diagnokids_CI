<?php namespace App\Models;

use CodeIgniter\Model;

class DiagnosaDetailModel extends Model
{

	protected $table = "diagnosa_detail";
	protected $primaryKey = 'kode_diagnosa_detail';

	protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['kode_diagnosa', 'kode_gejala', 'kode_penyakit', 'date_created'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getGejala($kode_gejala)
    {
        $db      = \Config\Database::connect();
        $keterangan = $db->table('gejala_return')->getWhere(['kode_gejala_return' => $kode_gejala])->getLastRow();
        $result = $keterangan->keterangan;
        
        return $result;
    }

    public function getPenyakit($kode_gejala)
    {
        $db      = \Config\Database::connect();
        $gejala = $db->table('gejala_return')->getWhere(['kode_gejala_return' => $kode_gejala])->getFirstRow();
        $penyakit = $db->table('penyakit')->getWhere(['kode_penyakit' => $gejala->kode_penyakit])->getFirstRow();

        $result = $penyakit->nama;
        
        return $result;
    }

}