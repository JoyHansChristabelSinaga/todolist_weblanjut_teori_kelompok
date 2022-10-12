<?php

namespace App\Models;

use CodeIgniter\Model;

class Todolist extends Model
{
    protected $table            = 'todo_list';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['kegiatan','ket_waktu','deskripsi'];
}
