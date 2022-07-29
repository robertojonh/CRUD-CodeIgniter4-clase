<?php 
namespace App\Controllers;
use App\Models\UsuarioC;
use App\Models\Personas;
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
    public function listar(){
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Usuario";
        $data['sistema_funcion'] = "listar";
        $data['usuario'] = $this->datos_usuario();

        return view('usuario/listar',$data);
    }

    public function listado(){

        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Usuario";
        $data['sistema_funcion'] = "listado";
        $data['usuario']['usuario_username'] = auth()->getUser()->username;
        $data['usuario']['usuario_puesto'] = 'Developer';

        $db = db_connect();
        $usuario = $db->query('SELECT u.id, u.username, u.created_at, ud.estatus, ud.nombres, ud.primer_apellido, ud.segundo_apellido, ud.puesto, ud.telefono, ud.observaciones, ud.foto, ud.nivel, au.type, au.secret, au.last_used_at from users u  left join users_details ud on u.username =  ud.username left join auth_identities au on u.id =  au.user_id ');
        $data['usuario'] =  $usuario->getResultArray();


        return view ('usuario/listar',$data);
        
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
    


    // show single user
    public function singleUser2($id = null){
        $userModel2 = new UsuarioC();
        $data['user_obj'] = $userModel2->where('id', $id)->first();
        return view('usuario/editarp', $data);
    }
    // update user data
   
    public function update2(){
        $userModel2 = new UsuarioC();
        $id = $this->request->getVar('id');
        $data = [
            'username'  => $this->request->getVar('username'),
            'nombres' => $this->request->getVar('nombres'),
            'primer_apellido'  => $this->request->getVar('primer_apellido'),
            'segundo_apellido'  => $this->request->getVar('segundo_apellido'),
            'puesto'  => $this->request->getVar('puesto'),
            'telefono'  => $this->request->getVar('telefono'),
            'observaciones'  => $this->request->getVar('observaciones'),
            
        ];
        $userModel2->update($id, $data);
        return $this->response->redirect(base_url('/Usuario/listar'));
    }

}