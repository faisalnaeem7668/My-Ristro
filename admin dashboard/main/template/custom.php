
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- JS Grid -->
    <link rel="stylesheet" href="../../assets/plugins/jsgrid/css/jsgrid.min.css">
    <link rel="stylesheet" href="../../assets/plugins/jsgrid/css/jsgrid-theme.min.css">
    <!-- Footable -->
    <link rel="stylesheet" href="../../assets/plugins/footable/css/footable.bootstrap.min.css">
    <!-- Bootgrid -->
    <link rel="stylesheet" href="../../assets/plugins/jquery-bootgrid/dist/jquery.bootgrid.min.css">
    <!-- Datatable -->
    <link href="../../assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="tables.php">
                    <b class="logo-abbr">Back</b>
                    <span class="brand-title"><b>Admin Dashboard</b></span>
                </a>
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
                   
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="true">
                            <span class="nav-text">Users Reservation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="custom.php">Customization</a></li>
                            <li><a href="packages.php">Packages</a></li>
                         
                          
                           
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

           
           

            <div class="container-fluid">
                <div class="row justify-content-between mb-3">
				
                </div>
                <center>	<h2>Users Customization Table</h2></center>
                <br>
             
                    
                        <!-- /# card -->
                    </div>
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="table-responsive">

                                  <?php
                                  include "config.php";
                                  $sql="SELECT * FROM tablecustom ORDER BY id ASC";
                                  $result=mysqli_query($conn,$sql) or die("QUERY FAILED");
                                  if(mysqli_num_rows($result)>0)
                                  {
                                      ?>
                                
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Event</th>
                                                <th>No_Of_Peoples</th>
                                                <th>No_Of_Chairs</th>
                                                <th>Table_Size</th>
                                                <th>Table_Cover</th>
                                                <th>Table_Decoration</th>
                                                <th>Crockery</th>
                                                <th>Gender</th>
                                                <th>Language_Known</th>
                                                <th>Dress_Code</th>
                                                <th>No_Of_Waiters</th>
                                                <th>Themes</th>
                                                <th>Music</th>
                                                <th>Welcome_Hosts</th>
                                                <th>Welcome_Drinks</th>
                                                <th>No_Of_Hosts</th>
                                                <th>Welcome_Gifts</th>
                                                <th>Entrance_Decoration</th>
                                                <th>Breakfast_Special</th>
                                                <th>Lunch_Special</th>
                                                <th>Dinner_Special</th>
                                                <th>Drinks</th>
                                                <th>Dessert_Special</th>
                                                <th>Wine</th>
                                                <th>Non_Vegetarian</th>
                                                <th>Vegetarian</th>
                                                <th>Breakfast</th>
                                                <th>Lunch</th>
                                                <th>Snacks</th>
                                                <th>Dinner</th>
                                                <th>Desserts</th>
                                                <th>Beverages</th>
                                                <th>Soups</th>
                                                <th>Tea</th>
                                                <th>Cake</th>
                                                <th>Pizza</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Date_Of_Event</th>
                                                <th>Time_Of_Event</th> 
                                                <th>Special_Requests</th>
                                                <th>Delete</th>
                                                <th></th>

                                             </tr>
                                        </thead>   <tbody>
                                         
                                        <?php 
                                          while($row=mysqli_fetch_assoc($result))
                                        {  ?>
                                             <tr>
                                                <td class='id'><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['Event']; ?></td>
                                                <td><?php echo $row['No_Of_Peoples']; ?></td>
                                                <td><?php echo $row['No_Of_Chairs']; ?></td>
                                                <td><?php echo $row['Table_Size']; ?></td>
                                                <td><?php echo $row['Table_Cover_Colour']; ?></td>
                                                <td><?php echo $row['Table_Decoration']; ?></td>
                                                <td><?php echo $row['Crockery']; ?></td>
                                                <td><?php echo $row['Gender']; ?></td>
                                                <td><?php echo $row['Language_Known']; ?></td>
                                                <td><?php echo $row['Dress_Code']; ?></td>
                                                <td><?php echo $row['No_Of_Waiters']; ?></td>
                                                <td><?php echo $row['Themes']; ?></td>
                                                <td><?php echo $row['Music']; ?></td>
                                                <td><?php echo $row['Welcome_Hosts']; ?></td>
                                                <td><?php echo $row['Welcome_Drinks']; ?></td>
                                                <td><?php echo $row['No_Of_Host']; ?></td>
                                                <td><?php echo $row['Welcome_Gifts']; ?></td>
                                                <td><?php echo $row['Entr_Decoration']; ?></td>
                                                <td><?php echo $row['Breaksp']; ?></td>
                                                <td><?php echo $row['Lunchsp']; ?></td>
                                                <td><?php echo $row['Dinnersp']; ?></td>
                                                <td><?php echo $row['Drink']; ?></td>
                                                <td><?php echo $row['Dessertsp']; ?></td>
                                                <td><?php echo $row['Wine']; ?></td>
                                                <td><?php echo $row['Nonveg']; ?></td>
                                                <td><?php echo $row['Veg']; ?></td>
                                                <td><?php echo $row['Breakfast']; ?></td>
                                                <td><?php echo $row['Lunch']; ?></td>
                                                <td><?php echo $row['Snack']; ?></td>
                                                <td><?php echo $row['Dinner']; ?></td>
                                                <td><?php echo $row['Dessert']; ?></td>
                                                <td><?php echo $row['Beverage']; ?></td>
                                                <td><?php echo $row['Soup']; ?></td>
                                                <td><?php echo $row['Tea']; ?></td>
                                                <td><?php echo $row['Cake']; ?></td>
                                                <td><?php echo $row['Pizza']; ?></td>
                                                <td><?php echo $row['Address']; ?></td>
                                                <td><?php echo $row['Contact']; ?></td>
                                                <td><?php echo $row['Email']; ?></td>
                                                <td><?php echo $row['Date']; ?></td>
                                                <td><?php echo $row['Time']; ?></td>
                                                <td><?php echo $row['Spl_Request']; ?></td>
                                        <td class='delete'><a href='deletecustom.php?id=<?php echo $row["id"]; ?>'><i class='fa fa-trash-o'></i></a></td> 
                                            </tr> 
                                          
                                         <?php 
                                        }
                                        ?>

                                        </tbody>
                                        
                                    </table>
                                 <?php 
                                  }
                                  ?>

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
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/quixnav.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <!-- JS Grid -->
    <script src="../../assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="../../assets/plugins/jsgrid/js/jsgrid.min.js"></script>
    <!-- Footable -->
    <script src="../../assets/plugins/footable/js/footable.min.js"></script>
    <!-- Bootgrid -->
    <script src="../../assets/plugins/jquery-bootgrid/dist/jquery.bootgrid.min.js"></script>
    <!-- Datatable -->
    <script src="../../assets/plugins/datatables/js/jquery.dataTables.min.js"></script>


    <!-- JS Grid Init -->
    <script src="../js/plugins-init/jsgrid-init.js"></script>
    <script src="../js/plugins-init/footable-init.js"></script>
    <script src="../js/plugins-init/jquery.bootgrid-init.js"></script>
    <script src="../js/plugins-init/datatables.init.js"></script>



</body>


</html>