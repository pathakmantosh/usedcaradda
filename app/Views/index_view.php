<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	<!--Loader-->
	<div id="global-loader">
		<img src="../assets/images/loader.svg" class="loader-img " alt="">
	</div>

	<?php echo view('topbar.php'); ?>

	<!--Section-->
	<div>
		<div id="carouselExampleIndicators" class="cover-image sptb-1 carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="../assets/images/banners/Used-Car-Adda-Slider.png" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="../assets/images/banners/Used-Car-Adda-Slider-2.png" alt="Second slide">
				</div>

				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card mb-0 shadow-none">
									<div class="card-body">
										<h2 class="mb-4">Find Your Right Car</h2>
										<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
										<div class="row">
											<div class="form-group col-md-6">
												<label class="custom-control custom-radio mr-4">
													<input type="radio" class="custom-control-input" name="example-radios3" value="option1" checked>
													<span class="custom-control-label">By Budget</span>
												</label>
											</div>
											<div class="form-group col-md-6">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios3" value="option2">
													<span class="custom-control-label">By Model</span>
												</label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group search-cars1">
													<select class="form-control select2-show-search border-bottom-0 w-100 br-3" data-placeholder="Select">
														<option>Select Budget</option>
														<option value="1">1 - 5 Lac</option>
														<option value="2">6 - 10 Lac</option>
														<option value="3">11 - 15 Lac</option>
														<option value="4">16 - 20 Lac</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group search-cars1">
													<select class="form-control select2-show-search border-bottom-0 w-100 br-3" data-placeholder="Select">
														<option>All Vechicle Type</option>
														<option value="1">Hatchbak</option>
														<option value="2">Sedan</option>
														<option value="3">SUV</option>
														<option value="4">MUV</option>
														<option value="5">Luxury</option>
														<option value="6">LXI</option>
													</select>
												</div>
											</div>
										</div>
										<a class="btn btn-primary btn-lg btn-block" href="#">Get Quote</a>
									</div>
								</div>
							</div>
							<div class="col-xl-7 col-lg-7 col-md-12" style="display: none;">
								<div class="text-white mt-lg-8 mb-5">
									<h1 class="mb-3 display-3">Used <span class="font-weight-bold"> Car Ka,</span><br> Naya Adda</h1>
									<a href="#" class="btn btn-primary btn-lg mr-2">View More</a>
									<a href="#" class="btn btn-success btn-lg">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--Section-->

	<!-- Popup Login-->
	<div id="LgoinRegister" class="modal fade">
		<div class="modal-dialog" role="document" width='350'>
			<div class="modal-content " rounded-0>
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel"><strong> Login or Register for best UseCarAdda experience</strong></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="single-page customerpage ">
						<div class="wrapper wrapper2 box-shadow-0">
							<form id="login" class="">
								<div class="text">
									<input type="text" name="mobile"  placeholder="Enter Mobile Number">
									<!-- <label>Enter Mobile Number</label> -->
								</div>
								</br></br></br></br></br></br></br>
								<div class="submit">
									<button type="button" class="btn btn-primary" disabled=disabled>Send OTP <i class="fa fa-long-arrow-right mr-1"></i> </button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Popup Login-->



	<?php

	echo view('mostUsedCar_view.php');
	echo view('popularbrands_view.php');
	echo view('lestedcar_view.php');



	echo view('footer.php');

	?>
</body>

</html>