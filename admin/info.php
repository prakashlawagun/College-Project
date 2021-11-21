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
   background-color:#FFCBA4;
}
.font{
    font-size:40px;
    position: absolute;
    right: 35px;
    top:20px;
    color:#000;
    
  }
h2{
  font-size: 30px;
  margin:20px;

}
p{
    margin:20px;
    color:#000;
    font-size: 20px;
}
span{
  font-weight: bold;
  font-weight: 900;
  color:black;
  margin: 20px;
}
.colorful{
  border: 3px solid black;
}
h1{
  font-weight: bold;
  text-decoration: underline;
}
.button {
    display: block;
    width: 115px;
    height: 25px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    line-height: 25px;
    text-decoration: none;
    margin: 20px;
}
    </style>

</head>
<body>
    <h1 align="center">Result Information</h1>
    <a href="dash.php" class="font"><i class="fas fa-arrow-circle-left"></i></a>
 <div class="container">
        <div class="item">
          <?php 
    include('db_conn.php');
     $display="SELECT * FROM pointt ";
     $query=mysqli_query($conn,$display);
     $total=mysqli_num_rows($query);
     if($total!=0){
          ?>
          <?php
          
            while($row=mysqli_fetch_array($query)){
               $_SESSION['id'] = $row['id'];
              ?>
              <div class="colorful">
              <p data-label="Name"><Span>Person:</Span><?php echo $row['name']?></p>
              <p data-label="Email"><span>Email:</span><?php echo $row['email']?></p>
              <p data-label="Address"><span>Soil pH:</span><?php echo $row['soil']?></p>
              <p data-label="Phone"><span>Organic Matter:</span><?php echo $row['organic']?></p>
              <p data-label="Place"><span>CEC:</span><?php echo $row['cec']?></p>
              <p data-label="Message"><span>Iron:</span><?php echo $row['iron']?></p>
              <p data-label="Message"><span>Zinc:</span><?php echo $row['zinc']?></p>
              <p data-label="Message"><span>Phosphorus:</span><?php echo $row['phosphorus']?></p>
              <p data-label="Message"><span>Potassium:</span><?php echo $row['potassium']?></p>
              <p data-label="Message"><span>Nitrogen:</span><?php echo $row['nitrogen']?></p>
             
              <p data-label="Message" style="border: 5px solid black; padding:20px;"><span>Solution:</span><?php echo $row['description']?></p><br/>
                  <a class="button" href="./deleteData.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete?')">
                      Delete
                  </a>
                  
            </div><br/>
          <?php
        }
    } 
     
          ?>
          
        </div>
</body>
</html>