<!DOCTYPE html>
<html>
<?php include('displayhc.php'); ?>
<?php include_once('header.html') ?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<script>



</script>

<body onload="displayCoronaTable()">
    <div class=" cardrow">
        <div class="cardTitle">
            <h2>Delhi Covid-19</h2>
        </div>
        <div class="row">
            <div class="card" id="Totalcard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Confirmed</h5>
                    <div class="card-text row">
                        <div>
                            <h1 id="Dtotal_confirmed"></h1>
                        </div>
                        <div class="card-Today">
                        
                            <!-- <h5>+44</h5> -->
                        </div>
                    </div>

                </div>
            </div>
            <div class="card" id="Activecard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Active </h5>
                    <h1 class="card-text" id="Dtotal_active">
                        <script></script>
                    </h1>
                </div>
            </div>
            <div class="card" id="Recoverycard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Recovered</h5>
                    <h1 class="card-text" id="Dtotal_recovered"></h1>
                </div>
            </div>
            <div class="card" id="deathcard" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Death</h5>
                    <h1 class="card-text" id="Dtotal_death"></h1>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="container col-xl-6" id="covid19bedcard">
            <a href="BedsDetail.php">
                <h3 style="padding-left: 20px; color: blue;">Covid-19 Beds (Delhi)</h3>
            </a>
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

        <!-- <div class="row"> -->
        <div class="container col-xl-6" id="covid19Ventcard">
            <a href="VentilatorDetails.php">
                <h3 style="padding-left: 20px; color: blue;">Covid-19 Ventilators (Delhi)</h3>
            </a>
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
    </div>

    <div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Confirm Cases (Delhi)</div>
                    <div class="card-body"><canvas id="myChart2" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Recovery (Delhi)</div>
                    <div class="card-body"><canvas id="myChart3" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cardrow" id ="IndiCardTitle">
        <div class="cardTitle" >
            <h2>India Covid-19</h2>
        </div>
        <div class="row">
            <div class="card" id="Totalcard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Confirmed</h5>
                    <h1 class="card-text" id="total_confirmed"></h1>

                </div>
            </div>
            <div class="card" id="Activecard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Active </h5>
                    <h1 class="card-text" id="total_active"></h1>
                </div>
            </div>
            <div class="card" id="Recoverycard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Recovered</h5>
                    <h1 class="card-text" id="total_recovered"></h1>
                </div>
            </div>
            <div class="card" id="deathcard" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Death</h5>
                    <h1 class="card-text" id="total_death"></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="table-responsive">
            <div class="tableTitle">
                <h1 align="center">Covid-19 Indian Dashboard</h1>
            </div>
            <br />
            <div align="center">

            </div>
            <br />
            <div id="covid_table">
            </div>
            <canvas id="myChart1">
            </canvas>

        </div>
    </div>
</body>

</html>