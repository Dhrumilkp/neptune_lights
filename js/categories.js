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
                    alert('new cat created');
                }
                else
                {
                    $('#submit_button_new_cat').prop('disabled',false);
                    alert(response.message);
                }
                console.log(response);
            }
        });
    }
});