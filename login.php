<?php

    session_start();
if (isset($_SESSION['NewWebsite'])) {
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<div class="container">
		<div class="row">
		<div class="col-sm-3">
			<h1>Login Form</h1>
			<p>
				Fill up form with correct values.
			</p>
		
<form method="post">
<hr class="mb-3"> 

<label for="email"> Email Name:</label>:
<input class="form-control" type="email" id="email" name="email" autocomplete="on" required>

<label for="pass"> Passsword" </label>
<input class="form-control" type="password"  id="pass" name="pass" autocomplete="on" required>

<hr class="mb-3">
<input class="btn btn-primary" type="submit" id="login" name="create" value="Submit" ><br>

</div>
</div>
</div>
<script type="text/javascript">
	$(function(){
		$('#login').click(function(e){
			    
			    var Valid = this.form.checkValidity();
			if (Valid) {

			
			var email = $('#email').val();
			var pass = $('#pass').val();
			}

			e.preventDefault();


				$.ajax({
					type:'POST',
					url:'loginprocess.php',
					data:{email: email,pass: pass},
					success: function(data){
						alert(data);
						if ($.trim(data)=="Logging IN!!") {
							setTimeout('window.location.href= " index.php"',2000);
						}
	
					},
					error:function(data){
						alert('Error');
						}
						
					});
				});
				//alert('true');
			
		//alert('Hello World');
		
	});





</script>
</body>
</html>