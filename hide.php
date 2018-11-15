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
        

     if ($_GET['AQ'] >= 1 && $_GET['THI'] >= 90 && $_GET['AQ'] <= 99 && $_GET['THI'] <= 99){
         $message = "The Air Quality". $AQ." and the Total Heat Index".$THI." is Above normal";
     	include "text.php";
        
     }else if ($_GET['AQ'] >= 100 && $_GET['THI'] >= 100 && $_GET['AQ'] <= 200 && $_GET['THI'] <= 99) {
         $message = " The Air Quality". $AQ." and the Total Heat Index".$THI." is Dangerous!";
        include "text.php";
        
     }else if ($_GET['AQ'] >= 201 && $_GET['THI'] >= 100) {
        $message = "The Air Quality". $AQ." and the Total Heat Index".$THI." is Fatal!";
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