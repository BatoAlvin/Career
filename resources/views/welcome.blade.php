<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
<head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Outbox Edu</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="images/outboxedu.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="/css/styles.css">
		
		
	
	</head>
	<style>
      *{
          padding:0;
          margin:0;
          box-sizing: border-box;
		  overflow: hidden;
      }
      body{
          background: rgb(245, 248, 248);

      }
      .row{
          background-color: yellow;
          border-radius: 30px;
          box-shadow: 12px 12px 22px rgb(235, 229, 229);
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
      }
      .btn1{
border: none;
outline: none;
height: 30px;
width: 80px;
background-color: rgb(62, 43, 228);
border-radius: 4px;
font-weight: bold;
color:white;
      }
      .btn2{
border: none;
outline: none;
height: 30px;
width: 50px;
background-color: rgb(62, 43, 228);
border-radius: 4px;
font-weight: bold;
color:white;
      }
	  a{
		  color:white;
	  }
	 
  </style>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			
			
			<!-- Home Banner -->
			 
<section class="Form my-4 mx-5 pt-5">
<div class="container">
<div class="row no-gutters">
<div class="col-lg-5">
<img src='/images/outboxedu.png' class="img-fluid"/>
</div>

<div class="col-lg-7 px-5 pt-5" style="background-color: #096691;">
<h3 class="font-weight-bold py-3" style='color:white;'>Welcome to edu linkages</h3>
<form>
   
@if (Route::has('login'))
    <div class="form-row">
        <div class="col-lg-7">
        <!-- <input type="text" class="form-control my-3 p-4"/> -->
		@auth
		<button class="btn1 mt-3 mb-5"><a href="{{ url('/dashboard') }}" >Login</a></button>
		@else
		<button class="btn2 mt-3 mb-5"><a href="{{ url('/login') }}" >Login</a></button>
        </div>
            </div>
			@if (Route::has('register'))
            <div class="form-row">
                <div class="col-lg-7">
				<button class="btn1 mt-3 mb-5"><a href="{{ url('/register') }}" >Register</a></button>
                </div>
                    </div>
					@endif
					@endauth
					@endif
</form>
</div>

</div>
</div>
</section>
			
		  
			
			<!-- /Popular Section -->
		  		
			<!-- Availabe Features -->
			
			
	   </div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="/js/script.js"></script>
		
	</body>

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
</html>