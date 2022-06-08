<?php 
session_start();
$email=$_SESSION['email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg"></figure>
                        <a href="login.php" class="signup-image-link"><b><h3>Back To Login</h3></b></a>
                       
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Reset Password</h2>
                        <form action="changepassword.php" method="POST" class="register-form" >

                        

                            
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" placeholder="Enter New Password"/ required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="re_password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" placeholder="Confirm Password"/ required autocomplete="off">
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Confirm"/>&nbsp&nbsp&nbsp&nbsp&nbsp;
                                <input type="reset" class="form-submit" value="Reset"/>
                            </div>
                        </form>
                       
                        <?php 
if(isset($_POST["password"]))
{  
   
    $password=$_POST["password"];
    $password_confirm=$_POST["re_password"];

    $host="localhost";
    $username="root";
    $pass="";
    $db="my_ristro";
    $port="3306";
    $conn=mysqli_connect($host,$username,$pass,$db,$port);
    if($conn==true)
    {
       
     
            if($password==$password_confirm)
            {
                $sql="UPDATE myregister SET password='$password_confirm' WHERE email='$email'";
            $result=mysqli_query($conn,$sql) or die("update QUERY FAILED");
          if($result)
          {
              echo "<br><h3><b style='color:blue'>CONGRATULATIONS...YOUR PASSWORD HAVE BEEN UPDATED!</b></h3>";
          }
            }
            else 
               {
            echo "<br><h3><b style='color:red'>BOTH THE PASSWORD ARE NOT THE SAME....TRY AGAIN</b></h3>";
               }

       
    }
    else 
    {
        echo "mysqli_connect_error()";
    }
    
}

?>



                            
                    </div>
                </div>
            </div>
        </section>

  

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>