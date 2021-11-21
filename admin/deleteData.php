 <?php 

require('db_conn.php');

 if(isset($_GET['id'])){
  $id =$_GET['id'];
 $Lquery="DELETE FROM pointt Where id = '$id' ";
 $result=mysqli_query($conn,$Lquery);
  if($result){
    header("location:dash.php");
  }
  else{
     header("location:dash.php");
  }
}
?>