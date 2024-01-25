<?php

namespace App\Controllers;

use App\Models\Juklak_model;

class Juklak extends BaseController
{
    protected $juklak_model;

    public function __construct()
    {
        $this->juklak_model = new Juklak_model();
    }

    public function index()
    {
        $data = [
            'title' => 'Log Book',
            'juklak' => $this->juklak_model->orderBy('id_juklak', 'DESC')->findAll()
        ];
        return view('juklak/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Create Log Book',

        ];
        return view('juklak/add', $data);
    }

    // tambah data log book
    public function save()
    {
        // dd($_POST);

        // $slug = url_title($this->request->getPost('pekerjaan'), '-', TRUE);

        // simpan ke database
        $data = [
            'tgl' => esc($this->request->getPost('tgl')),
            'kategori' => esc($this->request->getPost('kategori')),
            'judul' => esc($this->request->getPost('judul')),
            'isi_juklak' => esc($this->request->getPost('isi_juklak')),
            'create_by' => esc($this->request->getPost('create_by'))
        ];

        $this->juklak_model->insert($data);

        return redirect()->back()->with('success', 'Juklak berhasil dibuat!');
        // return view('log-book/index');
    }

    function uploadGambar()
    {
        if($this->request->getFile('file')){
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();
            $dataFile->move("uploads/", $fileName);
            echo base_url("uploads/$fileName");
        }
    }
    
}
