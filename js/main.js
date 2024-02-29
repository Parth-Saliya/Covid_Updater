// Mobile Navigation

//line

////TABLE SORTING

$(document).ready(function () {
    $('th').each(function (col) {
        $(this).hover(
            function () {
                $(this).addClass('focus');
            },
            function () {
                $(this).removeClass('focus');
            }
        );
        $(this).click(function () {
            if ($(this).is('.asc')) {
                $(this).removeClass('asc');
                $(this).addClass('desc selected');
                sortOrder = -1;
            } else {
                $(this).addClass('asc selected');
                $(this).removeClass('desc');
                sortOrder = 1;
            }
            $(this).siblings().removeClass('asc selected');
            $(this).siblings().removeClass('desc selected');
            var arrData = $('table').find('tbody >tr:has(td)').get();
            arrData.sort(function (a, b) {
                var val1 = $(a).children('td').eq(col).text().toUpperCase();
                var val2 = $(b).children('td').eq(col).text().toUpperCase();
                if ($.isNumeric(val1) && $.isNumeric(val2))
                    return sortOrder == 1 ? val1 - val2 : val2 - val1;
                else
                    return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
            });
            $.each(arrData, function (index, row) {
                $('tbody').append(row);
            });
        });
    });
});
///change sorting icon color
$(function () {
    $('th').click(function () {
        $('th').children().css('color', 'darkgreen')
        $(this).children().css('color', 'white')
    });
});


////


$(document).ready(function () {
    $(".table td:nth-child(7)").each(function () {
        if (parseInt($(this).text(), 10) > 50) {
            $(this).parent("tr").css("background-color", "lightgreen");
        }
        if (parseInt($(this).text(), 10) < 50) {
            $(this).parent("tr").css("background-color", "#FFFF99");
        }
        if (parseInt($(this).text(), 10) == 0) {
            $(this).parent("tr").css("background-color", "#FFB6C1");
        }
    });
});


////ventilator 

$(document).ready(function () {
    $(".table1 td:nth-child(6)").each(function () {
        if (parseInt($(this).text(), 10) > 15) {
            $(this).parent("tr").css("background-color", "lightgreen");
        }
        if (parseInt($(this).text(), 10) < 15) {
            $(this).parent("tr").css("background-color", "#FFFF99");
        }
        if (parseInt($(this).text(), 10) == 0) {
            $(this).parent("tr").css("background-color", "#FFB6C1");
        }
    });
});

/// header mobile
$(document).ready(function () {

    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(sideNavScrollbar);
})

// get user location

var lon, lat;

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);

    } else {
        // x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {

    lon = position.coords.longitude;
    lat = position.coords.latitude;


    console.log(lon, lat);
    document.getElementById("lon").innerHTML = lon;
    document.getElementById("lat").innerHTML = lat;
    return lon, lat
    //   x.innerHTML = "Latitude: " + position.coords.latitude + 
    //   "<br>Longitude: " + position.coords.longitude;
}



$(document).ready(function () {
    var url = "https://api.covid19india.org/data.json"

    $.getJSON(url, function (data) {


        var total_active, total_recovered, total_death, total_confirmed
        var Dtotal_active, Dtotal_recovered, Dtotal_death, Dtotal_confirmed



        var state = []
        var confirmed = []
        var recovered = []
        var deaths = []

        $.each(data.statewise, function (id, obj) {
            state.push(obj.state)
            confirmed.push(obj.confirmed)
            recovered.push(obj.recovered)
            deaths.push(obj.deaths)
        })

        state.shift()
        confirmed.shift()
        recovered.shift()
        deaths.shift()

        console.log(data)

        total_active = data.statewise[0].active
        total_confirmed = data.statewise[0].confirmed
        total_recovered = data.statewise[0].recovered
        total_death = data.statewise[0].deaths

        Dtotal_active = data.statewise[3].active
        Dtotal_confirmed = data.statewise[3].confirmed
        Dtotal_recovered = data.statewise[3].recovered
        Dtotal_death = data.statewise[3].deaths

        $("#total_active").append(total_active)
        $("#total_confirmed").append(total_confirmed)
        $("#total_recovered").append(total_recovered)
        $("#total_death").append(total_death)

        $("#Dtotal_active").append(Dtotal_active)
        $("#Dtotal_confirmed").append(Dtotal_confirmed)
        $("#Dtotal_recovered").append(Dtotal_recovered)
        $("#Dtotal_death").append(Dtotal_death)

        var myChart = document.getElementById("myChart1").getContext('2d')

        var chart = new Chart(myChart, {
            type: 'line',
            data: {
                labels: state,
                datasets: [
                    {
                        label: "Confirmed Cases",
                        data: confirmed,
                        backgroundColor: "#f1c40f",
                        minBarLength: 100,
                    },
                    {
                        label: "Recovered Cases",
                        data: recovered,
                        backgroundColor: "#2ecc71",
                        minBarLength: 100,
                    },
                    {
                        label: "Deceased",
                        data: deaths,
                        backgroundColor: "red",
                        minBarLength: 100,
                    }
                ]
            },
            options: {}
        })

    })
})

/// display indian corona table

function displayCoronaTable() {


    $.ajax({

        url : 'extra.php',
        type : 'POST',
        success : function (result) {
           console.log (result); // Here, you need to use response by PHP file.
        },
        error : function () {
           console.log ('error');
        }
   
      });







    $.ajax({
        url: "https://api.covid19india.org/csv/latest/state_wise.csv",
        dataType: "text",
        success: function (data) {
            var covid_data = data.split(/\r?\n|\r/);
            var table_data = '<table class="table table-bordered table-striped table3">';


            

            for (var count = 0; count < covid_data.length; count++) {
                var cell_data = covid_data[count].split(",");

                table_data += '<tr>';

                for (var cell_count = 0; cell_count < cell_data.length; cell_count++) {
                    if (cell_count <= 5) {
                        if (count === 0) {

                            table_data += '<th>' + cell_data[cell_count] + '</th>';

                        }
                        else if (count != 1) {
                            var val = cell_data[cell_count];


                            if (val.length <= 45 && val != '"' && val != '--') {
                                table_data += '<td>' + cell_data[cell_count] + '</td>';
                            }
                        }
                    }
                }
                table_data += '</tr>';
            }

            table_data += '</table>';

            $('#covid_table').html(table_data);

        }
    });
}



$(document).ready(function () {
    var url = "https://api.covid19india.org/states_daily.json"

    $.getJSON(url, function (data) {


        var Ttotal_recovered, Ttotal_death, Ttotal_confirmed
        var TDtotal_active, TDtotal_recovered, TDtotal_death, TDtotal_confirmed




        var dt = []
        var dt2 = []
        var status = []
        var dl = []
        var dl2 = []


        $.each(data.states_daily, function (id, obj) {
            if (obj.status == "Confirmed") {
                dt.push(obj.date)
                //status.push(obj.status)
                dl.push(obj.dl)
            }
            else if (obj.status == "Recovered") {
                dt2.push(obj.date)
                //status.push(obj.status)
                dl2.push(obj.dl)
            }

        })
        last_date_id = dt.length
        last_date = data.states_daily[last_date_id - 1]

        ///get today date

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        todayDate = dd + '/' + mm + '/' + yyyy;

        //console.log(data)

        // total_active = data.statewise[0].active
        // total_confirmed = data.statewise[0].confirmed
        // total_recovered = data.statewise[0].recovered
        // total_death = data.statewise[0].deaths

        // Dtotal_active = data.statewise[3].active
        // Dtotal_confirmed = data.statewise[3].confirmed
        // Dtotal_recovered = data.statewise[3].recovered
        // Dtotal_death = data.statewise[3].deaths

        // $("#total_active").append(total_active)
        // $("#total_confirmed").append(total_confirmed)
        // $("#total_recovered").append(total_recovered)
        // $("#total_death").append(total_death)

        // $("#Dtotal_active").append(Dtotal_active)
        // $("#Dtotal_confirmed").append(Dtotal_confirmed)
        // $("#Dtotal_recovered").append(Dtotal_recovered)
        // $("#Dtotal_death").append(Dtotal_death)


        /////chart 2
        var myChart2 = document.getElementById("myChart2").getContext('2d')
        var chart = new Chart(myChart2, {
            type: 'line',
            data: {
                labels: dt,
                datasets: [
                    {
                        label: "Confirmed Cases",
                        data: dl,
                        backgroundColor: "#f1c40f",
                        minBarLength: 100,
                    }
                ]
            },
            options: {}
        })
        /// chart3
        var myChart3 = document.getElementById("myChart3").getContext('2d')
        var chart = new Chart(myChart3, {
            type: 'line',
            data: {
                labels: dt2,
                datasets: [
                    {
                        label: "Recovered Cases",
                        data: dl2,
                        backgroundColor: "green",
                        minBarLength: 100,
                    }
                ]
            },
            options: {}
        })

    })
})




/// find neaby hospitals 

// function distance(lat1, lon1, lat2, lon2, unit) {
//     var radlat1 = Math.PI * lat1/180
//     var radlat2 = Math.PI * lat2/180
//     var theta = lon1-lon2
//     var radtheta = Math.PI * theta/180
//     var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
//     if (dist > 1) {
//         dist = 1;
//     }
//     dist = Math.acos(dist)
//     dist = dist * 180/Math.PI
//     dist = dist * 60 * 1.1515
//     if (unit=="K") { dist = dist * 1.609344 }
//     if (unit=="N") { dist = dist * 0.8684 }
//     return dist
// }

// var data = [{
//     "code": "0001",
//     "lat": "1.28210155945393",
//     "lng": "103.81722480263163",
//     "location": "Stop 1"
// }, {
//     "code": "0003",
//     "lat": "1.2777380589964",
//     "lng": "103.83749709165197",
//     "location": "Stop 2"
// }, {
//     "code": "0002",
//     "lat": "1.27832046633393",
//     "lng": "103.83762574759974",
//     "location": "Stop 3"
// }];

// var html = "";
// var poslat = lat;
// var poslng = lan;

// for (var i = 0; i < data.length; i++) {
//     // if this location is within 0.1KM of the user, add it to the list
//     if (distance(poslat, poslng, data[i].lat, data[i].lng, "K") <= 0.1) {
//         html += '<p>' + data[i].location + ' - ' + data[i].code + '</p>';
//     }
// }

// $('#nearbystops').append(html);

//location

//lattitude longtitude
function getLonLat() {
    var addrs = document.getElementById("addr").value;
    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "https://us1.locationiq.com/v1/search.php?key=1d3d1d3cfb474b&q=" + addrs + "&format=json",
        "method": "GET"
    }
    var lon
    var lat
    $.ajax(settings).done(function (response) {
        lon = response[0].lon
        lat = response[0].lat
        console.log(lon, lat)
        document.getElementById("lon").value = lon;
        document.getElementById("lat").value = lat;
    });

}