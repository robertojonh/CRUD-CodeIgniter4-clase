<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Personas;
class Persona extends Controller{
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
        $data['sistema_clase'] = "Personas";
        $data['sistema_funcion'] = "listado2";
        $data['usuario'] = $this->datos_usuario();
        
        $d_persona = new Personas();
        $data['personas'] = $d_persona->orderBy('id','ASC')->findAll();

        return view('listar',$data);
    }
    // add user form
    public function create(){
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Personas";
        $data['sistema_funcion'] = "perfil";
        $data['usuario'] = $this->datos_usuario();
        return view('crear',$data);
    }
    public function singin(){
        return view('inicioSesion/singin');
    }
    public function singup(){
        return view('inicioSesion/singup');
    }
 
    // insert data
    
    public function store() {
       
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Personas";
        $data['sistema_funcion'] = "listado2";
        $data['usuario'] = $this->datos_usuario();
        $userModel = new Personas();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'primer_apellido'  => $this->request->getVar('primer_apellido'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(base_url('/view_user'));
    }
    
    // show single user
    public function singleUser($id = null){
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
          
        $data['configuracion'] = $this->configuracion;
        $data['sistema_clase'] = "Personas";
        $data['sistema_funcion'] = "perfil";
        $data['usuario'] = $this->datos_usuario();
        $userModel = new Personas();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('editar', $data);
    }
    // update user data
   
    public function update(){
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
        $userModel = new Personas();
        $id = $this->request->getVar('id');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'primer_apellido'  => $this->request->getVar('primer_apellido'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(base_url('/view_user'));
    }
    
    // delete user
    public function delete($id = null){
        if (! auth()->loggedIn()) { return redirect()->to(base_url().'/acceder/'); }
        $userModel = new Personas();
        $data['persona'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/view_user'));
    }    
}