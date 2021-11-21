<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style type="text/css">
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
    background-color: darkblue;
    color:#ffffff;
}

.table tbody tr:nth-child(even){
    background-color: #f5f5f5;
}

/*responsive*/

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
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

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>MAA<span>TO</span></h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="use.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="appointment.php"><i class="fas fa-calendar-check"></i><span>Appointment</span></a>
        <a href="post.php"><i class="fab fa-usps"></i><span>Post</span></a>
        <a href="payment.php"><i class="fas fa-money-check-alt"></i><span></span> Payment</a>
        <a href="form.php"><i class="fab fa-delicious"></i><span>Forms</span></a>
        <a href="real.php"><i class="fas fa-poll-h"></i><span>Result</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="use.jpg" class="profile_image" alt="">
        <h4>Welcome &nbsp;&nbsp;<?php echo $_SESSION['adminname']; ?></h4>
      </div>
      <a href="appointment.php"><i class="fas fa-calendar-check"></i><span>Appointment</span></a>
       <a href="post.php"><i class="fab fa-usps"></i><span>Post</span></a>
        <a href="payment.php"><i class="fas fa-money-check-alt"></i><span></span>Payment</a>
        <a href="form.php"><i class="fab fa-delicious"></i><span>Forms</span></a>
        <a href="https://www.afreesms.com/intl/nepal"><i class="fas fa-envelope"></i><span>Message</span></a>
        <a href="real.php" class="onHover"><i class="fas fa-poll-h"></i><span>Result</span></a>

           <a href="info.php" ><i class="fas fa-info-circle"></i><span>Result Information</span></a>

    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
          <h1 align="center" style="padding: 8px;">Customer Joining Record</h1>
        

          <?php 
    include('db_conn.php');
     $display="SELECT * FROM accountt";
     $query=mysqli_query($conn,$display);
     $total=mysqli_num_rows($query);
     if($total!=0){
          ?>

   <table class="table">
     <thead>
         <th>Customer Id</th>
         <th>Name</th>
         <th>Email</th>
         <th>Password</th>
        
     </thead>
        <?php
            $serial=36;
            while($row=mysqli_fetch_array($query)){
              ?>

     <tbody>
          <tr>
              <td data-label="S.No"><?php echo $serial ?></td>
              <td data-label="Name"><?php echo $row['name']?></td>
              <td data-label="Email"><?php echo $row['email']?></td>
              <td data-label="Address"><?php echo $row['password']?></td>
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
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>
<?php 
}else{
     header("Location: maato.php");
     exit();
}
 ?>
                           