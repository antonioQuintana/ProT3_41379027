<?php
namespace App\Controllers;
Use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

	public function __construct(){
		helper(['form', 'url']);
	}

	public function create() {
		$data['titulo'] = 'Registro';
		$data['validation'] = \Config\Services::validation();
		echo view('front/head_view', $data);
		echo view('front/navbar_view');
		echo view('back/usuario/registro', $data);
		echo view('front/footer_view');
	}

	public function formValidation(){

		$input = $this->validate([
			'nombre_ape' => 'required|min_length[4]|max_length[100]',
			'telefono'	 => 'required|min_length[4]|max_length[20]',
			'email'		 => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
			'pass' 		 => 'required|min_length[4]|max_length[100]',
			'nacimiento' => 'required|min_length[1]',
			'acepta_terminos' => 'required|min_length[1]'
			],
		);
		$formModel = new usuario_model();

		if (!$input){
			$data['titulo'] = 'Registro';
			$data['validation'] = $this->validator;
			echo view('front/head_view', $data);
			echo view('front/navbar_view');
			echo view('back/usuario/registro', $data);
			echo view('front/footer_view');
		}else{
			$formModel->save([
				'nombre_ape'=> $this->request->getVar('nombre_ape'),
				'telefono'=> $this->request->getVar('telefono'),
				'email'=> $this->request->getVar('email'),
				'pass'=> password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT),
				'nacimiento'=> $this->request->getVar('nacimiento'),
				'acepta_terminos'=> $this->request->getVar('acepta_terminos')
			]);
			session()->setFlashdata('success', 'Usuario registrado con exito');
			return redirect()->to(base_url('registro'));
		}
	}


}