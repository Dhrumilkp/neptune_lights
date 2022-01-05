$(document).on('submit','#create_new_slider',function(e){
    e.preventDefault();
    var new_form_data = new FormData(this);
    $('#submit_click_hero_slider').prop('disabled',true);
    $.ajax({
        url : ""+url+"createnew_slider",
        method : "post",
        data : new_form_data,
        contentType: false,
        processData: false,
        dataType : "json",
        success:function(response)
        {
            if(response.status == "success")
            {
                location.reload();
            }
            else
            {
                $('#submit_click_hero_slider').prop('disabled',false);
                alert(response.message);
            }
        }
    });
});

$('.delete_slider_from_db').click(function(e){
    e.preventDefault();
    var slider_id = $(this).attr('data-id');
    $.ajax({
        url : ""+url+"delete_slider_from_page",
        method : "post",
        data : {
            slider_id : slider_id
        },
        dataType : "json",
        success : function(response)
        {
            if(response.status == "success")
            {
                location.reload();
            }
            else
            {
                alert(response.message);
            }
        }
    });
});