<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dahsboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Check List Rak IT</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Checklist Rak IT</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-b5-tab" data-bs-toggle="pill"
                                        href="#v-pills-b5" role="tab" aria-controls="v-pills-b5"
                                        aria-selected="true">Distro B5</a>
                                    <a class="nav-link" id="v-pills-b2-tab" data-bs-toggle="pill"
                                        href="#v-pills-b2" role="tab" aria-controls="v-pills-b2"
                                        aria-selected="false">Distro B2</a>
                                    <a class="nav-link" id="v-pills-soehanna-tab" data-bs-toggle="pill"
                                        href="#v-pills-soehanna" role="tab" aria-controls="v-pills-soehanna"
                                        aria-selected="false">Distro 2 (Soehanna)</a>
                                    <a class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill"
                                        href="#v-pills-2" role="tab" aria-controls="v-pills-2"
                                        aria-selected="false">Distro 2 (Amuz)</a>
                                    <a class="nav-link" id="v-pills-7-tab" data-bs-toggle="pill"
                                        href="#v-pills-7" role="tab" aria-controls="v-pills-7"
                                        aria-selected="true">Distro 7</a>
                                    <a class="nav-link" id="v-pills-10-tab" data-bs-toggle="pill"
                                        href="#v-pills-10" role="tab" aria-controls="v-pills-10"
                                        aria-selected="false">Distro 10</a>
                                    <a class="nav-link" id="v-pills-15-tab" data-bs-toggle="pill"
                                        href="#v-pills-15" role="tab" aria-controls="v-pills-15"
                                        aria-selected="false">Distro 15</a>
                                    <!-- <a class="nav-link" id="v-pills-16-tab" data-bs-toggle="pill"
                                        href="#v-pills-16" role="tab" aria-controls="v-pills-16"
                                        aria-selected="false">Distro 16 (Inalum)</a> -->
                                    <a class="nav-link" id="v-pills-18-tab" data-bs-toggle="pill"
                                        href="#v-pills-18" role="tab" aria-controls="v-pills-18"
                                        aria-selected="false">Distro 18</a>
                                    <a class="nav-link" id="v-pills-21-tab" data-bs-toggle="pill"
                                        href="#v-pills-21" role="tab" aria-controls="v-pills-21"
                                        aria-selected="true">Distro 21</a>
                                    <a class="nav-link" id="v-pills-25-tab" data-bs-toggle="pill"
                                        href="#v-pills-25" role="tab" aria-controls="v-pills-25"
                                        aria-selected="false">Distro 25</a>
                                    <a class="nav-link" id="v-pills-28-tab" data-bs-toggle="pill"
                                        href="#v-pills-28" role="tab" aria-controls="v-pills-28"
                                        aria-selected="false">Distro 28</a>
                                    <a class="nav-link" id="v-pills-31-tab" data-bs-toggle="pill"
                                        href="#v-pills-31" role="tab" aria-controls="v-pills-31"
                                        aria-selected="false">Distro 31</a>
                                    <a class="nav-link" id="v-pills-35-tab" data-bs-toggle="pill"
                                        href="#v-pills-35" role="tab" aria-controls="v-pills-35"
                                        aria-selected="true">Distro 35</a>
                                    <a class="nav-link" id="v-pills-38-tab" data-bs-toggle="pill"
                                        href="#v-pills-38" role="tab" aria-controls="v-pills-38"
                                        aria-selected="false">Distro 38</a>
                                    <a class="nav-link" id="v-pills-51-tab" data-bs-toggle="pill"
                                        href="#v-pills-51" role="tab" aria-controls="v-pills-51"
                                        aria-selected="false">Distro 51</a>
                                    <a class="nav-link" id="v-pills-53-tab" data-bs-toggle="pill"
                                        href="#v-pills-53" role="tab" aria-controls="v-pills-53"
                                        aria-selected="false">Distro 53</a>
                                </div>
                            </div>
                            <div class="col-10">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-b5" role="tabpanel"
                                        aria-labelledby="v-pills-b5-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-4">Check List Rak IT B5</h5>
                                        <div class="btn-group mb-4 d-flex justify-content-end">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-secondary dropdown-toggle me-1" type="button"
                                                    id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Cari Tahun
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                                    <a class="dropdown-item" href="#">2024</a>
                                                    <a class="dropdown-item" href="#">2023</a>
                                                    <a class="dropdown-item" href="#">2022</a>
                                                    <a class="dropdown-item" href="#">2021</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-b2" role="tabpanel"
                                        aria-labelledby="v-pills-b2-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT B2</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-soehanna" role="tabpanel"
                                        aria-labelledby="v-pills-soehanna-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 2 (Soehanna)</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                        aria-labelledby="v-pills-2-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 2 (Amuz)</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-7" role="tabpanel"
                                        aria-labelledby="v-pills-7-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 7</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-10" role="tabpanel"
                                        aria-labelledby="v-pills-10-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 10</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-15" role="tabpanel"
                                        aria-labelledby="v-pills-15-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 15</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-18" role="tabpanel"
                                        aria-labelledby="v-pills-18-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 18</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-21" role="tabpanel"
                                        aria-labelledby="v-pills-21-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 21</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-25" role="tabpanel"
                                        aria-labelledby="v-pills-25-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 25</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-28" role="tabpanel"
                                        aria-labelledby="v-pills-28-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 28</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-31" role="tabpanel"
                                        aria-labelledby="v-pills-31-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 31</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-35" role="tabpanel"
                                        aria-labelledby="v-pills-35-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 35</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-38" role="tabpanel"
                                        aria-labelledby="v-pills-38-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 38</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-51" role="tabpanel"
                                        aria-labelledby="v-pills-51-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 51</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-53" role="tabpanel"
                                        aria-labelledby="v-pills-53-tab">
                                        <!-- table striped -->
                                        <h5 class="text-center mb-5">Check List Rak IT 53</h5>
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">Tgl Cek</th>
                                                        <th colspan="2">Kondisi Ruangan</th>
                                                        <th colspan="2">Kondisi Filter</th>
                                                        <th colspan="2">Tetesan Air</th>
                                                        <th colspan="2">Suara/Getar Body</th>
                                                        <th colspan="2">Tegangan 220 V</th>
                                                        <th colspan="2">Selang Drain AC</th>
                                                        <th rowspan="2">Petugas</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Suhu (&deg;C)</th>
                                                        <th>Humadity</th>
                                                        <th>Kotor</th>
                                                        <th>Bersih</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Ada</th>
                                                        <th>Tidak</th>
                                                        <th>Normal</th>
                                                        <th>Tidak</th>
                                                        <th>Ok</th>
                                                        <th>Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>22.72</td>
                                                        <td>51.54</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>05/05/2023</td>
                                                        <td>21.45</td>
                                                        <td>60.23</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>&#9989;</td>
                                                        <td></td>
                                                        <td>Irwan</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Striped rows end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection('content') ?>