<?php

namespace App\Controllers;

use App\Models\LogBook_model;
use App\Models\ibc_model;

class IBC extends BaseController
{
    protected $logbook_model;
    protected $ibc_model;

    public function __construct()
    {
        $this->logbook_model = new LogBook_model();
        $this->ibc_model = new Ibc_model();
    }

    public function index()
    {
        $data = [
            'title' => 'Report IBC Weekly',
            'ibc' => $this->ibc_model->getTanggal()
        ];
        return view('report-ibc/index', $data);
    }

    // tambah data log book
    public function save()
    {
        // ambil gambar
        $filesNetmonitor = $this->request->getFiles()['netmonitor'];
        $filesSpeedtest = $this->request->getFiles()['speedtest'];
        
        $fileNetmonitor = [];
        if($filesNetmonitor){
            foreach($filesNetmonitor as $fileNetmonitor){
                if ($fileNetmonitor->isValid() && !$fileNetmonitor->hasMoved()) {
                    // Proses setiap file di sini
                    $fileNameNetmonitor = $fileNetmonitor->getRandomName();
                    $fileSize = $fileNetmonitor->getSize();
                    // dan seterusnya...

                    // Contoh untuk memindahkan file
                    // $fileNetmonitor->move(WRITEPATH . 'data-image', $fileName);
                    $fileNetmonitor->move('data-image', $fileNameNetmonitor);
                }
            }
        }


        if($filesSpeedtest){
            foreach($filesSpeedtest as $fileSpeedtest){
                if ($fileSpeedtest->isValid() && !$fileSpeedtest->hasMoved()) {
                    // Proses setiap file di sini
                    $fileNameSpeedtest = $fileSpeedtest->getRandomName();
                    $fileSize = $fileSpeedtest->getSize();
                    // dan seterusnya...

                    // Contoh untuk memindahkan file
                    // $fileSpeedtest->move(WRITEPATH . 'data-image', $fileName);
                    $fileSpeedtest->move('data-image', $fileNameSpeedtest);
                }
            }
        }

        // cek apakah tidak ada gmbar netmonitor diupload
        // if($fileNetmonitor->getError() == 4){
        //     $namaNetmonitor = 'default.jpg';
        // }else{
        //     // generate nama gambar
        //     $namaNetmonitor = $fileNetmonitor->getRandomName();
        //     // pindahkan file ke folder data image
        //     $fileNetmonitor->move('data-image', $namaNetmonitor);
        // }
        // // cek apakah tidak ada gmbar speedtest diupload
        // if($fileSpeedtest->getError() == 4){
        //     $namaSpeedtest = 'default.jpg';
        // }else{
        //     // generate nama gambar
        //     $namaSpeedtest = $fileSpeedtest->getRandomName();
        //     // pindahkan file ke folder data image
        //     $fileSpeedtest->move('data-image', $namaSpeedtest);
        // }

        // insert ke db
        $tgl = $this->request->getPost('tanggal');
        $pelaksana = $this->request->getPost('pelaksana');
        $lantai = $this->request->getPost('lantai');
        $lokasi = $this->request->getPost('lokasi');
        $provider = $this->request->getPost('provider');
        $netmonitor = $fileNameNetmonitor;
        $speedtest = $fileNameSpeedtest;
        $ket = $this->request->getPost('keterangan');
        $count = count($provider);

            for ($i = 0; $i < $count; $i++) {
                // isi price total otomatis
                $this->ibc_model->save([
                    'tgl'           => $tgl,
                    'pelaksana'     => $pelaksana,
                    'lantai'        => $lantai,
                    'lokasi'        => $lokasi,
                    'provider'      => $provider[$i],
                    'netmonitor'    => $netmonitor,
                    'speedtest'     => $speedtest,
                    'keterangan'    => $ket[$i],
                ]);
            }

        // return redirect()->back()->with('success', 'Report IBC berhasil disimpan!');
         // pesan data berhasil ditambah
         $isipesan = '<script> alert("Report IBC berhasil dibuat!") </script>';
         session()->setFlashdata('pesan', $isipesan);
 
         return redirect()->to('/report-ibc/');
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
