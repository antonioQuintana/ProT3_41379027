<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_model;

//funciones del login, y autenticación de usuarios, logout

class login_controller extends BaseController
{
    public function index()
    {
        helper(['form', 'url']);

        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/ingresar_view');
        echo view('front/footer_view');
    }

    public function auth()
    {
        $session = session();
        $model = new usuario_model();

        $email = trim($this->request->getVar('email'));
        $password = $this->request->getVar('pass');

        $data = $model->where('email', $email)->first();
       
        if($data){
            $pass = $data['pass'];
            $ba= $data['baja'];
            if($ba == 'SI'){
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/ingresar');
            }
            $verygy_pass = password_verify($password, $pass);
            if($verygy_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'], 
                    'usuario' => $data['nombre_ape'],
                    'email' => $data['email'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);

                session()->setFlashdata('msg', 'Bienvenido ');
                return redirect()->to('/panel');
            }else{
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/ingresar');
            }
        }else{
            $session->setFlashdata('msg', 'Usuario no encontrado');
            return redirect()->to('/ingresar');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}