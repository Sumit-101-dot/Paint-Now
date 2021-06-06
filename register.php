<?php
    require_once('config.php');


?>
<?php 

if (isset($_SESSION['NewWebsite'])) {
	header("Location:login.php");}?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Register Here</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style type="text/css">
	
.container{
	margin-left: 500px;
}

</style>
</head>
<body>
<div>
	<?php


?>
</div>
	<div class="container" >
		<div class="row">
		<div class="col-sm-3">
			<h1>Registration form</h1>
			<p>
				Fill up form with correct values.
			</p>
<form  method="post">
<hr class="mb-3"> 
<label for="firstname"> First Name:</label>
<input class="form-control" type="text" id="firstname" name="firstname" required>

<label for="lastname"> Last Name:"</label>
<input class="form-control" type="text" id="lastname" name="lastname" required>

<label for="email"> Email Name:</label>:
<input class="form-control" type="email" id="email" name="email" required>

<label for="pass"> Passsword" </label>
<input class="form-control" type="password"  id="pass"name="pass" required>

<label for="phonenumber"> Phone number</label>
<input class="form-control" type="text" id="phonenumber" name="phonenumber" required>
<hr class="mb-3">
<input class="btn btn-primary" type="submit" id="register"name="create" value="Submit" ><br>
<a href="login.php">Already have account? Click here!!!</a>
</div>
</div>
</div>
</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			    
			    var Valid = this.form.checkValidity();
			if (Valid) {

			var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var email = $('#email').val();
			var pass = $('#pass').val();
			var phonenumber = $('#phonenumber').val();

			e.preventDefault();


				$.ajax({
					type:'POST',
					url:'process.php',
					data:{firstname: firstname,lastname: lastname,email: email,pass: pass,phonenumber:phonenumber},
					success: function(data){
						Swal.fire({
			            'title':'Successful',
			            'text':data,
			            'type':'success'
		});
					},
					error:function(data){
						Swal.fire({
							'title':'Failed',
			            'text':'Contact admin',
			            'type':'error'
                                 })
						
					}
				});
				//alert('true');
			} 
			else
			{

			//alert('false');
			}


			
		})
		//alert('Hello World');
		
	});




</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</html>

