<div class="container movedown">
			<div class="container switchcontainer <?php echo $forecast["currently"]['icon'];?>">
				<div class="container py-5 text-white text-center  lineheightadjust">

					<div class="weathersquare weathersquarepush ">
						<!-- <h1 class="display-1 mt-5">Results</h1> -->
					
					
						
						<h1 class="display-1">
						<?php echo round($forecast["currently"]["temperature"]); ?>&deg;
						</h1>
						<p class="display-4">
						<?php echo $place; ?>
						</p>
						<p class="lead">
						Relative Humidity: <?php echo $humidity_current; ?>%
						</p>
						<p class="lead">
						<?php echo $status_current = $status_current; ?>
						</p>
						<p class="lead">
						<?php echo gmdate("l",$whattime); ?>
						</p>

					</div>
					
				</div>

			</div>
</div>



