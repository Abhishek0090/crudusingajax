$(document).on("click", "#btn-add", function (e) {
  var data = $("#user_form").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "save.php",
    success: function (dataResult) {
      console.log(dataResult);
    },
  });
});

$(document).on('click','.update',function(e) {
    var id=$(this).attr("data-id");
    var name=$(this).attr("data-name");
    var email=$(this).attr("data-email");
    var contact=$(this).attr("data-contact");
    $('#id_u').val(id);
    $('#name_u').val(name);
    $('#email_u').val(email);
    $('#contact_u').val(contact);
});

$(document).on('click','#update',function(e) {
    var data = $("#update_form").serialize();
    $.ajax({
        data: data,
        type: "post",
        url: "save.php",
        success: function(dataResult){
                console.log(dataResult);
        }
    });
});

$(document).on("click", ".delete", function() { 
    var id=$(this).attr("data-id");
    $('#id_d').val(id);
    
});
$(document).on("click", "#delete", function() { 
    $.ajax({
        url: "save.php",
        type: "POST",
        cache: false,
        data:{
            type:3,
            id: $("#id_d").val()
        },
        success: function(dataResult){
            location.reload();	
                $('#deleteEmployeeModal').modal('hide');
                $("#"+dataResult).remove();
                
        }
    });	
});