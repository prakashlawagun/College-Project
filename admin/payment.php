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
    background-color: darkred;
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

	</style>

</head>
<body>
<a href="dash.php" class="font"><i class="fas fa-arrow-circle-left"></i></a>
	<h1 align="center">Customer Payment Detials </h1>
	
 <div class="container">
        <div class="item">
          <?php 
    include('db_conn.php');
     $display="SELECT * FROM payamount";
     $query=mysqli_query($conn,$display);
     $total=mysqli_num_rows($query);
     if($total!=0){
          ?>

   <table class="table">
     <thead>
         <th>S.No</th>
         <th>Name</th>
         <th>Amount</th>
         <th>Card Pin</th>
         <th>Date</th>
         <th>CVC</th>
         <th></th>
     </thead>
        <?php
            $serial=1;
            while($row=mysqli_fetch_array($query)){
              ?>

     <tbody>
          <tr>
              <td data-label="S.No"><?php echo $serial ?></td>
              <td data-label="Name"><?php echo $row['name']?></td>
              <td data-label="Email"><?php echo $row['amount']?></td>
              <td data-label="Address"><?php echo $row['card_pin']?></td>
              <td data-label="Phone">Rs.<?php echo $row['date']?></td>
              <td data-label="Phone">Rs.<?php echo $row['code']?></td>
              
              
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