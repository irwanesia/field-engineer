<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dahsboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Juklak</li>
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
                        <div class="card-header d-flex justify-content-between">
                            <h4>Latest e-juklak</h4>
                            <!-- Button trigger for Extra Large  modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                            <i class="bi bi-plus-circle-dotted"></i> <small>Add Juklak</small>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Tgl</th>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Isi</th>
                                            <th>Pembuat</th>
                                            <th>E\</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach($juklak as $row) : ?>
                                        <tr>
                                            <td>
                                                <?= $row['tgl'] ?>
                                            </td>
                                            <td>
                                                <?= $row['judul'] ?>
                                            </td>
                                            <td>
                                                <?= $row['kategori'] ?>
                                            </td>
                                            <td>
                                                <?= substr($row['isi_juklak'],0,100) ?>
                                            </td>
                                            <td>
                                                <?= $row['create_by'] ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-eye-fill"></i></button>
                                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#edit"><i class="bi bi-pencil-square"></i></button>
                                                <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete"><i class="bi bi-trash"></i></button></td>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!--Modal add log book-->
<div class="me-1 mb-1 d-inline-block">
    <!--Extra Large Modal -->
    <div class="modal fade text-left w-100" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Create Juklak</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                            <form action="<?= base_url('/juklak/add') ?>" method="post">
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="tgl">Slug</h6>
                                                <input type="text" class="form-control" name="slug" id="slug" required>
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
                                                <textarea class="form-control" name="isi_juklak" id="summernote" row="30" placeholder="Masukan isi juklak" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="user">Di Buat Oleh:</h6>
                                                <select class="form-select" name="user" id="user">
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
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary"
                    data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Add</span>
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content') ?>