<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-12 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-start">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Rak IT</li>
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
                            <span>Latest Rak IT</span>
                            <!-- Button trigger for Extra Large  modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">
                                <i class="bi bi-plus-circle-dotted"></i> <small>Add Rak IT</small>
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
                                        <th>Distro</th>
                                        <th>Lantai</th>
                                        <th>E/</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach($rakit as $row) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $row['distro'] ?>
                                        </td>
                                        <td><?= $row['lantai'] ?>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                data-bs-target="#edit<?= $row['id_rakit'] ?>"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button type="submit" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#delete<?= $row['id_rakit'] ?>"><i
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

<!--Modal add Rak IT-->
<div class="me-1 mb-1 d-inline-block">
    <!--Extra Large Modal -->
    <div class="modal fade text-left w-100" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Add Data Rak IT</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="card">
                            <!-- <div class="card-header">
                        <h4 class="card-title">Basic Inputs</h4>
                        </div> -->
                            <div class="card-body">
                                <form
                                    action="<?= base_url('/rak-it/add') ?>"
                                    method="post">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="distro">Distro</h6>
                                                <input type="text" class="form-control" name="distro" id="distro"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <h6 for="lantai">Lantai</h6>
                                                <input type="text" class="form-control" name="lantai" id="lantai"
                                                    required>
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
</div>

<!--Modal edit rak it-->
<?php foreach($rakit as $row) : ?>
<div class="me-1 mb-1 d-inline-block">
    <div class="modal fade text-left w-100"
        id="edit<?= $row['id_rakit'] ?>"" tabindex="
        -1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel16">Edit Rak IT</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <form
                                    action="<?= base_url('/rak-it/edit/'. $row['id_rakit']) ?>"
                                    method="post">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id_rakit"
                                        value="<?= $row['id_rakit'] ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6 for="distro">Distro</h6>
                                                <input type="text" class="form-control" name="distro" id="distro"
                                                    value="<?= $row['distro'] ?>"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <h6 for="lantai">Lantai</h6>
                                                <input type="text" class="form-control" name="lantai" id="lantai"
                                                    value="<?= $row['lantai'] ?>"
                                                    required>
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
                        <span class="d-none d-sm-block">Save</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php endforeach ?>

<!--Modal hapus log book-->
<?php foreach($rakit as $row) : ?>
<div class="me-1 mb-1 d-inline-block">
    <div class="modal fade text-left w-100"
        id="delete<?= $row['id_rakit'] ?>"
        tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <!-- <h5 class="modal-title">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form
                        action="<?= base_url('/rak-it/delete/'. $row['id_rakit']) ?>"
                        method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <p>Yakin data log pekerjaan ini akan dihapus?</p>
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
    <?php endforeach ?>


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