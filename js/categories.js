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
        $.ajax({
            url : ''+url+'createnewmaincat',
            method : "post",
            data : {
                cat_name : cat_name
            },
            dataType : "json",
            success:function(response)
            {
                if(response.status == "success")
                {
                    $("#load_cat_here").prepend(
                        '<tr>'+
                        '<td>'+response.cat_name+'</td>'+
                        '<td>'+
                          '<div class="wrapper_action" style="display:flex;width:20%;justify-content:space-between;">'+
                            '<a href="javascript:void;" data-id='+response.id+'><i class="lni lni-cross-circle" style="font-size: x-large;"></i></a>'+
                          '</div>'+
                        '</td>'+
                        '<tr>');
                        $('#submit_button_new_cat').prop('disabled',false);
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