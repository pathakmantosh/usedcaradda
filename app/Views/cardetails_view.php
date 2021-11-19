<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	<?php echo view('topbar.php'); ?>
	<div class="horizontal-main header-main">
		<div class="top-bar p-3">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-3 col-sm-3 col-3">
						<div class="top-bar-left d-flex">
							<div class="clearfix text-center">
								<div class="header-search-logo d-lg-block">
									<a class="header-logo" href="index.html">
										<img src="../assets/images/media/logos/logo.png" class="header-brand-img" alt="dashr logo">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-sm-6 col-6 d-lg-block">
						<div class="top-bar-center header-inputs mb-lg-0">
							<div class="input-group">
								<input type="text" class="form-control br-tl-0 br-bl-0" placeholder="Search Cars & Brands">
								<div class="input-group-append ">
									<button type="button" class="btn btn-primary"><i class="fa fa-search text-white mr-1" aria-hidden="true"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-sm-3 col-3">
						<div class="top-bar-right">
							<ul class="custom">

								<li>
									<a href="#location" data-toggle="modal" class="text-dark"><i class="fa fa-map-marker mr-1"></i> <span>Location</span></a>
								</li>
								<li>
									<a href="#LgoinRegister" data-toggle="modal" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login/Register</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Horizontal Header -->
		<div class="horizontal-header clearfix ">
			<div class="container">
				<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
				<!-- <span class="smllogo"><img src="../assets/images/media/logos/logo.png" class="header-brand-img" alt="dashr logo"></span> -->
				<a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
			</div>
		</div>
		<!-- /Horizontal Header -->

		<!-- Horizontal Main -->
		<div class="header-style horizontal-main clearfix bg-white">
			<div class="horizontal-mainwrapper container clearfix">
				<!-- <div class="desktoplogo">
					<a href="index.html"><img src="../assets/images/brand/logo1.png" alt=""></a>
				</div> -->
				<!--Nav-->
				<div class="bg-white border-bottom">
					<div class="container">
						<div class="page-header">
							<h4 class="page-title">Cars</h4>
							<ol class="breadcrumb">

								<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>

								<li class="breadcrumb-item"><a href="#">Categories</a></li>
								<li class="breadcrumb-item active" aria-current="page">Cars</li>
							</ol>
						</div>
					</div>
				</div>
				<!--Nav-->
			</div>
		</div>
		<!-- /Horizontal Main -->
		<br>
	</div>
	<br>


	<!-- Topbar -->


	<!--/BreadCrumb-->

	<!--listing-->
	<section class="sptb ">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-md-12">
					<!--Classified Description-->
					<div class="card overflow-hidden">
						<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Offer</span></div>
						<div class="card-body">
							<div class="item-det mb-5"><br>
								<a href="#" class="text-dark">
									<h3>Maruti Celerio</h3>
								</a>
								<div class=" d-flex">
									<ul class="d-flex mb-0">
										<li class="mr-5"><a href="#" class="icons"><i class="ti-car text-muted mr-1 fs-18"></i> Cars</a></li>
										<li class="mr-5"><a href="#" class="icons"><i class="ti-location-pin text-muted mr-1"></i> USA</a></li>
										<li class="mr-5"><a href="#" class="icons"><i class="ti-calendar text-muted mr-1"></i> 5 hours ago</a></li>
										<li class="mr-5"><a href="#" class="icons"><i class="ti-eye text-muted mr-1 fs-15"></i> 765</a></li>
									</ul>
									<div class="rating-stars d-flex mr-5">
										<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
										<div class="rating-stars-container mr-2">
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
											<div class="rating-star sm">
												<i class="fa fa-star"></i>
											</div>
										</div> 4.0
									</div>
									<div class="rating-stars d-flex">
										<div class="rating-stars-container mr-2">
											<div class="rating-star sm">
												<i class="fa fa-heart"></i>
											</div>
										</div> 135
									</div>
								</div>
							</div>
							<div class="product-slider">
								<div id="carousel" class="carousel slide" data-ride="carousel">
									<div class="arrow-ribbon2 bg-primary">$539</div>
									<div class="carousel-inner">
										<div class="carousel-item active"> <img src="../assets/images/media/cars/h11.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m1.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m2.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m3.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m4.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m5.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m6.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m7.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m8.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m9.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m10.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m11.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m12.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m13.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m14.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m15.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m16.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m17.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m18.jpg" alt="img"> </div>
										<div class="carousel-item"> <img src="../assets/images/media/cars/m19.jpg" alt="img"> </div>
									</div>
									<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a>
									<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
								<div class="clearfix">
									<div id="thumbcarousel" class="carousel slide thumbcarousel" data-interval="false">
										<div class="carousel-inner">
											<div class="carousel-item active">

												<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../assets/images/media/cars/m20.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../assets/images/media/cars/m21.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../assets/images/media/cars/m22.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../assets/images/media/cars/m23.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../assets/images/media/cars/m24.jpg" alt="img"></div>

											</div>
											<div class="carousel-item ">
												<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="../assets/images/media/cars/m1.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="../assets/images/media/cars/m2.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="../assets/images/media/cars/m3.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="8" class="thumb"><img src="../assets/images/media/cars/m4.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="9" class="thumb"><img src="../assets/images/media/cars/m5.jpg" alt="img"></div>
											</div>
											<div class="carousel-item ">
												<div data-target="#carousel" data-slide-to="10" class="thumb"><img src="../assets/images/media/cars/m6.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="11" class="thumb"><img src="../assets/images/media/cars/m7.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="12" class="thumb"><img src="../assets/images/media/cars/m8.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="13" class="thumb"><img src="../assets/images/media/cars/m9.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="14" class="thumb"><img src="../assets/images/media/cars/m10.jpg" alt="img"></div>
											</div>
											<div class="carousel-item ">
												<div data-target="#carousel" data-slide-to="15" class="thumb"><img src="../assets/images/media/cars/m11.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="16" class="thumb"><img src="../assets/images/media/cars/m12.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="17" class="thumb"><img src="../assets/images/media/cars/m13.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="18" class="thumb"><img src="../assets/images/media/cars/m14.jpg" alt="img"></div>
												<div data-target="#carousel" data-slide-to="19" class="thumb"><img src="../assets/images/media/cars/m15.jpg" alt="img"></div>
											</div>

										</div>
										<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="">
						<div class="">
							<div class="border-0">
								<div class="wideget-user-tab wideget-user-tab3">
									<div class="tab-menu-heading">
										<div class="tabs-menu1">
											<ul class="nav">


											</ul>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="panel-group1" id="accordion2">
											<div class="panel panel-default">
												<div class="panel-heading1 ">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-1" aria-expanded="false">Overview</a>
													</h4>
												</div>
												<div id="car-comapre-1" class="accordion" role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0 bg-white">
														<p>Killington odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
														<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-2" aria-expanded="false">Car Dekho Benefits</a>
													</h4>
												</div>
												<div id="car-comapre-2" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
														<div class="table-responsive">
															<div class="container">
																<div class="section-title center-block text-left bg-white">

																</div>
																<div id="small-categories" class="owl-carousel owl-carousel-icons2 bg-white ">
																	<div class="item">
																		<div class="card mb-0">
																			<div class="card-body">
																				<div class="cat-item text-center ">

																					<div class="cat-img1 bg-white">
																						<img src="../assets/images/media/r.jpg" alt="img" class="mx-auto">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">7 Days Money Back Guarantee</h5>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="card mb-0">
																			<div class="card-body">
																				<div class="cat-item text-center">

																					<div class="cat-img1">
																						<img src="../assets/images/media/w.jpg" alt="img" class="mx-auto">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">6 Months Comprehensive Warranty</h5>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="item">
																		<div class="card mb-0">
																			<div class="card-body">
																				<div class="cat-item text-center">

																					<div class="cat-img1">
																						<img src="../assets/images/media/a.jpg" alt="img" class="mx-auto">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1">6 Months Pan Road Side Assistance</h5>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="item">
																		<div class="card mb-0">
																			<div class="card-body">
																				<div class="cat-item text-center">

																					<div class="cat-img1">
																						<img src="../assets/images/media/ff.jpg" alt="img" class="mx-auto">
																					</div>
																					<div class="cat-desc">
																						<h5 class="mb-1"><br>Free RC Transfer</h5>


																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>


														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-3" aria-expanded="false">Car Features</a>
													</h4>
												</div>
												<div id="car-comapre-3" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
														<div class="tab-pane" id="tab-3">
															<div class="row">
																<div class="col-md-6">
																	<div class="table-responsive">
																		<table class="table">

																			<tbody>
																				<tr>
																					<td>Power Steering</td>
																					<td><i class="icon icon-check text-success"></i></td>
																				</tr>
																				<tr>
																					<td>Power Windows Front</td>
																					<td><i class="icon icon-check text-success"></i></td>
																				</tr>
																				<tr>
																					<td>Air Conditioner</td>
																					<td><i class="icon icon-check text-success"></i></td>
																				</tr>
																				<tr>
																					<td>Passenger Airbag</td>
																					<td><i class="icon icon-close text-danger"></i></td>
																				</tr>
																				<tr>
																					<td>Fog Lights - Front</td>
																					<td><i class="icon icon-close text-danger"></i></td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>


																<div class="col-md-0">
																	<div class="table-responsive">
																		<table class="table ">

																			<tbody>

																				<tr>
																					<td>Anti Lock Braking System</td>
																					<td><i class="icon icon-check text-success"></i></td>
																				</tr>
																				<tr>
																					<td>Driver Airbag</td>
																					<td><i class="icon icon-check text-success"></i></td>
																				</tr>
																				<tr>
																					<td>Wheel Covers</td>
																					<td><i class="icon icon-check text-success"></i></td>
																				</tr>
																				<tr>
																					<td>Automatic Climate Control</td>
																					<td><i class="icon icon-close text-danger"></i></td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<br>


					<!--Comments-->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Rating And Reviews</h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>5</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-success w-100">9,232</div>
										</div>
									</div>
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i>4</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-info w-80">8,125</div>
										</div>
									</div>
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i> 3</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-primary w-60">6,263</div>
										</div>
									</div>
									<div class="mb-4">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i> 2</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-secondary w-30">3,463</div>
										</div>
									</div>
									<div class="mb-5">
										<p class="mb-2">
											<span class="fs-14 ml-2"><i class="fa fa-star text-yellow mr-2"></i> 1</span>
										</p>
										<div class="progress progress-md mb-4 h-4">
											<div class="progress-bar bg-orange w-20">1,456</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--/Comments-->

				</div>

				<!--Right Side Content-->

				<div class="col-xl-4 col-lg-4 col-md-12 ">
					<div class="card ">
						<div class="profile-pic mb-0  ">
							<h4 class="mb-4 text-left ">Maruti Celerio</h4>
							<div>


								<h6 class="font-weight-normal text-left">VXI 1.2 BS IV</h6><br>
								<h6 class="font-weight-normal text-left">EMI starts from ₹ 10,732</h6><br>
								<h6 class="text-bark font-weight-strong left-block text-bold"><b>₹ 5,30,000</h6><b>
									<a href="personal-blog.html" class="btn btn-primary btn-sm">What's Included?</a></h6><br><br>
									<a href="personal-blog.html" class="btn btn-primary btn-sm">Book Now @ ₹11000</a></h6>
									<a href="personal-blog.html" class="btn btn-primary btn-sm">Shedlude Test Drive</a></h6></br>


							</div>



						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>

								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> robert123@gmail.com</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-body"> 0-235-657-24587</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 mb-2"></i></span><a href="#" class="text-body">http://spruko.com/</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-home mr-3 mb-2"></i></span><a href="#" class="text-body">Home Delivery Available</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-map-marker mr-3 "></i></span><a class="text-body"> Available at Store</a></h6>
									<h6><span class="font-weight-semibold"></i></span><a class="text-body">Cardekho Trustmark , Vardhman Premium Mall Outer Ring Road Pitampura Delhi,</a></h6>
								</div>
								<div class=" item-user-icons mt-4">
									<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>

						</div>

					</div>






				</div>
				<!--/Right Side Content-->

	</section>
	<!--/listing-->

	<!-- Newsletter-->
	<section class="sptb2 bg-white border-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-xl-6 col-md-12">
					<div class="sub-newsletter">
						<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
						<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
					</div>
				</div>
				<div class="col-lg-5 col-xl-6 col-md-12">
					<div class="input-group sub-input mt-1">
						<input type="text" class="form-control input-lg " placeholder="Enter your Email">
						<div class="input-group-append ">
							<button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
								Subscribe
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Newsletter-->

	<!--Section-->
	<section class="sptb border-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="bg-white p-0 border">
						<div class="card-body">
							<h6 class="fs-18 mb-4">Do You Want to sell A Car?</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
							<a href="#" class="btn btn-primary text-white">Sell a Car</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="bg-white p-0 mt-5 mt-md-0 border">
						<div class="card-body">
							<h6 class="fs-18 mb-4">Are You Looking For A Car?</h6>
							<hr class="deep-purple  accent-2 border-success mb-4 mt-0 d-inline-block mx-auto">
							<p>it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
							<a href="#" class="btn btn-success text-white">Buy a Car</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Section-->

	<!--latest Posts-->
	<section class="sptb2 bg-white border-top">
		<div class="container">
			<h6 class="fs-18 mb-4">Latest Posts</h6>
			<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
			<div class="row">
				<div class="col-md-12 col-lg-4">
					<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4">
						<img class="w-8 h-8 mr-4" src="../assets/images/media/6.png" alt="img">
						<div class="media-body">
							<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
							<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
							<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-light p-4">
						<img class="w-8 h-8 mr-4" src="../assets/images/media/4.png" alt="img">
						<div class="media-body">
							<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
							<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
							<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
					<div class="d-flex mt-0 mb-0 border bg-light p-4 box-shadow2">
						<img class="w-8 h-8 mr-4" src="../assets/images/media/2.png" alt="img">
						<div class="media-body">
							<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Fuel Effeciency Car</a></h4>
							<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 14th Aug 2019</span>
							<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $214 <del>$562</del></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--latest Posts-->

	<?php
	echo view('footer.php');
	echo view('model_view.php');

	?>
</body>

</html>