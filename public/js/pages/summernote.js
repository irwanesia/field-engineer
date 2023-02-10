// $(document).ready(function() {
//     $('.summernote').summernote({
//         callbacks: {
//             onImageUpload: function(files) {
//                 for (let i = 0; i < files.length; i++) {
//                     $.upload(files[i]);
//                 }
//             },
//             onMediaDelete: function(target) {
//                 $.delete(target[0].src);
//             }
//         },
//         height: 200,
//         toolbar: [
//             ["style", ["bold", "italic", "underline", "clear"]],
//             ["fontname", ["fontname"]],
//             ["fontsize", ["fontsize"]],
//             ["color", ["color"]],
//             ["para", ["ul", "ol", "paragraph"]],
//             ["height", ["height"]],
//             ["insert", ["link", "picture", "imageList", "video", "hr"]],

//         ],
//         dialogsInBody: true,
//         imageList: {
//             endpoint: "<?php echo site_url('berita/listGambar') ?>",
//             fullUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/",
//             thumbUrlPrefix: "<?php echo base_url('uploads/berkas') ?>/"
//         }
//     });

//     $.upload = function(file) {
//         let out = new FormData();
//         out.append('file', file, file.name);
//         $.ajax({
//             method: 'POST',
//             url: "<?php echo site_url('juklak/uploadGambar') ?>",
//             contentType: false,
//             cache: false,
//             processData: false,
//             data: out,
//             success: function(img) {
//                 $('.summernote').summernote('insertImage', img);
//             },
//             error: function(jqXHR, textStatus, errorThrown) {
//                 console.error(textStatus + " " + errorThrown);
//             }
//         });
//     };
//     $.delete = function(src) {
//         $.ajax({
//             method: 'POST',
//             url: '<?php echo site_url("juklak/deleteGambar") ?>',
//             cache: false,
//             data: {
//                 src: src
//             },
//             success: function(response) {
//                 console.log(response);
//             }

//         });
//     };
// });

// function konfirmasi(url) {
//     var result = confirm("Want to delete?");
//     if (result) {
//         window.location.href = url;
//     }
// }