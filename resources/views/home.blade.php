@include('layouts.banner')
@include('layouts.navbar')


<!-- about section -->
<section class="about-us">
	<h2 class="text-center w3layouts w3 w3l w3ls">About Us</h2>
	<span class="about-line"></span>
	<p class="text-center w3layouts w3 w3l w3ls">Baton Shipping and Maritime Services Ltd .</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 about-w3ls1">
				<!-- ACCORDION -->
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<h4 class="panel-title asd">
									<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
									Who are we
								</h4>	
							</a>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body panel_text">
								<div class="scrollbar" id="style-2">
									Baton Shipping and Maritime 
									Services Ltd is a company
									managed by group of professionals who have hardcore
									specialized experience in international trade and maritime
									industry.
									
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<h4 class="panel-title asd">
									<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
									Our Vision
								</h4>	
							</a>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body panel_text">
								To Be one of Best Shipping Agents in West Africa.Ensuring shipping is made easy with less or minimal risk for every interested shipper and consumer.
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<h4 class="panel-title asd">	
									<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span><i class="glyphicon glyphicon-menu-up" aria-hidden="true"></i>
									Our Mission									
								</h4>
							</a>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body panel_text">
								To Serve with Excellence. we achieve this by making good use of our chartering & professional team for every operation execution.
								 And from every job reviews we get from our clients, we give ourselves ultimatly to proviing quality service.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 about-w3ls2">
				<div id="Fader" class="fader"> 
					<img class="slide img-responsive" src="images/port-img5.jpg" alt="w3layouts" title="w3layouts"/> 
					<img class="slide img-responsive" src="images/cargo2.jpg" alt="w3layouts" title="w3layouts"/> 
					<img class="slide img-responsive" src="images/cargo1.jpg" alt="w3layouts" title="w3layouts"/>
					<div class="fader_controls">
						<ul class="pager_list">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>
<!-- /about section -->



<!-- objectives section -->
<section class="objectives">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 obj-w3ls1">
				<h3>Our Services</h3>
				<h4>We are Shipping Agency and Marine Services company</h4>
				<div class="row">
					<div class="col-sm-6">
						<a href="blogpost.html" class="object-agile1"><h5>Shipping Services</h5></a>
						<p>We carry business of Freight forwarding services, Import, Export, Customs and Ship brokerage Services for customers.</p>
						<a href="{{ route('service') }}" class="object-agile2">Read More</a>
					</div>
					<div class="col-sm-6">
						<a href="blogpost.html" class="object-agile1"><h5>Vessel Chandling</h5></a>
						<p>Baton Shipping and Maritime 
							Services Ltd acts as a license 
							charter Agents for vessels 
							including tug boats, barges, oil tanker vessels, trawler services, bulk. dry and general cargo vessels, passenger vessel servicesand small boat services.
						</p>
						<a href="{{ route('service') }}" class="object-agile2">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 obj-w3ls2">
				<div class="object-img-w3ls">
					<img src="images/ship1.jpg" class="img-circle img-responsive" alt="w3layouts" >
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /objectives section -->
<!-- testimonial section -->
<section class="testimonials">
	<h3 class="text-center agileits agileinfo wthree w3-agileits">What Our Customers Say</h3>
	<p class="text-center agileits agileinfo wthree w3-agileits"></p>
	<div class="container">
		<div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel1" data-slide-to="1"></li>
				<li data-target="#myCarousel1" data-slide-to="2"></li>
				<li data-target="#myCarousel1" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
					<img src="images/test1.png" alt="test1" class="img-responsive test">
					<h4 class="text-center"><span>Johnny Blaze</span> - Business Man</h4>
				</div>
				<div class="item">
					<blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
					<img src="images/test2.png" alt="test1" class="img-responsive test">
					<h4 class="text-center"><span>Kate Winslet</span> - Executive Manager</h4>
				</div>
				<div class="item">
					<blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
					<img src="images/test3.png" alt="test1" class="img-responsive test">
					<h4 class="text-center"><span>Max Payne</span> - CEO</h4>
				</div>
				<div class="item">
					<blockquote>" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. "</blockquote>
					<img src="images/test4.png" alt="test1" class="img-responsive test">
					<h4 class="text-center"><span>Britney Spears</span> - Marketing Manager</h4>
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</section>
<!-- /testimonial section -->
<!-- statistics section -->
<section class="stats">
	<div class="container">
		<h3 class="text-center agileits-w3layouts agile w3-agile">Important Statistics About Us</h3>
		<p class="text-center agileits-w3layouts agile w3-agile">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>	
		<div class="row">
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-1">
				<div class="numscroller" data-slno='1' data-min='0' data-max='158' data-delay='3' data-increment="1">85</div>
				<h4>Companies</h4>
				<span class="divider1"></span>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-2">
				<div class="numscroller" data-slno='1' data-min='0' data-max='63' data-delay='3' data-increment="1">95</div>
				<h4>New Clients</h4>
				<span class="divider1"></span>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-3">
				<div class="numscroller" data-slno='1' data-min='0' data-max='421' data-delay='3' data-increment="1">80</div>
				<h4>Completed Projects</h4>
				<span class="divider1"></span>
			</div>
			<div class="col-md-3 col-sm-3 stats-grid stats-grid-4">
				<div class="numscroller" data-slno='1' data-min='0' data-max='562' data-delay='3' data-increment="1">90</div>
				<h4>Happy Clients</h4>
			</div>
		</div>
	</div>
</section>
<!-- /statistics section -->

<!-- partners section -->
<section class="partners">
	<div class="container">
		<h3 class="text-center">Our Clients</h3>
		<p class="text-center">Some of our satisfied clients and partners.</p>
		<div class="sliderfig">
			<ul id="flexiselDemo1">			
				<li>
					<img src="images/client_1.png" class="img-responsive" />
				</li>
				<li>
					<img src="images/client_2.png" class="img-responsive" />
				</li>
				<li>
					<img src="images/client_3.png" class="img-responsive" />
				</li>
				<li>
					<img src="images/client_4.png" class="img-responsive" />
				</li>
				<li>
					<img src="images/client_5.PNG" class="img-responsive" />
				</li>
				<li>
					<img src="images/part-img5.png" class="img-responsive" />
				</li>
				<li>
					<img src="images/part-img1.jpg" class="img-responsive" />
				</li>
			</ul>
		</div>
	</div>
</section>
<!-- /partners section -->
@include('layouts.footer')

<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src=" {{ asset('js/jquery.min.js')}}"></script>
<script src=" {{ asset('js/bootstrap.min.js')}} "></script>
<script src=" {{ asset('js/SmoothScroll.min.js')}}"></script>
<!-- js for back to top -->
<script src=" {{ asset('js/top.js')}} "></script>
<!-- /js for back to top -->
<!-- js for navigation -->
<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
			$document.ready(function(){
				$('.main .nav li.active')
							.click(function (e) {
						$('.main .nav li.active')
							.removeClass('active');
						$(this).addClass('active');
				});
			});
</script>
<!-- /js for navigation -->
<!-- js for about section -->
<script src=" {{ asset('js/slideshow.js')}} "></script>
<!-- /js for about section -->
<!-- js for stats section -->
<script type="text/javascript" src=" {{ asset('js/numscroller-1.0.js')}} "></script>
<!-- /js for stats section -->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src=" {{ asset('js/jquery.flexisel.js')}} "></script>
<!-- /js files -->