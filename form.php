<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style2.css">
    <title>My Home</title>
</head>
<style>


    input[type=button] {
    margin: 30px 0 0 0;
    background-color: rgb(250, 120, 45);
    color: white;
    padding: 12px 40px;
    border: none;
    border-radius: 35px;
    cursor: pointer;
    box-shadow: 0.2em 0.2em 7px rgba(122,122,122,0.5);
    font-size: 46px;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}


</style>
<body bgcolor="whitesmoke">

	<div class="intro">
    <!-- <div class="container">
        <div class="intro__inner">
        </div>
    </div> -->

</div>

<form method="POST">
	<a href="index.html"><input type="button" value="Home" ></a>


</form>

</body>

</html>

<?php
$name=$_POST['txt1'];
$email=$_POST['txt2'];
$subject=$_POST['txt3'];
$message=$_POST['txt4'];

if(isset($_POST['btn1'])){
if($name!='' && $email!='' &&  $subject!='' &&  $message!=''){
$linq = mysqli_connect("127.0.0.1","root","","сliente");
$dob = "insert into clienti values (NULL,'$name','$email','$subject','$message')";
$rezult = mysqli_query($linq,$dob);
$a="select id, name , email , subject, message from clienti where id = 6;";
$rezult = mysqli_query($linq,$a);
while($rez = mysqli_fetch_object($rezult))
// echo $rez->id,"  <br>",$rez->name,"  <br>",$rez->email,"  <br>",$rez->subject,"",$rez->message," <br>";
   echo "<b>Спасибо, $name! </b>
    <br/>
    <p>Мы рады, что вы решились обратиться в нашу компанию, в блежайшее время мы с вами свяжемся!</p>";
echo "<script>alert('Message sent');</script>";
mysqli_close($linq);

}
else echo "<script>alert('Fill in the blank fields');</script>";
}
?>
