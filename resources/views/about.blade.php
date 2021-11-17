<!-- banner section -->
<section class="inner-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header text-center">About Us</h2>
			</div>
		</div>
	</div>
</section>
<!-- /banner section -->
@include('layouts.navbar')
<!-- /navigation --> 
<section class="page-crumb"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	

<!-- about section -->
<section class="about-us">
	<h2 class="text-center w3 w3l w3ls">All you need to know about Us</h2>
	<span class="about-line"></span>
	<p class="text-center w3 w3l w3ls">Baton Shipping and Maritime Services Ltd .</p>
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
								To Be one of Best Shipping Agents in West Africa. Ensuring shipping is made easy with less or minimal risk for every interested shipper and consumer.
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
					<img class="slide img-responsive" src="images/port-img4.jpg" alt="w3layouts"/> 
					<img class="slide img-responsive" src="images/port-img2.jpg" alt="w3layouts"/> 
					<img class="slide img-responsive" src="images/port-img6.jpg" alt="w3layouts"/>
					<div class="fader_controls">
						<ul class="pager_list">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>

<section class="about-us">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <a class="pa_italic">
                        <h4 class="panel-title asd">
                 More About Us
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
                            industry.. It was incorpated
                            under the Companies and 
                            Allied Matters Acts, of 1990 of
                            Nigeria on July, 17th, 2014.
                            The company among her 
                            Articles and Memorandum of 
                            Association could carry on the 
                            business of Shipping and Maritime Services, Shipping Agent,
                            Marine Operations and Manage
                            -ment, Marine Support Services,
                            Installation and Maintenance of 
                            Marine Navigational/Communications Equipment, Chandling 
                            Services, Offshore Marine 
                            Services and Dredging.
                            Baton Shipping and Maritime 
                            Services Ltd acts as a license 
                            charter Agents for vessels 
                            including tug boats, barges, oil tanker vessels, trawler services, bulk. dry and general cargo vessels, passenger vessel services
                            and small boat services.
                            The company also carries on the business of Freight forwarding services, Import, Export, Customs and 
                            Ship brokerage Services for customers.
                            Out company also undertakes inspection and quality checks on behalf of their customers, organizing 
                            assurance and quality control checks at warehouses, loading point and port of shipments by our most
                            experienced personnel in the industry.

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /about section -->
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
				$('.main .nav li.active').click(function (e) {
						$('.main .nav li.active').removeClass('active');
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