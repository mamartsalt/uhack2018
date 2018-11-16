<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="																			sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	

</head>



<body>


	<style>

	h2, h3{
		font-family: 'Roboto', sans-serif;
		margin-left: 50px;
		margin-top: 10px;
		}

	ul{
		margin-left: -17px;
		text-align: center;
		overflow-y: scroll;
		height: 400px;
		width: 230px;
		}

	.box{
		width: 260px;
		height: 550px;
		background:#08088A;
		color: white;
		top: 56%;
		left: 10%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
		border: 3px solid #fff;
		
		}
		.box2{
		width: 1200px;
		height: 550px;
		background:#08088A;
		color: white;
		top: 56%;
		left: 59%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
	
		border: 3px solid #fff;
		
		}

		 

		
			
			#A_Q{
				display: none;
			}
			#c_ity{
				display: none;
			}
			#TH_I{
				display: none;
			}


			@media (max-width: 575.98px) {
				#c_ity{
					text-align: center;
					font-size: 30px;

				}
				#A_Q{
					text-align: center;
					font-size: 30px;
				}
				#TH_I{
					text-align: center;
					font-size: 30px;

				}
				#A_T{
					display: none;
				}
				#selcity{
					margin-left: 50px !important;

				}
				#ser{
					margin-left: 40px !important;	
				}
				#listc{
					margin-left: 40px !important;	
				}
				#tit{
        		font-size: 25px;
        		text-align: center;
        		color: white;
        		margin-left: 0;
       			 }
       			 	.js-gauge--1 {
				display: none;
			}
			.js-gauge--0	{
				display: none;
			}

				}
	</style>

	<nav class="navbar navbar-light" style="background-color: #08088A;width: 100%;height: 25%;">
       	 <a class="navbar-brand">
        	<h2 id = "tit"style="color: white;">Air Quality & Total Heat Index</h2>        	   					
       	 </a>
        
   			
  		
          <form class="form-inline">
               <button onclick="location.href='statistics.php'" type="button" class="btn btn-success" style="color: white;margin-right: 10px;">Statistics</button>
               <button onclick="location.href='index.php'" type="button" class="btn btn-success" style="color: white;">HOME</button>
                
          </form>

    </nav>



	<div class="box">

  		<h2 id="selcity" style="margin-top: -45px;margin-left: 30px;">Select City</h2> 
   		<input id="ser" style="width: 230px; margin-left: -15px; margin-bottom: 20px;" class="form-control mr-sm-2" type="search" placeholder="Search City" aria-label="Search">
 		


  			<ul class="list-group" id="listc">
  			<li class="list-group-item" style="color: black"><a href="http://localhost/uhack/dashboard.php?city=manila">Manila</a></li>
  			<li class="list-group-item" style="color: black"><a href="http://localhost/uhack18/uhack2018/dashboard.php?city=cebu"> Cebu</a></li>
  			<li class="list-group-item" style="color: black">Davao</li>
  			<li class="list-group-item" style="color: black"><a href="http://localhost/uhack18/uhack2018/dashboard.php?city=iloilo">Iloilo</a></li>
  			<li class="list-group-item" style="color: black">Makati</li>
  			<li class="list-group-item" style="color: black">Quezon</li>
  			<li class="list-group-item" style="color: black">Baguio</li>
  			<li class="list-group-item" style="color: black">Tagaytay</li>
  			<li class="list-group-item" style="color: black">Dumaguete</li>
  			<li class="list-group-item" style="color: black">Albay</li>

		</ul>



</div>
	<div class="box2">
			<?php 
				if(!empty($_GET['city'])){
						$city = $_GET['city'];

						
                        include("db.php");
                        $result = mysqli_query($connect, "SELECT * FROM tbl_sensor 
                        	WHERE city='$city' LIMIT 1");

                 
                		 echo "<h1 style='margin-left:500px;text-transform:uppercase;'> $city </h1>";

              ?> <?php } ?>
                          
                        	
                 	
            
	<div class="row">
		<div class="js-gauge js-gauge--1 gauge" style="margin-left: 60px;"></div>
		<div class="js-gauge js-gauge--0 gauge" style="margin-left: 90px;"></div>
	</div>
	<div class="row" id="A_T">
		<h5 style="margin-left: 250px;">Air Quality</h5>
		<h5 style="margin-left: 455px;">Total Heat Index</h5>
	</div>
	

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
	<script type="text/javascript" src="js/kuma-gauge.jquery.js"></script>
	<div class="col-sm-12">
		
				<?php

	 				if(!empty($_GET['city'])){
						$city = $_GET['city'];

						
                        include("db.php");
                        $result = mysqli_query($connect, "SELECT * FROM tbl_sensor 
                        	WHERE city='$city' LIMIT 1");

	 				}else{
	 					
	 					$city = "iloilo";
	 					 include("db.php");
                        $result = mysqli_query($connect, "SELECT * FROM tbl_sensor WHERE city='iloilo' LIMIT 1");
	 				}


    
    
                    ?>

                    <?php
                          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                          	$AQ = $row['AQ'];
                          	$THI = $row['THI'];
                          	
                          	

                    ?>

                   	<?php 
                   		echo "<div id=c_ity> $city </div>";
                   		echo "<div id='A_Q'>The Air Quality: $AQ</div>";
          				
                   		echo "<div id='TH_I'>Total Heat Index: $THI</div>";

                   		if($AQ > 1 && $AQ <= 50 && $THI > 1 && $THI <= 79)
                   		{
                   			echo "<h4 style='background-color: green;'>Air quality is  considered satisfactory, and air pollution poses little or no risk.</h4>";
                   		}
                   		else if($AQ > 51 && $AQ <= 100 && $THI > 80 && $THI <= 90)
                   		{
                   			echo "<h4 style='background-color: yellow; color: black;'>Air quality is acceptable; however, for some pollutants there may be a moderate health concern for a very small number of people who are unusually sensitive to air pollution.</h4>";
                   		}
                   		else if ($AQ > 101 && $AQ <= 150 && $THI > 91 && $THI <= 103)
                   		{
                   			echo "<h4 style='background-color: violet;'>Members of sensitive groups may experience health effects. The general public may not likely to be affected.</h4>";
                   		}
                   		else if ($AQ > 151 && $AQ <= 200 && $THI > 104 && $THI <= 125)
                   		{
                   			echo "<h4 style='background-color: red;'>Everyone may begin to experience health effects; members of sensitive groups may experience more serious health effects.</h4>";
                   		}
                   		else if ($AQ > 201 && $AQ <= 300 && $THI > 126 && $THI <= 137)
                   		{
                   			echo "<h4 style='background-color: brown;'>Health warnings of emergency conditions. The entire population is more likely to be affected.</h4>";
                   		}
                   		else
                   		{
                   			echo "";
                   		}
                   	?>

                   	<?php
                   	}
                ?>		
		
	</div>


</div>
			   <script>
						$('.js-gauge--1').kumaGauge({
							value : Math.floor("<?php echo $AQ; ?>"),
							max : 100,

						});

						$('.js-gauge--1').kumaGauge('update', {
							value : Math.floor("<?php echo $AQ; ?>"),
							max : 100,

						});

						$('.js-gauge--0').kumaGauge({
							value : Math.floor("<?php echo $THI; ?>")
						});

						$('.js-gauge--0').kumaGauge('update', {			
							value : Math.floor("<?php echo $THI; ?>")
						});
						
		</script>

</body>
</html>