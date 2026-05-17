<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Ekka - Admin Dashboard eCommerce HTML Template.">

	<title>Cake Plaza.</title>

	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet"> 

	<link href="https://cdn.jsdelivr.net/npm/%40mdi/font%404.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
<!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

	<!-- PLUGINS CSS STYLE -->
	<link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">
	<link href="{{asset('assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

	
	<!-- PLUGINS CSS STYLE -->
	<link href='{{asset('assets/plugins/slick/slick.min.css')}}' rel='stylesheet'>
	<link href='{{asset('assets/plugins/swiper/swiper-bundle.min.css')}}' rel='stylesheet'>

	<!-- Ekka CSS -->
	<link id="ekka-css" href="{{asset('assets/css/ekka.css')}}" rel="stylesheet" />

	<link href="{{asset('assets/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
	<!-- Data Tables -->
	<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap5.min.css')}}" rel='stylesheet'>
	<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel='stylesheet'>

	<!-- FAVICON -->
	<link href="{{asset('assets/img/favicon.png')}}" rel="shortcut icon" />


	<!-- Include CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-light ec-header-light" id="body">

	<!--  WRAPPER  -->
	<div class="wrapper">
		
		<!-- LEFT MAIN SIDEBAR -->
		@include('admin.layout.sidebar')

		<!--  PAGE WRAPPER -->
		<div class="ec-page-wrapper">

			<!-- Header -->
			@include('admin.layout.header')
			<!-- CONTENT WRAPPER -->
			@yield('content')
             <!-- End Content Wrapper -->

			<!-- Footer -->
			<footer class="footer mt-auto">
				<div class="copyright bg-white">
					<p>
						Copyright &copy; <span id="ec-year"></span><a class="text-primary"
						href="https://themeforest.net/user/ashishmaraviya" target="_blank"> Ekka Admin Dashboard</a>. All Rights Reserved.
					  </p>
				</div>
			</footer>

		</div> <!-- End Page Wrapper -->
	</div> <!-- End Wrapper -->

	<!-- Common Javascript -->
	<script src="{{asset('assets/plugins/jquery/jquery-3.5.1.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/plugins/simplebar/simplebar.min.js')}}"></script>
	<script src="{{asset('assets/plugins/jquery-zoom/jquery.zoom.min.js')}}"></script>
	<script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>

	<script src="{{asset('assets/plugins/tags-input/bootstrap-tagsinput.js')}}"></script>


	<!-- Date Range Picker -->
	<script src="{{asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('assets/js/date-range.js')}}"></script>

	<!-- Option Switcher -->
	<script src="{{asset('assets/plugins/options-sidebar/optionswitcher.js')}}"></script>

	<!-- Ekka Custom -->
	<script src="{{asset('assets/js/ekka.js')}}"></script>


	<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@include('admin.layout.alerts')
@yield('custom-js')
<script>
	function messageSweetalert(response){
            if(response.status === 'success') {
                Swal.fire({
                    icon: 'success',
                    title: response.message,
                    showConfirmButton: true,
                    confirmButtonText: 'OK',
                    padding: '4em'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload(); // Reload the page
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: response.message || 'Something went wrong.',
                    padding: '1.5em'
                });
        }
    }
    
    
    $(document).on('click', '.delete-thumb-btn', function(e) {
    e.preventDefault();
    
    e.stopPropagation();
    const imageId = $(this).data('id');
    const imageType = $(this).data('type');
        const url = "{{ route('admin.delete.image', ':id') }}".replace(':id', imageId);

    Swal.fire({
        title: 'Are you sure?',
        text: "Do you want to delete this image?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}',
                    type: imageType
                },
                success: function(response) {
                    Swal.fire(
                        'Deleted!',
                        response.message || 'Image deleted successfully.',
                        'success'
                    );
                    $('.delete-thumb-btn[data-id="' + imageId + '"]').closest('.image-thumb-preview').remove();
                },
                error: function() {
                    Swal.fire(
                        'Error!',
                        'Error deleting image. Please try again.',
                        'error'
                    );
                }
            });
     }
    });
});
</script>
</body>
</html>