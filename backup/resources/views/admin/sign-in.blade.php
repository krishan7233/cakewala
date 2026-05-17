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
		<style>
		.sign-inup .text-dark {
    text-align: center;
    margin-bottom: 0px !important;
}
h4.text-center.text-dark.mb-4 {
    margin-bottom: 10px!important;
}
</style>
</head>
	
	<body class="sign-inup" id="body">
    <div class="container d-flex align-items-center justify-content-center min-vh-100 bg-light">
    <div class="card shadow-lg border-0 rounded-4" style="width: 100%; max-width: 420px;">
        <div class="card-header text-center bg-primary rounded-top-4">
            <a href="{{ route('login') }}">
                <img src="{{ asset('assets/img/logo/logo-login.jpg') }}" alt="Cake Plaza" style="height: 80px;" class="mt-3 mb-2 rounded">
            </a>
        </div>
        <div class="card-body p-4">
            <h4 class="text-center text-dark mb-4">Sign In</h4>
            <form action="{{ route('doLogin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email address" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" required>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                </div>
                <div class="d-grid mb-3">
                   <a href="{{ route('google_login') }}" class="btn btn-light border d-flex align-items-center justify-content-center gap-2 shadow-sm" style="height: 45px;">
                   <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo" style="width: 20px; height: 20px;">
                  <span class="text-dark">Sign in with Google</span>
                </a>
                </div>
                <div class="text-center">
                    <a href="{{ route('registration') }}" class="text-primary">Click here for registration</a>
                </div>
            </form>
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