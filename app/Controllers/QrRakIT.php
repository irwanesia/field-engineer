<?php

namespace App\Controllers;

use App\Models\QrCode_model;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;

class QrRakIT extends BaseController
{
    protected $qrcode;

    public function __construct()
    {
        $this->qrcode = new QrCode_model();
    }

    public function index()
    {
        $data = [
            'title' => 'QR Code',
            // 'qrcode' => $this->qrcode->orderBy('id_qrcode', 'DESC')->findAll()
            'qrcode' => $this->qrcode->getDataRakIT()
        ];
        return view('qr-code/index', $data);
    }

    // tambah data log book
    public function add()
    {
        // simpan ke variabel
        $id = '';
        $rakIT = $this->request->getPost('label');
        $slug = $this->request->getPost('slug');

        $writer = new PngWriter();

        // Create QR code
        $qrCode = QrCode::create(base_url('qr-code/lihat/' . $rakIT))
            ->setEncoding(new Encoding('UTF-8'))
            ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
            ->setSize(300)
            ->setMargin(10)
            ->setRoundBlockSizeMode(new RoundBlockSizeModeMargin())
            ->setForegroundColor(new Color(0, 0, 0))
            ->setBackgroundColor(new Color(255, 255, 255));

        // Create generic logo
        $logo = Logo::create('fe.jpg')
            ->setResizeToWidth(50);

        // Create generic label
        $label = Label::create($rakIT)
            ->setTextColor(new Color(255, 0, 0));

        $result = $writer->write($qrCode, $logo, $label);

        $qr = $result->getDataUri();

        
        $data = [
            'id_qrcode' => $id,
            'label' => $rakIT,
            'slug' => $slug,
            'qrcode' => $qr
        ];
        
        // dd($data);

        $this->qrcode->insert($data);

        return redirect()->back()->with('success', 'Qr code rak IT berhasil dibuat!');
        // return view('log-book/index');
    }

    // edit data log book
    public function update($id_qrcode)
    {
        // dd($_POST);

        // $slug = url_title($this->request->getPost('pekerjaan'), '-', TRUE);

        // simpan ke database
        $data = [
            'id_qrcode' => esc($this->request->getPost('id_qrcode')),
            'label' => esc($this->request->getPost('label')),
            'slug' => esc($this->request->getPost('slug'))
        ];

        $this->qrcode->update($id_qrcode, $data);

        return redirect()->back()->with('success', 'Qr code rak IT berhasil diubah!');
        // return view('log-book/index');
    }

    // delete qrcode
    public function delete($id_qrcode)
    {
        $this->qrcode->where('id_qrcode', $id_qrcode)->delete();
        // $this->qrcode_model->delete($id_qrcode);

        // pesan berhasil didelete
        // session()->setFlashdata('pesan', 'Log pekerjaan berhasil dihapus!');

        // return redirect()->to('/barang');
        return redirect()->back()->with('success', 'qr code berhasil dihapus!');
    }
}
