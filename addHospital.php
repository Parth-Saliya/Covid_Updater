<?php include('connection.php');
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
<html>

<title>Add New Hospital</title>
<link href="css/styles.css" rel="stylesheet" />

 <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />


<body >
        <div > 


 <?php 
		$HospName=$_POST['HospName'];
		$Address=$_POST['Address'];
		$lat=$_POST['lat'];
		$lon=$_POST['lon'];
		$HosType=$_POST['HosType'];
		$TotBed=$_POST['TotBed'];
		$TotVent=$_POST['TotVent'];
		$phone=$_POST['phone'];
		$Entrydate= date("Y-m-d H:i:s");
		$l=strlen($phone);
		echo $lat;
		echo $lon;
		if($l<=15)
		{
		$sqlQuery="INSERT INTO hospital (HospName,Address,HosType,TotBed,TotVent,phone,lat,lon) VALUES ('$HospName' , '$Address' , '$HosType' , '$TotBed' , '$TotVent', '$phone', '$lat', '$lon')" ;
		$result=mysqli_query($db,$sqlQuery);  

		if($result)
			echo " <br/> The Hospital added successfully  !  ";
		else
			echo " <br/> The Hospital not added successfully  !  ";	
		
		$sq = "select hid from hospital where HospName ='".$HospName."'";
		$re = mysqli_query($db,$sq);
		$rw = mysqli_fetch_array($re);
		$hid=$rw['hid'];
			
		$sqlQuery1="INSERT INTO hospdata (Entrydate,hid,CurrOccBed,CurrOccVent) VALUES ('$Entrydate' ,'$hid' , '$TotBed' , '$TotVent' )" ;
		$result1=mysqli_query($db,$sqlQuery1); 
		if($result1)
			echo " </br> The Hospital data added successfully  !  ";
		else
			echo " <br/> The Hospital data not added successfully  !  ";
		}
		else
			echo "please enter correct phone number !";	    
			
		header("Location: addHospital1.php");
		//include('addHospital1.php');
       
		?>
		
 </div>
 </body>
 </html>