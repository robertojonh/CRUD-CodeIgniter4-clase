<?php 
namespace App\Models;

use CodeIgniter\Model;

class UsuarioC extends Model{
    protected $table = 'users_details';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','primer_apellido'];
    
}