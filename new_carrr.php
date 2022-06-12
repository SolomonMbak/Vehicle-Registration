<?php

// session_start();
include 'widgets/classes/connection.php';
$msg_mail="";
$qe="";

if (isset($_POST["btn_add_car"])) {
  
  $qr = mysqli_query($conn,"SELECT vehiclePlateNumber,vehicleOwner FROM vehicles WHERE vehiclePlateNumber='".mres($conn,$_POST["vehiclePlateNumber"])."'");

  if (mysqli_num_rows($qr)==0) {
    
      $vehicleBrand = mres($conn, $_POST["vehicleBrand"]);
      $vehicleColor = mres($conn, $_POST["vehicleColor"]);
      $vehiclePlateNumber = mres($conn, $_POST["vehiclePlateNumber"]);
      $vehicleType = mres($conn, $_POST["vehicleType"]);
      $vehicleOwner = mres($conn, $_POST["vehicleOwner"]);
      $vehicleOwnerNumber = mres($conn, $_POST["vehicleOwnerNumber"]);
      $vehicleOwnerEmail = mres($conn, $_POST["vehicleOwnerEmail"]);
      $vehicleOwnerOffice = mres($conn, $_POST["vehicleOwnerOffice"]);
      $vehicleRecordBy = mres($conn, $_POST["vehicleRecordBy"]);
      $vehicleRecordDate = mres($conn, $_POST["vehicleRecordDate"]);


      $qe=mysqli_query($conn, "insert into vehicles values('','".$vehicleBrand."','".$vehicleColor."','".$vehiclePlateNumber."','".$vehicleType."','".$vehicleOwner."','".$vehicleOwnerNumber."','".$vehicleOwnerEmail."','".$vehicleOwnerOffice."','".$vehicleRecordBy."','".$vehicleRecordDate."')");
    
      $msg_mail='
      <div id="Login-alert" class="alert alert-success" col-sm-12">Vehicle added successfully</div>';
    
      
      }else{
        $msg_mail='
      <div id="Login-alert" class="alert alert-danger" col-sm-12">-- Vehicle not added successfully. --</div>';
      }  
    
  }else{
    $msg_mail='
    <div id="Login-alert" class="alert alert-warning" col-sm-12">-- Add a new Vehicle. --</div>';
    

      }
    
 

include 'widgets/header.php';

?>

   <br><br><br><br>

   <body class="form-control">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">ADD VEHICLE</div>
        <br>
        <p class="text-center"><mark> <strong style="color: blue"><u>PLEASE NOTE:</u></strong> Crosscheck information before submitting. YOU WILL NOT BE ALLOWED TO MODIFY THESE RECORDS!</p></mark>
        
        <div class="card-body">
        	<?php echo $msg_mail;  ?>

         
        <form class="form-control" id="signup_form" rol="form" method="post" action='<?php echo $_SERVER["PHP_SELF"]; ?>'>
           
        <div class="form-group">
              <div class="form-row">
                <div class="">
                  <div class="form-label-group">
                    <input type="text" id="vehicleBrand" name="vehicleBrand" class="form-control" placeholder="Vehicle Brand" required autofocus="autofocus">
                    <!-- <label for="vehicleBrand">Vehicle Brand</label> -->
                  </div>
                </div> <br>
                <div class="">
                  <div class="form-label-group">
                    <input type="text" id="vehicleColor" name="vehicleColor" class="form-control" placeholder="Vehicle Color" required autofocus="autofocus">
                    <!-- <label for="vehicleColor">Vehicle color</label> -->
                  </div>
                </div>
              </div>
        </div>

        <br>
    
        <div class="form-group">
              <div class="form-row">
                <div class="">
                <div class="form-label-group">
                    <input type="text" id="vehiclePlateNumber" name="vehiclePlateNumber" class="form-control" placeholder="Plate Number" required>
                    <!-- <label for="vehiclePlateNumber">Plate number</label> -->
                  </div>

                </div>
                <br>
                <div class="">
                <div class="form-label-group">
                    <select type="text" id="vehicleType" name="vehicleType" class="form-control" required>
                        <option value="">-- Vehicle Type --</option>
                        <option value="wagon">Wagon</option>
                        <option value="bus">Bus</option>
                        <option value="jip">Jip</option>
                        <option value="salon">Salon</option>
                  </select>
                  </div>  
                </div>
              </div>
        </div>

        <br>
          <div class="form-group">
              <div class="form-row">
                <div class="">
                  <div class="form-label-group">
                    <input type="text" id="vehicleOwner" name="vehicleOwner" class="form-control" placeholder="Vehicle Owner's Name" required autofocus="autofocus">
                    <!-- <label for="email">Vehicle Owners Name</label> -->
                  </div>
                </div>
                <br>
                <div class="">
                  <div class="form-label-group">
                    <input type="text" id="vehicleOwnerNumber" name="vehicleOwnerNumber" class="form-control" placeholder="Vehicle Owner's Number" required autofocus="autofocus">
                    <!-- <label for="vehicleOwnerNumber">vehicle Owner Number</label> -->
                  </div>
                </div>
              </div>
        </div>


        <br>

        <div class="form-group">
              <div class="form-row">
                <div class="">
                  <div class="form-label-group">
                    <input type="email" id="vehicleOwnerEmail" name="vehicleOwnerEmail" class="form-control" placeholder="Vehicle Owner Email" required autofocus="autofocus">
                    <!-- <label for="email">vehicle Owner Email</label> -->
                  </div>
                </div>
                <br>
                <div class="">
                  <div class="form-label-group">
                    <input type="text" id="vehicleOwnerOffice" name="vehicleOwnerOffice" class="form-control" placeholder="Vehicle Owner Office" required autofocus="autofocus">
                    <!-- <label for="Vehicle Owner Office">vehicle Owner Office</label> -->
                  </div>
                </div>
              </div>
        </div>

        <br>

    <div class="form-group">
      <div class="input-group">
        <input type="hidden" class="form-control" id="vehicleRecordBy" name="vehicleRecordBy" value="0" readonly="true">
        </div>
    </div>



    <div class="form-group">
      <div class="input-group">
        <input type="hidden" class="form-control" id="vehicleRecordDate" name="vehicleRecordDate" value="<?php echo date("Y-m-d"); ?>" readonly="true">
        </div>
    </div>


    <div class="form-group">
      <label class="checkbox-inline"><input type="checkbox" required="required"> I agree that I have crosschecked and certify that the information I have recorded are true to the best of my knowledge.</label>
      <br>
      </div>

    <div class="form-group">
            <input type="submit" id="btn_add_car" name="btn_add_car" class="btn btn-primary btn-block form-control" value="ADD VEHICLE">
        </div>
        <span id="msg_email"></span>
          <br />
          </form>
          <hr>
          <div class="text-center">
            <a class="d-block small mt-3" href="view_cars.php">View all cars</a>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>

<?php
include 'widgets/footer.php';
?>
      