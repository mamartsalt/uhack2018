<!DOCTYPE html>
<html>
<body>

<?php
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
    'ssl'=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uhack";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, city, cnumber FROM tbl_number WHERE city = '$city'";
$resultdb = mysqli_query($conn, $sql);
	$count = 0;

	if (mysqli_num_rows($resultdb) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($resultdb)) {

    	$cpnum = $row['cnumber'];
    	include 'sending.php';
      $count++;
        
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>