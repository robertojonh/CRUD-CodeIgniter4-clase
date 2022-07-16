<?php 
namespace App\Models;

use CodeIgniter\Model;

class Personas extends Model{
    protected $table = 'persona';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','primer_apellido'];
    
}