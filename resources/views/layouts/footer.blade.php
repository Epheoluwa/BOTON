<!-- footer section -->
<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 footer-w3ls1">
				<h3>About Us</h3>
				<p class="footer-p1"> Baton Shipping and Maritime 
					Services Ltd is a company
					managed by group of professionals who have hardcore
					specialized experience in international trade and maritime
					industry. It was incorpated
					under the Companies and 
					Allied Matters Acts, of 1990 of
					Nigeria on July, 17th, 2014. 
				</p>
				<p class="footer-p1">We undertake inspection and quality checks on behalf of their customers, organizing 
					assurance and quality control checks at warehouses, loading point and port of shipments by our most
					experienced personnel in the industry.
				</p>
			</div>
			<div class="col-lg-4 col-md-4 footer-w3ls2">
				<h3>Subscribe</h3>
				<p class="footer-p1">Signup to our mailing list and get updated</p>
				<div class="sub-w3ls">
					<form action="{{route('footer')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="inputEmail1" name="email" id="email" class="col-lg-4 control-label"></label>  
							<input type="email" name="email" id="email" class="form-control" id="inputEmail1" placeholder="Email" required>
						</div>
						<div class="form-group">
							<button type="submit" class="btn-outline">Subscribe</button>
						</div>
					</form>
				</div>	
			</div>
			<div class="col-lg-4 col-md-4 footer-w3ls3">
				<h3>Our Social Links</h3>
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
					<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-7 copy-w3ls1">
				<ul class="nav-links">
					<li><a href="{{ route('home')}}">Home</a></li>
					<li><a href="{{ route('about')}}">About</a></li>
					<li><a href="{{ route('service')}}">Services</a></li>
					<li><a href="{{ route('team')}}">Team</a></li>
					<li><a href="{{ route('contact')}}">Contact</a></li>
				</ul>
			</div>
			<div class="col-lg-5 copy-w3ls2">
				<p class="copyright">&copy; 2021 Baton Shipping and Maritime Services . All rights reserved </p>
			</div>
		</div>
	</div>
</section>
<!-- /footer section -->
