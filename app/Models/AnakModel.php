<?php namespace App\Models;

use CodeIgniter\Model;

class AnakModel extends Model
{

	protected $table = "anak";
	protected $primaryKey = 'id';

	protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['email', 'nama', 'jenis_kelamin', 'umur'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


	public function insertAnak()
	{
		return $this->db->table($this->table)->insert($data);
	}

}