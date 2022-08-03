<?php
namespace App\Models;

use CodeIgniter\Model;

class Auth extends Model{
    protected $table = 'auth_identities';
    
    protected $primarykey='id';
    protected $allowedFields = ['secret'];
}