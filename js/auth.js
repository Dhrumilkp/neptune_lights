$('#admin_signin_button').click(function(e){
    e.preventDefault();
    var email_address = $('#email_placeholder').val();
    var password_holder = $("#password_placeholder").val();
    console.log({
        email : email_address,
        password : password_holder
    });
});