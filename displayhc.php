<?php 
        include('connection.php');
        session_start();
        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 
        $CurrOccBed=0;
        $CurrOccVent=0;
        $sqlQuery1= "select * from hospital";
        $result1=mysqli_query($db,$sqlQuery1); 
        $Totbed=0;
        $Totvent=0;
        while( $row1 = mysqli_fetch_array($result1))
        {
            $Totbed += $row1['TotBed'];
            $Totvent += $row1['TotVent']; 
            $sqlQuery= "select CurrOccBed,CurrOccVent from hospdata where hid = '".$row1['hid']."' order by entrydate DESC";
            $result=mysqli_query($db,$sqlQuery);
            $row = mysqli_fetch_array($result);
            $CurrOccBed += $row['CurrOccBed'];
            $CurrOccVent += $row['CurrOccVent'];
        }
        $curvecbed= $Totbed-$CurrOccBed;
        $curvecvent= $Totvent-$CurrOccVent;


        $sqlQuery= "select * from casedetail";
        $result=mysqli_query($db,$sqlQuery); 
        $TodTotCon=0;
        $TodTotRec=0;
        $TodTotDea=0;
        while( $row = mysqli_fetch_array($result) )
		{
            $TodTotCon += $row['TodTotCon'];
            $TodTotRec += $row['TodTotRec'];
            $TodTotDea += $row['TodTotDea'];           
        }
        $TodTotAct= $TodTotCon-$TodTotRec-$TodTotDea;
        echo $TodTotCon;
        echo $TodTotRec;
        echo $TodTotDea;
        echo $TodTotAct;

        

?>