<!-- <html>
<script>
function displayCT() {

    $.ajax({
<<<<<<< HEAD
     url:"https://api.covid19india.org/csv/latest/state_wise.csv",
     dataType:"text",
     success:function(data)
     {
      var covid_data = data.split(/\r?\n|\r/);
      var table_data = '<table class="table table-bordered table-striped table3">';
      
      for(var count = 0; count<covid_data.length; count++)
      {
       var cell_data = covid_data[count].split(",");
      
       table_data += '<tr>';
      
       
       
      //  for(var cell_count=0; cell_count<cell_data.length; cell_count++)
      //  {
      //     if(cell_count <= 5 )
      //     {
      //   if(count === 0)
      //   {
            
      //    table_data += '<th>'+cell_data[cell_count]+'</th>';
            
      //   }
      //   else if(count != 1)
      //   {


      //        var val = cell_data[cell_count];

      //       if(val.length <= 45 && val != '"')
      //       {
      //           table_data += '<td>'+cell_data[cell_count]+'</td>';
      //       }
      //   }
      // }
      //  }
      //  table_data += '</tr>';
      // }

      // table_data += '</table>';
     
      // //$('#covid_table').html(table_data);
=======
        url: "https://api.covid19india.org/csv/latest/state_wise.csv",
        dataType: "text",
        success: function(data) {

            
            var covid_data = data.split(/\r?\n|\r/);
            var table_data = '<table class="table table-bordered table-striped table3">';

            for (var count = 0; count < covid_data.length; count++) {
                var cell_data = covid_data[count].split(",");

                table_data += '<tr>';




                for (var cell_count = 0; cell_count < cell_data.length; cell_count++) {
                    if (cell_count <= 5) {
                        if (count === 0) {

                            table_data += '<th>' + cell_data[cell_count] + '</th>';

                        } else if (count != 1) {



                            var val = cell_data[cell_count];

                            var Dbstate = cell_data[0];
                            var Dbcnf = cell_data[1];
                            var Dbrec = cell_data[2];
                            var Dbdeath = cell_data[3];
                            var Dbact = cell_data[4];
                            var Dbdate = cell_data[5];
                            <?php include('connection.php');

                           

                            $sqlQuery =
                                "INSERT INTO ind_dashboard (`state`, `cnf`, `rec`, `death`, `act`, `date`) VALUES (`hhhh`, `$cnf`, `$rec`, `$death`, `$act`, `$date`)";
                            $result = mysqli_query($db, $sqlQuery);

                            if ($result)
                                echo " </br> The Hospital data added successfully  !  ";
                            else
                                echo " <br/> The Hospital data not added successfully  !  "; 
                                ?>



                           
                        }
                    }
                }
                table_data += '</tr>';
            }

            table_data += '</table>';

            //$('#covid_table').html(table_data);

        }
    });

  $.ajax({
>>>>>>> 2124c992b2b5f72d433fe7e3e6b09a861968acaa

     url : 'extra.php',
     type : 'POST',
     success : function (result) {
        console.log (result); // Here, you need to use response by PHP file.
     },
     error : function () {
        console.log ('error');
     }
<<<<<<< HEAD
    });
  }
displayCoronaTable();
</script>
</html> -->

<?php include('connection.php');

  if(isset($_post[state])&&isset($_post[cnf])&&isset($_post[rec])&&isset($_post[death])&&isset($_post[act]))
  $state="<script>cell_data[0]</script>";
  $cnf="<script>cell_data[1]</script>";
  $rec="<script>cell_data[2]</script>";
  $death="<script>cell_data[3]</script>";
  $act="<script>cell_data[4]</script>";
  $date="<script>cell_data[5]</script>";

  $sqlQuery="INSERT INTO ind_dashboard (`state`, `cnf`, `rec`, `death`, `act`) VALUES (0, 0, 0, 0, 0)";
  $result=mysqli_query($db,$sqlQuery);  

  if($result)
    echo " </br> The Hospital data added successfully  !  ";
  else
    echo " <br/> The Hospital data not added successfully  !  ";
?>
=======

   });
}

</script>
<body onload = "displayCT()"></body>
>>>>>>> 2124c992b2b5f72d433fe7e3e6b09a861968acaa
