
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
                <img src="newlogos.png" height="80px" width="240px">
                </div>
                <div class="header-right">

                <button class="btn btn-danger" type="button"><a href="logout.php" style='color:white';><b> Logout </b></a></button><br>
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
                <center>	<h2>Users Package Booking Table</h2></center>
                <br>
             
                    
                        <!-- /# card -->
                    </div>
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="table-responsive">

                                  <?php
                                  include "config.php";
                                  $sql="SELECT * FROM packages ORDER BY id ASC";
                                  $result=mysqli_query($conn,$sql) or die("QUERY FAILED");
                                  if(mysqli_num_rows($result)>0)
                                  {
                                      ?>
                                  



                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Serial_No</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                                <th>Email</th>
                                                <th>Selected_Package</th>
                                                <th>No_Of_People</th>
                                                <th>Date_Of_Event</th>
                                                <th>Time_Of_Event</th>
                                                <th>Special_Requests</th>
                                                <th>Delete</th>
                                                <th></th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         
                                        <?php 

                                        while($row=mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                           

                                            <tr>
                                                <td class='id'><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['Address']; ?></td>
                                                <td><?php echo $row['Contact']; ?></td>
                                                <td><?php echo $row['Email']; ?></td>
                                                <td><?php echo $row['Packages']; ?></td>
                                                <td><?php echo $row['Peoples']; ?></td>
                                                <td><?php echo $row['Date']; ?></td>
                                                <td><?php echo $row['Time']; ?></td>
                                                <td><?php echo $row['Spl_Request']; ?></td>
                                                <td class='delete'><a href='deletepackages.php?id=<?php echo $row["id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
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