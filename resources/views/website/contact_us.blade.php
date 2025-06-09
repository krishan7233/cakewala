@extends('website.website_app')
@section('content')

 
  <style>
  
.container3 {
    width: 100%;
    max-width: 1600px;
    margin-top: 190px;
    margin-bottom: 80px;
    padding: 0 40px;
}
    .breadcrumb {
      padding: 10px 20px;
      background: #f7f7f7;
      font-size: 14px;
    }

    .breadcrumb a {
      text-decoration: none;
      color: #ff6600;
      font-weight: bold;
    }

    .contact-info {
      background-color: #2a2a2a;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .contact-info .info-box {
      display: inline-block;
      width: 45%;
      margin: 10px 2%;
    }

    .info-box strong {
      display: block;
      font-size: 16px;
      color: #ff6600;
    }

    iframe {
      width: 100%;
      height: 300px;
      border: 0;
    }

    .form-section {
      padding: 40px 20px;
      text-align: center;
    }

    .form-section h2 {
      margin-bottom: 20px;
    }

    form {
      max-width: 600px;
      margin: auto;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 15px;
      box-sizing: border-box;
    }

    .g-recaptcha {
      margin: 15px 0;
    }

    .submit-btn {
      background-color: #5e2b10;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .submit-btn:hover {
      background-color: #431f0c;
    }

    .store-section {
      padding: 40px 20px;
      text-align: center;
      background: #fafafa;
    }

    .store-section h2 {
      margin-bottom: 30px;
    }

    .store-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .store-card {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 20px;
      width: 250px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    .store-card img {
      width: 40px;
      margin-bottom: 10px;
    }

    .store-card h4 {
      margin: 10px 0 5px;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .contact-info .info-box {
        display: block;
        width: 100%;
        margin: 10px 0;
      }
      .container3 {
    width: 100%;

    margin-top: 90px;
    margin-bottom: 80px;
    padding: 0 0px;
}
.form-section h2 {
    margin-bottom: 20px;
    font-size: 25px;
}
.store-section h2 {
    margin-bottom: 30px;
    font-size: 25px;
}
      .store-grid {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
<div class="container3">
  <!-- Breadcrumb -->
  <div class="breadcrumb">
    HOME PAGE / <a href="#">CONTACT US</a>
  </div>

  <!-- Contact Info -->
  <div class="contact-info">
    <div class="info-box">
      <strong>Phone:</strong>
      9899282368
    </div>
    <div class="info-box">
      <strong>Email:</strong>
      info@cakeplaza.in
    </div>
  </div>

  <!-- Google Map -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6351.104493626334!2d77.03516384327908!3d28.416255553133908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d23c5b759265b%3A0x2c5614f8ec071d23!2sCake%20Plaza!5e1!3m2!1sen!2sin!4v1748199789183!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <!-- Contact Form -->
  <section class="form-section">
    <h2>Leave A Message</h2>
    <form>
      <input type="text" name="name" placeholder="Name*" required />
      <input type="text" name="subject" placeholder="Subject*" required />
      <input type="email" name="email" placeholder="Email*" required />
      <input type="text" name="phone" placeholder="Phone*" required />
      <textarea name="message" placeholder="Message*" required></textarea>
      <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
      <button class="submit-btn" type="submit">SEND MESSAGE</button>
    </form>
  </section>

  <!-- Store Locations -->
  <section class="store-section">
    <h2>Welcome to CakePlaza Stores Delhi NCR</h2>
    <div class="store-grid">
      <div class="store-card">
        <img src="https://cdn-icons-png.flaticon.com/128/3144/3144456.png" alt="store" />
        <h4>Store One</h4>
        <p>Shop No. 12, Kendriya Market, Harsaru Ground, Sector 45, Gurugram, Haryana 122003</p>
      </div>
      <div class="store-card">
        <img src="https://cdn-icons-png.flaticon.com/128/3144/3144456.png" alt="store" />
        <h4>Store Two</h4>
        <p>SCO 3, Ground Floor, Huda Market, Sector 31, above gym on corner, Huda Market, Sector 31, Gurugram, Haryana 122001</p>
      </div>
      <div class="store-card">
        <img src="https://cdn-icons-png.flaticon.com/128/3144/3144456.png" alt="store" />
        <h4>Store Three</h4>
        <p>Shop No. 33, Ground Floor, Sector 22A, Sector 22, Gurugram, Haryana 122021</p>
      </div>
      <div class="store-card">
        <img src="https://cdn-icons-png.flaticon.com/128/3144/3144456.png" alt="store" />
        <h4>Store Four</h4>
        <p>Shop no 11, behind JMD MEGAPOLIS, 13th, Sector 48, Gurugram, Haryana 122001</p>
      </div>
      <div class="store-card">
        <img src="https://cdn-icons-png.flaticon.com/128/3144/3144456.png" alt="store" />
        <h4>Store Five</h4>
        <p>D-142 2nd Floor, Naini, Dwarika Rd, Patel Garden, Delhi, 110059</p>
      </div>
    </div>
  </section>

 </div>


@endsection