<?php
namespace App\Controllers;
use CodeIgniter\Controller;

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
        echo view('front/footer_view');
    }
}