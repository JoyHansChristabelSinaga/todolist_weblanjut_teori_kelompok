<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTestdriveTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kegiatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'ket_waktu'=> [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('todo_list');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
