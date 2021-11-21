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
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$sample=$_POST['Sample'];
$lab_no=$_POST['lab_no'];
$received=$_POST['received'];
$tested=$_POST['tested'];
$soil=$_POST['soil'];
$organic=$_POST['organic'];
$cec=$_POST['cec'];
$iron=$_POST['iron'];
$zinc=$_POST['zinc'];
$phosphorus=$_POST['phosphorus'];
$potassium=$_POST['potassium'];
$nitrogen=$_POST['nitrogen'];
$soilop=$_POST['soilop'];
$organicop=$_POST['organicop'];
$cecop=$_POST['cecop'];
$ironop=$_POST['ironop'];
$zincop=$_POST['zincop'];
$phosphorusop=$_POST['phosphorusop'];
$potassiumop=$_POST['potassiumop'];
$nitrogenop=$_POST['nitrogenop'];
$description=$_POST['description'];


$query="insert into pointt(name,email,address,Sample,lab_no,received,tested,soil,organic,cec,iron,zinc,phosphorus,potassium,nitrogen,soilop,organicop,cecop,ironop,zincop,phosphorusop,potassiumop,nitrogenop,description) values('$name','$email','$address','$sample','$lab_no','$received','$tested','$soil','$organic','$cec','$iron','$zinc','$phosphorus','$potassium','$nitrogen','$soilop','$organicop','$cecop','$ironop','$zincop','$phosphorusop','$potassiumop','$nitrogenop','$description')";
mysqli_query($conn,$query);
header('location:dash.php');
?>