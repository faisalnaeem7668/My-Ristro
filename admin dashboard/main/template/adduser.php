<?php
 

if(isset($_POST["save"]))
{
    include "config.php";
    
    $name=($_POST["name"]);
    $email=($_POST["email"]);
    $pass1=($_POST["pass"]);
    $pass2=($_POST["re_pass"]);
    $phone=($_POST["phone"]);
   

    $host="localhost";
    $username="root";
    $password="";
    $db="my_ristro";
    $port="3306";

 
    if($pass1==$pass2)
    {
		
		$conn=mysqli_connect($host,$username,$password,$db,$port);
		

		
			$sql="SELECT email FROM adminlogin WHERE email='$email'";
			
			$result=mysqli_query($conn,$sql) or die("EMAIL QUERY FAILED");
			
			if(mysqli_num_rows($result)>0)
			{
	
          echo "<h3><center><b style='color:red'>EMAIL ALREADY EXIST!!!</b></center></h3>";
			}
			
			else
			{


           	 	$sql1="INSERT into adminlogin(name,email,password,contact)values('$name','$email','$pass2','$phone')";
            	if(mysqli_query($conn,$sql1))
            	{
               
                     

                    echo "<h3><center><b style='color:blue'>Your New Admin Account Have Been Created...Logout And Then Login With New Account !!!</b></center></h3>";

            	}
				else
				{
                	print "The error is::".mysqli_error($conn);
				}
		 	}
	

	}
    
    else
    {
      
          echo "<h3><center><b style='color:red'>PASSWORD NOT MATCHED!!!</b></center></h3>";
        
    }
    
	
}

?>
   


<!DOCTYPE html>
<html lang="en">
<head>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Admin</title>
    
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
                        <h2 class="form-title">Add New Admin</h2>
                        <form action="adduser.php" method="post" class="register-form" >
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
                                <input type="text" name="phone"  placeholder="Your Contact"/ required autocomplete="off">
                            </div>  
                            
                            <div class="form-group form-button">
                                <input type="submit" name="save" class="form-submit" value="Add User"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <input type="reset"   class="form-submit" value="Reset"/> 

                            </div>
                        </form>

                    
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg"></figure>
                       
                    </div>
                </div>
            </div>

        </section>
        

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>