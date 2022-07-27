<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Usuario extends Controller{
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
    public function datos_usuario(){
        $this->informacion_usuario = array();
        $db = db_connect();
        $informacion_usuario = $db->query('select u.id, u.username, u.created_at, ud.estatus, ud.nombres, ud.primer_apellido, ud.segundo_apellido, ud.puesto, ud.telefono, ud.observaciones, ud.foto, ud.nivel, au.type, au.secret, au.last_used_at from users u  left join users_details ud on u.username =  ud.username left join auth_identities au on u.id =  au.user_id where u.username = "'.auth()->getUser()->username.'"');
        $ret =  $informacion_usuario->getResultArray();
        return $ret[0];
    }
    public function perfil(){
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Usuario";
        $data['sistema_funcion'] = "perfil";
        $data['usuario'] = $this->datos_usuario();

        return view ('usuario/perfil',$data);
    }
    public function editar_perfil(){
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Acceso";
        $data['sistema_funcion'] = "acceder";

        $data['usuario']['usuario_username'] = 'ricardooax';
        $data['usuario']['usuario_puesto'] = 'Developer';

        return view ('usuario/editar_perfil',$data);
    }
    public function mensajes(){
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Acceso";
        $data['sistema_funcion'] = "acceder";

        $data['usuario']['usuario_username'] = 'ricardooax';
        $data['usuario']['usuario_puesto'] = 'Developer';

        return view ('usuario/mensajes',$data);
    }
    public function cambia_contrasena(){
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Acceso";
        $data['sistema_funcion'] = "acceder";

        $data['usuario']['usuario_username'] = 'ricardooax';
        $data['usuario']['usuario_puesto'] = 'Developer';

        return view ('usuario/cambia_contrasena',$data);
    }
    

}