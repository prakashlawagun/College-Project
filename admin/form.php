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
  border:1px solid #ddd;
  text-align: center;
  font-size:16px;
}

.table th{
    background-color: darkgreen;
    color:#ffffff;
}

.table tbody tr:nth-child(even){
    background-color: #f5f5f5;
}
.font{
      font-size:40px;
      position: absolute;
      right: 35px;
      top:20px;
      color:#000;
      
    } 

/*responsive*/

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


  </style>

</head>
<body>
  <h1 align="center">Customer Request</h1>
  <a href="dash.php" class="font"><i class="fas fa-arrow-circle-left"></i></a>
 <div class="container">
        <div class="item">
          <?php 
    include('db_conn.php');
     $display="SELECT * FROM form";
     $query=mysqli_query($conn,$display);
     $total=mysqli_num_rows($query);
     if($total!=0){
          ?>

   <table class="table">
     <thead>
         <th>CostumerId</th>
         <th>Name</th>
         <th>Email</th>
         <th>Address</th>
         <th>Phone</th>
         <th>Place</th>
         <th>Message</th>
     </thead>
        <?php
            $serial=37;
            while($row=mysqli_fetch_array($query)){
              ?>

     <tbody>
          <tr>
              <td data-label="S.No"><?php echo $serial ?></td>
              <td data-label="Name"><?php echo $row['name']?></td>
              <td data-label="Email"><?php echo $row['email']?></td>
              <td data-label="Address"><?php echo $row['address']?></td>
              <td data-label="Phone"><?php echo $row['phone']?></td>
              <td data-label="Place"><?php echo $row['place']?></td>
              <td data-label="Message"><?php echo $row['msg']?></td>
          </tr>

     </tbody>
  
              <?php
              $serial++;
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