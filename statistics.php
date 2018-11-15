<!DOCTYPE html>
<html>
<head>
	<title>statistics</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="																			sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">

	 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>

	<style>

	h2, h3{
		font-family: 'Oleo Script', cursive;
		margin-left: 50px;
		margin-top: 10px;
		}
	

	</style>


<nav class="navbar navbar-light"" style="background-color: #08088A">
       	 <a class="navbar-brand">
        	<h2 style="color: white;">Air Quality & Total Heat Index</h2>        	   					
       	 </a>
        
        
   			
  		
          <form class="form-inline">
                   
               <button onclick="location.href='dashboard.php'" type="button" class="btn btn-success" style="color: white;margin-right: 10px;">Dashboard</button>
               <button onclick="location.href='index.php'" type="button" class="btn btn-success" style="color: white;">HOME</button>
                
          </form>

    </nav>


	<canvas id="myChart"  style="width: 10px;height: 2px;"></canvas>
	<canvas id="myChart1" style="width: 10px;height: 2px;"></canvas>

	<script>

			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
    		type: 'line',

    		data: {
        		labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        		datasets: [{
           		 label: "Total Heat Index",
            		backgroundColor: '#1693DF',
            		borderColor: '#08088A',
           		 data: [0, 10, 30, 90, 20, 30, 45],
        		}]
    		},

    	
   		 options: {layout: {
			            padding: {
			                left: 100,
			                right: 100,
			                top: 50,
			                bottom: 50,
			            }
			        },}
				});


			var ctx = document.getElementById('myChart1').getContext('2d');
			var chart = new Chart(ctx, {
    		type: 'line',

    		data: {
        		labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        		datasets: [{
           		 label: "Total Heat Index",
            		backgroundColor: '#1693DF',
            		borderColor: '#08088A',
           		 data: [0, 10, 30, 2, 20, 30, 45,],
        		}]
    		},

    	
   		 options: {layout: {
			            padding: {
			                left: 100,
			                right: 100,
			                top: 50,
			                bottom: 50,
			            },
			              labels: {
                // This more specific font property overrides the global property
                fontColor: 'black'
            }
			        },}
				});

</script>
</body>
</html>