<?php
session_start();
include 'classes/connection.php';
include 'widgets/header.php';
?>

<?php

$cat_msg="";
if (isset($_GET["delete_id"])) {

$qry=mysqli_query($conn, "UPDATE `vehicles` SET `vehicleStatus` = 'Car Out' WHERE `vehicles`.`vehicleId` = 4;
 add_cat_id='".mres($conn,$_GET["delete_id"])."'");

if ($qry) {
  $cat_msg='
  <div id="Login-alert" class="alert alert-success" col-sm-12">Category Deleted Successfully</div>';

}else{
  $cat_msg='
  <div id="Login-alert" class="alert alert-danger" col-sm-12">Category Not deleted successfully</div>';
}
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
                        <h1 class="h3 mb-0 text-gray-800">Registered Vehicles</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Contact Admin</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

            <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>Vehicle Owner</th>
              <th>PlateNumber</th>
              <th>Vehicle Type</th>
              <th>Vehicle Brand</th>
              <th>Vehicle Color</th>
              <th>Registered By</th>
              <th>Status</th>
            </tr>
          </thead>

          <tbody>
            <?php
            if (isset($_POST["btn_search"])) {
            $qry = mysqli_query($conn,"select   vehicleId,vehiclePlateNumber,vehicleOwner,vehicleType,vehicleBrand,vehicleColor,userName,vehicleStatus from vehicles inner join master_user_info on vehicles.vehicleRecordBy = master_user_info.userId where vehiclePlateNumber OR vehicleOwner like '%".mres($conn,$_POST["text_search"])."%' order by   vehiclePlateNumber asc");

            }else{
              $qry = mysqli_query($conn,"select * from  vehicles inner join master_user_info
                on vehicles.vehicleRecordBy = master_user_info.userId order by userId asc");
            }

            while ($row=mysqli_fetch_array($qry,MYSQLI_ASSOC)) {
              echo '<tr>';
              echo '<td>'.$row["vehicleOwner"]."</td>
              <td>".$row["vehiclePlateNumber"]."</td>
              <td>".$row["vehicleType"]."</td>
              <td>".$row["vehicleBrand"]."</td>
              <td>".$row["vehicleColor"]."</td>
              <td>".$row["userName"]."</td>
              <td><a href='?update_id=".$row["vehicleId"]."' onclick=\"return confirm('Are you sure you want change the parking status?');\"'>".$row["vehicleStatus"]."</a> </td>";
              echo '</tr>';
            }
            ?>

          </tbody>
        </table>

                       
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