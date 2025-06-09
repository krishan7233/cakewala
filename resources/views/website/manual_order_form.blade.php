@extends('website.website_app')
@section('content')

  <style>
  .container3 {
    width: 100%;
    max-width: 1600px;
    margin-top: 200px;
    margin-bottom: 80px;
    padding: 0 40px;
}
    .form-container {
      background: #fff;
      max-width: 700px;
      margin: auto;
      padding: 30px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-radius: 8px;
    }
    h2 {
      background: #edf1f5;
      padding: 10px 15px;
      border-radius: 6px;
      margin-bottom: 20px;
      font-size: 20px;
      color: #333;
    }
    .form-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
    }
    label {
      margin-bottom: 5px;
      font-weight: 600;
      color: #333;
    }
    input[type="text"],
    input[type="date"],
    input[type="time"],
    input[type="number"],
    textarea,
    select {
      padding: 10px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
      box-sizing: border-box;
    }
    textarea {
      resize: vertical;
      min-height: 80px;
    }
    input[type="file"] {
      padding: 5px 0;
    }
   
    .submit-btn {
      background-color: #6d3d26;
      color: #fff;
      font-size: 16px;
      padding: 12px 20px;
      border: none;
      width: 100%;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    .submit-btn:hover {
      background-color: #532e1d;
    }
    @media (max-width: 600px) {
      .form-container {
        padding: 20px;
      }
      .container3 {
    width: 100%;
    
    margin-top: 110px;
    margin-bottom: 80px;
    padding: 0px 10px;
}
    }
  </style>


<div class="container3">
   
<form class="form-container" method="post" enctype="multipart/form-data">
    <h2>Manual Order Form</h2>

    <!-- Form Fields (same as you posted) -->
    <div class="form-group">
      <label for="date">Date*</label>
      <input type="date" id="date" name="date" required />
    </div>
    <div class="form-group">
      <label for="timing">Timing*</label>
      <input type="time" id="timing" name="timing" required />
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea id="address" name="address" placeholder="Full Address"></textarea>
    </div>
    <div class="form-group">
      <label for="receiver">Receiver Name*</label>
      <input type="text" id="receiver" name="receiver_name" required />
    </div>
    <div class="form-group">
      <label for="contact">Contact Number</label>
      <input type="text" id="contact" name="contact_number" />
    </div>
    <div class="form-group">
      <label for="alt-phone">Alternate Phone Number</label>
      <input type="text" id="alt-phone" name="alternate_number" />
    </div>
    <div class="form-group">
      <label for="occasion">Occasion</label>
      <input type="text" id="occasion" name="occasion" />
    </div>
    <div class="form-group">
      <label for="message">Message on Cake</label>
      <input type="text" id="message" name="cake_message" />
    </div>
    <div class="form-group">
      <label for="flavour">Flavour*</label>
      <input type="text" id="flavour" name="flavour" required />
    </div>
    <div class="form-group">
      <label for="weight">Weight*</label>
      <input type="text" id="weight" name="weight" required />
    </div>
    <div class="form-group">
      <label for="photo">Upload a reference photo here</label>
      <input type="file" id="photo" name="reference_photo" accept="image/*" />
    </div>
    <div class="form-group captcha">
      <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
    </div>

    <button type="submit" class="submit-btn">SUBMIT</button>
</form>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('.form-container').on('submit', function (e) {
      e.preventDefault();

      let formData = new FormData(this);

      $.ajax({
        url: "{{ route('manual.order.submit') }}", // Laravel route
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function () {
          // You can show a loader here
        },
        success: function (response) {
          if (response.status === 'success') {
            Swal.fire({
              icon: 'success',
              title: response.message || 'Order submitted successfully!',
              timer: 2000,
              showConfirmButton: false
            });
            $('.form-container')[0].reset();
          } else {
            Swal.fire('Error', response.message || 'Something went wrong.', 'error');
          }
        },
        error: function (xhr) {
          Swal.fire('Error', xhr.responseJSON?.message || 'Something went wrong.', 'error');
        }
      });
    });
  });
</script>

@endsection