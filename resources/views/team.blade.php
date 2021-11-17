<!-- banner section -->
<section class="inner-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="page-header text-center">Team Member</h2>
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
                    <li class="active">Team</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- team section -->
<section class="info">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 info-w3ls1">
				<img src="images/Team-1.jpg" class="img-responsive" >
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 info-w3ls2">
				<div class="info-details">
					<h3>Mr. Ejizu Tochukwu <span>-</span> CHIEF EXECUTIVE OFFICER</h3>
					<p class="info-p">Mr Ejizu Tochukwu is a graduate of accounting from university of portharcourt, rivers state Nigeria(Bsc.acct) in the year 2008. He started business immediately with his father at Vinmartins Nigeria ltd as an executive director logistics for the family business in 2009 and formed Baton Shipping and Maritime Services Ltd as a shipping agency company in 2014. The company is registered with Nigeria ports authority and Nigeria maritime and safety agency (NIMASA) he is versatile and young in all aspects of shipping and logistics in Nigeria. He is happily married with children.</p>
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                    </ul>
				</div>
			</div>   
		</div>
	</div>
</section>

<section class="info">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 info-w3ls1">
				<img src="images/Team-2.jpeg" class="img-responsive" >
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 info-w3ls2"> 
                   
				<div class="info-details">
					<h3>Mr. Daniel Macauley <span>-</span> GENERAL MANAGER</h3>
					<p class="info-p">Mr. Daniel Macauley is a graduate of management science at Auchi Polythenic, Edo state. He is one of the founding staffs at our company, he started with us in 2014 and has been instrumental to the staff and operational capabilities in our company. He is married with children.</p>
					<ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                    </ul>
				</div>
			</div>   
		</div>
	</div>
</section>

<section class="info">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 info-w3ls1">
				<img src="images/Team-3.jpeg" class="img-responsive" >
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 info-w3ls2"> 
				<div class="info-details">
					<h3>Mr. Mumuni Yinka <span>-</span> OPERATIONS MANAGER</h3>
					<p class="info-p">Mr Mumuni Yinka is a graduate of mass communication at university of Ilorin, he has been with the company since 2015 asa graduate trainer abd rose to become the opertions manager, he is well vast in clearing and forwarding shipping operations and logistics. He is married with children.</p>
					<ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                    </ul>
				</div>
			</div>   
		</div>
	</div>
</section>

<section class="info">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 info-w3ls1">
				<img src="images/Team-4.jpeg" class="img-responsive" >
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 info-w3ls2"> 
				<div class="info-details">
					<h3>Mr. Nowa Sunny <span>-</span> DIRECTOR</h3>
					<p class="info-p"> Mr Nowa Sunny is a graduate of economics at cross rivers state university, Calabar. He is a director in our company and chief executive of crystal hall integrated services ltd. He is well vast in maritime, and oil services sector and solid minerals sector of Nigeria economy. He has been a founding diretor of our company since its incorporation.</p>
					<ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
                    </ul>
				</div>
			</div>   
		</div>
	</div>
</section>



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
