<?php

namespace App\Controllers;

use App\Models\LogBook_model;
// use App\Models\Detail_invoice_model;

class LogBook extends BaseController
{
    protected $logbook_model;

    public function __construct()
    {
        $this->logbook_model = new LogBook_model();
    }

    public function index()
    {
        $data = [
            'title' => 'Log Book',
            'logbook' => $this->logbook_model->orderBy('id_logbook', 'DESC')->findAll()
        ];
        return view('log-book/index', $data);
    }

    // tambah data log book
    public function add()
    {
        // dd($_POST);

        // $slug = url_title($this->request->getPost('pekerjaan'), '-', TRUE);

        // simpan ke database
        $data = [
            'jam' => esc($this->request->getPost('jam')),
            'tgl' => esc($this->request->getPost('tgl')),
            'petugas' => esc($this->request->getPost('petugas')),
            'log_pekerjaan' => esc($this->request->getPost('log_pekerjaan')),
            'note' => esc($this->request->getPost('keterangan')),
            'status' => esc($this->request->getPost('status'))
        ];

        $this->logbook_model->insert($data);

        return redirect()->back()->with('success', 'Log pekerjaan berhasil ditambah!');
        // return view('log-book/index');
    }

    // edit data log book
    public function update($id_logbook)
    {
        // dd($_POST);

        // $slug = url_title($this->request->getPost('pekerjaan'), '-', TRUE);

        // simpan ke database
        $data = [
            'id_logbook' => esc($this->request->getPost('id_logbook')),
            'jam' => esc($this->request->getPost('jam')),
            'tgl' => esc($this->request->getPost('tgl')),
            'petugas' => esc($this->request->getPost('petugas')),
            'log_pekerjaan' => esc($this->request->getPost('log_pekerjaan')),
            'note' => esc($this->request->getPost('keterangan')),
            'status' => esc($this->request->getPost('status'))
        ];

        $this->logbook_model->update($id_logbook, $data);

        return redirect()->back()->with('success', 'Log pekerjaan berhasil diubah!');
        // return view('log-book/index');
    }

    // edit data log book
    public function updateStatus($id_logbook)
    {
        // dd($_POST);

        // $slug = url_title($this->request->getPost('pekerjaan'), '-', TRUE);

        // simpan ke database
        $data = [
            'id_logbook' => esc($this->request->getPost('id_logbook')),
            'status' => esc($this->request->getPost('status'))
        ];

        $this->logbook_model->update($id_logbook, $data);

        return redirect()->back();
        // return redirect()->back()->with('success', 'Log status berhasil diubah!');
        // return view('log-book/index');
    }

    // delete logbook
    public function delete($id_logbook)
    {
        $this->logbook_model->where('id_logbook', $id_logbook)->delete();
        // $this->logbook_model->delete($id_logbook);

        // pesan berhasil didelete
        // session()->setFlashdata('pesan', 'Log pekerjaan berhasil dihapus!');

        // return redirect()->to('/barang');
        return redirect()->back()->with('success', 'Log pekerjaan berhasil dihapus!');
    }
}
