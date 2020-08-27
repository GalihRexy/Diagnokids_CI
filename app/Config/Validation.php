<?php 
namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		\Myth\Auth\Authentication\Passwords\ValidationRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	public $register = [
	    'nama' => 'required|alpha_numeric|min_length[5]|max_length[20]',
	    'email' => 'required|valid_email',
	    'password' => 'required|min_length[8]|max_length[20]',
	    'password2' => 'required|min_length[8]|max_length[20]|matches[password]'

	];
 
	public $register_errors = [
	    'nama' => [
	        'required'      => 'Username wajib diisi',
	        'alpha_numeric' => 'Username hanya boleh diisi dengan huruf dan angka',
	        'min_length'    => 'Username minimal terdiri dari 5 karakter',
	        'max_length'    => 'Username maksimal terdiri dari 20 karakter'
	    ],
	    'email' => [
	        'required'          => 'Email wajib diisi',
	        'email.valid_email' => 'Email tidak valid'
	    ],
	    'password' => [
	        'required'      => 'Password wajib diisi',
	        'min_length'    => 'Password minimal terdiri dari 8 karakter',
	        'max_length'    => 'Password maksimal terdiri dari 20 karakter'
	    ],
	    'password2' => [
	        'required'      => 'Password wajib diisi',
	        'min_length'    => 'Password minimal terdiri dari 8 karakter',
	        'max_length'    => 'Password maksimal terdiri dari 20 karakter',
	        'matches'		=> 'Password tidak sama'
	    ]
	];
	//--------------------------------------------------------------------
}
