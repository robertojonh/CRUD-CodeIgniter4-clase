<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Personas;
class Persona extends Controller{

    public function index(){

        $d_persona = new Personas();
        $datos['personas'] = $d_persona->orderBy('id','ASC')->findAll();
        return view('listar',$datos);
    }
    // add user form
    public function create(){
        return view('crear');
    }
 
    // insert data
    
    public function store() {
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
        $userModel = new Personas();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('editar', $data);
    }
    // update user data
   
    public function update(){
        $userModel = new Personas();
        $id = $this->request->getVar('id');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'primer_apellido'  => $this->request->getVar('primer_apellido'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/view_user'));
    }
    
    // delete user
    public function delete($id = null){
        $userModel = new Personas();
        $data['persona'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(base_url('/view_user'));
    }    
}