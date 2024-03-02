<?php

namespace App\Controllers;

use App\Models\LogBook_model;
use App\Models\ibc_model;
use App\Models\Detail_Ibc_model;

class IBC extends BaseController
{
    protected $logbook_model;
    protected $ibc_model;
    protected $detail_ibc_model;

    public function __construct()
    {
        $this->logbook_model = new LogBook_model();
        $this->ibc_model = new Ibc_model();
        $this->detail_ibc_model = new Detail_Ibc_model();
    }

    public function index()
    {
        // Dapatkan semua data kriteria
        $detailReportIbcList = $this->detail_ibc_model->findAll();

        // Inisialisasi array untuk menyimpan data subkriteria
        $allData = [];

        // Looping data kriteria
        foreach ($detailReportIbcList as $data) {
            // Dapatkan data subkriteria berdasarkan ID kriteria
            $reportIBC = $this->ibc_model->where('id_transaksi', $data['id_transaksi'])->findAll();

            // Tambahkan data subkriteria ke dalam array
            $allData[] = [
                'detailReportIbc' => $data,
                'report_ibc' => $reportIBC,
            ];
        }

        $data = [
            'title' => 'Report IBC Weekly',
            'reportIbc' => $allData
        ];
        return view('report-ibc/index', $data);
    }

    public function detail($tgl)
    {
        $data = [
            'title' => 'Detail Report IBC Weekly',
            'getIbc' => $this->ibc_model->find($tgl)
        ];
        return view('report-ibc/index', $data);
    }

    // tambah data log book
    public function save()
    {
        // ambil gambar
        $filesNetmonitor = $this->request->getFiles()['netmonitor'];
        $filesSpeedtest = $this->request->getFiles()['speedtest'];
        
        $fileNameNetmonitor = [];
        if($filesNetmonitor){
            foreach($filesNetmonitor as $fileNetmonitor){
                if ($fileNetmonitor->isValid() && !$fileNetmonitor->hasMoved()) {
                    // Proses setiap file di sini
                    $newFileName = $fileNetmonitor->getRandomName();
                    $fileSize = $fileNetmonitor->getSize();
                    // dan seterusnya...
                    // Tambahkan nama file baru ke dalam array
                    $fileNameNetmonitor[] = $newFileName; // Ini adalah perubahan kunci

                    // Contoh untuk memindahkan file
                    // $fileNetmonitor->move(WRITEPATH . 'data-image', $fileName);
                    $fileNetmonitor->move('data-image', $newFileName);
                }
            }
        }
        // dd($fileNameNetmonitor);

        $fileNameSpeedtest = [];
        if($filesSpeedtest){
            foreach($filesSpeedtest as $fileSpeedtest){
                if ($fileSpeedtest->isValid() && !$fileSpeedtest->hasMoved()) {
                    // Proses setiap file di sini
                    $newFileName = $fileSpeedtest->getRandomName();
                    $fileSize = $fileSpeedtest->getSize();
                    // dan seterusnya...

                    $fileNameSpeedtest[] = $newFileName; // Ini adalah perubahan kunci

                    // Contoh untuk memindahkan file
                    // $fileSpeedtest->move(WRITEPATH . 'data-image', $fileName);
                    $fileSpeedtest->move('data-image', $newFileName);
                }
            }
        }
        
        // insert ke db detail ibc
        $arr_provider = $this->request->getPost('provider');
        $arr_netmonitor = $fileNameNetmonitor;
        $arr_speedtest = $fileNameSpeedtest;
        $arr_ket = $this->request->getPost('keterangan');
        $idTransaksi = "IBC-" . time();
        $count = count($arr_provider);

        if(!empty($arr_provider)) {
            for ($i = 0; $i < $count; $i++) {
                // isi price total otomatis
                $this->detail_ibc_model->save([
                    'id_transaksi'          => $idTransaksi,
                    'provider'              => $arr_provider[$i],
                    'foto_hasil_netmonitor' => $arr_netmonitor[$i],
                    'foto_hasil_speedtest'  => $arr_speedtest[$i],
                    'keterangan'            => $arr_ket[$i],
                ]);
            }
        }

        // insert ke tbl report_ibc
        $this->ibc_model->save([
            'id_transaksi'  => $idTransaksi,
            'tanggal'       => $this->request->getPost('tanggal'),
            'pelaksana'     => $this->request->getPost('pelaksana'),
            'lantai'        => $this->request->getPost('lantai'),
            'titik_lokasi'  => $this->request->getPost('lokasi'),
            'row'           => $count,
        ]);




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
