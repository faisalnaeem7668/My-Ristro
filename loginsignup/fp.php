
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forget Password</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Sing in  Form -->
    <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/fp.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Forget Password</h2>
                        <form action="fp.php" method="POST" class="register-form">


                        <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="rec" placeholder="Your Email"/ required autocomplete="off">
                            </div>
                            

                          <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Send OTP"/>&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="reset" class="form-submit" value="Reset"/>
                            </div>
                        </form>

                        <?php 

if(isset($_POST["rec"]))
{ 
    $host="localhost";
    $username="root";
    $pass="";
    $db="my_ristro";
    $port="3306";
    $conn=mysqli_connect($host,$username,$pass,$db,$port);

    $rec=$_POST["rec"];
    session_start();
    $_SESSION['email']=$rec;
    $sql="SELECT * from myregister WHERE email='$rec'";
    $result=mysqli_query($conn,$sql) or die("EMAIL QUERY FAILED");
    if(mysqli_num_rows($result)>0)
    {
    $sub="MY RISTRO";
    $r=rand(999,9999);
    session_start();
    $_SESSION["otp"]=$r;
    $msg="PLEASE VERIFY YOUR OTP: ".$r;
    mail($rec,$sub,$msg);
    header("Location:otpverification.php");
    }
    else{
        echo  "<center>  <h3><b style='color:red;'>EMAIL NOT MATCHED!</b></h3></center>";
    }
}
?>                  
                        
                    </div>
                </div>
            </div>
        </section>

</div>
<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>