<?php
$message_sent=false;
if (isset($_POST['email'])&& $_POST['email'] !='') {
    # submit the form

if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    
$userName=$_POST['name'];
$userEmail=$_POST['email'];
$userSubject=$_POST['subject'];
$message=$_POST['message'];


$to="sonukhanroxxx@gmail.com";
$body="";

$body .="From".$userName. "\r\n";
$body .="From".$userEmail. "\r\n";
$body .="From".$message. "\r\n";
//mail($to, $userSubject, $message);

$message_sent=true;


}
else{
    $invalid_class_name="form-invalid";
}


}




?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>

<body>
<?php 

if ($message_sent): 
?>

<h3>Thanks for contacting us!!!</h3>
<?php 
else:

?>
    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control"<?=$invalid_class_name ?? ""?> id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
            <?php 
          endif;

?>
        </form>
    </div>
</body>

</html>