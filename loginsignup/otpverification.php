
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify OTP</title>

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
                        <figure><img src="images/otpverify.png"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">OTP Verification</h2>
                        <form action="otpverification.php" method="POST" class="register-form">


                        <div class="form-group">
                                <label for="otps"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="otps"  placeholder="ENTER OTP"/ required autocomplete="off">
                            </div>
                            

                          <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Verify OTP"/>&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="reset" class="form-submit" value="Reset"/>
                            </div>
                        </form>

 <?php 

 if(isset($_POST["otps"]))
{

  
     $otps=$_POST["otps"];
     session_start();
     $otp=$_SESSION["otp"];
 
if($otps==$otp)
{     
 header("Location:changepassword.php");
}
else 
{
 echo "<center><b style='color:red;'><h3>OTP NOT MATCHED...PLEASE VERIFY</h3></b></center>";
}}
    
   
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