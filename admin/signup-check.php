<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['adminname']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['cpassword'])) {

  function validate($data){
       $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }

  $name = validate($_POST['adminname']);
  $email = validate($_POST['email']);
  $pass = validate($_POST['password']);

  $re_pass = validate($_POST['cpassword']);

  $admin_data = 'adminname='. $name;


  if (empty($name)) {
    header("Location: signup.php?error=Admin Name is required&$admin_data");
      exit();
  }
   else if(empty($email)){
        header("Location: signup.php?error=Email is required&$admin_data");
      exit();
  }

  else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$admin_data");
      exit();
  }
  else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$admin_data");
      exit();
  }

  
  else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$admin_data");
      exit();
  }

  else{

    // hashing the password
        $pass = md5($pass);

      $sql = "SELECT * FROM admin WHERE email='$email' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: signup.php?error=The email is already taken try another&$admin_data");
          exit();
    }else {
           $sql2 = "INSERT INTO admin(adminname,email, password) VALUES('$name', '$email','$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
             header("Location: signup.php?success=Your account has been created successfully.Please Log in.");
           exit();
           }else {
              header("Location: signup.php?error=unknown error occurred&$admin_data");
            exit();
           }
    }
  }
  
}else{
  header("Location: signup.php");
  exit();
}