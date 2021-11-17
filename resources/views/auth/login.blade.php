@include('layouts.navbar')



<section class="our-contacts">
	<div class="container">
		<div class="row">
			@if ($message = Session::get('error'))
				<div class="alert alert-danger alert-block">
					<button type="button" data-dismiss="alert" >x</button>
					<strong>{{ $message}}</strong>
				</div>
			@endif
				<form action="{{ route('login') }}" method="post">
                    @csrf
					<div class="row">
						<div class="form-group col-lg-6">
							<input  name="email" type="email"  id="email" class="form-control mail" placeholder="Enter Email" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
                        <div class="form-group col-lg-6">
                            <input id="password" type="password" class="form-control pno" name="password" placeholder="Enter Password">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12">
							<button type="submit" class="btn-outline2" style="width: 100px; border: radius 5px;">
                                {{ __('Login') }}
                            </button>
						</div>
					</div>
			    </form>
        </div>
    </div>
</section>


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


