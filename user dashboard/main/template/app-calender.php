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
					<div class="col-12 ">
					<center>	<h2 class="page-heading"><h2>Event Calendar</h2></h2></center>
					
					</div>
                </div>
                
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-intro-title">Calendar</h4>

                                <div class="">
                                    <div id="external-events" class="my-3">
                                        <p>Drag and drop your event or click in the calendar</p>
                                        <div class="external-event text-dark" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
                                            <div class="external-event text-dark" data-class="bg-success"><i class="fa fa-move"></i>My Event</div>
                                            <div class="external-event text-dark" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
                                            <div class="external-event text-dark" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                                    </div>
                                    <!-- checkbox -->
                                    <div class="checkbox checkbox-event pt-3 pb-5">
                                        <input id="drop-remove" class="styled-checkbox" type="checkbox">
                                        <label class="text-dark ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                                    </div>
                                    <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                                        class="btn btn-primary btn-event w-100">
                                        <span class="align-middle"><i class="ti-plus"></i></span>
                                        Create New
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar" class="app-fullcalendar"></div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                        event</button>
                                        
                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                        data-dismiss="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add a category</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label">Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name"
                                                    type="text" name="category-name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Choose Category Color</label>
                                                <select class="form-control form-white"
                                                    data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                        data-dismiss="modal">Save</button>
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

    <script src="../../assets/plugins/jqueryui/js/jquery-ui.min.js"></script>
    <script src="../../assets/plugins/moment/moment.min.js"></script>
    
    <script src="../../assets/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="../js/plugins-init/fullcalendar-init.js"></script>
</body>


</html>