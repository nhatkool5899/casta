
// Preview images

$('.view-item-img').click(function(){
    var src_img = $(this).data('src_img');

    $('.show-img').attr('src', src_img);
    $('.modal-view-img').addClass('active');
})
$('.modal-view-img').click(function(e){
    if(e.target == e.currentTarget){
        $(this).removeClass('active');
    }
})

// Add content

$('.btn-add-content').click(function(){
    var number_id = $(this).data('number');
    var number_current = number_id + 1;
    $(this).data('number', number_current);
    $('.content-body').append(`
    <div class="box-content box-content-`+number_current+`">
        <span class="remove-box-content">Xóa <i class="fa-solid fa-trash-can"></i></span>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tiêu đề</label>
            <div class="col-sm-10">
                <input type="text" class="form-control mb-3" name="title[]">
            </div>
            <label class="col-sm-2 col-form-label">Nội dung</label>
            <div class="col-sm-10">
                <textarea name="content[]" class="form-control" rows="4"></textarea>
            </div>
            <label class="col-sm-2 col-form-label">Hình ảnh</label>
            <label class="col-sm-10" for="image_`+number_current+`">
                <img src="` + window.location.origin + `/back-end/assets/img/add-img.webp" class="preview-input-label" alt="">
                <input type="file" name="images[]" id="image_`+number_current+`" class="hide-img-content">
            </label>
        </div>
    </div>
    `);
})



$('.change-quantity').change(function(){
    var id = $(this).data('id');
    var type = $(this).data('type');
    var value = $(this).val();
    var _token = $('input[name="_token"]').val();
  
    $.ajax({
        url: '/change-quantity',
        method: 'POST',
        data:{id:id,type:type,value:value,_token:_token},
        success:function(data){
            if(data == "success"){
                location.reload();
            }else{
                alert(data);
            }
        }
    });
})










