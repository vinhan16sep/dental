
$(document).ready(function(){
    "use strict";

    tinymce.init({
        selector: ".tinymce-area",
        theme: "modern",
        block_formats: 'Paragraph=p;Header 1=h1;Header 2=h2;Header 3=h3',
        height: 300,
        relative_urls: false,
        remove_script_host: false,
        forced_root_block : false,
        plugins: [
            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
        ],
        toolbar: "insertfile undo redo | fontselect | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",
        style_formats: [
            {title: "Bold text", inline: "b"},
            {title: "Red text", inline: "span", styles: {color: "#ff0000"}},
            {title: "Red header", block: "h1", styles: {color: "#ff0000"}},
            {title: "Example 1", inline: "span", classes: "example1"},
            {title: "Example 2", inline: "span", classes: "example2"},
            {title: "Table styles"},
            {title: "Table row 1", selector: "tr", classes: "tablerow1"}
        ],
        external_filemanager_path: HOSTNAME + "filemanager/",
        filemanager_title: "Responsive Filemanager",
        external_plugins: {"filemanager": HOSTNAME + "filemanager/plugin.min.js"}
    });

    $('#title').change(function(){
        $('#slug').val(to_slug($('#title').val()));
    });

    $('#title_vi').change(function(){
        $('#slug_shared').val(to_slug($('#title_vi').val()));
    });
});

$(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the
    //nav bar to stick.
    'use strict';
    if ($(window).scrollTop() > 150) {
        $('.nav_side').addClass('nav_side_fix');
    }
    if ($(window).scrollTop() < 150) {
        $('.nav_side').removeClass('nav_side_fix');
    }
});


// $('#parent_id').each(function(){
//     category = $('#parent_id_hidden').val();
//     id = $(this).val();
//     $.ajax({
//         method: "get",
//         url: HOSTNAMEADMIN + '/service_category_sub_2/get_service_category',
//         data: {
//             id : id
//         },
//         success: function(response){
//             html = '<option value="">Chọn danh mục</option>';
//             if(response.status == 200){
//                 if (response.result.length > 0) {
//                     $.each(response.result, function(index, value){
//                         selected = (value.id == category)? "selected" : "";
//                         html += '<option value="'+ value.id +'" ' + selected + ' >'+ value.title +'</option>';
//                     });
//                 }else{
//                     html = '<option value="">Không có danh mục</option>';
//                 }
//                 $('#parent_id_1').html(html);
//             }
//         },
//         error: function(jqXHR, exception){
//             console.log(errorHandle(jqXHR, exception));
//         }
//     });
// });

$('#parent_id').change(function(){
    id = $(this).val();
    $.ajax({
        method: "get",
        url: HOSTNAMEADMIN + '/service_category_sub_2/get_service_category',
        data: {
            id : id
        },
        success: function(response){
            html = '<option value="">Chọn danh mục</option>';
            if(response.status == 200){
                if (response.result.length > 0) {
                    $.each(response.result, function(index, value){
                        html += '<option value="'+ value.id +'">'+ value.title +'</option>';
                    });
                }else{
                    html = '<option value="">Không có danh mục</option>';
                }
                $('#parent_id_1').html(html);
            }
        },
        error: function(jqXHR, exception){
            console.log(errorHandle(jqXHR, exception));
        }
    });
});

$('#parent_id_1').change(function(){
    id = $(this).val();
    $.ajax({
        method: "get",
        url: HOSTNAMEADMIN + '/service_category_sub_2/get_service_category',
        data: {
            id : id
        },
        success: function(response){
            html = '<option value="">Chọn danh mục</option>';
            if(response.status == 200){
                if (response.result.length > 0) {
                    $.each(response.result, function(index, value){
                        html += '<option value="'+ value.id +'">'+ value.title +'</option>';
                    });
                }else{
                    html = '<option value="">Không có danh mục</option>';
                }
                $('#parent_id_2').html(html);
            }
        },
        error: function(jqXHR, exception){
            console.log(errorHandle(jqXHR, exception));
        }
    });
});

$('.btn-deactive').click(function(){
    id = $(this).data('id');
    url = $(this).data('url');
    if (confirm('Chắc chắn hủy kích hoạt?')) {
        $.ajax({
            method: "get",
            url: url,
            data: {
                id : id
            },
            success: function(response){
                location.reload();
            },
            error: function(jqXHR, exception){
                if(jqXHR.responseJSON.message != 'undefined '){
                    alert(jqXHR.responseJSON.message);
                    location.reload();
                }else{
                    console.log(errorHandle(jqXHR, exception));
                }
            }
        });
    }
});

$('.btn-active').click(function(){
    id = $(this).data('id');
    url = $(this).data('url');
    if (confirm('Chắc chắn kích hoạt?')) {
        $.ajax({
            method: "get",
            url: url,
            data: {
                id : id
            },
            success: function(response){
                location.reload();
            },
            error: function(jqXHR, exception){
                if(jqXHR.responseJSON.message != 'undefined '){
                    alert(jqXHR.responseJSON.message);
                    location.reload();
                }else{
                    console.log(errorHandle(jqXHR, exception));
                }
            }
        });
    }
});

$('.btn-remove').click(function(){
    id = $(this).data('id');
    url = $(this).data('url');
    if (confirm('Chắc chắn xóa?')) {
        $.ajax({
            method: "get",
            url: url,
            data: {
                id : id
            },
            success: function(response){
                if (response.result == true) {
                    alert('Xóa thành công!');
                }else{
                    alert('Xóa thất bại do danh mục này có chứa các bài viết!');
                }
                location.reload();
            },
            error: function(jqXHR, exception){
                if(jqXHR.responseJSON.message != 'undefined '){
                    alert(jqXHR.responseJSON.message);
                    location.reload();
                }else{
                    console.log(errorHandle(jqXHR, exception));
                }
            }
        });
    }
});

$('#tag').tagsinput({
    maxTags: 4,
});


// $(document).ready(function () {
//     $('#bootstrapTagsInputForm')
//         .find('[name="tag"]')
//             // Revalidate the tag field when it is changed
//             .change(function (e) {
//                 $('#bootstrapTagsInputForm').bootstrapValidator('revalidateField', 'tag');
//             })
//             .end()
//         .bootstrapValidator({
//             excluded: ':disabled',
//             feedbackIcons: {
//                 valid: 'glyphicon glyphicon-ok',
//                 invalid: 'glyphicon glyphicon-remove',
//                 validating: 'glyphicon glyphicon-refresh'
//             },
//             fields: {
//                 tag: {
//                     validators: {
//                         callback: {
//                             message: 'Tối đa 4 thuộc tính.',
//                             callback: function (value, validator) {
//                                 // Get the entered elements
//                                 var options = validator.getFieldElements('tag').tagsinput('items');
//                                 if ( options.length <= 4 ) {
//                                     return true;    
//                                 }else{
//                                     return false;
//                                 }
                                
//                             }
//                         }
//                     }
//                 }
//             }
//         });
// });