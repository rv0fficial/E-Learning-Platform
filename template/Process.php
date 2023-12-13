<?php

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$Username = stripcslashes($Username); 
$Password = stripcslashes($Password); 
$Username = mysql_real_escape_string($Username);
$Password = mysql_real_escape_string($Password);


mysql_connect("localhost","root","");
mysql_select_db("form_login");

$resulf = mysql_query("select * from users where Username='$Username'and Password='$Password'")
or die("Faile to quary database ".mysql_error());
$row = mysql_fatch_array($resulf);

if($row['Username']== $Username && $row['Password'] == $Password){
    echo "You Have Successfully Logged in",$row['Username'];
}else{
    echo"You Have Entered Incorrect Password";
}

?>
