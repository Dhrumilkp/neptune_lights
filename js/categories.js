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