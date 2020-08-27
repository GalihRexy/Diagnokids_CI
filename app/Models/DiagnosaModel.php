<?php namespace App\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{

	protected $table = "diagnosa";
	protected $primaryKey = 'kode_diagnosa';

	protected $returnType     = 'array';

    protected $allowedFields = ['email', 'id_anak', 'date_created'];

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getLast($email, $id_anak)
    {
        $db      = \Config\Database::connect();
        $diagnosa = $db->table('diagnosa')->getWhere(['email' => $email, 'id_anak' => $id_anak])->getLastRow();
        
        return $diagnosa;
    }

    public function getNama($id)
    {
        $db      = \Config\Database::connect();
        $nama = $db->table('anak')->getWhere(['id' => $id])->getFirstRow();
        
        return $nama->nama;
    }

}