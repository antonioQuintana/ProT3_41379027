<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_model extends Model
{
	protected $table = 'usuarios';
	protected $primaryKey ='id_usuario';
	protected $allowedFields = ['nombre_ape','telefono','email','pass','nacimiento','acepta_terminos','perfil_id','baja','created_at'];
}