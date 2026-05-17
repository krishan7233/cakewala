@extends('website.website_app')
@section('content')

<style>
  .container3 {
    width: 100%;
    max-width: 600px;
    margin: 190px auto 80px auto;
    padding: 0 20px;
  }

  .form-container {
    background: #f2f5f9;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .form-container h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 24px;
    color: #333;
    font-weight: bold;
  }

  .form-group {
    margin-bottom: 18px;
    display: flex;
    flex-direction: column;
  }

  label {
    margin-bottom: 6px;
    font-weight: 600;
    color: #333;
  }

  input[type="text"],
  input[type="date"],
  input[type="time"],
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
    padding: 6px;
    border-radius: 4px;
    border: 1px solid #ccc;
    background: #fff0e9;
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
h3 {
    font-size: 25px;
  font-weight: 600;
}
  @media (max-width: 600px) {
    .container3 {
      margin-top: 120px;
    }
    .form-container {
    background: #f2f5f9;
    padding: 10px;
}
  }
</style>

<div class="container3">
  <form class="form-container" method="POST" enctype="multipart/form-data" id="queryForm">
    @csrf
    <h2>Bake Your Own Cake!</h2>

    <div class="form-group">
      <label for="weight">Select size of the cake *</label>
      <select name="weight" id="weight" required>
        <option value="">-- Select --</option>
        <option value="0.5kg">0.5KG (Serves 4-6)</option>
        <option value="1kg">1KG (Serves 6-8)</option>
        <option value="1.5kg">1.5KG (Serves 9-10)</option>
        <option value="2kg">2KG (Serves 10-15)</option>
      </select>
    </div>

    <div class="form-group">
      <label for="reference_photo">What kind of cake would you like it to resemble?</label>
      <input type="file" id="reference_photo" name="reference_photo" accept="image/*" />
    </div>

    <div class="form-group">
      <label for="details">Tell us about the details</label>
      <textarea id="details" name="details" placeholder="Flavour, Message on cake, Additional detailing, etc"></textarea>
    </div>

    <h3 style="margin: 15px 0 10px; font-size: 18px;">Delivery Details</h3>

    <div class="form-group">
      <label for="receiver_name">Name</label>
      <input type="text" id="receiver_name" name="receiver_name" placeholder="Name" />
    </div>

    <div class="form-group">
      <label for="contact_number">Phone</label>
      <input type="text" id="contact_number" name="contact_number" placeholder="Enter Phone No" />
    </div>

    <div class="form-group">
      <label for="city">City</label>
      <input type="text" id="city" name="city" placeholder="City" />
    </div>

    <div class="form-group">
      <label for="date_time">Delivery Date and Time</label>
      <input type="text" id="date_time" name="date_time" placeholder="e.g. 2025-06-10 4:00 PM" />
    </div>

    <button type="submit" class="submit-btn">SUBMIT</button>
  </form>
 
</div>
<div class="container">
     <h3>Our Customised Cakes</h3>
  <p>Our team of professional bakers are highly trained and equipped to bake any kind of cake you want. Our QA’s keep a tap on quality, design and presentation at each step while it is produced and we guarantee to match upto 99% of your expectations.
<br>
You just have to describe the cake you want and upload a reference image if you have any. Our custom cake specialist will call you within minutes to understand more about your cake in detail and take your order over call itself.
<br>
Alternatively you can also Call or WhatsApp us on +91 9873739058</p>
</div>    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $('#queryForm').on('submit', function (e) {
    e.preventDefault();
    let formData = new FormData(this);
    $.ajax({
      url: "{{ route('querySave') }}",
      method: "POST",
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
              title: response.message || 'Query submitted successfully!',
              timer: 2000,
              showConfirmButton: false
            });
            $('#queryForm')[0].reset();
          } else {
            Swal.fire('Error', response.message || 'Something went wrong.', 'error');
          }
        },
        error: function (xhr) {
          Swal.fire('Error', xhr.responseJSON?.message || 'Something went wrong.', 'error');
        }
    });
  });
</script>

@endsection
