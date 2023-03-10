<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Juklak</title>
    
    <link rel="shortcut icon" href="<?= base_url() ?>/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>/images/logo/favicon.png" type="image/png">
    
    <link  href="<?= base_url() ?>/css/main/app.css" rel="stylesheet">
    <link  href="<?= base_url() ?>/css/main/app-dark.css" rel="stylesheet">
    <link  href="<?= base_url() ?>/css/shared/iconly.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>/css/pages/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url() ?>/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/pages/datatables.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/pages/summernote.css">
    <link rel="stylesheet" href="<?= base_url() ?>/extensions/summernote/summernote-lite.css">
    
</head>

<body>
<div id="app">
    <?= $this->include('layout/sidebar'); ?>
    
        <div id="main">
        
            <?= $this->include('layout/header') ?>
            
            <?= $this->renderSection('content') ?>
        
            <?= $this->include('layout/footer') ?>

        </div>
</div>

<script src="<?= base_url('/js/bootstrap.js')?>"></script>
<script src="<?= base_url('/js/app.js')?>"></script>
    
<!-- Need: Apexcharts -->
<script src="<?= base_url('/extensions/apexcharts/apexcharts.min.js')?>"></script>
<script src="<?= base_url('/js/pages/dashboard.js')?>"></script>
<script src="<?= base_url() ?>/extensions/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="<?= base_url() ?>/js/pages/datatables.js"></script>
<script src="<?= base_url() ?>/extensions/summernote/summernote-lite.min.js"></script>
<script src="<?= base_url() ?>/js/pages/summernote.js"></script>

<script>
    $('.summernote').summernote({
                // callbacks: {
                //     onImageUpload: function(files) {
                //         for (let i = 0; i < files.length; i++) {
                //             $.upload(files[i]);
                //         }
                //     },
                //     onMediaDelete: function(target) {
                //         $.delete(target[0].src);
                //     }
                // },
                placeholder: 'Isi Juklak disini!',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ["style", ["bold", "italic", "underline", "clear"]],
                    ["fontname", ["fontname"]],
                    ["fontsize", ["fontsize"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                    ["insert", ["link", "picture", "imageList", "video", "hr"]],

                ],
                // dialogsInBody: true,
                // imageList: {
                //     endpoint: "<?php echo site_url('berita/listGambar') ?>",
                //     fullUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/",
                //     thumbUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/"
                // }
            });
</script>

</body>

</html>