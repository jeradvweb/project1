<?php 
	include 'partials/head.php';
	include 'app/forecast.php';
 ?>

 	<!-- Background -->

	<div class="container gametablebg2">

		<!-- Nintendo Switch w/ Weather -->

		<div class="container movedown">
			<div class="container switchcontainer switch">
				<div class="container py-5 text-white text-center">
					<h1 class="display-1 mt-5">Results</h1>
					
					
					<p class="lead">
						<?php echo $place; ?>
					</p>
					<h1 class="display-1">
						<?php echo round($forecast["currently"]["temperature"]); ?>&deg;
					</h1>
					<p class="lead">
						Relative Humidity: <?php echo $humidity_current; ?>%
					</p>
					<p class="lead">
						<?php echo $status_current = $status_current; ?>
					</p>
					<p class="lead">
						<?php echo $whattime; ?>
					</p>
				</div>

			</div>
		</div>

		<!-- End of Nintendo Switch -->


		<!-- Search Again Bar -->


		<p class="lead text-center text-white">Again?</p>

		
		
		<div class=" p-4 mx-auto" style="max-width: 345px;">

				<form class="form-inline" method="post" action="results.php">

				  	<label class="sr-only" for="location">Location</label>

				  	<input name="location" type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 searchbarbg shadowboxinner" id="location" placeholder="Location...">

				 

				  	<button type="submit"  class="btn searchbargobg shadowbox text-white">Submit</button>

				</form>
		</div>
		

		

		<!-- End of Search Bar -->
		
	</div>
		
		


		
	

<?php include 'partials/footer.php'; ?>