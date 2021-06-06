<?php
    require_once('config.php');
?>
<?php
if (isset($_POST)) {
	$Htype=$_POST['Htype'];
	$ptype=$_POST['ptype'];
	$sspace=$_POST['sspace'];
	$selectedinteriorcolor=$_POST['selectedinteriorcolor'];
	$selectedexteriorcolor=$_POST['selectedexteriorcolor'];
	$bhk=$_POST['bhk'];
	$carpet=$_POST['carpet'];

$sql="INSERT INTO paint(Htype,ptype,sspace,selectedinteriorcolor,selectedexteriorcolor,bhk,carpet) VALUES(?,?,?,?,?,?,?)";
$stmtinsert = $db->prepare($sql);
$result = $stmtinsert->execute([$Htype,$ptype,$sspace,$selectedinteriorcolor,$selectedexteriorcolor,$bhk,$carpet]);
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