<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "form-sinup";

$conn = new mysqli($host,$user,$pass,$db);



$first_name = $_POST['first-name'];
$email = $_POST['email'];
$dat = $_POST['date'];
$tel1 = $_POST['tel-1'];
$tel2 = $_POST['tel-2'];
$pass = $_POST['pass'];
$pass_agin = $_POST['pass-agin'];

if ( $email == "" or $dat == "" or $tel1 =="" or $tel2 == "" or $pass == "" or $pass_agin =="") {
    echo "تحقق من البيانات";
}

elseif ( $email != "" && $dat != "" && $tel1 !="" && $tel2 != "" && $pass != "" && $pass_agin !="") {
    $ins ="insert into data values('$first_name', '$email' , '$dat','$tel1' , '$tel2','$pass','$pass_agin')" ;

    mysqli_query($conn , $ins );
    $conn->close(); 
    header("location: .html") ;     
}
?>  
