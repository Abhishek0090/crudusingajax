<?php include 'conn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <title>crud using ajax and bootstrap model</title>
</head>
<body>
    
    <div class="container text-center mt-5">
        <h1>

            Crud Operation using ajax
        </h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#completemodal" onClick=<?php echo "click"?>>
  Add Data
</button>
    </div>

<!-- Modal -->
<div class="modal fade" id="completemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form id="user_form">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insert User Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email">
                </div> 
                
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter your Contact">
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    // function adduser(){
    //    var nameAdd = $('#name').val();
    // //    alert(nameAdd);return false;
    //    var emailAdd = $('#email').val();
    // //    alert(emailAdd);return false;
    //    var contactAdd = $('#contact').val();
    // //    alert(contactAdd);return false;

    // //    $.ajax({
    // //         type: "post",
	// // 		url: "http://localhost/crudusingajax/insert.php",			
	// // 		// cache: false,
	// // 		data:{
	// // 			nameAdd: nameAdd,
	// // 			emailAdd: emailAdd,
    // //             contactAdd: contactAdd,
	// // 		},
	// // 		success: function(dataResult){
	// // 			console.log(dataResult);
	// // 		}
    // //     });

    $(document).on('click','#save',function(e) {

        var data = $('#user_form').serialize();
        $.ajax({

            data: data,

            type: "post",

           url: "insert.php",

            success: function(dataResult){

                   console.log(dataResult);

            }

        });

    // });
    
})
    </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>