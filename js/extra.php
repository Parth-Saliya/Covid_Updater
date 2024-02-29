<
<?php include('connection.php');

$a = 1;
if (a==1){
    header('BedsDetail.php');
}
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// $string = file_get_contents("https://api.exchangeratesapi.io/history?start_at=2017-01-01&end_at=2018-09-01&symbols=EUR&base=GBP");
// $json = json_decode($string, true);


// foreach($json['rates'] as $date =>$conversion){
//     $sql = "INSERT INTO Mytable (id, date, conversion)
//             VALUES ( '$date', ".$conversion['EUR'].")";

//     if ($db->query($sql) === TRUE) {
//         echo "New record created successfully"."<br>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $db->error."<br>";
//     }

// }
// $conn->close();
// 
echo 'Hello';
?>
