<!DOCTYPE html>
<html lang="en">
<head>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Signup</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="signup.php" method="post" class="register-form" >

                       

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" placeholder="Your Name"/ required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email"  placeholder="Your Email"/ required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass"  placeholder="Password"/ required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass"  placeholder="Repeat your password"/ required autocomplete="off">
                            </div>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="phone"  placeholder="Your Contact"/ required autocomplete="off" minlength="10" maxlength="10" >
                            </div>
                             
                            
                            <div class="form-group form-button">
                                <input type="submit"  class="form-submit" value="Register"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="reset"   class="form-submit" value="Reset"/> 

                            </div>
                        </form>

                       
                        <?php

if(isset($_POST["name"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $pass1=($_POST["pass"]);
    $pass2=($_POST["re_pass"]);
    $phone=$_POST["phone"];

    $host="localhost";
    $username="root";
    $password="";
    $db="my_ristro";
    $port="3306";



    
    if($pass1==$pass2)
    {
		
		$con=mysqli_connect($host,$username,$password,$db,$port);
		if($con==true)
		{

			$pass=($pass1);
			$sql_email="SELECT * FROM myregister WHERE email='$email'";
			$sql_phone="SELECT * FROM myregister WHERE phone='$phone'";
			$result_email=mysqli_query($con,$sql_email) or die("Email Query Failed");
			$result_phone=mysqli_query($con,$sql_phone) or die("Chone Query Failed");
			if(mysqli_num_rows($result_email)>0)
			{
				echo  "<script>Swal.fire({
					icon: 'error',
					
					text: 'Email is already exist!',
					
				  })</script>";
			}
			else if(mysqli_num_rows($result_phone)>0)
			{
				echo  "<script>Swal.fire({
					icon: 'error',
					
					text: 'Phone no. is alresdy exist!',
					
				  })</script>";
			}
			else
			{


           	 	$sql="INSERT into myregister(name,email,password,phone)values('$name','$email','$pass','$phone')";
            	if(mysqli_query($con,$sql))
            	{
               	 echo "<script>Swal.fire({
					icon:'success',
					 title:'successfully',
					 text:'Data has inserted',
					})
                     </script>";
                    
                     

                     header("Location:login.php");

            	}
				else
				{
                	print "The error is::".mysqli_error($con);
				}
		 	}
            
        }
		

	}
	else
		{
            print "<script>Swal.fire({
				icon: 'error',
				
				text: 'Password Not Mathed! Try Again...',
				
			  })</script>";
		}
	
}

?>
        
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg"></figure>
                        <a href="login.php" class="signin-image-link"><h3>I am already member</h3></a>
                    </div>
                </div>
            </div>

        </section>
        

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>