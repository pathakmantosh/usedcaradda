<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	<?php echo view('topbar.php'); ?>
<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 col-lg-10 col-md-10 d-block mx-auto">
								
								<div class="search-background bg-transparent mt-5">
									<div class="form row no-gutters ">
										<div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0 border-right-0" id="text4" placeholder="Search Product">
										</div>
										<div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
											<input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
											<span><i class="fa fa-map-marker location-gps mr-1"></i> </span>
										</div>
										<div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
												<optgroup label="Categories">
													<option>Choose Make</option>
													<option value="1">Champlain</option>
													<option value="2">Caledonia</option>
													<option value="3">Chittenden</option>
													<option value="4">Shelburne</option>
													<option value="5">Exercitationem</option>
													<option value="6">Bennington</option>
													<option value="7">Brattleboro</option>
													<option value="8">Killington</option>
													<option value="9">Monastery</option>
													<option value="10">Sherbrooke</option>
												</optgroup>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0 right-0">Search Here</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
		<!--Section-->

		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Used car</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Categories</a></li>
						<li class="breadcrumb-item active" aria-current="page">Used car</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<!--Left Side Content-->
					<div class="col-xl-3 col-lg-3 col-md-12">
						<div class="card">
							<div class="card-body"><h5>Location</h5><br>
								<div class="input-group">
									<input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Location">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3">
											Search
											
	 

										</button>
									</div>
								</div>
							</div>
						</div>
						
						<div class="card overflow-hidden">
							<div class="px-4 py-3 border-bottom">
								<h4 class="mb-0">Categories</h4>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Champlain<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Caledonia<span class="label label-secondary float-right">22</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Chittenden<span class="label label-secondary float-right">78</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Shelburne<span class="label label-secondary float-right">35</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Exercitationem<span class="label label-secondary float-right">23</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Bennington<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Brattleboro<span class="label label-secondary float-right">45</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Killington<span class="label label-secondary float-right">34</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Monastery<span class="label label-secondary float-right">12</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Sherbrooke<span class="label label-secondary float-right">18</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Harani<span class="label label-secondary float-right">02</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Perspiciatis<span class="label label-secondary float-right">15</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Slea<span class="label label-secondary float-right">32</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Blanditiis<span class="label label-secondary float-right">23</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Shrinking <span class="label label-secondary float-right">19</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Volkswagen<span class="label label-secondary float-right">12</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Killington<span class="label label-secondary float-right">05</span></a>
											</span>
										</label>
									</div>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Price Range</h4>
							</div>
							<div class="card-body">
								<div class="h6">
								   <input type="text" id="price">
								</div>
								<div id="mySlider"></div>
							</div>
							<div class="px-4 py-3 border-bottom">
								<h4 class="mb-0">Condition</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
								<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											All
										</span>
									</label>

									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											New
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Used
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox3" value="option2">
										<span class="custom-control-label">
											Certified Pre-Owned
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Year</h4>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="form-group col-md-6 mb-0">
										<label for="inputState1" class="col-form-label">Min</label>
										<select id="inputState1" class="form-control select2">
											<option>1995</option>
											<option>1996</option>
											<option>1997</option>
											<option>1998</option>
											<option>1999</option>
											<option>2000</option>
											<option>2001</option>
											<option>2002</option>
											<option>2003</option>
											<option>2004</option>
											<option>2005</option>
											<option>2006</option>
											<option>2007</option>
											<option>2008</option>
											<option>2009</option>
											<option>2010</option>
											<option>2011</option>
											<option>2012</option>
											<option>2013</option>
											<option>2014</option>
											<option>2015</option>
											<option>2016</option>
											<option>2017</option>
											<option>2019</option>
											<option>2019</option>
											<option>2020</option>
										</select>
									</div>
									<div class="form-group col-md-6 mb-0">
										<label for="inputState2" class="col-form-label">Max</label>
										<select id="inputState2" class="form-control select2">
											<option>2020</option>
											<option>2019</option>
											<option>2019</option>
											<option>2017</option>
											<option>2016</option>
											<option>2015</option>
											<option>2014</option>
											<option>2013</option>
											<option>2012</option>
											<option>2011</option>
											<option>2010</option>
											<option>2009</option>
											<option>2008</option>
											<option>2007</option>
											<option>2006</option>
											<option>2005</option>
											<option>2004</option>
											<option>2003</option>
											<option>2002</option>
											<option>2001</option>
											<option>2000</option>
											<option>1999</option>
											<option>1998</option>
											<option>1997</option>
											<option>1996</option>
											<option>1995</option>
										</select>
									</div>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Posted By</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
										<span class="custom-control-label">
											Dealer
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Individual
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-0">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											Reseller
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Fuel Type</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option1">
										<span class="custom-control-label">
											Electric
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
										<span class="custom-control-label">
											Diesel
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
										<span class="custom-control-label">
											Petrol
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
										<span class="custom-control-label">
											Hybrid
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
										<span class="custom-control-label">
											Petrol+CNG
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox11" value="option2">
										<span class="custom-control-label">
											Petrol+LPG
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Body Type</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option1">
										<span class="custom-control-label">
											Convertable
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Coupe
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Crossover
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Hatchback
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Muv
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Quadricycle
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											Ringer Ace
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox12" value="option2">
										<span class="custom-control-label">
											SUV
										</span>
									</label>
								</div>
							</div>
							<div class="px-4 py-3 border-bottom border-top">
								<h4 class="mb-0">Transmission</h4>
							</div>
							<div class="card-body">
								<div class="filter-product-checkboxs">
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox13" value="option1">
										<span class="custom-control-label">
											AMT
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox13" value="option2">
										<span class="custom-control-label">
											Automatic
										</span>
									</label>
									<label class="custom-control custom-checkbox mb-2">
										<input type="checkbox" class="custom-control-input" name="checkbox13" value="option2">
										<span class="custom-control-label">
											Manual
										</span>
									</label>
								</div>
							</div>
							<div class="card-footer">
								<a href="#" class="btn btn-secondary btn-block">Apply Filter</a>
							</div>
						</div>
						<div class="card mb-lg-0">
							<div class="card-header">
								<h3 class="card-title">Shares</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-filter-icons text-center">
									<a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
									<a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--/Left Side Content-->

					<div class="col-xl-9 col-lg-9 col-md-12">
						<!--Lists-->
						<div class=" mb-0">
							<div class="">
								<div class="item2-gl ">
                                <div class="row">
									<div class="col-md-12">
										<div class="panel-group1" id="accordion2">
											<div class="panel panel-default">
                                            
	                                            <h3>Second Hand cars</h3>
					
				                            
												</div>
												<div id="car-comapre-1" class="accordion" role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0 bg-white">
													There are 2851 certified second-hand cars in Mumbai currently available for sale of brands like Maruti, Hyundai, Honda, Toyota, Mahindra. Used/Old cars price start from 2.4 Lakh in Mumbai. The most popular used cars in Mumbai are Maruti Wagon R (Rs. 85,000 - 6.25 Lakh),Maruti Ertiga (Rs. 5 Lakh - 12.75 Lakh),Hyundai I20 (Rs. 2.15 Lakh - 11.75 Lakh).To know more about used cars prices, photos, mileage, reviews, and other details, please select your desired model from the list below.
													</div>
												</div>
											</div>
											
											<div class="panel panel-default">
												<div class="panel-heading1">
													<h4 class="panel-title1">
														<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-3" aria-expanded="false">Read more</a>
													</h4>
													
												</div>
												
												<div id="car-comapre-3" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
													<div class="panel-body border border-top-0">
													<div class="tab-pane" id="tab-3"><h5>Top 5 used car</h5>
											<div class="row">
												<div class="col-md-6">
													<div class="table-responsive">
														<table class="table table-bordered border-top mb-0 ">
															<tbody>
																<tr>
																	<td>MODEL</td>
																	<td>PRICE</td>
																</tr>
																<tr>
																	<td>Maruti Wagon R</td>
																	<td>Rs. 85,000 - 6.25 Lakh*</td>
																</tr>
																<tr>
																	<td>Maruti Ertiga</td>
																	<td>Rs. 5 Lakh - 12.75 Lakh*</i></td>
																</tr>
																<tr>
																	<td>Hyundai I20</td>
																	<td>Rs. 2.15 Lakh - 11.75 Lakh*</i></td>
																</tr>
																<tr>
																	<td>Maruti Swift Dzire</td>
																	<td>Rs. 1.1 Lakh - 8.15 Lakh*</i></td>
																</tr>
																<tr>
																	<td>Maruti Swift</td>
																	<td>Rs. 1.15 Lakh - 8.25 Lakh*</i></td>
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
								<br>
								<h4>Used car </h4><br>
									<div class="tab-content">
										<div class="tab-pane active" id="tab-11">
										<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
													<div class="arrow-ribbon bg-primary">Sale</div>
														<div class="item-card9-imgs">
															<a class="link" href="cars.html"></a>
															<img src="../assets/images/media/cars/c1.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														<div class="item-overly-trans">
															<div class="rating-stars">
																<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
																<div class="rating-stars-container">
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
																</div>
															</div>
															<span><a href="cars.html" class="bg-gray">Used</a></span>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																</div>
																<a href="cars.html" class="text-dark"><h4 class="font-weight-semibold mt-1">Exercitationem</h4></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  5 days ago</span></a>
																</div>
																<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4 pr-4 pl-4">
															<div class="item-card9-footer d-sm-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-bold mb-0 mt-0">$862.00</h4>
																</div>
																<div class="ml-auto">
																	<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i>  Manual</a>
																	<a href="#" class="mr-4" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																	<a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
													<div class="arrow-ribbon bg-primary">Sale</div>
														<div class="item-card9-imgs">
															<a class="link" href="cars.html"></a>
															<img src="../assets/images/media/cars/c2.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														<div class="item-overly-trans">
															<div class="rating-stars">
																<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
																<div class="rating-stars-container">
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
																</div>
															</div>
															<span><a href="cars.html" class="bg-gray">Used</a></span>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																</div>
																<a href="cars.html" class="text-dark"><h4 class="font-weight-semibold mt-1">Exercitationem</h4></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  5 days ago</span></a>
																</div>
																<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4 pr-4 pl-4">
															<div class="item-card9-footer d-sm-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-bold mb-0 mt-0">$862.00</h4>
																</div>
																<div class="ml-auto">
																	<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i>  Manual</a>
																	<a href="#" class="mr-4" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																	<a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
											
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
													<div class="arrow-ribbon bg-primary">Sale</div>
														<div class="item-card9-imgs">
															<a class="link" href="cars.html"></a>
															<img src="../assets/images/media/cars/c3.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														<div class="item-overly-trans">
															<div class="rating-stars">
																<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="4">
																<div class="rating-stars-container">
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
																</div>
															</div>
															<span><a href="cars.html" class="bg-gray">Used</a></span>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<div class="rating-stars">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																</div>
																<a href="cars.html" class="text-dark"><h4 class="font-weight-semibold mt-1">Exercitationem</h4></a>
																<div class="item-card9-desc mb-2">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i>  5 days ago</span></a>
																</div>
																<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4 pr-4 pl-4">
															<div class="item-card9-footer d-sm-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-bold mb-0 mt-0">$862.00</h4>
																</div>
																<div class="ml-auto">
																	<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i>  Manual</a>
																	<a href="#" class="mr-4" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
																	<a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</div>
									
									
											
											
										
												
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									<ul class="pagination mb-3">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--/Lists-->
					</div>
				</div>
			</div>
		</section>
		<!--/Listing-->

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

		<!-- Recent Post-->
		<section class="sptb2 border-top">
			<div class="container">
				<h6 class="fs-18 mb-4">Latest Posts</h6>
				<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/6.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Buy a CrusaderRecusandae</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 13th May 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $128 <del>$218</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-5 mb-lg-0 border bg-white p-4 box-shadow2">
							<img class="w-8 h-8 mr-4" src="../assets/images/media/4.png" alt="img">
							<div class="media-body">
								<h4 class="mt-0 mb-1 fs-16"><a class="text-body" href="#">Best New Car</a></h4>
								<span class="fs-12 text-muted"><i class="fa fa-calendar"></i> 20th Jun 2019</span>
								<div class="h6 mb-0 mt-1 font-weight-normal"><span class="font-weight-semibold">Price:</span> $245 <del>$354</del></div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-4">
						<div class="d-flex mt-0 mb-0 border bg-white p-4 box-shadow2">
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
		<!-- Recent Post-->

		<!--Footer Section-->
		<section>
			<footer class="bg-dark-purple text-white">
				<div class="footer-main">
					<div class="container">
						<div class="row">
							<div class="col-lg-2 col-md-12">
								<h6>Resources</h6>
								 <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li><a href="javascript:;">Our Team</a></li>
									<li><a href="javascript:;">Contact US</a></li>
									<li><a href="javascript:;">About</a></li>
									<li><a href="javascript:;">CrusaderRecusandae</a></li>
									<li><a href="javascript:;">Blog</a></li>
									<li><a href="javascript:;">Terms and Conditions</a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-12">
								<h6>Contact</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled mb-0">
									<li>
										<a href="#"><i class="fa fa-car mr-3 text-primary"></i> New York, NY 10012, US</a>
									</li>
									<li>
										<a href="#"><i class="fa fa-envelope mr-3 text-primary"></i> info12323@example.com</a></li>
									<li>
										<a href="#"><i class="fa fa-phone mr-3 text-primary"></i> + 01 234 567 88</a>
									</li>
									 <li>
										<a href="#"><i class="fa fa-print mr-3 text-primary"></i> + 01 234 567 89</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-4 col-md-12">
								<h6>Download App</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="">
									<a class="btn bg-store fs-16" href=""><i class="fa fa-apple mr-2"></i> App Store</a>
									<a class="btn bg-store fs-16" href=""><i class="fa fa-android mr-2"></i> Google Pay</a>
								</div>
								<h6 class="mb-0 mt-5">Payments</h6>
								<hr class="deep-purple  text-primary accent-2 mb-2 mt-3 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<ul class="footer-payments">
									<li class="pl-0"><a href="javascript:;"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a></li>
									<li><a href="javascript:;"><i class="fa fa-cc-paypal" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-12">
								<h6>Subscribe</h6>
								<hr class="deep-purple  text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="clearfix"></div>
								<div class="input-group w-100">
									<input type="text" class="form-control br-tl-3  br-bl-3 " placeholder="Email">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3"> Subscribe </button>
									</div>
								</div>
								<h6 class="mt-5 mb-3">Follow Us</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<ul class="list-unstyled list-inline">
									<li class="list-inline-item">
										<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
											<i class="fa fa-facebook bg-facebook"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
											<i class="fa fa-twitter bg-info"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
											<i class="fa fa-google-plus bg-danger"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="btn-floating btn-sm rgba-white-slight mx-1 waves-effect waves-light">
											<i class="fa fa-linkedin bg-linkedin"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="bg-dark-purple text-white p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center ">
								Copyright © 2019 <a href="#" class="fs-14 text-primary">Autolist</a>. Designed by <a href="#" class="fs-14 text-primary">Spruko</a> All rights reserved.
							</div>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!--Footer Section-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-rocket"></i></a>

		<!-- JQuery js-->
		<script src="../assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap js -->
		<script src="../assets/plugins/bootstrap-4.3.1/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="../assets/js/jquery.sparkline.min.js"></script>

		<!-- Circle Progress Js-->
		<script src="../assets/js/circle-progress.min.js"></script>

		<!-- Star Rating Js-->
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Owl Carousel js -->
		<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>

		<!--Horizontal Menu-->
		<script src="../assets/plugins/horizontal-menu/horizontal.js"></script>

		<!--JQuery TouchSwipe js-->
		<script src="../assets/js/jquery.touchSwipe.min.js"></script>

		<!--Select2 js -->
		<script src="../assets/plugins/select2/select2.full.min.js"></script>
		<script src="../assets/js/select2.js"></script>

		<!-- Cookie js -->
		<script src="../assets/plugins/cookie/jquery.ihavecookies.js"></script>
		<script src="../assets/plugins/cookie/cookie.js"></script>

		<!-- Ion.RangeSlider -->
		<script src="../assets/plugins/jquery-uislider/jquery-ui.js"></script>
		<script src="../assets/plugins/jquery-uislider/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/slider.js"></script>

		<!-- sticky Js-->
		<script src="../assets/js/sticky.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.js"></script>

		<!--Showmore Js-->
		<script src="../assets/js/jquery.showmore.js"></script>
		<script src="../assets/js/showmore.js"></script>

		<!-- Owl Carousel Js-->
		<script src="../assets/js/owl-carousel.js"></script>

		<!-- Custom Js-->
		<script src="../assets/js/custom.js"></script>
	</body>
</html>