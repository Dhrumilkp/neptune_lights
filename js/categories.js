$('#create_new_cat_form').submit(function(e){
    e.preventDefault();
    var cat_name = $('#cat_name').val();
    if(cat_name == "")
    {
        alert("categories cannot be empty");
    }
    else
    {
        $('#submit_button_new_cat').prop('disabled',true);
        var formdata = new FormData(this);
        $.ajax({
            url : ''+url+'createnewmaincat',
            method : "post",
            data : formdata,
            contentType: false,
            processData: false,
            dataType : "json",
            success:function(response)
            {
                console.log(response);
                if(response.status == "success")
                {
                    location.reload();
                }
                else
                {
                    $('#submit_button_new_cat').prop('disabled',false);
                    alert(response.message);
                }
            }
        });
    }
});

function delete_cat(caller)
{
    var cat_id = $(caller).attr('data-id');
    console.log(cat_id);
    $.ajax({
        url : ''+url+'delete_cat',
        method : "post",
        data : {
            cat_id : cat_id
        },
        dataType : "json",
        success:function(response)
        {
            if(response.status == 'success')
            {
                location.reload();
            }
            else
            {
                alert(response.message)
            }
        }
    })
}
function add_sub_cat(caller)
{
    var cat_id = $(caller).attr('data-id');
    $('.add_sub_cat_wrapper_'+cat_id+'').show();
    $(document).on('submit','#create_new_sub_cat_'+cat_id+'',function(e){
        e.preventDefault();
        $('#submit_sub_cat_btn_'+cat_id+'').prop('disabled',true);
        var data = new FormData(this);
        $.ajax({
            url : ""+url+"add_new_sub_cat",
            method : "post",
            data : data,
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
                    alert(response.message);
                    $('#submit_sub_cat_btn_'+cat_id+'').prop('disabled',false);
                }
                console.log(response);
            }

        });
    });
}
$('#reject_sub_cat').click(function(e){
    e.preventDefault();
    var cat_id = $(this).attr('data-id');
    $('.add_sub_cat_wrapper_'+cat_id+'').hide();
});
