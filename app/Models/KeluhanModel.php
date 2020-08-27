<?php namespace App\Models;

use CodeIgniter\Model;

class KeluhanModel extends Model
{

	protected $table = "keluhan";
	protected $primaryKey = 'kode_keluhan';

	protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    // protected $allowedFields = ['email', 'nama', 'jenis_kelamin', 'umur'];

    // protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



}