<!-- banner section -->
<section class="inner-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header text-center">Contact</h2>
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
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- contact section -->
<section class="our-contacts">
	<div class="container">
		<h3 class="text-center   agileits agileinfo wthree w3-agileits">Connect With Us</h3>
		<p class="text-center  agileits agileits-w3layouts agile w3-agile">Get in touch with us.</p>	
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<form action="{{ route('contact') }}" method="post">
                    @csrf
					<div class="row">
						<div class="form-group col-lg-4">
							<input name="name" type="text"   id="name"  class="form-control user-name" placeholder="Your Name" required/>
						</div>
						<div class="form-group col-lg-4">
							<input  name="email" type="email"  id="email" class="form-control mail" placeholder="Your Email" required/>
						</div>
						<div class="form-group col-lg-4">
							<input name="ph_number" id="ph_number" type="tel"    class="form-control pno" placeholder="Your Phone Number" required/>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12">
							<textarea name="message" id="message" class="form-control"  cols="30" rows="6" placeholder="Your Message" required></textarea>
						</div>
						<div class="form-group col-lg-12">
							<button type="submit" class="btn-outline2">
                                {{ __('Submit') }}
                            </button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="contact-details">
					<h4 class="agileinfo wthree w3-agileits agileits-w3layouts agile w3-agile">Get In Touch</h4>
					<div class="contact-info">
						<div class="address">	
							<i class="glyphicon glyphicon-globe"></i> 
							<p class="p3">1A Commercial Road, (Aries Block)</p> 
							<p class="p4">Eleganza plaza, Apapa,Lagos</p>
						</div>
                        <div class="address">	
							<i class="glyphicon glyphicon-globe"></i>
							<p class="p3"> 1A Gambia ama Choba,</p> 
							<p class="p4">Port Harcourt, Rivers State.</p>
							
						</div>
						<div class="phone">
							<i class="glyphicon glyphicon-phone-alt"></i>
							<p class="p3">+234 70 3627 9058</p>
                            <!--
							    <p class="p4">+00 1010101010</p>
                            -->
						</div>
						<div class="email-info">
							<i class="glyphicon glyphicon-envelope"></i>
							<p class="p3"><a href="mailto:batonshippingltd@gmail.com">batonshippingltd@gmail.com</a></p> 
						</div>
					</div>
					<div class="footer-links">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>	
					</div>
				</div>	
			</div>	
		</div>
	</div>
</section>
<!-- /contact section -->	

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
