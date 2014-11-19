<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	
	<!--Bootstrap CSS & JS-->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	
	{{HTML::style("/images/css/style.css")}}


</head>
<body>

@include('dashboard.sidebar')
@yield('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>

// $('#deleteButton').click(function(){
	    
	    
// 	      // submit the form here
// 	      $('#deleteForm').submit();
	      
// 	      return true;
	    
	  
	      
	      
// 	});

</script>
</body>
</html>	


<!--<scrip>
	$('button[name="remove_item"]').on('click', function(e){
    var $form = $(this).closest('form'); 
    e.preventDefault();
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .one('click', '#delete', function() {
            $form.trigger('submit'); // submit the form
        });
	});

	=========================================================
	$('#myModal').on('show', function() {
		    var id = $(this).data('id'),
		        removeBtn = $(this).find('.danger');
		})

		$('.confirm-delete').on('click', function(e) {
		    e.preventDefault();

		    var id = $(this).data('id');
		    $('#myModal').data('id', id).modal('show');
		});

		$('#btnYes').click(function() {
		    // handle deletion here
		  	var id = $('#myModal').data('id');
		  	$('[data-id='+id+']').remove();
		  	$('#myModal').modal('hide');
		});

===================================================================
$("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
        $("#myModal a.btn").on("click", function(e) {
            console.log("button pressed");   // just as an example...
            $("#myModal").modal('hide');     // dismiss the dialog
        });
    	});
 
    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
        $("#myModal a.btn").off("click");
    });
    
    $("#myModal").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
        $("#myModal").remove();
    });
    
    $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
      "backdrop"  : "static",
      "keyboard"  : true,
      "show"      : true                     // ensure the modal is shown immediately
    });
		
</script>-->
