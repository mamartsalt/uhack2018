<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

	<style>

		    
        .bot{
             color: white;
    		background: #08088A;
    		border-collapse: collapse;
    		width: 50%;
    		padding: 20px;
    		text-align: center;
      		border-radius: 20px 20px 20px 20px;
    		margin: 0 auto;
        }
        .bot h1{
            font-family: 'Oleo Script', cursive;
        }
        #con_flu{
        	 color: white;
            background: #08088A;
            border-collapse: collapse;
            width: 455px;
            padding: 15px;
            text-align: center;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            
            border-radius: 20px 20px 20px 20px;
        }


        @media (max-width: 575.98px) { 

        	#con_flu{
        		width:80%;
       			 }
       		#nav_tit{
        		font-size: 25px;
        		text-align: center;
       			 }
       		#btn_dash{
       			margin-left: 75px;
       			width: 100%;
       			display: block;
       		}

         }
	</style>




    <?php 


    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'uhack';


    if(!empty($_GET['city'])){
         $city = $_GET['city'];
        $cnumber = $_GET['cnumber'];
    }
    else{
         $city = "";
        $cnumber = "";
    }

   
    
    $con = mysqli_connect($host, $user, $pass, $db);
        $sql = "INSERT into tbl_number (city, cnumber)
        VALUES ('$city','$cnumber')";
        $query = mysqli_query($con,$sql);
        

           


    ?>



	<nav class="navbar navbar-light" style="background-color: #08088A;width: 100%;height: 25%;">
         <a class="navbar-brand">
        	<h2 id="nav_tit" style="color: white;">Air Quality & Total Heat Index</h2>        	   					
       	 </a>
        
   			
  		
            <form>

                <button onclick="location.href='dashboard.php'" type="button" class="btn btn-success" id="btn_dash" style="color: white;">Dashboard</button>     
            </form>




    </nav>


		<div class="container-fluid">
   
		        <form  id="con_flu" action="" method="GET" >
  				<div class="form-group">
		            <select name="city" class="custom-select my-1 mr-sm-2"  id="inlineFormCustomSelectPref">
		                <option selected>Select City</option>
		                    <?php
		                        include("db.php");
		                        $result = mysqli_query($connect, "SELECT * FROM tbl_city");
		    
		    
		                    ?>

		                    <?php 
		                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		                        $name = $row['city'];
		                    ?>
		                    <option  value="<?php echo $name; ?>"><?php echo $name; ?></option>


		                    <?php
		                    }
		                    ?>
		            </select>




		            	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


		                <input style="margin-top: 7px;" type="number" class="form-control mb-2 mr-sm-2" name="cnumber" id="inlineFormInputName2" placeholder="Enter Phone Number" required="number">
		                <button type="submit"   class="btn btn-success">Submit</button>



</div>
		        </form>

							        <!-- Modal -->
					
	</div>


	






</body>
</html>