<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body> 
 <marquee behavior="scroll" class="move"><h1>"Let's Work Togrther For Nation."</h1></marquee>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['adminname'])) { ?>
               <input type="text" 
                      name="adminname" 
                      placeholder="Name"
                      value="<?php echo $_GET['adminname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="adminname" 
                      placeholder="Name"><br>
          <?php }?>

          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="cpassword" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="maato.php" class="ca">Already have an account?</a><br>
           <a href="login.php" class="ca">Click here to Login</a>

     </form>

      
</body>
</html>