<?php 
namespace App\Models;

use CodeIgniter\Model;

class Configuracion extends Model{
    protected $table      = 'ci_configuracion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre_configuracion', 'valor'];
}