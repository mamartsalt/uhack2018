<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="																			sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

</head>



<body>


	<style>

	h2{
		font-family: 'Oleo Script', cursive;
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
		top: 53%;
		left: 10%;
		position: absolute;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		padding: 70px 30px;
		border: 3px solid #fff;
		
		}
	</style>

	<nav class="navbar navbar-light"" style="background-color: #08088A">
       	 <a class="navbar-brand">
        	
        	<img src=""  class="d-inline-block align-top" alt="">
   							 Bootstrap
       	 </a>
        
   			
  		
          <form class="form-inline">
               <button onclick="location.href='statistics.php'" type="button" class="btn btn-success" style="color: white;margin-right: 10px;">Statistics</button>
               <button onclick="location.href='index.php'" type="button" class="btn btn-success" style="color: white;">HOME</button>
                
          </form>

    </nav>


	<div class="box">
  		<h2 style="margin-top: -45px;margin-left: 30px;">Select City</h2> 
   		<input style="width: 230px; margin-left: -15px; margin-bottom: 20px;" class="form-control mr-sm-2" type="search" placeholder="Search City" aria-label="Search">
 		


  			<ul class="list-group">
  			<li class="list-group-item" style="color: black"><a href="http://localhost/uhack/dashboard.php?city=manila">Manila</a></li>
  			<li class="list-group-item" style="color: black"><a href="http://localhost/uhack/dashboard.php?city=cebu"> Cebu</a></li>
  			<li class="list-group-item" style="color: black">Davao</li>
  			<li class="list-group-item" style="color: black"><a href="http://localhost/uhack/dashboard.php?city=iloilo">Iloilo</a></li>
  			<li class="list-group-item" style="color: black">Makati</li>
  			<li class="list-group-item" style="color: black">Quezon</li>
  			<li class="list-group-item" style="color: black">Baguio</li>
  			<li class="list-group-item" style="color: black">Tagaytay</li>
  			<li class="list-group-item" style="color: black">Dumaguete</li>
  			<li class="list-group-item" style="color: black">Albay</li>

		</ul>


	</div>

</body>
</html>