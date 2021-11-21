

<!DOCTYPE html>
<html>
  <head>
    <title> User Profile </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  </head>
 
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Poppins', sans-serif;
}
.banner{
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("ba.jpg") center/cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding-bottom: 20px;
}
.card-container{
    display: grid;
    grid-template-columns: 420px 420px;
}
.card-img{
    background: url("soil.jpg") center/cover no-repeat;
}
.banner h2{
    padding-bottom: 40px;
    margin-bottom: 20px;
}
.card-content{
    background: #fff;
    height: 440px;
}
.card-content h3{
    text-align: center;
    color: #000;
    padding: 25px 0 10px 0;
    font-size: 26px;
    font-weight: 500;
}
.form-row{
    display: flex;
    width: 100%;
    margin: 0 auto;
}
form select, form input{
    display: block;
    width: 100%;
    margin: 15px 12px;
    padding: 5px;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    border: none;
    border-bottom: 1px solid #eee;
    font-weight: 300;
}
form input[type = text], form input[type = number], form input::placeholder, select{
    color: #9a9a9a;
}
form input[type = submit]{
    color: #fff;
    background: #f2745f;
    padding: 12px 0;
    border-radius: 4px;
    width: 50%;
    cursor: pointer;
}
form input[type = submit]:hover{
    opacity: 0.9;
}
@media(max-width: 992px){
    .card-container{
        grid-template-columns: 100%;
        width: 100vw;
    }
    .card-img{
        height: 330px;
    }
}      
      </style>
    </head>
    <body>
        
        <section class = "banner">
            <h2>GET APPOINTMENT TO PEDOLOGISTS</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>BOOK NOW</h3>
                    <form action="" method="POST">
                      <?php
                         include 'db_conn.php';
                         $id=$_GET['id'];
                         $sql = "SELECT * FROM appointment where id='$id'";
                          $result = mysqli_query($conn, $sql);
                         $row=mysqli_fetch_array($result);
                         
                        ?>
                        <div class = "form-row">
                            <select name = "day" >
                                <option disabled selected hidden><?php echo $row['day'];?></option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select>

                            <select name = "dates" >
                                <option disabled selected hidden><?php echo $row['dates'];?></option>
                                <option value="10:00">10:00</option>
                                <option value="10:30" >10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="1:00">1:00</option>
                                <option value="1:30">1:30</option>
                                <option value="12:00">2:00</option>
                            </select>

                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="<?php echo $row['name'];?>" name="name" >
                            <input type = "text" placeholder="<?php echo $row['phone'];?>" name="phone">
                        </div>

                        <div class = "form-row">
                             <select name="service">
                                <option disabled selected hidden><?php echo $row['service'];?></option>
                                <option >Soil Testing</option>
                                <option >Contract Farm</option>
                                <option >Fertilizer Analysis</option>
                            </select>

                             <select name = "pedologist">
                                <option disabled selected hidden><?php echo $row['pedologist'];?></option>
                                <option >Ram Ghimire</option>
                                <option >Sam Gurug</option>
                                <option >Gita Sunar</option>
                            </select>
                            
                        </div>

                        <div class = "form-row">
                             <select name="choice">
                                <option disabled selected hidden><?php echo $row['choice'];?></option>
                                <option >I want to call Pedologist in my farm area.</option>
                                <option >I want to brought my soil in your company directly.</option>
                                
                            </select>
                        </div>

                         <input type = "submit"  name="submit" value = "Update">
                         <?php if(isset($_POST['submit'])){
                            $idUpdate=$_GET['id'];
                            $day=$_POST['day'];
                            $date=$_POST['dates'];
                            $name=$_POST['name'];
                            $phone=$_POST['phone'];
                            $service=$_POST['service'];
                            $pedologist=$_POST['pedologist'];
                            $choice=$_POST['choice'];
                            $query="UPDATE appointment SET day='$day',dates='dates',name='name',phone='phone',service='service',pedologist='pedologist',choice='choice' WHERE id='$idUpdate'"; 
                            $res=mysqli_query($conn,$query);
                            if($res){
                              echo"Update is sucessfull.";
                            }else{
                                echo"Data not found";
                            }
                        }
                            ?>
                    </form>
                </div>
            </div>
        </section>
</body>
</html>

