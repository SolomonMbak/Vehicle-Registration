<?php
include 'classes/connection.php';

include 'widgets/header.php';
?>


<?php

// Number of cars
$qrV = "SELECT * from vehicles";

if ($resultV = mysqli_query($conn, $qrV)) {

    // Return the number of rows in result set
    $vehicleCount = mysqli_num_rows( $resultV );    
 }

?>

<?php

// Number of car owners
$qrA = "SELECT * from master_admin_info";

if ($resultA = mysqli_query($conn, $qrA)) {

    // Return the number of rows in result set
    $adminCount = mysqli_num_rows( $resultA );
    
 }

?>


<?php

// Number of car owners
$qrU = "SELECT * from master_user_info";

if ($resultU = mysqli_query($conn, $qrU)) {

    // Return the number of rows in result set
    $userCount = mysqli_num_rows( $resultU );
    
 }

?>





<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

<?php

include 'widgets/sidebar.php';

?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php
include 'widgets/navbar.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Contact Admin</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

            
                       
                    </div>

                    <!-- Content Row -->

                   <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                          

                          

                        </div>

                
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

     

<?php
include 'widgets/footer.php';
?>