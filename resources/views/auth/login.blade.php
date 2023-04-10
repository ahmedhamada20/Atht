<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crmx-admin-template.multipurposethemes.com/bs5/main-minimal-dark-rtl/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 05:54:06 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://crmx-admin-template.multipurposethemes.com/bs5/images/favicon.ico">

    <title>Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('dash/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('dash/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('dash/css/skin_color.css') }}">

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url({{ asset('dash/images/auth-bg/bg-1.jpg') }})" style="font-family: 'Cairo', sans-serif;">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								{{-- <h2 class="text-primary">Let's Get Started</h2> --}}
								<p class="mb-0">Sign in </p>							
							</div>
							<div class="p-40">
								<form action="{{route('login')}}" method="post" autocomplete="off">
								@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="email" name="email" class="form-control ps-15 bg-transparent" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password">
										</div>
									</div>
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-6">
										 <div class="fog-pwd text-end">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_register.html" class="text-warning ms-5">Sign Up</a></p>
								</div>	
							</div>						
						</div>
						<div class="text-center">
						  <p class="mt-20 text-white">- Sign With -</p>
						  <p class="gap-items-2 mb-20">
							  <a class="btn btn-social-icon btn-round btn-facebook" href="#"><i class="fa fa-facebook"></i></a>
							  <a class="btn btn-social-icon btn-round btn-twitter" href="#"><i class="fa fa-twitter"></i></a>
							  <a class="btn btn-social-icon btn-round btn-instagram" href="#"><i class="fa fa-instagram"></i></a>
							</p>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('dash/js/vendors.min.js') }}">
    </script>
	<script src="{{ asset('dash/js/pages/chat-popup.js') }}">
    </script>
    <script src="{{ asset('dash/assets/icons/feather-icons/feather.min.js') }}">
    </script>	

</body>

<!-- Mirrored from crmx-admin-template.multipurposethemes.com/bs5/main-minimal-dark-rtl/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Feb 2023 05:54:11 GMT -->
</html>
