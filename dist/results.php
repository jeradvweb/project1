<?php 
	include 'partials/head.php';
	include 'app/forecast.php';
 ?>

 	<!-- Background -->

	<div class="container gametablebg2">





		<!-- Nintendo Switch w/ Weather -->

		<?php 
			include 'partials/switchimage.php';
		?>

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
		
		<!-- Start of Audio -->

		<!-- REMOVE EXTRA P -->
		<div class="container mx-auto">
			<?php 
				include 'ppartials/music.php';
			?>

		</div>
	
		

	
		
		<!-- End of Audio -->

	</div>
		
	

<?php include 'partials/footer.php'; ?>