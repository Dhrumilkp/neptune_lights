$('#admin_signin_button').click(function(e){
    e.preventDefault();
    var email_address = $('#email_placeholder').val();
    var password_holder = $("#password_placeholder").val();
    $(this).prop('disabled',true);
    $.ajax({
        url : ""+url+"auth",
        method : "post",
        data : {
            email : email_address,
            password : password_holder
        },
        dataType : "json",
        success:function(response)
        {   
            if(response.status == "success")
            {
                window.location = ''+url+'home';
            }
            else
            {
                $(this).prop('disabled',false);
            }
        }
    });
});