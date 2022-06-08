
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
					
                </div>
                <div class="row">
                    <div class="col-xxl-12 col-xl-12">





                    <div class="heading-section ftco-animate mb-5 text-center">
                        
                      <h2 class="mb-4">Table Customisation</h2>
                    </div>
                    <form action="table.php" method="post">
                        <div class="row">
                          
                          
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Event</b></label>
                             <div class="select-wrap one-third">
                                <div class="icon"></div>
                                <select name="Event" id="" class="form-control">
                                  
                                  <option value="Birthday Party">Birthday Party</option>
                                  <option value="Business Meetings">Business Meetings</option>
                                  <option value="Cocktail Party">Cocktail Party</option>
                                  <option value="Academy Awards Party">Academy Awards Party</option>
                                  <option value="Farewell Party">Farewell Party</option>
                                  <option value="Tea Party">Tea Party</option>
                                  <option value="Wedding Reception Party">Wedding Reception Party</option>
                                  <option value="Get Together">Get Together</option>
                                  <option value="Kitty Party">Kitty Party</option>
                                   
                                </select>
                              </div>
                            </div>
                                </div>
                                
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Number Of Peoples</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="Peoples" class="form-control">
                                 
                                  <option value="10">10</option>
                                  <option value="15">15</option>
                                  <option value="20">20</option>
                                  <option value="25">25</option>
                                  <option value="30">30</option>
                                  <option value="35">35</option>
                                  <option value="40">40</option>
                                  <option value="45">45</option>
                                      <option value="50">50</option>
                                      <option value="60">60</option>
                                      <option value="70">70</option>
                                      <option value="80">80</option>
                                      <option value="90">90</option>
                                      <option value="100">100</option>
      
                                   
                                </select>
                              </div>
                            </div>
                          </div>
                         

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Number Of Chairs</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="Chairs" class="form-control">
                                  
                                  
                                      <option value="10">10</option>
                                      <option value="15">15</option>
                                      <option value="20">20</option>
                                      <option value="25">25</option>
                                      <option value="30">30</option>
                                      <option value="35">35</option>
                                      <option value="40">40</option>
                                      <option value="45">45</option>
                                      
                                      <option value="50">50</option>
                                      <option value="60">60</option>
                                      <option value="70">70</option>
                                      <option value="80">80</option>
                                      <option value="90">90</option>
                                      <option value="100">100</option>
      
                                   
                                </select>
                              </div>
                            </div>
                          </div>
                       
                              <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Table Size</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="Size" id="" class="form-control">
                                  
                                  <option value="2 ft">2 feet</option>
                                  
                                  <option value="4 ft">4 feet</option>
                                 
                                      <option value="6 ft">6 feet</option>
                                     
                                      <option value="8 ft">8 feet</option>
                                     
                                      <option value="10 ft">10 feet</option>
                                      
                                </select>
                              </div>
                            </div>
                          </div>
                    

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Table Cover Colour</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="Colour" id="" class="form-control">
                                    <option value="White">White</option>
                                  <option value="Violet">Violet</option>
                                  <option value="Black">Black</option>
                                  <option value="Blue">Blue</option>
                                  <option value="Green">Green</option>
                                      <option value="Yellow">Yellow</option>
                                      <option value="Orange">Orange</option>
                                      <option value="Red">Red</option>
                                      <option value="Pink">Pink</option>
                                      
                                      
                                </select>
                              </div>
                            </div>
                          </div>
                         
                               <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Table Decoration</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="Decoration" id="" class="form-control">
                                    <option value="None">None</option>
                                  <option value="Flowers">Flowers</option>
                                  <option value="Balloons">Balloons</option>
                                  <option value="Candles">Candles</option>
                                  
                                      
                                </select>
                              </div>
                            </div>
                          </div>
                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Crockery</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="Crockery" id="" class="form-control">
                                    <option value="Bone China">Bone China</option>
                                  <option value="Ceramic">Ceramic</option>
                                  <option value="Melamine">Melamine</option>
                                  <option value="Glass">Glass</option>
                                  <option value="Earthenware">Earthenware</option>
                                  <option value="Stainless Steel">Stainless Steel</option>
                                  <option value="Disposable">Disposable</option>
                                  
                                      
                                </select>
                              </div>
                            </div>
                          </div>

                              
                         

                           
      
      
      
      
      
                          <div class="col-md-12 mt-3">
                           
                          </div>
                        </div>
                     
</div>


                      <div class="col-xxl-12 col-xl-12">





<div class="heading-section ftco-animate mb-5 text-center">
    
  <h2 class="mb-4">Waiter Customisation</h2>
</div>

    <div class="row">
      
      
         <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Gender</b></label>
         <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="Gender" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Both in equal ratio">Both in equal ratio</option>
              
               
            </select>
          </div>
        </div>

        <br><br>
            </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Language Known</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="Language" class="form-control">
              <option value="Hindi">Hindi</option>
              <option value="English">English</option>
              <option value="English & Hindi Both">English & Hindi Both</option>
              <option value="Bengali">Bengali</option>
              <option value="Gujrati">Gujrati</option>
                  <option value="Punjabi">Punjabi</option>
                  <option value="Tamil">Tamil</option>
                  <option value="Urdu">Urdu</option>
                 

               
            </select>
          </div>
        </div>
      </div>
           <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Dress Code</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="Dress" id="" class="form-control">
              <option value="Regular">Regular</option>
              <option value="Properly Suited">Properly Suited</option>
              <option value="Gujrati Attire">Gujrati Attire</option>
              <option value="Punjabi Attire">Punjabi Attire</option>
              <option value="South Indian Attire">South Indian Attire</option>
                  <option value="Bengali Attire">Bengali Attire</option>
                  
               
            </select>
          </div>
        </div>
      </div>
      


      <div class="col-md-6">
          <div class="form-group">
            <label for=""><b>Number Of Waiters</b></label>
            <div class="select-wrap one-third">
              <div class="icon"></span></div>
              <select name="waiternum" id="" class="form-control">
                <option value="4">4</option>
                <option value="6">6</option>
                <option value="8">8</option>
                <option value="10">10</option>
                <option value="12">12</option>
               
                   
                    
                 
              </select>
            </div>
          </div>
        </div>
         







      <div class="col-md-12 mt-3">
        
      </div>
    </div>
 </div>


  <div class="col-xxl-12 col-xl-12">





                    <div class="heading-section ftco-animate mb-5 text-center">
                       
                      <h2 class="mb-4">Theme Customisation</h2>
                    </div>
                    
                        <div class="row">
                          
                          
                             <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Themes</b></label>
                             <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="theme" class="form-control">
                                  <option value="None">None</option>
                                  <option value="Lights,Camera,Action(Bollywood)">Lights,Camera,Action(Bollywood)</option>
                                  <option value="Back To School">Back To School</option>
                                  <option value="Black & White">Black & White</option>
                                  <option value="Carnival">Carnival</option>
                                  <option value="Disneyland">Disneyland</option>
                                  <option value="Retro">Retro</option>
                                  <option value="Horror">Horror</option>
                                  <option value="Masquerade">Masquerade</option>
                                  <option value="According To Event">According To Event</option>

                                  
                                   
                                </select>
                              </div>
                            </div>
                                </div>

                                
                            <br><br>
                            
                                <br><br>
                                <br><br>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for=""><b>Music</b></label>
                              <div class="select-wrap one-third">
                                <div class="icon"></span></div>
                                <select name="music" class="form-control">
                                  <option value="None">None</option>
                                  <option value="Party Music">Party Music</option>
                                  <option value="Bollywood Evergreen">Bollywood Evergreen</option>
                                  <option value="Folk">Folk</option>
                                  <option value="Instrumental">Instrumental</option>
                                  <option value="Rhymes">Rhymes</option>
                                  <option value="According To Event">According To Event</option>
                                      
                                     
      
                                   
                                </select>
                              </div>
                            </div>
                          </div>

                          
                          <br><br>
                          <br><br>
                          <br><br>
                              
      
      
      
                          <div class="col-md-12 mt-3">
                            
                          </div>
                        </div>
                     
</div>
<div class="col-xxl-12 col-xl-12">





<div class="heading-section ftco-animate mb-5 text-center">
   
  <h2 class="mb-4">Entrance Customisation</h2>
</div>
<form action="entrance.php" method="post">
    <div class="row">
      
      
         <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Welcome Hosts</b></label>
         <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="welhost" class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Both in equal ratio">Both in equal ratio</option>
              
               
            </select>
          </div>
        </div>
            </div>

            
        <br><br>
        
            <br><br>
            <br><br>
      <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Welcome Drinks</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="drink" class="form-control">
                <option value="None">None</option>
                <option value="Mocktail">Mocktail</option>
                <option value="Lemonade">Lemonade</option>
                <option value="Flavoured Milk">Flavoured Milk</option>
                <option value="Coldrink">Coldrink</option>    
                <option value="Cocktail">Cocktail</option> 
             
             
              

               
            </select>
          </div>
        </div>
      </div>

      
      <br><br>
      <br><br>
      <br><br>
           <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>No Of Hosts</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="hostno" class="form-control">
              <option value="2">2</option>
              <option value="4">4</option>
              <option value="6">6</option>
              
                  
               
            </select>
          </div>
        </div>
      </div>
      

      <br><br>
      <br><br>
      <br><br>

      <div class="col-md-6">
          <div class="form-group">
            <label for=""><b>Welcome Gifts</b></label>
            <div class="select-wrap one-third">
              <div class="icon"></span></div>
              <select name="gift" class="form-control">
                <option value="None">None</option>
                <option value="Flower Sticks">Flower Sticks</option>
                <option value="Welcome Cards">Welcome Cards</option>
                
                 
              </select>
            </div>
          </div>
        </div>
         
        <br><br>
        <br><br>
        <br><br>


        <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Entrance Decoration</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="decor" class="form-control">
                    <option value="None">None</option>
                  <option value="Baloons">Baloons</option>
                  <option value="Flowers">Flowers</option>
                  <option value="Lighting">Lighting</option>

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>







          



          



      <div class="col-md-12 mt-3">
       
      </div>
    </div>
 </div>

  <div class="col-xxl-12 col-xl-12">





<div class="heading-section ftco-animate mb-5 text-center">
   
  <h2 class="mb-4">Full Food Customisation</h2>
</div>

    <div class="row">
      
      
         <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Breakfast Special</b></label>
         <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="breaksp" class="form-control">
            <option value="None">None</option>
              <option value="Breakfast Skewers">Breakfast Skewers</option>
              <option value="Biscotti">Biscotti</option>
              <option value="Rogan Josh With Naan">Rogan Josh With Naan</option>
              <option value="Migas">Migas</option>
              <option value="Chilaquiles">Chilaquiles</option>
              <option value="Crispy Calamari Rings">Crispy Calamari Rings</option>
              <option value="Prawn Pie">Prawn Pie</option>
              
              
               
            </select>
          </div>
        </div>
            </div>

            
        <br><br>
        
            <br><br>
            <br><br>
      <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Lunch Special</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="lunchsp" class="form-control">
                <option value="None">None</option>
                <option value="Panzella">Panzella</option>
                <option value="Pasta Carbonara">Pasta Carbonara</option>
                <option value="Tandoori Chicken">Tandoori Chicken</option>
                <option value="Capsicum Rice">Capsicum Rice</option>    
                <option value="Huevo Rancheros">Huevo Rancheros</option> 
                <option value="Chicken Enchiladas">Chicken Enchiladas</option> 
                <option value="Eggy Bread Bit">Eggy Bread Bit</option> 
                <option value="Paneer Steak">Paneer Steak</option> 
             
             
              

               
            </select>
          </div>
        </div>
      </div>

      
      <br><br>
      <br><br>
      <br><br>
           <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Dinner Special</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <select name="dinnersp" class="form-control">
            <option value="None">None</option>
              <option value="Lasagna">Lasagna</option>
              <option value="Dal Batti Churma">Dal Batti Churma</option>
              <option value="Chole Bhature">Chole Bhature</option>
              <option value="Tyler's Flan">Tyler's Flan</option>
              <option value="Bobby's Red Chile Short Rib Tacos">Bobby's Red Chile Short Rib Tacos</option>
              <option value="Chicken Cheese Salad">Chicken Cheese Salad</option>
              
              
                  
               
            </select>
          </div>
        </div>
      </div>
      

      <br><br>
      <br><br>
      <br><br>

      <div class="col-md-6">
          <div class="form-group">
            <label for=""><b>Drinks</b></label>
            <div class="select-wrap one-third">
              <div class="icon"></span></div>
              <select name="drink" class="form-control">
                <option value="None">None</option>
                <option value="Cynar">Cynar</option>
                <option value="Manhatten">Manhatten</option>
                <option value="Tequila">Tequila</option>
                <option value="Premium Tequila & Mezcal">Premium Tequila & Mezcal</option>
                <option value="D'Amicos">D'Amicos</option>
                <option value="Blue Lagoon Martini">Blue Lagoon Martini</option>
                
                 
              </select>
            </div>
          </div>
        </div>
         
        <br><br>
        <br><br>
        <br><br>


        <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Desserts Special</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="dessertsp" class="form-control">
                    <option value="None">None</option>
                  <option value="Panna Cotta">Panna Cotta</option>
                  <option value="Tiramisn">Tiramisn</option>
                  <option value="Double Chocolate Pie">Double Chocolate Pie</option>
                  <option value="Tamales Dulces">Tamales Dulces</option>
                  <option value="Banoffee Pie">Banoffee Pie</option>


                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Wines</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="wine" class="form-control">
                    <option value="None">None</option>
                  <option value="Prosecco">Prosecco</option>
                  <option value="Barbaresco">Barbaresco</option>
                  <option value="Sula Vineyards">Sula Vineyards</option>
                  <option value="Fratelli">Fratelli</option>
                  <option value="Ojas Negros">Ojas Negros</option>
                  <option value="Rosatus">Rosatus</option>
                  <option value="Chardonny">Chardonny</option>
                  <option value="Mulled">Mulled</option>

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>



          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Non-Veg Best Seller</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="nonveg" class="form-control">
                    <option value="None">None</option>
                  <option value="Slow Cooker Chicken Tikka">Slow Cooker Chicken Tikka</option>
                  <option value="Cashew Chicken">Cashew Chicken</option>
                  <option value="Prawn Biryani">Prawn Biryani</option>
                  <option value="Tandoori Salmon">Tandoori Salmon</option>
                  <option value="Beef Masala Curry">Beef Masala Curry</option>
                  <option value="Tandoori Chicken Naan Pizza">Tandoori Chicken Naan Pizza</option>
                 

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Veg Best Seller</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="veg" class="form-control">
                    <option value="None">None</option>
                  <option value="Palak Paneer Saag">Palak Paneer Saag</option>
                  <option value="Malai Kofta">Malai Kofta</option>
                  <option value="Punjabi Kadhai Pakoda">Punjabi Kadhai Pakoda</option>
                  <option value="Potato Curry">Potato Curry</option>
                  <option value="Paneer Jalfrezi">Paneer Jalfrezi</option>
                  <option value="Coconut Vegetarian Korma">Coconut Vegetarian Korma</option>
                  <option value="Crispy Indian Okra">Crispy Indian Okra</option>
                  <option value="Bombay Potato">Bombay Potato</option>
                  <option value="Curried Tomato Dip">Curried Tomato Dip</option>
                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Breakfast</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="break" class="form-control">
                    <option value="None">None</option>
                  <option value="Sambar">Sambar</option>
                  <option value="Masala Dosa">Masala Dosa</option>
                  <option value="Upma">Upma</option>
                  <option value="Rava Dosa">Rava Dosa</option>
                  <option value="Idli">Idli</option>
                  <option value="Thepla">Thepla</option>
                  <option value="Khaman Dhokla">Khaman Dhokla</option>
                  <option value="Besan Ka Cheela">Besan Ka Cheela</option>
                  <option value="Kanda Poha">Kanda Poha</option>
                  <option value="Sooji Dhokla">Sooji Dhokla</option>
                  <option value="Sabudana Khichdi">Sabudana Khichdi</option>
                  <option value="Poha Cutlet">Poha Cutlet</option>


                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Lunch</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="lunch" class="form-control">
                    <option value="None">None</option>
                  <option value="Vegetables Club Sandwich">Vegetables Club Sandwich</option>
                  <option value="Vegetables Biryani">Vegetables Biryani</option>
                  <option value="Fried Rice">Fried Rice</option>
                  <option value="Bhindi Do Pyaza">Bhindi Do Pyaza</option>
                  <option value="Achari Paneer">Achari Paneer</option>
                  <option value="Aloo Jeera">Aloo Jeera</option>
                  <option value="Bhindi Naintara">Bhindi Naintara</option>
                  <option value="Kala Chana Curry">Kala Chana Curry</option>
                  <option value="Achari Aloo">Achari Aloo</option>
                  <option value="Lauki Kofta Curry">Lauki Kofta Curry</option>
                  <option value="Soya Nugget Matar">Soya Nugget Matar</option>
                 
                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Snacks</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="snack" class="form-control">
                    <option value="None">None</option>
                  <option value="Cheese Balls">Cheese Balls</option>
                  <option value="Corn Chips With Tomato Salsa">Corn Chips With Tomato Salsa</option>
                  <option value="Tofu And Apple Sandwich">Tofu And Apple Sandwich</option>
                  <option value="Vegetables Submarine Sandwich">Vegetables Submarine Sandwich</option>
                  <option value="Mexican Wrap">Mexican Wrap</option>
                  <option value="Russian Sandwich">Russian Sandwich</option>
                  <option value="Samosa">Samosa</option>
                  <option value="Khandavi">Khandavi</option>
                  <option value="Chowmein">Chowmein</option>
                  <option value="Spring Rolls">Spring Rolls</option>
                  <option value="Golgappa">Golgappa</option>
                  <option value="Pav Bhaji">Pav Bhaji</option>
                  <option value="Chilli Baby Corn">Chilli Baby Corn</option>
                  

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Dinner</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="dinner" class="form-control">
                    <option value="None">None</option>
                  <option value="Shahi Paneer">Shahi Paneer</option>
                  <option value="Paneer Makhani">Paneer Makhani</option>
                  <option value="Handi Paneer">Handi Paneer</option>
                  <option value="Subz Haryali">Subz Haryali</option>
                  <option value="Subz Dewani Handi">Subz Dewani Handi</option>
                  <option value="Makai Matar Mushroom">Makai Matar Mushroom</option>
                  <option value="Paneer Lababdar">Paneer Lababdar</option>
                  <option value="Mango Rice">Mango Rice</option>
                  <option value="Nargisi Kofta">Nargisi Kofta</option>
                  <option value="Veg Korma">Veg Korma</option>



                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Desserts</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="dessert" class="form-control">
                    <option value="None">None</option>
                  <option value="Sheer Khurma">Sheer Khurma</option>
                  <option value="Rajbhoj">Rajbhoj</option>
                  <option value="Gulab Jamun">Gulab Jamun</option>
                  <option value="Gajar Ka Halwa">Gajar Ka Halwa</option>
                  <option value="Moong Dal Halwa">Moong Dal Halwa</option>
                  <option value="Shahi Piece">Shahi Piece</option>
                 

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>


          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Beverage</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="bev" class="form-control">
                    <option value="None">None</option>
                  <option value="Thandai">Thandai</option>
                  <option value="Mango Lassi">Mango Lassi</option>
                  <option value="Sweet Lassi">Sweet Lassi</option>
                  <option value="Mango Panna">Mango Panna</option>
                  <option value="Lemon Soda">Lemon Soda</option>
                  <option value="Sandali Sharbat">Sandali Sharbat</option>
                 

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>



          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Soups</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="soup" class="form-control">
                    <option value="None">None</option>
                  <option value="Tomato Soup">Tomato Soup</option>
                  <option value="Spinich Soup">Spinich Soup</option>
                  <option value="Rice Water Soup">Rice Water Soup</option>
                  <option value="Cream & Onion Soup">Cream & Onion Soup</option>
                  <option value="Carrot Soup">Carrot Soup</option>
                  <option value="Tomato Corn Soup">Tomato Corn Soup</option>
                 

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>



          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Tea & Coffee</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="tea" class="form-control">
                    <option value="None">None</option>
                  <option value="Regular Tea">Regular Tea</option>
                  <option value="Regular Coffee">Regular Coffee</option>
                  <option value="Black Tea">Black Tea</option>
                  <option value="Green Tea">Green Tea</option>
                  <option value="Black Coffee">Black Coffee</option>
                  <option value="Espresso">Espresso</option>
                  <option value="Americano">Americano</option>
                  <option value="Cold Coffee">Cold Coffee</option>
                  <option value="Cappuccino">Cappuccino</option>
                  <option value="Dalgona Coffee">Dalgona Coffee</option>
                 

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>




          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Cakes</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="cake" class="form-control">
                    <option value="None">None</option>
                  <option value="Chocolate 2 kg">Chocolate 2 kg</option>
                  <option value="Chocolate 4 kg">Chocolate 4 kg</option>
                  <option value="Vanilla 2 kg">Vanilla 2 kg</option>
                  <option value="Vanilla 4 kg">Vanilla 4 kg</option>
                  <option value="Red Velvet 2 kg">Red Velvet 2 kg</option>
                  <option value="Red Velvet 4 kg">Red Velvet 4 kg</option>
                  <option value="Pineapple 2 kg">Pineapple 2 kg</option>
                  <option value="Pineapple 4 kg">Pineapple 4 kg</option>
                  <option value="Strawberry 2 kg">Strawberry 2 kg</option>
                  <option value="Strawberry 4 kg">Strawberry 4 kg</option>
                 
                </select>
              </div>
            </div>
          </div>
           
                  
                   
              


          
        <br><br>
        <br><br>

          <br><br>



          <div class="col-md-6">
            <div class="form-group">
              <label for=""><b>Pizza</b></label>
              <div class="select-wrap one-third">
                <div class="icon"></span></div>
                <select name="pizza" class="form-control">
                    <option value="None">None</option>
                  <option value="Regular Tea">Regular Tomato Cheese</option>
                  <option value="Regular Coffee">Mushroom</option>
                  <option value="Black Tea">Extra Cheese</option>
                  <option value="Green Tea">Paneer Chilli</option>
                  
                 

                  
                   
                </select>
              </div>
            </div>
          </div>
           


          
        <br><br>
        <br><br>

          <br><br>



          



          



      <div class="col-md-12 mt-3">
        
      </div>
    </div>
  
</div>





<div class="col-xxl-12 col-xl-12">





<div class="heading-section ftco-animate mb-5 text-center">
   
  <h2 class="mb-4">Booking Details</h2>
</div>

    <div class="row">
      
      
        
           <div class="col-md-6">
        <div class="form-group">
          <label for=""><b>Alternate Contact</b></label>
          <div class="select-wrap one-third">
            <div class="icon"></span></div>
            <input type="text" name="contact" Placeholder="Enter Alternate Contact Number,If You Have" class="form-control" autocomplete="off" maxlength="10" minlength="10">
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
              <input type="email" name="email" Placeholder="Enter Your Email" class="form-control" autocomplete="off" required>
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
                    <option value="8:00AM-11:00AM">8:00 AM-11:00 AM</option>
                  <option value="12:00PM-3:00PM">12:00 PM-3:00 PM</option>
                  <option value="4:00PM-7:00PM">4:00 PM-7:00 PM</option>
                  <option value="8:00PM-11:00PM">8:00 PM-11:00 PM</option>
                  
                  
                   
                </select>
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
       <center><input type="submit" value="Confirm" name="submit" class="btn btn-primary py-3 px-5"></center>
        </div>
      </div>
    </div>
  </form>










<?php 
if(isset($_POST["submit"]))
{
$event=$_POST["Event"];
$peoples=$_POST["Peoples"];
$chairs=$_POST["Chairs"];
$size=$_POST["Size"];
$colour=$_POST["Colour"];
$decoration=$_POST["Decoration"];
$crockery=$_POST["Crockery"];

$gender=$_POST["Gender"];
$language=$_POST["Language"];
$dress=$_POST["Dress"];
$waiterno=$_POST["waiternum"];

$theme=$_POST["theme"];
$music=$_POST["music"];

$welhost=$_POST["welhost"];
$drinks=$_POST["drink"];
$hostnum=$_POST["hostno"];
$gifts=$_POST["gift"];
$decor=$_POST["decor"];

$breaksp=$_POST["breaksp"];
$lunchsp=$_POST["lunchsp"];
$dinnersp=$_POST["dinnersp"];
$drink=$_POST["drink"];
$dessertsp=$_POST["dessertsp"];
$wine=$_POST["wine"];
$nonveg=$_POST["nonveg"];
$veg=$_POST["veg"];
$break=$_POST["break"];
$lunch=$_POST["lunch"];
$snack=$_POST["snack"];
$dinner=$_POST["dinner"];
$dessert=$_POST["dessert"];
$bev=$_POST["bev"];
$soup=$_POST["soup"];
$tea=$_POST["tea"];
$cake=$_POST["cake"];
$pizza=$_POST["pizza"];

$add=$_POST["add"];
$contact=$_POST["contact"];
$email=$_POST["email"];
$date=$_POST["date"];
$time=$_POST["time"];
$ngo=$_POST["ngo"];
$msgs=$_POST["msgs"];


$host="localhost";
$username="root";
$password="";
$db="my_ristro";
$port="3306";

$con=mysqli_connect($host,$username,$password,$db,$port);
if($con==true)
{
  $sql="INSERT into tablecustom(Event,No_Of_Peoples,No_Of_Chairs,Table_Size,Table_Cover_Colour,Table_Decoration,

 Crockery,Gender,Language_Known,Dress_Code,No_Of_Waiters,Themes,Music,Welcome_Hosts,Welcome_Drinks,No_Of_Host,

  Welcome_Gifts,Entr_Decoration,Breaksp,Lunchsp,Dinnersp,Drink,Dessertsp,Wine,Nonveg,Veg,Breakfast,Lunch,Snack,
  
  Dinner,Dessert,Beverage,Soup,Tea,Address,Contact,Email,Date,Time,Spl_Request,Cake,Pizza,Ngo)

  values('$event','$peoples','$chairs','$size','$colour','$decoration','$crockery','$gender','$language',

'$dress','$waiterno','$theme','$music','$welhost','$drinks','$hostnum','$gifts','$decor','$breaksp','$lunchsp',

 '$dinnersp','$drink','$dessertsp','$wine','$nonveg','$veg','$break','$lunch','$snack','$dinner','$dessert','$bev',
   
'$soup','$tea','$add','$contact','$email','$date','$time','$msgs','$cake','$pizza','$ngo')";



if(mysqli_query($con,$sql))
{
    
    echo "<center><br><h5><b style='color:blue'>SUCCESSFULLY UPLOADED...THANK YOU!</b></h5></center>";   

}
else
{
    print mysqli_error($con);

}
}}
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
        <div class="sidebar-right">
            <a class="sidebar-right-trigger gradient-5-x" href="javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <h4>Pick your style</h4>
                    <div>
                        <p>Background</p>
                        <select class="form-control" name="theme_version" id="theme_version">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div>
                        <p>Layout</p>
                        <select class="form-control" name="theme_layout" id="theme_layout">
                            <option value="vertical">Vertical</option>
                            <option value="horizontal">Horizontal</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <select class="form-control" name="sidebar_style" id="sidebar_style">
                            <option value="full">Full</option>
                            <option value="mini">Mini</option>
                            <option value="compact">Compact</option>
                            <option value="overlay">Overlay</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar position</p>
                        <select class="form-control" name="sidebar_position" id="sidebar_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Header position</p>
                        <select class="form-control" name="header_position" id="header_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Container</p>
                        <select class="form-control" name="container_layout" id="container_layout">
                            <option value="wide">Wide</option>
                            <option value="boxed">Boxed</option>
                            <option value="wide-boxed">Wide Boxed</option>
                        </select>
                    </div>
                    <div>
                        <p>Direction</p>
                        <select class="form-control" name="theme_direction" id="theme_direction">
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                    <div>
                        <p>Navigation Header</p>
                        <div>
                            <span>
                                <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                <label for="nav_header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                <label for="nav_header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                <label for="nav_header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                <label for="nav_header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                <label for="nav_header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                <label for="nav_header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                <label for="nav_header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                <label for="nav_header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                <label for="nav_header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                <label for="nav_header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Header</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                <label for="header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                <label for="header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                <label for="header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                <label for="header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                <label for="header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                <label for="header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                <label for="header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                <label for="header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                <label for="header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                <label for="header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <div>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                <label for="sidebar_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                <label for="sidebar_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                <label for="sidebar_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                <label for="sidebar_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                <label for="sidebar_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                <label for="sidebar_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                <label for="sidebar_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                <label for="sidebar_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                <label for="sidebar_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                <label for="sidebar_bg_10"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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


    <!-- Calender -->
    <script src="../../assets/plugins/jqueryui/js/jquery-ui.min.js"></script>
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <!-- Datedropper -->
    <script src="../../assets/plugins/datedropper/datedropper.min.js"></script>
    <!-- Timepicki -->
    <script src="../../assets/plugins/timepicki/js/timepicki.js"></script>



    <!-- Init files -->
    <script src="../js/plugins-init/fullcalendar-init.js"></script>
    <script src="../js/plugins-init/datedropper-init.js"></script>
    <script src="../js/plugins-init/timepicki-init.js"></script>
    

</body>


</html>