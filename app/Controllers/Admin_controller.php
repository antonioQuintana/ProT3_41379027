<?php

//funciones que permiten al administrador gestionar los usuarios

namespace App\Controllers;
Use App\Models\usuario_model;
use CodeIgniter\Controller;

class Admin_controller extends Controller{
    public function listarUsuarios()
    {
        $model = new usuario_model();
        $usuarios = $model->findAll();
        return view('front/admin_users', ['usuarios' => $usuarios]);
    }

    public function editarUsuario($id)
    {
        $model = new usuario_model();
        $usuario = $model->find($id);
        return view('front/editar_user', ['usuario' => $usuario]);
    }

    public function actualizarUsuario($id)
    {
        $model = new usuario_model();
        $data = [
            'nombre_ape' => $this->request->getVar('nombre_ape'),
            'telefono' => $this->request->getVar('telefono'),
            'email' => $this->request->getVar('email'),
            'nacimiento' => $this->request->getVar('nacimiento'),
            'perfil_id' => $this->request->getVar('perfil_id'),
            'baja' => $this->request->getVar('baja')
        ];
        $model->update($id, $data);
        session()->setFlashdata('msg', 'Usuario actualizado');
        return redirect()->to('panel');
    }

    public function bajaUsuario($id)
    {
        $model = new usuario_model();
        $model->update($id, ['baja' => 'SI']);
        session()->setFlashdata('msg', 'Usuario dado de baja');
        return redirect()->to('panel');
    }
}