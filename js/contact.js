$(document).on('submit','#update_Contact_Info',function(e){
    e.preventDefault();
    var form_data = new FormData(this);
    $.ajax({
        url : ""+url+"update_contact_info",
        method : "post",
        data : form_data,
        contentType: false,
        processData: false,
        dataType : "json",
        success:function(response)
        {
            console.log(response);
        }
    });
});