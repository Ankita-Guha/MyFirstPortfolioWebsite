<?php
$username= $_POST['username'];
$email= $_POST['email'];
$phome= $_POST['phone'];
$message= $_POST['message'];
//database connection

    $host="localhost";
    $dbusername="root";
    $dbpassword="";
   $dbname="contact_me";
    
    $conn = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(!$conn){
    echo "not conn";
}else{
    echo "_";
}

$sql="INSERT INTO form(name,email,phone,message) VALUES('$username', '$email','$phome','$message')";
if(!mysqli_query($conn,$sql)){
    echo "not ins";
}else{
    echo "thank you_";
}

?>