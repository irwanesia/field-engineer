
$('.summernote').summernote({
    tabsize: 2,
    height: 400,
    // callbacks: {
    //     onImageUpload: function(files){
    //         for(let i=0; i<files.length; i++){
    //             $.upload(files[i]);
    //         }
    //     },
    //     onMediaDelete: function(target){
    //         $.delete(target[0].src);
    //     }
    // }
});

// $.upload = function(file){
//     let out = new FormData();
//     out.append('file', file, file.name);
//     $.ajax({
//         method: 'POST',
//         url: '<?php echo site_url(/juklak/uploadGambar) ?>',
//         contentType: false,
//         cache: false,
//         processData: false,
//         data: out,
//         success: function(img){
//             $('.summernote').summernote('insertImage', img);
//         },
//         error: function(jqXHR, textStatus, errorThrown){
//             console.error(textStatus, + " " + errorThrown);
//         }
        
//     });
// }

$("#hint").summernote({
    height: 100,
    toolbar: false,
    placeholder: 'type with apple, orange, watermelon and lemon',
    hint: {
        words: ['apple', 'orange', 'watermelon', 'lemon'],
        match: /\b(\w{1,})$/,
        search: function (keyword, callback) {
            callback($.grep(this.words, function (item) {
                return item.indexOf(keyword) === 0;
            }));
        }
    }
});
