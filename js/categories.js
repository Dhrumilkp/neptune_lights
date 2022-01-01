$('#create_new_cat_form').submit(function(e){
    e.preventDefault();
    var cat_name = $('#cat_name').val();
    console.log(cat_name);
});