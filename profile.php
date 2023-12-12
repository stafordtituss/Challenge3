<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Randmob | Car user Dashboard</title>
	<!--Fontawesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap--->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mainstyle.css">
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="dashboard-hearder">
					<div class="ml-4 pt-4">
						<img src="images/Ellipse 9.png">
						<p class="d-inline font-weight-bolder text-white">
							Annabel Mark
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p id="amount">Amount</p>
				<div id="amount-card">
					<p class="ml-3 font-weight-bolder">
					   <span id="money-value">500,0000</span> Naira
					</p>
				</div>
			</div>
		</div>
		<!---Card Starts Here---->
		<div class="row">
			<div class="col" id="medcards-container">
				<div class="medcard">
					<p class="m-4 text-center">
					  <img src="images/carbon_user-profile.svg" alt="">&nbsp;&nbsp;&nbsp;<span>Profiles</span>
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <a href="family.html"><img src="images/family.svg">&nbsp;&nbsp;&nbsp;Family</a>
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <img src="images/carbon_user-profile.svg" alt="">&nbsp;&nbsp;&nbsp;BSure
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <img src="images/Vector.svg" alt="">&nbsp;&nbsp;&nbsp;Credit
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <img src="images/bx_bx-history.svg" alt="">&nbsp;&nbsp;&nbsp;History
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <img src="images/pay.svg" alt="">&nbsp;&nbsp;&nbsp;Pay
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <i class="fa fa-road"></i>&nbsp;&nbsp;&nbsp;Book Mechanic
					</p>
				</div>
				<div class="medcard">
					<p class="m-4 text-center pt-1">
					  <i class="fa fa-gears"></i>&nbsp;&nbsp;&nbsp;Auto parts discounts
					</p>
				</div>
			</div>	
		</div>
		<!---Card Ends Here------>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all csompiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>
