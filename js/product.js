$("#select_main_cat").change(function() {
    if ($(this).data('options') === undefined) {
      /*Taking an array of all options-2 and kind of embedding it on the select1*/
      $(this).data('options', $('#select_sub_cat option').clone());
    }
    var id = $(this).val();
    var options = $(this).data('options').filter('[data-main-id=' + id + ']');
    $('#select_sub_cat').html(options);
});

$(document).on('submit','#create_new_product_form',function(e){
    e.preventDefault();
    var productData = new FormData(this);
    $('#submit_new_product_btn').prop('disabled',true);
    $.ajax({
        url : ""+url+"upload_new_product",
        method : "post",
        data : productData,
        contentType: false,
        processData: false,
        dataType : "json",
        success:function(response)
        {
            console.log(response);
        }
    });
});
