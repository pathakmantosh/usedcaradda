<!doctype html>
<html class="no-js" lang="en">
<?php echo view('header.php'); ?>

<body>
	<?php echo view('topbar.php'); ?>

	

	<div class="bg-white border-bottom">
		<div class="container">
			<div class="page-header">
				<h4 class="page-title">Used cars</h4>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Categories</a></li>
					<li class="breadcrumb-item active" aria-current="page"> used Cars list</li>
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
						<div class="card-body"><br>
							<h5>Location</h5><br>
							<div class="input-group">
								<input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
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
											<a href="#" class="text-dark">Maruti<span class="label label-secondary float-right"></span></a>
										</span>

									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Maruti Wagon R</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2"> Maruti Swift</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Maruti Swift Dzire</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Hyundai<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Hyundai Verna</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2"> Hyundai Creta</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Hyundai EON</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Honda<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Honda CR-V</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2"> Honda Accord</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Honda Brio</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Toyota<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Toyota Fortuner</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2"> Toyota Etios</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Toyota Etios Liva</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Mahindra<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Mahindra XUV500</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2"> Mahindra Scorpio</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Mahindra Bolero</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Ford<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Ford Figo</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2"> Ford Figo Aspire</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Ford Ecosport</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Volkswagen<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Volkswagen Vento</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Volkswagen Polo</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Volkswagen Ameo</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Mercedes-Benz<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Mercedes-Benz E-Class</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Mercedes-Benz GLC</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Mercedes-Benz GLC</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Renault<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Renault Duster</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Renault KWID</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Renault Captur</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Tata<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Tata Indigo</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Tata Nano</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3"> Tata Sumo</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Audi<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Audi Q3</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Audi Q5 2021</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">Audi Q7</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Nissan<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Nissan Sunny</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Nissan Micra</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">Nissan Terra</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">BMW<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> BMW 3 Series</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">BMW 5 Seriesa</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">BMW X1</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Chevrolet<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Chevrolet Cruze</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Chevrolet Spark</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">Chevrolet Beat</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Datsun<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1">Datsun RediGO</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Datsun GO Plus</label><br>
										<br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Volvo<span class="label label-secondary float-right"></span></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Volvo S60</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Volvo S60 Cross Country</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">Volvo XC60</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Skoda<span class="label label-secondary float-right"></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Skoda Rapid</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Skoda Superb</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">Skoda Kodiaq</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">MG<span class="label label-secondary float-right"></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> MG Hector</label><br>

										<br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Land Rover<span class="label label-secondary float-right"></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Land Rover Freelander 2</label><br>
										<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
										<label for="vehicle2">Land Rover Range Rover Evoque</label><br>
										<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
										<label for="vehicle3">Land Rover Range Rover Sport</label><br><br>
									</div>
									<label class="custom-control custom-checkbox mb-3">
										<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
										<span class="custom-control-label">
											<a href="#" class="text-dark">Kia<span class="label label-secondary float-right"></a>
										</span>
									</label>
									<div style="margin-left:20px;">
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
										<label for="vehicle1"> Kia Seltos</label><br>
										<br><br>
									</div>
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
										<option>2021</option>
										<option>2020</option>
										<option>2019</option>
										<option>2018</option>
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

				</div>
				<!--/Left Side Content-->

				<div class="col-xl-8 col-lg-8 col-md-12">
					<!--Lists-->
					<div class="card">
						<div class="border-3">
							<div class="row">
								<div class="col-md-12 ">
									<div class="panel-group1" id="accordion2">
										<div class="panel panel-default">
											<div class="panel-heading1 ">
												<h4 class="panel-title1 border-bottom">
													<a class="text-dark">
														<h3>Second Hand Cars</h3>
													</a>




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
													<div class="tab-pane" id="tab-3">
														<h5>Top 5 used car</h5>
														<div class="row">
															<div class="col-md-6">
																<div class="table-responsive-center">
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




							<h4 class="panel-title1">
								<a class="text-dark">
									<h3>Used Cars</h3>
								</a>




						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab-10">
								<div class="card overflow-hidden">
									<div class="d-md-flex">
										<div class="item-card9-img">
											<div class="arrow-ribbon bg-primary">Sale</div>
											<div class="item-card9-imgs">
												<a class="link" href="cars.html"></a>
												<img src="<?= $baseURL; ?>/assets/images/media/cars/c1.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card9-icons">
												<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="item-overly-trans">
												<div class="rating-stars">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
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
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													</div>
													<a href="cars.html" class="text-dark">
														<h4 class="font-weight-semibold mt-1">Exercitationem</h4>
													</a>
													<div class="item-card9-desc mb-2">
														<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>
														<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
													</div>
													<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
												</div>
											</div>
											<div class="card-footer pt-4 pb-4 pr-4 pl-4">
												<div class="item-card9-footer d-sm-flex">
													<div class="item-card9-cost">
														<h4 class="text-dark font-weight-bold mb-0 mt-0">₹862.00</h4>
													</div>
													<div class="ml-auto">
														<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
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
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
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
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													</div>
													<a href="cars.html" class="text-dark">
														<h4 class="font-weight-semibold mt-1">Exercitationem</h4>
													</a>
													<div class="item-card9-desc mb-2">
														<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Pune</span></a>
														<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
													</div>
													<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
												</div>
											</div>
											<div class="card-footer pt-4 pb-4 pr-4 pl-4">
												<div class="item-card9-footer d-sm-flex">
													<div class="item-card9-cost">
														<h4 class="text-dark font-weight-bold mb-0 mt-0">₹862.00</h4>
													</div>
													<div class="ml-auto">
														<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
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
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
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
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													</div>
													<a href="cars.html" class="text-dark">
														<h4 class="font-weight-semibold mt-1">Exercitationem</h4>
													</a>
													<div class="item-card9-desc mb-2">
														<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> Gujarat</span></a>
														<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
													</div>
													<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
												</div>
											</div>
											<div class="card-footer pt-4 pb-4 pr-4 pl-4">
												<div class="item-card9-footer d-sm-flex">
													<div class="item-card9-cost">
														<h4 class="text-dark font-weight-bold mb-0 mt-0">₹862.00</h4>
													</div>
													<div class="ml-auto">
														<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
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
												<img src="<?= $baseURL; ?>/assets/images/media/cars/c1.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card9-icons">
												<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="item-overly-trans">
												<div class="rating-stars">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
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
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													</div>
													<a href="cars.html" class="text-dark">
														<h4 class="font-weight-semibold mt-1">Exercitationem</h4>
													</a>
													<div class="item-card9-desc mb-2">
														<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>
														<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
													</div>
													<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
												</div>
											</div>
											<div class="card-footer pt-4 pb-4 pr-4 pl-4">
												<div class="item-card9-footer d-sm-flex">
													<div class="item-card9-cost">
														<h4 class="text-dark font-weight-bold mb-0 mt-0">₹862.00</h4>
													</div>
													<div class="ml-auto">
														<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
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
												<img src="<?= $baseURL; ?>/assets/images/media/cars/c1.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card9-icons">
												<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="item-overly-trans">
												<div class="rating-stars">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
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
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													</div>
													<a href="cars.html" class="text-dark">
														<h4 class="font-weight-semibold mt-1">Exercitationem</h4>
													</a>
													<div class="item-card9-desc mb-2">
														<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>
														<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
													</div>
													<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
												</div>
											</div>
											<div class="card-footer pt-4 pb-4 pr-4 pl-4">
												<div class="item-card9-footer d-sm-flex">
													<div class="item-card9-cost">
														<h4 class="text-dark font-weight-bold mb-0 mt-0">₹862.00</h4>
													</div>
													<div class="ml-auto">
														<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
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
												<img src="<?= $baseURL; ?>/assets/images/media/cars/c1.jpg" alt="img" class="cover-image">
											</div>
											<div class="item-card9-icons">
												<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
											</div>
											<div class="item-overly-trans">
												<div class="rating-stars">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
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
														<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													</div>
													<a href="cars.html" class="text-dark">
														<h4 class="font-weight-semibold mt-1">Exercitationem</h4>
													</a>
													<div class="item-card9-desc mb-2">
														<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i>Mumbai</span></a>
														<a href="#" class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> 5 days ago</span></a>
													</div>
													<p class=" leading-tight">Lorem Ipsum available, but the majority have suffered alteration in some form</p>
												</div>
											</div>
											<div class="card-footer pt-4 pb-4 pr-4 pl-4">
												<div class="item-card9-footer d-sm-flex">
													<div class="item-card9-cost">
														<h4 class="text-dark font-weight-bold mb-0 mt-0">₹862.00</h4>
													</div>
													<div class="ml-auto">
														<a href="#" class="mr-4" title="Car type"><i class="fa fa-car text-muted mr-1"></i> Manual</a>
														<a href="#" class="mr-4" title="Kilometrs"><i class="fa fa-road text-muted mr-1"></i> 5000Kms</a>
														<a href="#" class="" title="FuealType"><i class="fa fa-tachometer text-muted mr-1"></i> Disel</a>
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
					</div><br><br><br>
					<div class="bg-white row">
						<h4 class="panel-title1">
							<a class="text-dark">
								<h3>Frequently Asked Questions On Used Car In Ahmedabad</h3>
					</div>
					</a>
					<div class="card">
						<div class="border-3">
							<div class=" bg-white row">
								<div class="col-md-12">
									<div class="panel-group1" id="accordion2">
										<div class="panel panel-default">
											<div class="panel-heading1 ">


												<div class="panel panel-default">
													<div class="panel-heading1">
														<h4 class="panel-title1">
															<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-3" aria-expanded="false">Q 1. How many used cars available in Ahmedabad</a>
														</h4>
													</div>
													<div id="car-comapre-3" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
														<div class="panel-body border border-top-0">
															561 used cars are available in Ahmedabad of popular brands like Maruti, Hyundai, Honda, Toyota, Mahindra & more.
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="panel panel-default">
											<div class="panel-heading1">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-4" aria-expanded="false">Q 2. What will be the starting price of a used car in Ahmedabad?</a>
												</h4>
											</div>
											<div id="car-comapre-4" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0">
													<div class="table-responsive">
														561 used car are available in Ahmedabad & the price starts at Rs 55,000 in Ahmedabad.
													</div>
												</div>
											</div>

										</div>


										<div class="panel panel-default">
											<div class="panel-heading1">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-5" aria-expanded="false">Q 3. What are the most popular brands available for used cars in Ahmedabad? </a>
												</h4>
											</div>
											<div id="car-comapre-5" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0">
													<div class="table-responsive">
														CarDekho has a wide inventory of all brands including Maruti, Hyundai, Honda, Toyota, Mahindra & more. Find the best-used car of your choice on CarDekho.
													</div>
												</div>
											</div>
										</div>


										<div class="panel panel-default">
											<div class="panel-heading1">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-6" aria-expanded="false">Q 4. How many used diesel cars available in Ahmedabad?</a>
												</h4>
											</div>
											<div id="car-comapre-6" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0">
													<div class="table-responsive">
														Used cars are available in both petrol and diesel options. 348 second-hand diesel cars available in Ahmedabad. Popular used diesel cars are Ford Ecosport, Maruti Swift, Maruti Swift & more and price starts at Rs 3.4 Lakh.
													</div>
												</div>
											</div>
										</div>


										<div class="panel panel-default">
											<div class="panel-heading1">
												<h4 class="panel-title1">
													<a class="accordion-toggle collapsed border border-top-0" data-toggle="collapse" data-parent="#accordion2" href="#car-comapre-7" aria-expanded="false">Q 5. What body types are available for used cars in Ahmedabad?</a>
												</h4>
											</div>
											<div id="car-comapre-7" class="panel-collapse collapse " role="tabpanel" aria-expanded="false">
												<div class="panel-body border border-top-0">
													<div class="table-responsive">
														Used cars are available in every segment be it Hatchback, Sedan, SUV, Luxury, MUV, Minivan and Pickup Truck cars in Ahmedabad. At CarDekho we have 197 Hatchback, 167 Sedan, 141 SUV, 46 Luxury, 41 MUV, 13 Minivan and 1 Pickup Truck Cars available in Ahmedabad.
													</div>

												</div>
											</div>
										</div>

	</section>


	<div class="bg-white row">
		<div class="col-lg-3 col-md-3 col-sm-3">
			<div class="">
				<div class="mb-lg-0 mb-2">
					<div class="service-card text-center">
						<div class="bg-white ">
							<img src="<?= $baseURL; ?>/assets/images/media/cars/no.1.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">India’s #1 </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Auto Portal </h4>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="">
				<div class="mb-lg-0 mb-4">
					<div class="service-card text-center">
						<div class="bg-white ">
							<img src="../assets/images/media/cars/secure.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Secure & </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px"> Hassle-Free</h4>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="">
				<div class="mb-sm-0 mb-4">
					<div class="service-card text-center">
						<div class="bg-white ">
							<img src="../assets/images/media/cars/fair.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Fair </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Deals</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6">
			<div class="">
				<div class="">
					<div class="service-card text-center">
						<div class="bg-white">
							<img src="../assets/images/media/cars/competitive.png" alt="img">
						</div>
						<div class="servic-data mt-3">
							<h4 class="font-weight-semibold mb-2" style="font-size:18px">Competitive </h4>
							<h4 class="font-weight-semibold mb-2" style="font-size:18px"> Pricing</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div><br><br>
	</section><?php
	echo view('footer.php');
	echo view('model_view.php');

	?>
</body>

</html>
	