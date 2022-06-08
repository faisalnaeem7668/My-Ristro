
<?php 
if(isset($_POST["email"]))
{  $email=$_POST["email"];
    $password=$_POST["password"];
    $host="localhost";
    $username="root";
    $pass="";
    $db="my_ristro";
    $port="3306";
    $conn=mysqli_connect($host,$username,$pass,$db,$port);
    if($conn==true)
    {
    $sql="SELECT * FROM adminlogin WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql);
       if(mysqli_num_rows($result)>0)
    {
       while($row=mysqli_fetch_assoc($result))
       {  
        session_start();
        $_SESSION['email']=$row["email"];
       
         header("Location:/myristro/admin dashboard/main/template/tables.php");
        
        
    }}
        else 
        { 
       echo  "<center>  <h3><b style='color:red;'>INVALID EMAIL OR PASSWORD!</b></h3></center>";
        }
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

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
                        <figure><img src="images/login.jfif" alt="sing up image"></figure>
                       
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Administrator Login</h2>
                        <form action="login.php" method="POST" >
                        <div class="form-group">
                        <label for="email"> <i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" placeholder="Enter Your Email"/ required autocomplete="off">
                            </div>
                            <div class="form-group">
                            <label for="password"> <i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" placeholder="Enter Your Password"/ required autocomplete="off">
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Login"/>&nbsp&nbsp&nbsp&nbsp&nbsp;
                                <input type="reset" class="form-submit" value="Reset"/>
                            </div>
                        </form>

 

                            
                    </div>
                </div>
            </div>
        </section>

  

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>