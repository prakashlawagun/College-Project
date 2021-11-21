<!DOCTYPE html>
<html>
<head>
    <title>form</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <style type="text/css">
    body{
    margin:0;
    padding:20px;
    font-family: sans-serif;
}

*{
    box-sizing: border-box;
}

.table{
    width: 100%;
    border-collapse: collapse;
}

.table td,.table th{
  padding:12px 15px;
  border:1px solid #000000;
  text-align: center;
  font-size:16px;
  color: #000000;
}

.table th{
    background-color:#0073AA;
    color:#ffffff;
}

.table tbody tr:nth-child(even){
    background-color: #f5f5f5;
}
#back{
	 height:40px;
      width: 10%;
      margin: 5px;
      position: absolute;
      top: 0;
      left: 90%;
      transform: translateX(-50%);
      text-align: center;
      background:#0077AA;
      line-height: 20px;
      font-family: sans-serif;
      font-size: 15px;
      cursor: pointer;
}
.error{
  width: 30%;
      background: #F2DEDE;
    color: #A94442;
    padding: 10px;
    border-radius: 5px;
    margin: 20px auto;
    text-align: center;
}
.success{
    width: 30%;
    background:lightgreen ;
    color: #40754C;
    padding: 10px;
    border-radius: 5px;
    margin: 20px auto;
    text-align: center;
}
/*responsive*/

@media(max-width: 500px){
    .table thead{
        display: none;
    }

    .table, .table tbody, .table tr, .table td{
        display: block;
        width: 100%;
    }
    .table tr{
        margin-bottom:15px;
    }
    .table td{
        text-align: right;
        padding-left: 50%;
        text-align: right;
        position: relative;
    }
    .table td::before{
        content: attr(data-label);
        position: absolute;
        left:0;
        width: 50%;
        padding-left:15px;
        font-size:15px;
        font-weight: bold;
        text-align: left;
    }
}
@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table th {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
   
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}
.font{
      font-size:40px;
      position: absolute;
      right: 35px;
      top:20px;
      color:#000;
      
    } 
    </style>

</head>
<body>
    <h1 align="center">Post</h1>
    <a href="dash.php" class="font"><i class="fas fa-arrow-circle-left"></i></a>
    
 <div class="container">
        <div class="item">
          <?php 
    include('db_conn.php');
     $display="SELECT * FROM images";
     $query=mysqli_query($conn,$display);
     $total=mysqli_num_rows($query);
     if($total!=0){
          ?>

   <table class="table">
     <thead>
         <th>S.No</th>
         <th>Image</th>
         <th>Image Text</th>
          <th>Action</th>
     </thead>
        <?php
            $serial=24;
            while($row=mysqli_fetch_array($query)){
            	$_SESSION['id'] = $row['id'];
              ?>

     <tbody>
          <tr>
              <td data-label="S.No"><?php echo $serial ?></td>
              <td data-label="Address"><?php echo $row['image']?></td>
              <td data-label="Phone"><?php echo $row['image_text']?></td>
              <td>
                <!-- <form method="post" action="./postSupport.php"><input type="submit" class="btn" onclick="deleteRequest()" name="submit" value="Delete"></form> -->
                <a href="./postSupport.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete?')">
                  <button>Delete</button>
                </a>
              </td>
           

     </tbody>
  
              <?php
              $serial++;
            }

            if(isset($_GET['delete']))
            {
              $message=$_GET['delete'];

              if ($message=="Success") {
                echo"<div class='success'>";
              }
              else{
                echo"<div class='error'>";
              }
              echo $message."</div>";
            }
?>
            
            </table>
          </center>
          <?php
        }
          ?>
          
        </div>



</body>
</html>
