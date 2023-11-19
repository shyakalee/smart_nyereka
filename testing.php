<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
	
		
		<title>Registration</title>
	</head>
	
	<body>

	
		
        

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid; border-color: #f2f2f2;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Tag your Card / Key Chain to display ID" rows="1" cols="10" required></textarea>
						</div>
					</div>
					
					
					
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>