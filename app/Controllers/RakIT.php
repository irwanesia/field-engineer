<?php

namespace App\Controllers;

use App\Models\rakit_model;

class RakIT extends BaseController
{
    protected $rakIT;

    public function __construct()
    {
        $this->rakIT = new RakIT_model();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Rak IT',
            'rakit' => $this->rakIT->findAll()
        ];
        return view('rak-it/index', $data);
    }

    // tambah data rak it
    public function add()
    {
        // simpan ke variabel
        $distro = $this->request->getPost('distro');
        $lantai = $this->request->getPost('lantai');

        $data = [
            'distro' => $distro,
            'lantai' => $lantai
        ];
        
        // dd($data);

        $this->rakIT->insert($data);

        return redirect()->back()->with('success', 'Data Rak IT berhasil dibuat!');
        // return view('log-book/index');
    }

    // edit data log book
    public function update($id_rakit)
    {
        // dd($_POST);

        // simpan ke database
        $data = [
            'id_rakit' => esc($this->request->getPost('id_rakit')),
            'distro' => esc($this->request->getPost('distro')),
            'lantai' => esc($this->request->getPost('lantai'))
        ];

        $this->rakIT->update($id_rakit, $data);

        return redirect()->back()->with('success', 'Data Rak IT berhasil diubah!');
        // return view('log-book/index');
    }

    // delete rakit
    public function delete($id_rakit)
    {
        $this->rakIT->where('id_rakit', $id_rakit)->delete();
        // pesan berhasil didelete
        // session()->setFlashdata('pesan', 'Log pekerjaan berhasil dihapus!');

        // return redirect()->to('/barang');
        return redirect()->back()->with('success', 'Data Rak IT berhasil dihapus!');
    }
}
