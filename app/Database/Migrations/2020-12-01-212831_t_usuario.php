<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUsuarios extends Migration
{
	public function up()
        {
                $this->forge->addField([
                        'id_usuario'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
                        ],
                        'usuario'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'apellidopaterno'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '250',
                        ],
                        'password' => [
                                'type'           => 'TEXT',
                                'constraint'     => '250',
						],
						
						'tipo'       => [
							'type'           => 'VARCHAR',
							'constraint'     => '250',
					],
                ]);
                $this->forge->addKey('id_usuario', true);
                $this->forge->createTable('t_usuarios');
        }

        public function down()
        {
                $this->forge->dropTable('t_usuarios');
        }
}
