<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Shield\Authentication\Authenticators\Session;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Exceptions\ValidationException;
use CodeIgniter\Shield\Models\UserModel;


class Acceso extends Controller{
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

        public function principal(){

            if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
              
            $data['configuracion'] = $this->configuracion;
            $data['sistema_clase'] = "Acceso";
            $data['sistema_funcion'] = "principal";
            $data['usuario'] = $this->datos_usuario();
    
            return view ('acceso/inicio',$data);
            
        }
        public function acceder(){
            $data['configuracion'] = $this->configuracion;
            return view ('acceso/login',$data);
        }

        public function register(){
            $data['configuracion'] = $this->configuracion;
            return view ('acceso/registro',$data);
        }
        public function acceder_login(){
            $data['configuracion'] = $this->configuracion;
            $credentials = [
                'username'    => $this->request->getPost('user'),
                'password' => $this->request->getPost('password')
            ];
            $loginAttempt = auth()->attempt($credentials);
            if (! $loginAttempt->isOK()) { echo "Acceso denegado"; } else {  return redirect()->to(base_url().'/view_user'); }
        }
    public function recuperar(){

        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Acceso";
        $data['sistema_funcion'] = "acceder";

        $data['usuario']['usuario_username'] = 'ricardooax';
        $data['usuario']['usuario_puesto'] = 'Developer';

        return view ('acceso/recuperar',$data);
    }
    
    public function salir(){
        auth()->logout();
        return redirect()->to(base_url().'/acceder/'); 
    }
    public function probando_shield(){

        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $nombres = $this->request->getVar('nombres');
        $primer_apellido = $this->request->getVar('primer_apellido');
        $segundo_apellido = $this->request->getVar('segundo_apellido');
        $puesto = 'Developer';
        $telefono = '9511147641';
        $observaciones = 'Administrador del sistema';
        $foto = 'ricardo.png';
        $nivel = 0;

        $users = model('UserModel');
        $nuevo_usuario_datos = new User([
            'username' => $username,
            'email'    => $email,
            'password' => $password,
        ]);

        $nuevo_usuario_success = $users->save($nuevo_usuario_datos);
       if($nuevo_usuario_success==1)
        {
            $db = db_connect();
            $db->query('insert into users_details(username, nombres, primer_apellido, segundo_apellido, puesto, telefono, observaciones, foto) 
            values("'.$username.'","'.$nombres.'","'.$primer_apellido.'","'.$segundo_apellido.'","'.$puesto.'","'.$telefono.'","'.$observaciones.'","'.$foto.'")');
        } else { echo "no se dio de alta el usuario"; }
        
        return $this->response->redirect(base_url('/view_user'));
    }



}