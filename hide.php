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
         $message = "Hi! Expect a moderate Air Quality and Total Heat Index. Wear a hat and facemask.";
     	include "text.php";
        
     }else if ($_GET['AQ'] >= 101 && $_GET['THI'] >= 91 && $_GET['AQ'] <= 150 && $_GET['THI'] <= 103) {
         $message = " CAUTION! High level of AQ and THI. Nausea is likely to happen. Be informed! Stay Alert!";
        include "text.php";

    }else if ($_GET['AQ'] >= 151 && $_GET['THI'] >= 104 && $_GET['AQ'] <= 200 && $_GET['THI'] <= 125) {
        $message = "WARNING! A high level of AQ and THI is Detected. Dizziness and Fainting may occur.";
        include "text.php";
        
    
     }else if ($_GET['AQ'] >= 201 && $_GET['THI'] >= 126 && $_GET['AQ'] <= 300 && $_GET['THI'] <= 137) {
        $message = "DANGER! Extreme level of AQ and THI. Heat stroke and irritation of skin is expected.";
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