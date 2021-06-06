<?php
    require_once('config.php');
?>
<?php
if (isset($_POST)) {
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$phonenumber=$_POST['phonenumber'];

$sql="INSERT INTO user(firstname,lastname,email,pass,phonenumber) VALUES(?,?,?,?,?)";
$stmtinsert = $db->prepare($sql);
$result = $stmtinsert->execute([$firstname,$lastname,$email,$pass,$phonenumber]);
if ($result) {
	echo "Registration Completed!!!";
	
}
else
{
	echo "Failed";
}
     //echo $firstname." ". $lastname." ". $email." ". $pass." ". $phonenumber;
}
?>