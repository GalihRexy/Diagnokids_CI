<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

	protected $table = "user";
	protected $primaryKey = 'id';

	protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email', 'password'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

	public function getUser()
	{

	}

	public function insertUser()
	{
		return $this->db->table($this->table)->insert($data);
	}

}