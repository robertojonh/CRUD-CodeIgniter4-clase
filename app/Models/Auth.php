<?php 
namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model{
    protected $table = 'auth_identities';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['secret'];
    
}