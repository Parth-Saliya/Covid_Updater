<?php include_once('header.html') ?>
<div class="card-header bedheader">
    <i class="fas fa-table mr-1"></i>
    <h3>COvid -19 Ventilators</h3>
</div>
<div>
    <h3 class="TableHeader">Covid Ventilators Availability</h3>
    <br>
    <div class="row">
        <div class = "availability" ><h5>&nbsp Availability &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: lightgreen;">&nbsp More than 15 Ventilators &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFFF99;">&nbsp Less than 15 Ventilators &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFB6C1;">&nbsp No Ventilators &nbsp</h5></div>
    </div>
</div>
<div class="card-body bedTable">
    <div class="table-responsive">
        <table class="table     table1 table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Hospital<i class="fa fa-sort"></i></th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Total Ventilators<i class="fa fa-sort"></i></th>
                    <th>Occupied Ventilators<i class="fa fa-sort"></i></th>
                    <th>Vacant Ventilators<i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Hospital</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Total Ventilators</th>
                    <th>Occupied Ventilators</th>
                    <th>Vacant Ventilators</th>
                </tr>
            </tfoot>
            <tbody>
            <?php 
        include('connection.php'); 

        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 
        $sqlQuery1= "select * from hospital";
        $result1=mysqli_query($db,$sqlQuery1); 
       
        while( $row1 = mysqli_fetch_array($result1))
        {
        $sqlQuery= "select CurrOccVent from hospdata where hid = '".$row1['hid']."' order by entrydate DESC";
            $result=mysqli_query($db,$sqlQuery);
            $row = mysqli_fetch_array($result);
            $vecvent=$row1['TotVent'] - $row['CurrOccVent'];
            echo '<tr>';
            echo '<td>'.$row1['HospName'].'</td>'; 
            echo '<td>'.$row1['Address'].'</td>';
            echo '<td>'.$row1['phone'].'</td>';
            echo '<td>'.$row1['TotVent'].'</td>';
            echo '<td>'.$row['CurrOccVent'].'</td>';
            echo '<td>'.$vecvent.'</td>';
            echo '</tr>';
        }   
?>
            </tbody>
        </table>
    </div>
</div>
</div>