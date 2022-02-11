<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link type="image/x-icon" href="images/outboxedu.png" rel="icon">
    <title>Outbox linkages</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    	<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="/plugins/fontawesome/css/all.min.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header" style='background:#096691'>
			<div class="header-left">
				<a class="logo">
					<img src="/images/outboxedu.png" width="35" height="35" alt="">
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
            @if (Auth::user()->hasRole('admin'))
            <li class="nav-item dropdown d-none d-sm-block">
                    <a href="{{route('postjob')}}" class="dropdown-toggle nav-link"> Post Job</a>
                   
                </li>
            @endif
           

                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="{{route('dashboard')}}" class="dropdown-toggle nav-link"> Jobs</a>
                   
                </li>

    
                @if (Auth::user()->hasRole('admin'))
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="{{route('applicationslist')}}" class="dropdown-toggle nav-link"> Applications</a>
                   
                </li>
    @endif

               

                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                       
						<span>{{ Auth::user()->name }}</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
				
					
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                        </form>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
                  
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">Logout</a>
                        </form>
                </div>
            </div>
        </div>
		<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
				<ul>
            @if (Auth::user()->hasRole('admin'))
            <li>
			<a href="{{route('postjob')}}"><i class="fa fa-user-md"></i> <span>Post Job</span></a>
                  
                   
                </li>
            @endif
           

                <li>
				<a href="{{route('dashboard')}}"><i class="fa fa-hospital-o"></i> <span>Jobs</span></a>
                   
                   
                </li>

    
                @if (Auth::user()->hasRole('admin'))
                <li>
				<a href="{{route('applicationslist')}}"><i class="fa fa-book"></i> <span>Applications</span></a>
               
                   
                </li>
    @endif

            
            </ul>
                </div>
            </div>

          

        </div>
        <div class='page-wrapper'>
       <div class='content'>
        @yield('content')
        </div>
            </div>
    </div>
   

    <footer class="footer" style='background:#096691;'>
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
									<h2 class="footer-title">JOIN OUR COMMUNITY</h2>
									</div>
									<div class="footer-about-content">
										
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">NAVIGATION</h2>
									<ul>
										<li><a href=""><i class="fas fa-angle-double-right"></i> Enrollment</a></li>
										<li><a href=""><i class="fas fa-angle-double-right"></i> Linkages</a></li>
										<li><a href=""><i class="fas fa-angle-double-right"></i> What We Do</a></li>
										<li><a href=""><i class="fas fa-angle-double-right"></i> Events</a></li>
										<li><a href=""><i class="fas fa-angle-double-right"></i> Learning</a></li>
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-menu">
									<h2 class="footer-title">LEGAL</h2>
									<ul>
										<li><a href=""><i class="fas fa-angle-double-right"></i> General info</a></li>
										<li><a href=""><i class="fas fa-angle-double-right"></i> Terms of Use</a></li>
										<li><a href=""><i class="fas fa-angle-double-right"></i> Privacy Policy</a></li>
									
									</ul>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Talk TO US</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> Lumumba Avenue,<br> Soliz House </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+256 315 369 5943
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											support@outbox.co.ug
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								
								<div class="col-md-12 col-lg-12">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="">@2021 OutBox Edu</a></li>
											<li><a href="">All Rights Reserved</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>

            <script src="/js/jquery.min.js"></script>
		
	
		
		<!-- Slick JS -->
		<script src="/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="/js/script.js"></script>
             
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.slimscroll.js"></script>
    <script src="/js/Chart.bundle.js"></script>
    <script src="/js/chart.js"></script>
    <script src="/js/app.js"></script>

</body>


</html>