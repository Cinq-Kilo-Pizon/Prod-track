<html>
<body>

<?php

$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "cmr rfid";  

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$temperature = $_GET["temperature"];
$humidity = $_GET["humidity"]; 


$query = "INSERT INTO iot_project (temperature, humidity) VALUES ('$temperature', '$humidity')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>