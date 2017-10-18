<div class="container movedown">
			<div class="container switchcontainer <?php echo $forecast["currently"]['icon'];?>">
				<div class="container py-5 text-white text-center">




					<div class="weathersquare weathersquarepush pt-4  lineheightadjust">
						<!-- <h1 class="display-1 mt-5">Results</h1> -->
						
						<div class="floatfloat">
								<h1 class="degreesizeboost display-1  textstrokeshadow">
									<?php echo round($forecast["currently"]["temperature"]); ?>&deg;
								</h1>
						</div>

						

						<div class="floatfloat weatherstats iconheight">
							<!-- <p class="locationsize textstrokeshadow">
								Relative Humidity: <?php echo $humidity_current; ?>%
							</p> -->
							

							<h2 class=" locationsize textstrokeshadow switchicon-<?php echo $status_currenticon; ?>">
								
							</h2>


							<p class="locationsizesmall textstrokeshadow lineheightadjust2">
								<?php echo $status_current = $status_current; ?>
							</p>

						</div>	

						<div class="pt-3 lineheightadjust">
							
							<p class="locationsize textstrokeshadow">
							<?php echo $place; ?>
							</p>


							

							<!-- <p class="locationsize textstrokeshadow">
								<img class="svgcolor" src="icons/<?php echo $status_currenticon; ?>.svg" alt="">
							</p> -->

							

							<p class="locationsizesmall textstrokeshadow lineheightadjust2">
								<?php echo gmdate("l",$whattime); ?>
							</p>

							

						</div>

							
						
					
						
						<!-- <div class="floatfloat">
							
						</div> -->
						
					</div>
					



				</div>

			</div>
</div>



