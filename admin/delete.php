 <?php 

require('db_conn.php');

 if(isset($_GET['id'])){
  $id =$_GET['id'];
 $Lquery="DELETE FROM appointment Where id = '$id' ";
 $result=mysqli_query($conn,$Lquery);
  if($result){
    header("location: ./appointment.php?delete=Success");
  }
  else{
     header("location: ./appointment.php?delete=Failure");
  }
}
?>