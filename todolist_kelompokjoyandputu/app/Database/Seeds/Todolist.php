<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Todolist extends Seeder
{
    public function run(){
        $data_todolist = [
            [
                'kegiatan' => 'makan',
                'ket_waktu'    => 'all day, every day',
                'deskripsi'    => 'ya... lu makan, dong',
            ],
            [
                'kegiatan' => 'minum',
                'ket_waktu'    => 'all day, until the end of time',
                'deskripsi'    => 'Ya... siap makan lu minum, dong',
            ],
            [
                'kegiatan' => 'nonton tipi',
                'ket_waktu'    => 'tidak pernah',
                'deskripsi'    => 'Gak punya tipi... dada gw sakit :v',
            ],
        ];

        foreach($data_todolist as $data){
            $this->db->table('todo_list')->insert($data);
        }
    }
}
//'Kegiatan','ket_waktu','deskripsi'