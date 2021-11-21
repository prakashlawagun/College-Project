
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
    <META http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="fake.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <style>
.font{
    font-size:40px;
    position: absolute;
    right: 35px;
    top:20px;
    color:#fff;
    
  }
        </style>
</head>
    <body>
  <main>
  <a href="dash.php" class="font"><i class="fas fa-arrow-circle-left"></i></a>
<div class="wrapper">
    
        <div>
            <h1>Add Result</h1>
            <form method="post" action="connection.php">
                <fieldset>
                    <legend>Details:</legend>
                    <table>
                        <tr>
                            <td>
                                <label>Name: </label>
                                <input type="text" name="name" required>
                            </td>
                            <td>
                                <label>Email: </label>
                                <input type="email" name="email"  required>
                            </td>
                            <td>
                                <label>Address: </label>
                                <input type="text" name="address"  required>
                            </td>
                              <td>
                                <label>Sample: </label>
                                <input type="text" name="Sample"  required>
                            </td>
                              <td>
                                <label>Lab No: </label>
                                <input type="text" name="lab_no"  required>
                            </td>
                              <td>
                                <label>Received: </label>
                                <input type="text" name="received"  required>
                            </td>
                              <td>
                                <label>Tested: </label>
                                <input type="text" name="tested"  required>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Chemical Report(Acidic and Basic):</legend>
                    <table>
                        <tr>
                            <td>
                                <label>Soil pH(%)</label>
                                <input type="text" name="soil"  required>
                            </td>
                            <td>
                                <label>Organic Matter</label>
                                <input type="text" name="organic"  required>
                            </td>
                            <td>
                                <label>CEC</label>
                                <input type="text" name="cec"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Iron</label>
                                <input type="text" name="iron"  required>
                            </td>
                            <td>
                                <label>Zinc</label>
                                <input type="text" name="zinc"  required>
                            </td>
                            <td>
                                <label>Phosphorus</label>
                                <input type="text" name="phosphorus"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Potassium</label>
                                <input type="text" name="potassium"  required>
                            </td>
                            <td>
                                <label>Nitrogen</label>
                                <input type="text" name="nitrogen"  required>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Optimal Value</legend>
                    <table>
                        <tr>
                            <td>
                                <label>Soil pH(%) Range</label>
                                <input type="text" name="soilop"  required>
                            </td>
                            <td>
                                <label>Organic Matter Range</label>
                                <input type="text" name="organicop"  required>
                            </td>
                            <td>
                                <label>CEC Range</label>
                                <input type="text" name="cecop"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Iron Range</label>
                                <input type="text" name="ironop"  required>
                            </td>
                            <td>
                                <label>Zinc Range</label>
                                <input type="text" name="zincop"  required>
                            </td>
                            <td>
                                <label>Phosphorus Range</label>
                                <input type="text" name="phosphorusop"  required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Potassium Range</label>
                                <input type="text" name="potassiumop"  required>
                            </td>
                            <td>
                                <label>Nitrogen Range</label>
                                <input type="text" name="nitrogenop"  required>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Message:</legend>
                    <table>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <label>Conclusion:</label>
                                <textarea name="description" cols="30" rows="10"  required></textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <input type="submit" value="Add Result" name="submit" onclick="return msg()">
            </form>
        </div>
    
</div>
</main>
<script type="text/javascript">
    function msg(){
        alert("Add Sucessfully");
    }
</script>
</body>
</html>
<?php 
}else{
     header("Location: maato.php");
     exit();
}
 ?>