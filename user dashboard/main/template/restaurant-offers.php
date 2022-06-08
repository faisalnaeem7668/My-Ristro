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
       <!-- Date Dropper -->
    <link rel="stylesheet" href="../../assets/plugins/datedropper/datedropper.min.css">
    <!-- Timepicki -->
    <link rel="stylesheet" href="../../assets/plugins/timepicki/css/timepicki.css">
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
					<div class="col-12 ">
					<center>	<h2 class="page-heading"><h1>Offers On Your Favorite Dishes</h1></h2></center>
					
					</div>
                </div>

                
                <!-- Ticker -->
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="content-heading"><h2><i>Dishes Adding Up Soon</i></h2></h3>
                                <br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="crypto-ticker card-body px-0">
                                <ul id="webticker-dark-icons">
                                    <li data-update="item1">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/badamkulfi.webp" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Badam Kulfi</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>99</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item2">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/hakkanoodles.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Hakka Noodles</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>129</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item3">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/jalebi.png" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Jalebi</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>169/kg</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item4">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/rosekulfi.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Strawberry Rose Kulfi</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>120</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item5">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/chickenroll.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Chicken Small Roll</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>40</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item6">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/spaghetti.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Spaghetti</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>140(Full)</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item7">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/tandoori momos.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Tandoori Momos</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>80(Full)</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item8">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/bottleguardsoup.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Bottle Gourd Soup</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>99</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-update="item9">
                                        <div class="card horizontal-card__menu mb-0 horizontal">
                                            <span class="ribbon ribbon__one vertical-card__menu--status">Coming Soon<em class="ribbon-curve"></em></span>
                                            <div class="horizontal-card__menu--image">
                                                <img src="../../assets/images/menu/springroll.jpg" alt="menu">
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="horizontal-card__menu--title">Spicy Spring Rolls</h4>
                                                    
                                                </div>
                                                <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h4 class="horizontal-card__menu--price">Rs.<span>120(Full)</span></h4>
                                                   
                                                </div>
                                                <div class="horizontal-card__menu--footer d-flex justify-content-between align-items-center">
                                                    <div class="vertical-card__menu--location">
                                                        <div class="d-block">
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            &nbsp;&nbsp;&nbsp;
                                                        </div>
                                                        <div>
                                                            <span class="icon">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                            <span class="icon ml-2">&nbsp;&nbsp;</i></span>
                                                            <span>&nbsp;</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
     
                <h2><i>Recently Added</i></h2>

                <br>
                <div class="row">
                    

                   

                    <div class="col-xl-3 col-xxl-4 col-md-4 col-sm-6">
                        <div class="card">
                        <span class="ribbon ribbon__one vertical-card__menu--status closed">Now Available<em class="ribbon-curve"></em></span>
                            <div class="image-wrapper">
                                <img class="img-fluid" src="../../assets/images/menu/granny-menu7.jpg" alt="food menu">
                            </div>
                            <div class="card-body justify-content-between d-flex">
                                    <h4 class="d-inline-block"><b>Organic Salad</b></h4>
                                <h4 class="d-inline-block">
                                    <span class="text-primary">Rs 199</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-md-4 col-sm-6">
                        <div class="card">
                        <span class="ribbon ribbon__one vertical-card__menu--status closed">Now Available<em class="ribbon-curve"></em></span>
                            <div class="image-wrapper">
                                <img class="img-fluid" src="../../assets/images/menu/russiansalad.jpg" alt="food menu">
                            </div>
                            <div class="card-body justify-content-between d-flex">
                                    <h4 class="d-inline-block"><b>Russian Salad</b></h4>
                                <h4 class="d-inline-block">
                                    <span class="text-primary">Rs 229</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-md-4 col-sm-6">
                        <div class="card">
                        <span class="ribbon ribbon__one vertical-card__menu--status closed">Now Available<em class="ribbon-curve"></em></span>
                            <div class="image-wrapper">
                                <img class="img-fluid" src="../../assets/images/menu/granny-menu11.jpg" alt="food menu">
                            </div>
                            <div class="card-body justify-content-between d-flex">
                                    <h4 class="d-inline-block"><b>Fried Egg Sandwich</b></h4>
                                <h4 class="d-inline-block">
                                    <span class="text-primary">Rs 79</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-4 col-md-4 col-sm-6">
                        <div class="card">
                        <span class="ribbon ribbon__one vertical-card__menu--status closed">Now Available<em class="ribbon-curve"></em></span>
                            <div class="image-wrapper">
                                <img class="img-fluid" src="../../assets/images/menu/granny-menu14.jpg" alt="food menu">
                            </div>
                            <div class="card-body justify-content-between d-flex">
                                    <h4 class="d-inline-block"><b>Italian Pizza</b></h4>
                                <h4 class="d-inline-block">
                                    <span class="text-primary">Rs 389</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <h2><i>Discount Deals</i></h2>
                <br>
                <div class="row">
                
					<div class="col-xl-3 col-sm-6 col-xxl-6">
                        <div class="card vertical-card__menu">
                            <span class="ribbon ribbon__three vertical-card__menu--status closed">20% Off<em class="ribbon-curve"></em></span>
                            <div class="card-header p-0">
                                <div class="vertical-card__menu--image">
                                    <img src="../../assets/images/menu/chatbhelpuri.jpg" alt="Menu">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="vertical-card__menu--desc p-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="vertical-card__menu--title">Chat Bhelpuri</h4>
                                        <br><br>
                                        <div class="vertical-card__menu--fav">
                                           
                                        </div>
                                    </div>
                                   
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h2 class="vertical-card__menu--price">Rs <span><strike>100&nbsp;</strike>80</span></h2>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
					<div class="col-xl-3 col-sm-6 col-xxl-6">
                        <div class="card vertical-card__menu">
                            <span class="ribbon ribbon__three vertical-card__menu--status closed">30% Off<em class="ribbon-curve"></em></span>
                            <div class="card-header p-0">
                                <div class="vertical-card__menu--image">
                                <img src="../../assets/images/menu/granny-menu10.jpg" alt="Menu">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="vertical-card__menu--desc p-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="vertical-card__menu--title">French Crostini</h4>
                                        <br><br>
                                        <div class="vertical-card__menu--fav">
                                           
                                        </div>
                                    </div>
                                   
                                    <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="vertical-card__menu--price">Rs <span><strike>120&nbsp;</strike>90</span></h2>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
					<div class="col-xl-3 col-sm-6 col-xxl-6">
                        <div class="card vertical-card__menu">
                            <span class="ribbon ribbon__three vertical-card__menu--status closed">40% Off<em class="ribbon-curve"></em></span>
                            <div class="card-header p-0">
                                <div class="vertical-card__menu--image">
                                    <img src="../../assets/images/menu/muttontikka.jpg" alt="Menu">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="vertical-card__menu--desc p-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="vertical-card__menu--title">Mutton Tikka</h4>
                                        <br><br>
                                        <div class="vertical-card__menu--fav">
                                           
                                        </div>
                                    </div>
                                   
                                    <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="vertical-card__menu--price">Rs <span><strike>150&nbsp;</strike>90</span></h2>
                                        
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
					<div class="col-xl-3 col-sm-6 col-xxl-6">
                        <div class="card vertical-card__menu">
                            <span class="ribbon ribbon__three vertical-card__menu--status closed">25% Off<em class="ribbon-curve"></em></span>
                            <div class="card-header p-0">
                                <div class="vertical-card__menu--image">
                                   
                                    <img src="../../assets/images/menu/chickenrice.jpeg" alt="Menu">
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="vertical-card__menu--desc p-3">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="vertical-card__menu--title">Chicken Rice</h4>
                                        <br>
                                        <div class="vertical-card__menu--fav">
                                            
                                        </div>
                                    </div>
                                  
                                    <div class="d-flex justify-content-between align-items-center">
                                    <h2 class="vertical-card__menu--price">Rs <span><strike>200&nbsp;</strike>150</span></h2>
                                        
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

     <!-- Ticker -->
    
    <script src="../../assets/plugins/common/common.min.js"></script>
    <script src="../js/custom.mini.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/quixnav.js"></script>
    <script src="../js/styleSwitcher.js"></script>






    <!-- Ticker -->
    <script src="../../assets/plugins/webticker/jquery.webticker.min.js"></script>
    <!-- Bootstrap notify -->
    <script src="../../assets/plugins/bootstrap4-notify/bootstrap-notify.min.js"></script>
    <!-- ClipboardJS -->
    <script src="../../assets/plugins/clipboard/clipboard.min.js"></script>
    <!-- Sweetalert -->
    <script src="../../assets/plugins/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- Nestable -->
    <script src="../../assets/plugins/nestable2/js/jquery.nestable.min.js"></script>
    <!-- BlockUI -->
    <script src="../../assets/plugins/block-ui/jquery.blockUI.js"></script>
    <!-- Pignose Calender -->
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    <script src="../../assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- Datamap -->
    <script src="../../assets/plugins/d3v3/index.js"></script>
    <script src="../../assets/plugins/topojson/topojson.min.js"></script>
    <script src="../../assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Vectormap -->
    <script src="../../assets/plugins/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="../../assets/plugins/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="../../assets/plugins/jqvmap/js/jquery.vmap.usa.js"></script>
    <!-- NoUI SLider -->
    <script src="../../assets/plugins/nouislider/nouislider.min.js"></script>
    <script src="../../assets/plugins/wnumb/wNumb.js"></script>
    <!-- Counter Up -->
    <script src="../../assets/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../../assets/plugins/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Bootstrap select -->
    <script src="../../assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    


    <!-- All init script -->
    <script src="../js/plugins-init/components-init.js"></script>

</body>


</html>