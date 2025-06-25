<?php
namespace App\Controllers;
use CodeIgniter\Controller;

//en esta funcion se arma la vista del panel de usuario
//dependiendo del perfil del usuario logueado, se muestra el panel de usuario o el panel de administrador

class panel_controller extends Controller
{
    public function index()
    {
        $session = session();
        $email = $session->get('email');
        $perfil_id = $session->get('perfil_id');

        $data['email'] = $email;
        $data['perfil_id'] = $perfil_id;

        $dato['titulo'] = 'panel del usuario';

        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado', $data);
        if ($perfil_id == 1) {
            $model = new \App\Models\usuario_model();
            $usuarios = $model->findAll();
            echo view('front/admin_users', ['usuarios' => $usuarios]);
        } elseif ($perfil_id == 2) {
            $usuario = [
                'id_usuario' => session()->get('id_usuario'),
                'nombre_ape' => session()->get('nombre_ape'),
                'email'      => session()->get('email'),
                'telefono'   => session()->get('telefono'),
                'nacimiento' => session()->get('nacimiento'),
                'acepta_terminos' => session()->get('acepta_terminos'),
                'perfil_id'  => session()->get('perfil_id')
            ];
            echo view('front/usuario_panel', ['usuario' => $usuario]);
        }
        echo view('front/footer_view');
    }
}