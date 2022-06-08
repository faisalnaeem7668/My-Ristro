<?php
session_start();
$id=$_SESSION["id"];
if(!isset($id))
{
    header("Location:/myristo/");
}
?>
<?php

$host="localhost";
$username="root";
$password="";
$db="my_ristro";
$port="3306";
$conn=mysqli_connect($host,$username,$password,$db,$port) or  die("connection not established!");
$sql="SELECT * FROM myregister WHERE id='$id'";
$result=mysqli_query($conn,$sql) or die("Query Failed");
while($row=mysqli_fetch_assoc($result))
{
    $name=$row['name'];
    $email=$row['email'];
    $phone=$row['phone'];
    $address=$row['address'];
    $country=$row['country'];
    $dob=$row['dob'];
    $alt_phone=$row['alt_phone'];
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1"> 
    <title>User Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
     <link rel="stylesheet" href="../../assets/plugins/owl.carousel/dist/css/owl.carousel.min.css"> 
     <link href="../../assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet"> 
    <!-- Chartist -->
   <link rel="stylesheet" href="../../assets/plugins/chartist/css/chartist.min.css">
     <link href="../css/style.css" rel="stylesheet">
    

</head>

<body>

  

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
     <div id="main-wrapper"> 

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="app-profile.php">
                    <b class="logo-abbr"><u>Back</u></b>
                    <span class="brand-title"><b>User Profile</b></span>
                </a>
            </div>
            <div class="nav-control">
                
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
            <div class="header-left">
                <img src="newlogos.png" height="80px" width="215px">
                </div>
                <div class="header-right">

                <button class="btn btn-success px-3"> <a href="/myristro/loginsignup/logout.php"><b style='color:white';>Log Out</b></a></button>
                </div>


            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    

                    <li class="nav-label">Dashboard</li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            </i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            
                           
                            
                     
                            <li><a href="restaurant-offers.php">Offer</a></li>
                            
                           
                           
                            
                            <li><a href="restaurant-packages.php">Packages</a></li>
                            
                        </ul>
                    </li>

                    <li class="nav-label">Reservation</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><span class="nav-text">Customisation</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table.php">Full Restaurant Customisation</a></li>
                           
                            
                        </ul>
                    </li>

                    
                    
                    
                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                           
                        <li><a href="index.php">General</a></li>
                            <li><a href="app-calender.php">Calendar</a></li>
                        </ul>
                    </li>
                   

                    

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            
            <!-- row -->




            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-xxl-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3 rounded-circle mr-0 mr-sm-3" src="default_user.png" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0"><?php echo $name; ?></h3>
                                        <p class="text-muted mb-0"><?php echo $email; ?></p>
                                    </div>
                                </div>
                                
                                <div class="row mb-5">
                                    
                                    <div class="col">
                                        
                                    </div>
                                    <div class="col-12 text-center">
                                    
                                        
                                    </div>
                                </div>

                                
                                <ul class="card-profile__info">
                              
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span><?php echo $phone; ?></span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span><?php echo $email; ?></span></li>
                                    <li><strong class="text-dark mr-4">Address</strong> <span><?php echo $address; ?></span></li>
                                    <li><strong class="text-dark mr-4">Country</strong> <span><?php echo $country; ?></span></li>
                                    <li><strong class="text-dark mr-4">Date Of Birth</strong> <span><?php echo $dob; ?></span></li>
                                    <li><strong class="text-dark mr-4">Alternate Contact</strong> <span><?php echo $alt_phone; ?></span></li>
                                   
                                </ul>
                            </div>
                            <div class="card-footer border-0 bg-white pb-4">
                                
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-8 col-md-7 col-xxl-8 col-xl-9"> 
                   
					<div class="col-12">
                     <h2 class="page-heading"><h2><center>Update Your Profile</center></h2></h2>
                  

                 <form action="app-profile.php" method="POST">
                 <div class="row">
      
      
      <div class="col-md-6">
     <div class="form-group">
       <label for=""><b>Complete Address</b></label>
      <div class="select-wrap one-third">
         <div class="icon"></span></div>
         <input type="text" name="address" Placeholder="Enter Your Address" class="form-control" autocomplete="off">
       </div>
     </div>
         </div>

         
     <br><br>
     
         <br><br>
         <br><br>
   <div class="col-md-6">
     <div class="form-group">
       <label for=""><b>Country</b></label>
       <div class="select-wrap one-third">
         <div class="icon"></span></div>
         <input type="text" name="country" Placeholder="Enter Your Country" class="form-control" autocomplete="off">
       </div>
     </div>
   </div>

   
   <br><br>
   <br><br>
   <br><br>
        <div class="col-md-6">
     <div class="form-group">
       <label for=""><b>Alternate Contact</b></label>
       <div class="select-wrap one-third">
         <div class="icon"></span></div>
         <input type="text" name="alt_phone" Placeholder="Enter Alternate Contact" class="form-control" autocomplete="off" maxlength="10" minlength="10">
       </div>
     </div>
   </div>
   

   <br><br>
   <br><br>
   <br><br>

   <div class="col-md-6">
       <div class="form-group">
         <label for=""><b>Date Of Birth</b></label>
         <div class="select-wrap one-third">
           <div class="icon"></span></div>
           <input type="date" name="dob" Placeholder="Enter Your D.O.B" class="form-control" autocomplete="off">
         </div>
       </div>
     </div>
 
    
   <div class="col-md-12 mt-3">
     <div class="form-group">
   <center><input type="submit" value="Confirm" class="btn btn-primary py-3 px-5" name="submit">
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="reset" value="Clear" class="btn btn-primary py-3 px-5"></center>

     </div>
   </div>
 </div>
</form>



<?php 
if(isset($_POST['submit']))
{
    $alt_phone=$_POST['alt_phone'];
    $address=$_POST['address'];
    $country=$_POST['country'];
    $dob=$_POST['dob'];
$sql="UPDATE myregister SET alt_phone='$alt_phone',address='$address',
country='$country',dob='$dob' WHERE id='$id'";
if(mysqli_query($conn,$sql))
{
    
    echo "<center><br><h5><b style='color:blue'>SUCCESSFULLY UPLOADED...THANK YOU!</b></h5></center>";   

}
else
{
    print mysqli_error($conn);

}
}

?>
                 </div>
                </div>


                        
                    </div>
                </div>
            
        
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
       
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../../assets/plugins/common/common.min.js"></script>
    <script src="../js/custom.mini.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/quixnav.js"></script>
    <script src="../js/styleSwitcher.js"></script>
</body>


</html>