<?php include('displayhc.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Health Care</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php include_once('header.html') ?>
    
    <div class="row">
        <div class="container" id="covid19bedcard">
            <a href="BedsDetail.php"><h3 style="padding-left: 20px; color: blue;">Covid-19 Beds</h3></a>
            <br>
            <div class="row">
                <div class="card" id="totalBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text"><?php echo $Totbed; ?></p>
                    </div>
                </div>
                <div class="card" id="OccupiedBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Occupied</h5>
                        <p class="card-text"><?php echo $CurrOccBed; ?></p>
                    </div>
                </div>
                <div class="card" id="VacantBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Vacant</h5>
                        <p class="card-text"><?php echo $curvecbed; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="container" id="covid19Ventcard">
        <a href="VentilatorDetails.php"><h3 style="padding-left: 20px; color: blue;">Covid-19 Ventilators</h3></a>
            <br>
            <div class="row">
                <div class="card" id="totalBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text"><?php echo $Totvent; ?></p>
                    </div>
                </div>
                <div class="card" id="OccupiedBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Occupied</h5>
                        <p class="card-text"><?php echo $CurrOccVent; ?></p>
                    </div>
                </div>
                <div class="card" id="VacantBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Vacant</h5>
                        <p class="card-text"><?php echo $curvecvent; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>

</body>
</html>