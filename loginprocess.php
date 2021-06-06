<?php
    session_start();
    require_once('config.php');

?>
<?php
if (isset($_POST)) {
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	

$sql= "SELECT * FROM user WHERE email= ? AND pass= ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$email,$pass]);
if ($result) {
	$user= $stmtselect->fetch(PDO::FETCH_ASSOC);
	if ($stmtselect->rowCount()>0) {
		$_SESSION['NewWebsite'] = $user;
		echo "Logging IN!!";
	}
else
{
	echo "No user found!!!";
}
	
}
else
{
	echo "Failed";
}
     //echo $firstname." ". $lastname." ". $email." ". $pass." ". $phonenumber;
}
?>