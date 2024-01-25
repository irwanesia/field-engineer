<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/juklak">E-Juklak</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Create E-Juklak</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-12 col-xl-12">
                    <div class="card">
                    <div class="row mb-3">
                                <div class="col-md-12 notif">
                                    <!-- notifikasi berhasil  -->
                                    <?php if(session('success')) :?>
                                        <div class="alert alert-warning mx-2" id="notif" role="alert">
                                            <?php echo session('success') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <div class="card-body">
                            <div class="modal-body">
                                <section class="section">
                                    <div class="card">
                                        <div class="card-body">
                                        <form action="<?= base_url('/juklak/add') ?>" method="post" enctype="multipart/form-data">
                                        <?= csrf_field() ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6 for="tgl">Tanggal</h6>
                                                            <input type="date" class="form-control" name="tgl" id="tgl" required>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6 for="tgl">Slug</h6>
                                                            <input type="text" class="form-control" name="slug" id="slug" required>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6 for="user">Kategori</h6>
                                                            <select class="form-select" name="kategori" id="kategori">
                                                                <option disabled selected>-- Pilih --</option>
                                                                <option value="telephon">Telephon</option>
                                                                <option value="cctv">CCTV</option>
                                                                <option value="email">Email</option>
                                                                <option value="printer">Printer</option>
                                                                <option value="network">Network</option>
                                                                <option value="hardware">Hardware</option>
                                                                <option value="software">Software</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h6 for="judul">Judul</h6>
                                                            <input tipe="text" class="form-control" name="judul" id="judul" placeholder="Masukan judul juklak" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h6 for="">Isi Juklak</h6>
                                                            <textarea class="form-control summernote" name="isi_juklak" id="" placeholder="Masukan isi juklak" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h6 for="user">Dibuat</h6>
                                                            <select class="form-select" name="create_by" id="create_by">
                                                                <option disabled selected>-- Pilih --</option>
                                                                <option value="Hanif">Hanif</option>
                                                                <option value="Irwan">Irwan</option>
                                                                <option value="Purnomon">Purnomo</option>
                                                                <option value="Trio">Trio</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                        <a href="/list_juklak"><span class="btn btn-secondary">Back</span></a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection('content') ?>