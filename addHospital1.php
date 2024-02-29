<?php
   if(!isset($_SESSION)) 
   { 
   session_start();
   if(!isset($_SESSION["uname"])&&!isset($_SESSION["password"]))
   {
     header("location: logout.php");
    die();
   }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Hospital</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
      
</head>

<body>
    <?php include('admin_header.php'); ?>
                    

    <h2><center>Add New Hospital</center></h2>
        <div class="container row">
            <!-- Default form contact -->
            <center>
            <form class="text-center border border-light p-5" action="addHospital.php" method="post">

                

                <!-- Name -->
                <input type="text" name="HospName" class="form-control mb-4" placeholder="Hospital Name">

                <!-- addrres -->
                <input type="text" name="Address" id= "addr" class="form-control mb-4" placeholder="Address" onblur="getLonLat()">
                    
                <input type="text" name="lat" id="lat" class="form-control mb-4" placeholder="Lattitude">
                <input type="text" name="lon" id="lon" class="form-control mb-4" placeholder="Longtitude">
                <!-- phone -->
                <input type="number" name="phone" class="form-control mb-4" placeholder="Contact No">             
                <!-- Subject -->
                
                <select class="browser-default custom-select mb-4" name=HosType>
                    <option value="" selected>Choose Hospital Type</option>
                    <option value="1" >Government</option>
                    <option value="2">Private</option>
                </select>
                <input type="number" name="TotBed" class="form-control mb-4" placeholder="Total Number of Covid Beds">
                <input type="number" name="TotVent" class="form-control mb-4" placeholder="Total Number of Ventilators">


            

                <!-- Send button -->
                <input class="btn btn-info btn-block" type="submit">

            </form>
            <!-- Default form contact -->
</center>
        
    </div>
</body>

</html>