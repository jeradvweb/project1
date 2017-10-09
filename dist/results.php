<?php 
	include 'partials/head.php';
	include 'app/forecast.php';
 ?>
	<div class="container gametablebg">


		<div class="container movedown">
			<div class="container switchcontainer switch">
				<div class="container py-5 text-white text-center">
					<h1 class="display-1 mt-5">Results</h1>
					
					

					<h1 class="display-1">
						<?php echo round($forecast["currently"]["temperature"]); ?>&deg;
					</h1>
					<p class="lead">
						Relative Humidity: <?php echo $humidity_current; ?>%
					</p>
				</div>

			</div>
		</div>
		
	</div>
		
		


		
	

<?php include 'partials/footer.php'; ?>