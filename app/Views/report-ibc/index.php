<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Report Weekly</li>
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
                            <span>Latest Report Weekly</span>
                            <!-- Button trigger for Extra Large  modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                                <i class="bi bi-plus-circle-dotted"></i> <small>Add Report Weekly</small>
                            </button>
                        </div>
                        <div class="card-body table-responsive">
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
                            <table class="table table-striped text-sm" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Pelaksana</th>
                                        <th>E/</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach($ibc as $row) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['tgl'] ?>
                                        </td>
                                        <td><?= $row['pelaksana'] ?>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#view<?= $row['tgl'] ?>"><i
                                                    class="bi bi-eye"></i></button>
                                            <button type="submit" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                data-bs-target="#edit<?= $row['tgl'] ?>"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete<?= $row['tgl'] ?>"><i
                                                    class="bi bi-trash"></i></button>
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
    </section>
</div>

<!--Modal add Report Weekly-->
<div class="me-1 mb-1 d-inline-block">
    <!--Extra Large Modal -->
    <div class="modal fade text-left w-100" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Add Data Report Weekly</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('/report-ibc/save') ?>" method="post" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="tanggal">Tanggal</h6>
                                                <input type="date" class="form-control" name="tanggal" id="tanggal"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="pelaksana">Pelaksana</h6>
                                                <select class="form-select" name="pelaksana" id="pelaksana">
                                                    <option value="#" disabled selected>-- Pilih --</option>
                                                    <option value="ade">Ade</option>
                                                    <option value="hanif">Hanif</option>
                                                    <option value="irwan">Irwan</option>
                                                    <option value="purnomo">Purnomo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="distro">Lantai</h6>
                                                <select class="form-select" name="lantai" id="lantai">
                                                    <option value="#" disabled selected>-- Pilih --</option>
                                                    <option value="g">LT. G</option>
                                                    <option value="mz">LT. MZ</option>
                                                    <option value="2">LT. 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="lokasi">Titik Lokasi</h6>
                                                <input type="text" class="form-control" name="lokasi" id="lokasi"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dynamic_field">
                                        <div class="row mt-3" id="row1">
                                            <div class="col-md-11">
                                                <div class="row mt-3">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h6 for="provider">Provider</h6>
                                                            <select class="form-select" name="provider[]" id="provider1">
                                                                <option value="#" disabled selected>-- Pilih --</option>
                                                                <option value="tsel">Telkomsel</option>
                                                                <option value="isat">Indosat</option>
                                                                <option value="xl">XL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h6 for="net">Upload Hasil Netmonitor</h6>
                                                            <input class="form-control" type="file" name="netmonitor[]" id="netmonitor1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <h6 for="speedtest">Upload Hasil Speedtest</h6>
                                                                <input class="form-control" type="file" name="speedtest[]" id="speedtest1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h6 for="keterangan">Keterangan</h6>
                                                            <textarea name="keterangan[]" id="keterangan1" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1 mt-3">
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-success" id="add_more"><i class="align-middle" data-feather="plus-circle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
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

<!--Modal edit Report Weekly-->
<?php // foreach($rakit as $row) : ?>
<div class="me-1 mb-1 d-inline-block">
    <div class="modal fade text-left w-100"
        id="edit<?php // $row['id_rakit'] ?>"" tabindex="
        -1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Edit Report Weekly</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('/report-ibc/add') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="tanggal">Tanggal</h6>
                                                <input type="date" class="form-control" name="tanggal" id="tanggal"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="pelaksana">Pelaksana</h6>
                                                <select class="form-select" name="pelaksana" id="pelaksana">
                                                    <option value="#" disabled selected>-- Pilih --</option>
                                                    <option value="ade">Ade</option>
                                                    <option value="hanif">Hanif</option>
                                                    <option value="irwan">Irwan</option>
                                                    <option value="purnomo">Purnomo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-11">
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h6 for="distro">Lantai</h6>
                                                        <select class="form-select" name="lantai" id="lantai">
                                                            <option value="#" disabled selected>-- Pilih --</option>
                                                            <option value="g">LT. G</option>
                                                            <option value="mz">LT. MZ</option>
                                                            <option value="2">LT. 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h6 for="lokasi">Titik Lokasi</h6>
                                                        <input type="text" class="form-control" name="lokasi" id="lokasi"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h6 for="provider">Provider</h6>
                                                        <select class="form-select" name="provider" id="provider">
                                                            <option value="#" disabled selected>-- Pilih --</option>
                                                            <option value="tsel">Telkomsel</option>
                                                            <option value="isat">Indosat</option>
                                                            <option value="xl">XL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h6 for="net">Upload Hasil Netmonitor</h6>
                                                        <input class="form-control" type="file" name="netmonitor" id="netmonitor">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h6 for="speedtest">Upload Hasil Speedtest</h6>
                                                            <input class="form-control" type="file" name="speedtest" id="speedtest">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h6 for="keterangan">Keterangan</h6>
                                                        <textarea name="keterangan" id="keterangan" cols="30" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 mt-4">
                                            <div class="form-group">
                                                <h6 for="speedtest"></h6>
                                                <button class="btn btn-primary align-self-center m-2">+</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cancel</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php // endforeach ?>

<!--Modal hapus log book-->
<?php // foreach($rakit as $row) : ?>
<div class="me-1 mb-1 d-inline-block">
    <div class="modal fade text-left w-100"
        id="delete<?php // $row['id_rakit'] ?>"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <!-- <h5 class="modal-title">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form
                        action="<?php // base_url('/rak-it/delete/'. $row['id_rakit']) ?>"
                        method="post">
                        <?php // csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <p>Yakin data ini akan dihapus?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Yes</span>
                    </button>
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cancel</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <?php // endforeach ?>


    <!-- script javascript -->
    <script>
        var notif = document.getElementById('notif');
        // var classNotif = notif.classList.add('d-none');
        setTimeout(function() {
            notif.classList.add("d-none")
        }, 3000);
        // setTimeout(() => classNotif, 3000);
    </script>
    
    <?= $this->endSection('content') ?>