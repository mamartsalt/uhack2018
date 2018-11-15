<!DOCTYPE html>
<html>
<head>
	<title>hide</title>
</head>
<body>



	   <?php 


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'uhack';


    if(!empty($_GET['AQ'])){
         $AQ = $_GET['AQ'];
        $THI = $_GET['THI'];
         $city = $_GET['city'];
    }
    else{
         $AQ = "";
        $THI = "";
        $city = "";
    }

   
    
    $con = mysqli_connect($host, $user, $pass, $db);
        $sql = "INSERT into tbl_sensor (AQ, THI, city)
        VALUES ('$AQ','$THI', '$city')";
        $query = mysqli_query($con,$sql);
        

     if ($_GET['AQ'] >= 51 && $_GET['THI'] >= 80 && $_GET['AQ'] <= 100 && $_GET['THI'] <= 90){
         $message = "Hi! expect a moderate Air Quality:". $AQ." and the Total Heat Index:".$THI." . Kindly wear your hats, apply sunscreen and wear facemask. Avoid direct sunlight exposure! Be informed Stay ALert! ";
     	include "text.php";
        
     }else if ($_GET['AQ'] >= 101 && $_GET['THI'] >= 91 && $_GET['AQ'] <= 150 && $_GET['THI'] <= 103) {
         $message = " CAUTION! A high level of The Air Quality". $AQ." and the Total Heat Index".$THI." is Detected. Please observe proper caution when you are outside and nausea is likely to happen. Be informed! Stay Alert!";
        include "text.php";

    }else if ($_GET['AQ'] >= 151 && $_GET['THI'] >= 104 && $_GET['AQ'] <= 200 && $_GET['THI'] <= 125) {
        $message = "WARNING! A high level of The Air Quality". $AQ." and the Total Heat Index".$THI." is Detected. Dizziness and Fainting may occur. Observe caution and stay indoors Be informed! Stay Alert!";
        include "text.php";
        
    
     }else if ($_GET['AQ'] >= 201 && $_GET['THI'] >= 126 && $_GET['AQ'] <= 300 && $_GET['THI'] <= 137) {
        $message = "DANGER! Where are in Extreme level of  Air Quality". $AQ." and the Total Heat Index".$THI.". The heat is prone to heat stroke and irritation of skin, wear face mask and umbrella. Call the emergency hotline if needed!";
        include "text.php";
        
    }else{

    }



     ?>
	<form method="GET" action="hide.php">
		<input type="text" name="AQ" placeholder="Air Quality">
		<input type="text" name="THI" placeholder="total heat index">
		<input type="text" name="city" placeholder="city">
		<input type="submit" name="">
	</form>



</body>
</html>