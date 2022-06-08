
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
                <div class="row justify-content-between mb-3">
					<div class="col-12">
                     <h2 class="page-heading"><marquee scrollamount="8" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()">
                     <i><h2>Choose Your Packages According To Your Events At Affordable Prices!!</h2></i></marquee></h2>
						
					</div>
                </div>



                <div class="row justify-content-between mb-3">
					<div class="col-12">
                     <h2 class="page-heading"><h1><center>Booking Details</center></h1></h2>
                  

                 <form action="restaurant-packages.php" method="POST">
                 <div class="row">
      
      
                 <div class="col-md-6">
     <div class="form-group">
       <label for=""><b>Alternate Contact</b></label>
       <div class="select-wrap one-third">
         <div class="icon"></span></div>
         <input type="text" name="contact" Placeholder="Enter Alternate Contact Number,If You Have" class="form-control" autocomplete="off" minlength="10" maxlength="10">
       </div>
     </div>
   </div>

         
     <br><br>
     
         <br><br>
         <br><br>
   <div class="col-md-6">
     <div class="form-group">
       <label for=""><b>Host Address</b></label>
       <div class="select-wrap one-third">
         <div class="icon"></span></div>
         <input type="text" name="add" Placeholder="Enter Host Address" class="form-control" autocomplete="off" required>
       </div>
     </div>
   </div>

   
   <br><br>
   <br><br>
   <br><br>
      
     <div class="col-md-6">
     <div class="form-group">
       <label for=""><b>Packages</b></label>
       <div class="select-wrap one-third">
         <div class="icon"></span></div>
         <select name="packages" class="form-control">
                   
                  <option value="Birthday Party(Veg)">Birthday Party (Veg)</option>
                  <option value="Birthday Party(Non-Veg)">Birthday Party (Non-Veg)</option>
                  <option value="Wedding Party(Veg)">Wedding Party (Veg)</option>
                  <option value="Wedding Party(Non-Veg)">Wedding Party (Non-Veg)</option>
                  <option value="Freshers/Farewell Party Combo(Veg)">Freshers/Farewell Party Combo (Veg)</option>
                  <option value="Freshers/Farewell Party Combo(Non-Veg)">Freshers/Farewell Party Combo (Non-Veg)</option>
                  <option value="Combo For Bussiness 1(Veg)">Combo For Bussiness 1 (Veg)</option>
                  <option value="Combo For Bussiness 2(Veg)">Combo For Bussiness 2 (Veg)</option>
                  <option value="Combo For Family Meal(Veg)">Combo For Family Meal (Veg)</option>
                  <option value="Combo For Family Meal(Non-Veg)">Combo For Family Meal (Non-Veg)</option>
                 
                </select>
       </div>
     </div>
   </div>
   

   <br><br>
   <br><br>
   <br><br>

   <div class="col-md-6">
       <div class="form-group">
         <label for=""><b>Number Of Peoples</b></label>
         <div class="select-wrap one-third">
           <div class="icon"></span></div>
           <select name="peoples" class="form-control">
                    <option value="4">4</option>
                  <option value="4">6</option>
                  <option value="8">8</option>
                  <option value="10">10</option>
                  <option value="12">12</option>
                  <option value="15">15</option>
                  <option value="18">18</option>
                  <option value="20">20</option>
                  <option value="25">25</option>
                  <option value="30">30</option>
                  <option value="35">35</option>
                  <option value="40">40</option>
                  <option value="45">45</option>
                  <option value="50">50</option>
                 
                </select>
         </div>
       </div>
     </div>
      
     <br><br>
     <br><br>
     <br><br>




     <div class="col-md-6">
         <div class="form-group">
           <label for=""><b>Event Date</b></label>
           <div class="select-wrap one-third">
             <div class="icon"></span></div>
             <input type="date" name="date" Placeholder="Choose Your Date" class="form-control" required>
           </div>
         </div>
       </div>
        


       
     <br><br>
     <br><br>

       <br><br>




       <div class="col-md-6">
         <div class="form-group">
           <label for=""><b>Event Time</b></label>
           <div class="select-wrap one-third">
             <div class="icon"></span></div>
             <select name="time" class="form-control">
                  
                  <option value="8:00 AM-11:00 PM">8:00 AM-11:00 AM</option>
                  <option value="12:00 PM-3:00 PM">12:00 PM-3:00 PM</option>
                  <option value="4:00 PM-7:00 PM">4:00 PM-7:00 PM</option>
                  <option value="8:00 PM-11:00 PM">8:00 PM-11:00 PM</option>
                 
                </select>
           </div>
         </div>
       </div>
        


       
     <br><br>
     <br><br>

       <br><br>

       <div class="col-md-6">
         <div class="form-group">
           <label for=""><b>Email Address</b></label>
           <div class="select-wrap one-third">
             <div class="icon"></span></div>
             <input type="email" name="email" Placeholder="Enter Your Email Address" class="form-control" required autocomplete="off">
                 
               
               
                
            
           </div>
         </div>
       </div>
       <br><br>
     <br><br>

       <br><br>
  

       <div class="col-md-6">
         <div class="form-group">
           <label for=""><b>Do You Want To Send Your Leftover Food To The NGO</b></label>
           <div class="select-wrap one-third">
             <div class="icon"></span></div>
             <input type="text" name="ngo" Placeholder="Write YES Or No" class="form-control" required autocomplete="off">
                 
               
               
                
            
           </div>
         </div>
       </div>
       <br><br>
     <br><br>

       <br><br>
  



       <div class="col-md-12">
         <div class="form-group">
           <label for=""><b>Any Special Request</b></label>
           <div class="select-wrap one-third">
             <div class="icon"></span></div>
             <textarea name="msgs" class="form-control" placeholder="Enter Your Special Request If You Have!" rows="3"></textarea>
                
              

               
                
            
           </div>
         </div>
       </div>
        


       
     <br><br>
     <br><br>

       <br><br>




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
if(isset($_POST["submit"]))
{
    $email=$_POST["email"];
$address=$_POST["add"];
$phone=$_POST["contact"];
$ngo=$_POST["ngo"];
$package=$_POST["packages"];
$people=$_POST["peoples"];
$date=$_POST["date"];
$time=$_POST["time"];
$request=$_POST["msgs"];

$host="localhost";
$username="root";
$password="";
$db="my_ristro";
$port="3306";

$con=mysqli_connect($host,$username,$password,$db,$port);
if($con==true)
{
  $sql="INSERT into packages(Ngo,Email,Contact,Address,Packages,Peoples,Date,Time,Spl_Request)
values('$ngo','$email','$phone','$address','$package','$people','$date','$time','$request')";

if(mysqli_query($con,$sql))
{
    echo "<center><br><h5><b style='color:blue'>SUCESSFULLY UPLOADED...THANK YOU!</b></h5></center>";
    }
else
{
    print mysqli_error($con);

}}
}
?>
                 </div>
                </div>


                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper"> <br> <br>
                                <center> <h3>Birthday Party(Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/cheesesandwich.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/frenchfries.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/paneertikka.jpg" alt="food menu">
                                       
                                          <span class="ribbon ribbon__five mr-2">Rs 350</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Grilled Cheese Sandwich</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                                <span>With Classic Marinara Sauce</span>
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Punjabi Paneer Tikka</h4>
                                                    <span class="badge badge-primary">4 Pieces</span>
                                                </div>
                                                <span>With Red Chilli Sauce</span>
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chocochip Icecream</h4>
                                                    <span class="badge badge-primary">2 Scoops</span>
                                                </div>
                                               
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">French Fries</h4>
                                                    <span class="badge badge-primary">150 Grams</span>
                                                </div>
                                                <span>With Tomato Kethchup</span>
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Cold Drink</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                                <span>In 4 Different Flavours</span>
                                            </li>
                                            <br>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br>  <br>
                                   <center> <h3>Birthday Party(Non-Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/hyderabadibiryani.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/granny-menu11.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/muttontikka.jpg" alt="food menu">
                                       
                                        <span class="ribbon ribbon__five mr-2">Rs 399</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                        <br> <br><br> <br><br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                
                                                    <h4 class="d-inline-block">Chilli Chicken Sandwich</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                                <span>With Classic Marinara Sauce</span>
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Paneer Mutton Tikka</h4>
                                                    <span class="badge badge-primary">4 Pieces</span>
                                                </div>
                                                <span>With Green Chilli Sauce</span>
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Hyderabadi Biryani</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>With Masala Raita</span>
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chocochip Icecream</h4>
                                                    <span class="badge badge-primary">2 Scoops</span>
                                                </div>
                                                
                                            </li>
                                            <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Coke</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                               
                                            </li>
                                            <br> <br> <br> <br> <br> <br> <br> <br> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                   <center> <h3>Wedding Party(Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/navratanpulav.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/blueshoe.jpg" alt="food menu" length="400" breadth="500">
                                        <img class="img-fluid" src="../../assets/images/menu/gulabjamun.jpg" alt="food menu">
                                        <span class="ribbon ribbon__five mr-2">Rs 420</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Matar Paneer</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>With Vegetable Salad</span>
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block"> Special Chola</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                               
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Tandoori Roti</h4>
                                                    <span class="badge badge-primary">3 Pieces</span>
                                                </div>
                                               
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Navratan Pulav</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Gulab Jamun</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                              
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Moctail</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                                <span>In Four Different Flavours</span>
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Ice Cream</h4>
                                                    <span class="badge badge-primary">2 Scoops</span>
                                                </div>
                                                <span>In Two Different Flavours</span>
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">French Fries</h4>
                                                    <span class="badge badge-primary">150 grams</span>
                                                </div>
                                                <span>Including Tomato Kethchup</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                      <center>  <h3>Wedding Party(Non-Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/chickenfriedrice.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/seekkabab.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/chillichicken.jpg" alt="food menu">
                                       
                                        <span class="ribbon ribbon__five mr-2">Rs 460</span>
                                    </div>
                                </div> 
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0"><br> <br><br> <br><br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Mutton Stew</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chicken Fried Rice</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                                <span>Including Schezwan Sauce</span>
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chilli Chicken Tikka</h4>
                                                    <span class="badge badge-primary">4 Pieces</span>
                                                </div>
                                                <span>Classic Marinara Sauce</span>
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Seek Kabab</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                                <span>Including Green Chutney</span>
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Sheermal</h4>
                                                    <span class="badge badge-primary">3 Pieces</span>
                                                </div>
                                               
                                            </li> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Hyderabadi Biryani</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>Including Boondi Raita</span>
                                            </li> <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> 
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                      <center>  <h3>Freshers/Farewell Party Combo(Veg)</h3><br></center>
                                       
                                        <img class="img-fluid" src="../../assets/images/menu/honeychillipotato.webp" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/oreoshake.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/virginmojito.jpg" alt="food menu">
                                        <span class="ribbon ribbon__five mr-2">Rs 450</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Rice With Manchurian</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Noodles With Paneer Chilli</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Oreo Shake</h4>
                                                    <span class="badge badge-primary">300 ml</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Honey Chilli Potato</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>Mayonnaise</span>
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Virgin Mojito Moctail</h4>
                                                    <span class="badge badge-primary">300 ml</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br> <br>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                   <center> <h3>Freshers/Farewell Party Combo(Non-Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/manchurianrice.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/blueshoe.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/seekkabab.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/chickennoodles.png" alt="food menu">

                                        <span class="ribbon ribbon__five mr-2">Rs 399</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                        <br> <br><br> <br><br> <br><br> <br><br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chicken Noodles</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>Classic Marinara Sauce</span>
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chicken Fried Rice</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Moctail Blue Shoe</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                              
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Oreo Shake</h4>
                                                    <span class="badge badge-primary">300 ml</span>
                                                </div>
                                              
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Seek Kabab</h4>
                                                    <span class="badge badge-primary">3 Pieces</span>
                                                </div>
                                                <span>Including Green Chutney</span>
                                            </li> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                                           
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                       <center> <h3>&nbsp;&nbsp;&nbsp;Combo For Bussiness Meeting 1 (Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/samosa.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/coldcoffee.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/chickenrice.jpeg" alt="food menu">
                                        <span class="ribbon ribbon__five mr-2">Rs 299</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                        <br> <br><br> <br><br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Samosa</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                                <span>Including Tomato Kethchup</span>
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">French Fries</h4>
                                                    <span class="badge badge-primary">200 grams</span>
                                                </div>
                                                <span>Including Tomato Kethchup</span>
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Chilli Chicken Tikka</h4>
                                                    <span class="badge badge-primary">4 Pieces</span>
                                                </div>
                                                <span>Classic Marinara Sauce</span>
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Cold Coffee</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Veg Fried Rice</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>Classic Marinara Sauce</span>
                                            </li> <br> <br> <br> <br> <br> <br> 
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                       <center> <h3>&nbsp;&nbsp;&nbsp;Combo For Bussiness Meeting 2 (Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/cheesesandwich.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/2.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/bakedpotatochips.jpg" alt="food menu">
                                      
                                        <span class="ribbon ribbon__five mr-2">Rs 240</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Cheese Sandwich</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                                <span>Including Mayonnaise</span>
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Orange Juice</h4>
                                                    <span class="badge badge-primary">300 ml</span>
                                                </div>
                                                
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Baked Potato Chips</h4>
                                                    <span class="badge badge-primary">50 grams</span>
                                                </div>
                                                
                                            </li> <br> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Honey Chilli Potato</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                                <span>Including Mayonnaise</span>
                                            </li> <br> <br> <br> <br> <br>
                                          
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                   <center> <h3>&nbsp;&nbsp;Combo For Family Meal(Non-Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/dalmakhani.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/lachhaparatha.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/coke.jpg" alt="food menu">

                                        <span class="ribbon ribbon__five mr-2">Rs 375</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                        <br> <br><br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Butter Chicken</h4>
                                                    <span class="badge badge-primary">Half</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br> 
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Mutton Rogan Josh</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                                <span>Including Vegetable Salad</span>
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Dal Makhani</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                                
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Jeera Rice</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Laccha Paratha</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Butter Naan</h4>
                                                    <span class="badge badge-primary">1 Piece</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Coke Can</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                              
                                            </li> <br> 

                                          
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card border-0 overflow-hidden">
                            <div class="row no-gutters">
                                <div class="col-lg-7">
                                    <div class="image-wrapper">
                                    <br> <br>
                                     <center>   <h3>&nbsp;&nbsp;Combo For Family Meal(Veg)</h3><br></center>
                                        <img class="img-fluid" src="../../assets/images/menu/paneerbuttermasala.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/vegjalfrezi.jpg" alt="food menu">
                                        <img class="img-fluid" src="../../assets/images/menu/butternaan.jpg" alt="food menu">
                                       
                                        <span class="ribbon ribbon__five mr-2">Rs 345</span>
                                    </div>
                                </div>
                                <div class="col-lg-5 pl-0">
                                    <div class="card-body d-flex align-items-center h-100">
                                        <ul class="w-100 m-0">
                                        <br> <br><br> <br><br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Dal Makhani</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Paneer Butter Masala</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                              
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Veg Jalfrezi Rice</h4>
                                                    <span class="badge badge-primary">Quarter</span>
                                                </div>
                                              
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Laccha Paratha</h4>
                                                    <span class="badge badge-primary">2 Pieces</span>
                                                </div>
                                               
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Butter Naan</h4>
                                                    <span class="badge badge-primary">1 Piece</span>
                                                </div>
                                             
                                            </li> <br> <br> <br> <br>
                                            <li class="mb-4">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="d-inline-block">Coke</h4>
                                                    <span class="badge badge-primary">250 ml</span>
                                                </div>
                                             
                                            </li> <br> <br> <br> <br> <br> <br> <br>
                                          
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
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