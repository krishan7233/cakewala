
<html>
<head>
    <meta charset="utf-8"/>
        <link rel="dns-prefetch" href="http://d3s16h6oq3j5fb.cloudfront.net/">
        <link rel="dns-prefetch" href="http://dr56butoyblab.cloudfront.net/">
        <link rel="dns-prefetch" href="http://d3s16h6oq3j5fb.cloudfront.net/">
         <link rel="icon" href="https://cakewala.in/assets/website/img/Favicon.png" sizes="32x32" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <title>@yield('title', 'Online Best Cakes, Flowers, Plants &amp; Gifts in India, Doorstep Delivery - Cake wala')</title>
        <meta name="description" content="@yield('meta_description', 'Default description')">
        @yield('google_analytics', '')

        <meta name="currentCityId" content="">
        <meta name="theme-color" content="#ffffff">
        <link rel="manifest" href="https://externalassets/coreast/constant/manifest/08022021-3CA8E/manifest.json">
         <meta property="og:type" content="website">
        <meta property="og:site_name" content="Cakewala">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="canonical" href="index.html" />
        <meta property="og:url" content="index.html" >
        <link rel="preload"  href="{{asset('assets/website/css/vnd/swiper-8.1.0.min.css')}}" as="style" onload="this.rel = 'stylesheet'"/>
        <link rel="stylesheet" href="{{asset('assets/website/css/vnd/materialize-1.0.0.min.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('assets/website/css/thor/common-f0e58be5cac621b14d13d1da9a00d9f4.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('assets/website/css/thor/deliveryIn-common-2975420ce29dba92d753d73530d59335.css')}}" type="text/css"/>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>     
       <meta name="google-site-verification" content="dWLAjHvfrFNvk6H1z4NFLIvT4phgCrXfIWXTLtcntbI" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DQF77M26BB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'G-DQF77M26BB');
</script>
 <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-768832938"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-768832938'); </script>
 @if (request()->is('offline-confiramtion'))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-768832938"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'AW-768832938');
    </script>

    <!-- Event snippet for Order Received conversion page -->
    <script>
      gtag('event', 'conversion', {
          'send_to': 'AW-768832938/ZcsgCIjYtdoaEKrrze4C',
          'value': 1.0,
          'currency': 'INR',
          'transaction_id': ''
      });
    </script>
@endif

<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "sfwqybczr9");
</script>
</head>
<body class="city-home">
    <a name="top" id="top"></a>
    @include('website.common.header')

    @yield('content')

    <style>
    .image-alignment{
       height: 23px!important;
    }
    .text-margin{
        margin-left: 10px;
    }
    .widthForImage{
        width: 19%!important;
    }
    .title{
    margin-bottom:0px !important;
    font-weight:600;
    color: #666666;
    }
    .footerTextColor{
      color: #707070!important;
    }
    .imageWidth{
    margin-top: 20px;
    width: 8%!important;
    padding-right:4px!important;
    padding-left:4px!important;
    }
    
     @media screen and (min-device-width: 1366px){
        .contactWithUS{
        width: 22%!important;

        }
        .imageWidth{
              margin: 21px 7px 1px 0px;
        }
}
 @media screen and (min-device-width: 1200px) and (max-device-width: 1366px) {
  .allRight{
   font-size: 14px!important;
  }
  }
  .backgroundDesktop{
  background: #F5F5F5 0% 0% no-repeat padding-box!important;
  padding: 0 8px;
  }
  .imageHeight{
  height: 45px!important;
  }
  .logoImageWidth{
  width:24px!important;
  }
  .textAlignment{
  vertical-align: super;
  color: #333333;
  font-weight:700
  }
 .whatsapp-icon {
    position: fixed;
    bottom: 10%;
    right: 35px; /* adjust distance from right edge */
    width: 5%;
    z-index: 99;
     animation: pulse 2s infinite;
  border-radius: 50%;
  padding: 10px;

}
a.whatsapp-icon img {
    width: 100%;
}
a#whatsappLink {
    display: block;
    background: #fff;
    border-radius: 50px;
}
@keyframes pulse {
  0% {
    transform: translateY(-50%) scale(1);
  }
  50% {
    transform: translateY(-50%) scale(1.1);
  }
  100% {
    transform: translateY(-50%) scale(1);
  }
}
a#callorder {
    position: fixed;
    right: 31px;
    width: 5%;
    bottom: 200px;
}
a#callorder img {
    width: 74%;
}
@media only screen and (max-width: 600px) {
    details summary {
    position: relative;
    cursor: pointer;
    list-style: none;
    padding-left: 20px;
}
p.mn {
    display: block;
    position: absolute!important;
    left: 15px!important;
    margin-top: 112px!important;
    margin-bottom: 10px!important;
    color: #000;
}
.mn2 {
    margin-top: 20px!important;
}
details summary::before {
    content: "+";
    position: absolute;
    right: 0;
    top: 0;
    font-weight: bold;
    color: #000; /* Same as your text color */
    font-size: 16px;
}

/* When <details> is open → show minus */
details[open] summary::before {
    content: "−";
}

ul {
    border: 0!important;
}
a#callorder img {
    width: 100%;
}
a#callorder {
    position: fixed;
    right: 60px;
    width: 14%;
    bottom: 200px;
}
.foo.container {
    margin-left: 10px;
 
}
a#whatsappLink {
    display: block;
    background: #fff;
    border-radius: 50px;
}
.mob {
    width: 100%;
}
          .whatsapp-icon {
    position: fixed;
    bottom: 50px;
    width: 18%;
    z-index: 99;
}
        a.whatsapp-icon img {
    width: 100%;
}
}

</style>

<!--<div class="footer-image-for-corporate-desktop backgroundDesktop">
    <div class="row footer-highlights margin-top-n-20 backgroundDesktop" style="max-width: 1600px; margin: 0 auto">
        <div class="col s12 m12 l4 highlight valign-wrapper">
            <div class="iconContainer left">
            <img class="responsive-img lazyload imageHeight" alt="happy-delivery-icon" src="{{asset('assets/website/img/happy-delivery.webp')}}">
            </div>
            <div style="margin-top: -6px;">
                <div class="title">700+ Cities</div>
                <div class="sub-title">Happily Delivering</div>
            </div>
        </div>
        <div class="col s12 m12 l4 highlight valign-wrapper">
            <div class="iconContainer left ">
            <img  class="responsive-img lazyload"  alt="secure-payment"  src="{{asset('assets/website/img/secure-payment.webp')}}" style="height: 50px;">
            </div>
            <div>
                <div class="title">100% Secure Payments</div>
                <div class="sub-title">All Major Credit & Debit Cards Accepted</div>
            </div>
        </div>
        <div class="col s12 m12 l4 valign-wrapper" style="padding:20px 18px 15px;">
            <div class="iconContainer left">
          <img class="responsive-img lazyload imageHeight" alt="customer-across"  src="{{asset('assets/website/img/customer-across-the-world.webp')}}">
            </div>
            <div>
                <div class="title">20,000,000</div>
                <div class="sub-title">Customers Across The World</div>
            </div>
        </div>
    </div>
</div>-->


<footer class="desktop" style="background: #FAFAFA 0% 0% no-repeat">
    <div class="container">
       
        <div class="row links  adobeFooterEvent" style="margin-bottom:10px">
            <div class="col l3 s12">
                <ul style="border-right: 2px solid #dfdcdc;width:70%">
                 <li style="color: #000000;font-size:16px;font-weight:600;padding-bottom: 10px;">Our Company</li>
                     <li><a class="footerTextColor" href="#"><strong>Address</strong>:Office No:- 2 DDC Arcade Sector 48
Shona Road Gurgaon 122018</a></li>
                    <li><a class="footerTextColor" href="#"><strong>Telephone:</strong> +917233958662</a></li>
                    <li><a class="footerTextColor" href="#"><strong>Email:</strong> info@cakewala.in</a></li>
                    
                </ul>
            </div>
            <div class="col l3 s12">
                <ul style="border-right: 2px solid #dfdcdc;width:70%">

                 <li style="color: #000000;font-size:16px;font-weight:600;padding-bottom: 10px;">Quick Links</li>
                <li><a class="footerTextColor" href="{{route('about-us')}}">About us</a></li>
                <li><a class="footerTextColor" href="{{route('blog')}}">Blog</a></li>
                     <li><a class="footerTextColor" href="{{route('contact_us')}}">Contact Us</a></li>
                     <li><a class="footerTextColor" href="{{route('coupon')}}">Coupons & Deals</a></li>
                   <li><a class="footerTextColor" href="{{route('manual_order_form')}}">Manual Order Form</a></li>
                      <li><a class="footerTextColor" href="{{route('Affiliate_Program')}}">Affiliate Program</a></li> 

                </ul>
            </div>
            <div class="col l3 s12">
                <ul>
                 <li style="color: #000000;font-size:16px;font-weight:600;padding-bottom: 10px;">Policy & Security</li>
                  <li><a class="footerTextColor" href="#">FAQ</a></li>
                   <li><a class="footerTextColor" href="https://cakewala.in/cancellation-returns">Refund Policy</a></li>
                   <li><a class="footerTextColor" href="https://cakewala.in/privacy-policy">Privacy Policy</a></li>
                      <li><a class="footerTextColor" href="https://cakewala.in/terms-conditions">Terms and Conditions</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <ul>
                 <li style="color: #000000;font-size:16px;font-weight:600;padding-bottom: 10px;">Helpful Links</li>
                  <li><a class="footerTextColor" href="{{ route('allproduct') }}">Shop</a></li>
                  <li><a class="footerTextColor" href="{{route('queryForm')}}">Customise Cake</a></li>
                  <li><a class="footerTextColor" href="https://razorpay.me/@cakewala">Pay Online</a></li>
                  <li><a class="footerTextColor" href="#">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>

<div style="background: #F5F5F5; width: 100%; padding: 20px 0;">
  <div class="container">
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px;">

      <!-- Connect with Us -->
      <div style="flex: 1 1 300px; display: flex; align-items: center; gap: 25px; flex-wrap: wrap;">
        <div class="mob" style="font-weight: 600; font-size: 16px; color: #0D0D0D;">
          Connect with Us
        </div>

        <a href="https://www.facebook.com/cakewalaofficial/" target="_blank" rel="nofollow">
          <img src="{{ asset('assets/website/img/Artboard-1.webp') }}" alt="Facebook" style="height: 20px;">
        </a>

        <a href="https://www.instagram.com/cakewalaofficial/" target="_blank" rel="nofollow">
          <img src="{{ asset('assets/website/img/Artboard-5.webp') }}" alt="Instagram" style="height: 20px;">
        </a>

        <a href="https://www.youtube.com/@officialcakewala" target="_blank" rel="nofollow">
          <img src="{{ asset('assets/website/img/Artboard-3.webp') }}" alt="YouTube" style="height: 20px;">
        </a>

        <a href="https://twitter.com/cakewala" target="_blank" rel="nofollow">
          <img src="{{ asset('assets/website/img/Artboard-2.webp') }}" alt="Twitter" style="height: 20px;">
        </a>

        <a href="https://www.youtube.com/@officialcakewala" target="_blank" rel="noopener">
          <img src="{{ asset('assets/website/img/black-whatsapp-icon.webp') }}" alt="WhatsApp" style="height: 20px;">
        </a>
        <p class="mn" style="display: block;position: absolute;left: 180px;margin-top: 80px;color:#000">Spread the Love & Connect with us!</p>
      </div>

      <!-- Payment -->
      <div style="flex: 1 1 300px; display: flex; flex-direction: column; gap: 10px;">
        <div class="mn2" style="color: #333333; font-size: 18px; font-weight: 600;">Payment</div>
        <img class="responsive-img lazyload" alt="payment-methods" src="{{ asset('assets/website/img/payment.e08b4d57.jpg') }}" style="max-width: 300px; width: 100%;">
      </div>

    </div>
  </div>
</div>




        <div style="color: #333333;text-align:center;background: #F5F5F5 0% 0% no-repeat padding-box;padding-top:25px;padding-bottom:25px">Copyright © 2025 Cakewala. All rights reserved.</div>
<!-- Mobile Footer Navigation -->




<div class="mobile-footer">
      <a href="https://cakewala.in/" class="active">
    <span>🏠</span>
    <small>Home</small>
  </a>


  <a href="{{ auth()->check() ? route('user-profile') : route('login') }}">
    <span>👤</span>
    <small >Profile</small>
  </a>
<a href="javascript:void(0);" id="openFilterBtn">
    <span>🔲</span>
    <small>Filter</small>
</a>

  

  <a href="tel:7233958662" id="" target="_blank" class="cal">
  <img src="https://cakewala.in/assets/website/img/callorder.png" alt="HomeWhatsapp">
</a>
  
  
</div>



<style>
/* Mobile Footer Nav */
.mobile-footer {
  display: none;
}

@media (max-width: 768px) {
 .container {
    margin-top: 10px!important;
}
a.cal img {
    width: 58%;
}
  .mobile-footer {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: #fff;
    border-top: 1px solid #ccc;
    display: flex;
    justify-content: space-around;
    padding: 10px 0;
    z-index: 999;
  }
.foo.container {
    margin-top: 0px!important;
    margin-bottom: 30px!important;
}
.foo .imageWidth {
    margin-top: 20px;
    width: 18%!important;
  
}
.foo .row .col {
 padding: 4px;
 width: 100%;
}
.foo .col.m6.l6 {
    padding: 0!important;
}
  .mobile-footer a {
    text-align: center;
    flex: 1;
    font-size: 13px;
    color: #666;
    text-decoration: none;
  }

  .mobile-footer a span {
    display: block;
    font-size: 20px;
    margin-bottom: 4px;
  }

  .mobile-footer a.active {
    color: #d9006c;
  }

  .mobile-footer a.active span {
    color: #d9006c;
  }
  
}
</style>

<input type="hidden" id="emlHsh" value=""/>
    <input type="hidden" id="mblHsh" value=""/>
    <input type="hidden" id="internaCountry" value=""/>
    <input type="hidden" id="productName" value=""/>
    <input type="hidden" id="categoryName" value=""/>
    <input type="hidden" id="totalProductsSearch" value=""/>
    <input type="hidden" id="deviceType" value="DESKTOP"/>
    
  <script>
$(document).ready(function () {
    // Open filter modal
    $('#openFilterBtn').on('click', function () {
        $('#productFilter').fadeIn();
    });

    // Close modal
    $('#closeFilter').on('click', function () {
        $('#productFilter').fadeOut();
    });

    // Optional: Close on background click
    $('#productFilter').on('click', function (e) {
        if (e.target === this) {
            $(this).fadeOut();
        }
    });
});
</script>


    <script type="text/javascript">
        var webAppLogin = {
            loginUriFooter: "/cs/customer/login",
        };
    </script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("menuToggleBtn");
    const closeBtn = document.getElementById("menuCloseBtn");
    const menu = document.getElementById("mobileMenu");
    const overlay = document.getElementById("overlay");

    function toggleMenu() {
      if (menu) menu.classList.toggle("active");
      if (overlay) overlay.classList.toggle("active");
    }

    if (toggleBtn) toggleBtn.addEventListener("click", toggleMenu);
    if (closeBtn) closeBtn.addEventListener("click", toggleMenu);
    if (overlay) overlay.addEventListener("click", toggleMenu); // Optional: close on overlay click
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems, {
      hover: true, // or false for click
      constrainWidth: false,
      coverTrigger: false
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Ensure all select elements are visible
    document.querySelectorAll('select').forEach(function (el) {
      el.style.display = 'inline-block';
      el.style.visibility = 'visible';
    });
  });
</script>

</body>


<a href="#" id="whatsappLink" target="_blank" class="whatsapp-icon">
  <img src="https://cakewala.in/assets/website/img/orderwhatsapp.png" alt="HomeWhatsapp">
</a>

<script>
  document.getElementById('whatsappLink').addEventListener('click', function (e) {
    e.preventDefault();

    const phoneNumber = '917233958662';
    const pageURL = window.location.href;
    const message = `Hello! I am interested in this page: ${pageURL}`;
    const whatsappURL = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;

    window.open(whatsappURL, '_blank');
  });
</script>
</footer>


<script src="{{asset('assets/website/js/vnd/lazysizes-5.3.0.min.js')}}"></script>
    <script defer src="{{asset('assets/website/js/vnd/jquery-3.7.1.min.js')}}"></script>
    <script defer src="{{asset('assets/website/js/thor/adv-initialize-6efba37b6ad5b736c9eb3456d6e9fda8.js')}}"></script>
    <script defer src="{{asset('assets/website/js/vnd/materialize-1.0.1.min.js')}}"></script>
    <script defer src="{{asset('assets/website/js/thor/mixpanel-event-c97795570ecca394986fcff866d70527.js')}}"></script>


<script defer src="{{asset('assets/website/js/vnd/slick-1.8.1.min.js')}}"></script>
            <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/vnd/slick-1.8.1.min.css')}}">
        <script defer src="{{asset('assets/website/js/vnd/infinite-scroll-4.0.1.pkgd.min.js')}}"></script>
        <script defer src="{{asset('assets/website/js/vnd/swiper-8.1.0-v1.min.js')}}"></script>
      
        <script defer src="{{asset('assets/website/js/thor/main-e50ebef8f68375119bf6e257b634bf07.js')}}"></script>
        <script defer src="{{asset('assets/website/js/thor/homepage-5c607573095fe81ddfc6da1dde33a8d7.js')}}"></script>
        
	   
    <script>
    function messageSweetalert(response){
        
    if(response.status == 'success') {
        Swal.fire({
            icon: 'success',
            title: response.message,
            showConfirmButton: true,
            confirmButtonText: 'OK',
            padding: '4em'
        }).then((result) => {
            if (result.isConfirmed) {
                location.reload(); // Reload the page
            }else{
                location.reload(); 
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

</script>
<!-- Existing Swiper JS Library -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var testimonialSwiper = new Swiper('.testimonialSwiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true, // important for autoplay to work properly
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.testimonial-button-next',
      prevEl: '.testimonial-button-prev',
    },
    breakpoints: {
      768: { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
    },
  });
</script>


	</body>

</html>
