<?php 
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
} else{
    echo " No connection ";
}
 
mysqli_select_db($con, 'userdata');
$name = $_POST['name'];
$email =$_POST['email'];
$number =$_POST['number'];
$message=$_POST['message'];
 
$query = " insert into datainfo (name,email,number,message)
values ('$name','$email','$number','$message')";

mysqli_query($con,$query);
header ( 'location:index.php');


?>