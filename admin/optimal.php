<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}
else
{
    echo "connection sucessful";
}
$soil=$_POST['soil'];
$organic=$_POST['organic'];
$cec=$_POST['cec'];
$iron=$_POST['iron'];
$zinc=$_POST['zinc'];
$phosphorus=$_POST['phosphorus'];
$potassium=$_POST['potassium'];
$nitrogen=$_POST['nitrogen'];

$query="insert into optimal(soil,organic,cec,iron,zinc,phosphorus,potassium,nitrogen) values('$soil','$organic','$cec','$iron','$zinc','$phosphorus','$potassium','$nitrogen')";
mysqli_query($conn,$query);
header('location:result.php');
?>