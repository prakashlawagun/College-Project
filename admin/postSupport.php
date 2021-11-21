 <?php 

require('db_conn.php');

 if(isset($_GET['id'])){
  $id =$_GET['id'];

 $Lquery="DELETE FROM images Where id = '$id' ";
 $result=mysqli_query($conn,$Lquery);
  if($result){
    header("location: ./post.php?delete=Success");
  }
  else{
     header("location: ./post.php?delete=Failure");
  }
}
?>