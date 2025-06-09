<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="CakePlaza">

		<title>CakePlaza</title>
		
		<!-- GOOGLE FONTS -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

		<link href="../../../../../cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
		
		<!-- Ekka CSS -->
		<link id="ekka-css" rel="stylesheet" href="{{asset('assets/css/ekka.css')}}" />
		
		<!-- FAVICON -->
		<link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />
	</head>
	
	<body class="sign-inup" id="body">
		<div class="container d-flex align-items-center justify-content-center form-height-login pt-24px pb-24px">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10">
					<div class="card">
						<div class="card-header bg-primary">
							<div class="ec-brand">
								<a href="{{route('login')}}" title="CakePlaza">
									<img class="ec-brand-icon" src="{{asset('assets/img/logo/logo-login.jpg')}}" alt="" />
								</a>
							</div>
						</div>
						<div class="card-body p-5">
							<h4 class="text-dark mb-5">User Registration</h4>
							
<form action="{{ route('doRegister') }}" method="POST">
    @csrf
    <div class="row">
        <!-- Name -->
        <div class="form-group col-md-12 mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
        </div>

        <!-- Email -->
        <div class="form-group col-md-12 mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email ID" required>
        </div>

        <!-- Mobile Number -->
        <div class="form-group col-md-12 mb-3">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
        </div>

        <!-- Password -->
        <div class="form-group col-md-12 mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>

        <!-- Submit Button -->
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
        </div>
    </div>
</form>

						</div>
					</div>
				</div>
			</div>
		</div>

		
	<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		@include('admin.layout.alerts')
		<!-- Javascript -->
		<script src="{{asset('assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
		<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
	
		<!-- Ekka Custom -->	
		<script src="{{asset('assets/js/ekka.js')}}"></script>
	</body>

</html>