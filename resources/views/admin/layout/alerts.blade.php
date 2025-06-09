<script>
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: false
        });
    @endif

    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
            timer: 3000,
            showConfirmButton: false
        });
    @endif

    @if ($errors->any())
        let errorMessages = `{!! implode('<br>', $errors->all()) !!}`;

        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: errorMessages,
            timer: 5000,
            showConfirmButton: true
        });
    @endif
</script>
