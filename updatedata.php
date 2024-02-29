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
    <title>Update Health Care Data</title>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
<style>
    body {
  background-image: url('img/hospBg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>

<body>
<?php include('admin_header.php'); ?>
                    
    
<h2><center>Update Health Care Data</center></h2>
        <div class="container row">
            <!-- Default form contact -->
            <center>
       
		<form class="text-center border border-light p-5" action="HcData.php" method="post">
        <select class="browser-default custom-select mb-4" name="HospName">
        <option value="" selected>Choose Hospital </option>
        <?php 
        include('connection.php');
        session_start();
        $sqlQuery= "select HospName from hospital";
		$result=mysqli_query($db,$sqlQuery); 
        while( $row = mysqli_fetch_array($result) )
		{
            echo"<option value='".$row['HospName']."'>".$row['HospName']."</option>";           
        }
?>
        </select>
        <input type="number" name="CurrOccBed" class="form-control mb-4" placeholder="Current Occupied Covid Beds">
        <input type="number" name="CurrOccVent" class="form-control mb-4" placeholder="Current Occupied Ventilators">

        <!-- Send button -->
        <input class="btn btn-info btn-block" type="submit">
		
        </form>
           
         <!-- Default form contact -->
       
    </center>
    </div>
</body>

</html>