<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todolist;

class TodolistControl extends BaseController
{
    public function index()
    {
        $TodolistModel = new Todolist();
        $Todolist = $TodolistModel->findAll();

        $data = [
            'title' => 'Todolist',
            'Todolist' => $Todolist
        ];

        return view('pages\list' , $data);
    }
    public function create(){
        $data = [
            'title' => 'Create Todolist'
        ];
        return view('pages\create' , $data);

    }
    public function store()
    {
        $TodolistModel = new Todolist();
        $data=[
            'kegiatan' => $this->request->getPost('kegiatan'),
            'ket_waktu'=> $this->request->getPost('ket_waktu'),
            'deskripsi'=>$this->request->getPost('deskripsi')
        ];

        $TodolistModel->save($data);
        return redirect()->to('pages\list');

    }
    public function delete($id)
    {
        $TodolistModel = new Todolist();
        $TodolistModel->delete($id);
    
        return redirect()->to('pages\list');
    
    }
    public function edit($id){
        $TodolistModel = new Todolist();
        $Todolist = $TodolistModel->find($id);

        $data = [
            'title' => ' Edit Todolist',
            'Todolist' => $Todolist
        ];
        return view('pages/edit', $data);
    }
    public function update($id)
    {
        $TodolistModel = new Todolist();
        $data=[
            'kegiatan' => $this->request->getVar('kegiatan'),
            'ket_waktu'=> $this->request->getVar('ket_waktu'),
            'deskripsi'=>$this->request->getVar('deskripsi')
        ];

        $TodolistModel->update($id, $data);
        return redirect()->to('pages\list');

    }
}
