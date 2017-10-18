<div class="container movedown">
			<div class="container switchcontainer <?php echo $forecast["currently"]['icon'];?>">
				<div class="container py-5 text-white text-center lineheightadjust">




					<div class="weathersquare weathersquarepush pt-4">
						<!-- <h1 class="display-1 mt-5">Results</h1> -->
						
						<div class="floatfloat">
								<h1 class="display-1  textstrokeshadow">
									<?php echo round($forecast["currently"]["temperature"]); ?>&deg;
								</h1>
						</div>

						

						<div class="floatfloat weatherstats">
							<!-- <p class="locationsize textstrokeshadow">
								Relative Humidity: <?php echo $humidity_current; ?>%
							</p> -->
							

							<h2 class=" locationsize textstrokeshadow switchicon-<?php echo $status_currenticon; ?>">
								
							</h2>

							

							<p class="locationsize textstrokeshadow">
								<?php echo $status_current = $status_current; ?>
							</p>

							<!-- <p class="locationsize textstrokeshadow">
								<img class="svgcolor" src="icons/<?php echo $status_currenticon; ?>.svg" alt="">
							</p> -->

							

							<p class="locationsize textstrokeshadow">
								<?php echo gmdate("l",$whattime); ?>
							</p>
						</div>
					
						
						<div class="floatfloat">
							<p class="locationsize textstrokeshadow">
							<?php echo $place; ?>
							</p>
						</div>
						
					</div>
					



				</div>

			</div>
</div>



