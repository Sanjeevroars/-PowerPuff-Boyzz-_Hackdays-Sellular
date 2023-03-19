<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name="hackathon";

$conn = mysqli_connect($servername, $username, $password, $database_name);
 
if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $pn1= $_POST['pn1'];
    $pn2= $_POST['pn2'];
    $pn3= $_POST['pn3'];
    $pe1= $_POST['pe1'];
    $pe2= $_POST['pe2'];
    $pe3= $_POST['pe3'];
    $pm1= $_POST['pm1'];
    $pm2= $_POST['pm2'];
    $pm3= $_POST['pm3'];
    $yos1= $_POST['yos1'];
    $yos2= $_POST['yos2'];
    $yos3= $_POST['yos3'];
    $dob1= $_POST['dob1'];
    $dob2= $_POST['dob2'];
    $dob3= $_POST['dob3'];
    $ien1=  $_post['ien1'];
    $ien2=  $_post['ien2'];
    $ien3=  $_post['ien3'];
    $sql= "INSERT INTO   info(pn1,pn2,pn3, pe1,pe2,pe3, pm1,pm2,pm3, yos1,yos2,yos3, dob1,dob2,dob3, ien1,ien2,ien3)
    values ('$pn1','$pn2','$pn3', '$pe1','$pe2','$pe3', '$pm1','$pm2','$pm3', '$yos1','$yos2','$yos3', '$dob1','$dob2','$dob3', '$ien1','$ien2','$ien3')";
    

$result = mysqli_query($conn, $sql);


if($result)
{
    echo("Member Registered!");
} 
else
{
    echo "error:".mysql_error($con);
}
mysqli_close($conn);
?>