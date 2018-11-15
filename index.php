<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<style>
		

	</style>



	<nav class="navbar navbar-light"" style="background-color: #08088A">
        <a class="navbar-brand">
        	
        	<img src=""  class="d-inline-block align-top" alt="">
   							 Bootstrap
        </a>
        
   			
  		
            <form class="form-inline">
                   
                <button onclick="location.href='dashboard.php'" type="button" class="btn btn-success" style="color: white;">Dashboard</button>
                
            </form>




    </nav>


		<div class="bot">
   
        <form class="form-inline" action="" method="GET" >

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



                <input style="margin-top: 7px;" type="number" class="form-control mb-2 mr-sm-2" name="cnumber" id="inlineFormInputName2" placeholder="Enter Phone Number" required="number">
                <button type="submit"   class="btn btn-success">Submit</button>

        </form>
</div>

</body>
</html>