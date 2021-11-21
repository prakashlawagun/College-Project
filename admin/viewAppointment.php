  
<!DOCTYPE html>
<html>
<head>
  <title>view</title>
</head>
<style type="text/css">
  body{
    background:url('admin.jpg');
  }


</style>
<body>

  <?php 
    include('db_conn.php');
     if(isset($_GET['id'])){
  $id =$_GET['id'];
     $display="SELECT * FROM appointment where id='$id'";
     $query=mysqli_query($conn,$display);
     if($row=mysqli_fetch_array($query)){
          ?>
             <h2 style="text-transform: uppercase; font-size: 50px; color: #fff;">DAY-<?php echo $row['day']?></h2><br/>
             <hr/>
              <h2 style="text-transform: uppercase; font-size: 25px;"><strong>Time:</strong><?php echo $row['dates']?></h2><br/>
              <h2 style="text-transform: uppercase; font-size: 25px;"><strong>Name:</strong><?php echo $row['name']?></h2><br/>
              <h2 style="text-transform: uppercase; font-size: 25px;"><strong>Phone:</strong><?php echo $row['phone']?></h2><br/>
              <h2 style="text-transform: uppercase; font-size: 25px;"><strong> Service:</strong><?php echo $row['service']?></h2><br/>
              <h2 style="text-transform: uppercase; font-size: 25px;"><strong>Pedologist:</strong><?php echo $row['pedologist']?></h2><br/>
              <h2 style="text-transform: uppercase; font-size: 25px;"><strong>Choice:</strong><?php echo $row['choice']?></h2><br/>
      <?php
    }
  }
    ?>
    </body>
</html>