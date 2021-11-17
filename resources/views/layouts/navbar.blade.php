@extends('layouts.header')

@section('content')
<!-- navigation -->
<section class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 nav-w3ls1">
				<div class="logo">
					<a href="{{ route('home') }}" class="logo-w3ls"><img src="images/BATON-5.png" alt="" style="height: 90px; width: 100px; "></a>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 nav-w3ls2">
				<div class="main clearfix">
					<nav id="menu" class="nav">					
						<ul>
							<li>
								<a href="{{ route('home') }}" class="{{  request()->is('home') ? 'active' : '' }}">
									<span class="icon"><i aria-hidden="true" class="icon-home"></i></span>
									<span>Home</span>
								</a>
							</li>
							<li >
								<a href="{{ route('about') }}" class="{{  request()->is('about') ? 'active' : '' }}">
									<span class="icon"><i aria-hidden="true" class="icon-portfolio"></i></span>
									<span>About</span>
								</a>
							</li>
							<li>
								<a href="{{ route('service') }}">
									<span class="icon"><i aria-hidden="true" class="icon-services"></i></span>
									<span>Services</span>
								</a>
							</li>
							
							<li>
								<a href="{{ route('team') }}">
									<span class="icon"><i aria-hidden="true" class="icon-team"></i></span>
									<span>Team</span>
								</a>
							</li>
							<li>
								<a href="{{ route('contact') }}">
									<span class="icon"><i aria-hidden="true" class="icon-contact"></i></span>
									<span>Contact</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /navigation -->

@endsection