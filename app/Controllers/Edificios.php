<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Exceptions\ValidationException;
use CodeIgniter\Shield\Models\UserModel;


class Edificios extends Controller{
    protected $helpers = ['auth'];

     var $configuracion;
     public function __construct()
        {
            $this->configuracion = array();
            $db = db_connect();
            $ci_configuracion = $db->query('select * from ci_configuracion');
            $ci_configuracion =  $ci_configuracion->getResultArray();
            foreach( $ci_configuracion as $conf){ $this->configuracion[$conf['nombre_configuracion']] = $conf['valor']; }
            
        }
        

    public function listado(){

        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Edificios";
        $data['sistema_funcion'] = "listado";
        $data['usuario']['usuario_username'] = auth()->getUser()->username;
        $data['usuario']['usuario_puesto'] = 'Developer';

        $db = db_connect();
        $edificios = $db->query('SELECT e.id, e.nombre, e.amenidades, e.ubicacion, e.capacidad,c.tipo FROM edificio e left join catalogo_tipo_edificio c on e.tipo = c.id');
        $data['edificios'] =  $edificios->getResultArray();


        return view ('edificios/inicio',$data);
        
    }
    public function nuevo(){

        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Edificios";
        $data['sistema_funcion'] = "nuevo";
        $data['usuario']['usuario_username'] = auth()->getUser()->username;
        $data['usuario']['usuario_puesto'] = 'Developer';

        $db = db_connect();
        $tipo_edificio = $db->query('select id, tipo from catalogo_tipo_edificio');
        $data['tipo_edificio'] =  $tipo_edificio->getResultArray();


        return view ('edificios/nuevo',$data);
        
    }
    public function guardar(){

        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Edificios";
        $data['sistema_funcion'] = "guardar";
        $data['usuario']['usuario_username'] = auth()->getUser()->username;
        $data['usuario']['usuario_puesto'] = 'Developer';

        $nombre = $_POST['nombre'];
        $tipo = $_POST['tipo'];
        $ubicacion = $_POST['ubicacion'];
        $capacidad = $_POST['capacidad'];
        $amenidades = $_POST['amenidades'];

        $db = db_connect();
        $insert = $db->query('INSERT INTO edificio(nombre, tipo, ubicacion, capacidad, amenidades) value ("'.$nombre.'","'.$tipo.'","'.$ubicacion.'","'.$capacidad.'","'.$amenidades.'")');
        
        if($insert==1){ return redirect()->to(base_url().'/Edificios');  }
        
    }
   

}