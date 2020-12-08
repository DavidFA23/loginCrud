<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreaUsuario extends Seeder
{
	public function run()
	{
	$contra ='12345';
	$contra= password_hash($contra, PASSWORD_DEFAULT);
	
	$data =[

		"nombre"=>'david',
		"apellido_paterno"=>'fuentes',
		"email"=>'davidfuentes@gmail.com',



		"usuario"=>'admin',
		"password" =>$contra,
		"tipo"=>'administrador'];
		$this->db->table('t_usuario')->insert($data);
	
	}
}
