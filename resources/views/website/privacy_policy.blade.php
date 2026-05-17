@extends('website.website_app')
@section('content')

<style>
.container3 {
    width: 100%;
    max-width: 1600px;
    margin: 190px auto 80px auto; /* top: 190px, bottom: 80px, auto for left/right centering */
    padding: 0 20px;
    display: block; /* or remove this line entirely, as block is default for divs */
}

h1 {
    font-size: 40px;
    line-height: 110%;
    margin: 2.8rem 0 1.68rem 0;
    font-weight: bold;
}

@media only screen and (max-width: 600px) {
.container3 {
    margin-top: 115px;

}
}


</style>
  <div class="container3">
    <div class="breadcrumb">
      HOME PAGE <span>/  PRIVACY POLICY</span>
    </div>
      <div class="privacy-policy">
    <h1>Privacy Policy – Cake Plaza</h1>
    <p><strong>Cake Plaza</strong> is a site which makes the celebration of your special one’s birthday, marriage anniversary or any occasion more memorable. We regard the privacy of our clients and secure them with the privacy strategies stated here.</p>

    <h4>Information Collection and Purpose</h4>
    <p>The data Cake Plaza gathers is for the following reasons:</p>
    <ul>
      <li>Delivering of requests</li>
      <li>Authenticating the client details</li>
      <li>For promotion of Cake Plaza</li>
      <li>For intimating about offers/discounts</li>
    </ul>

    <p>The information we collect includes:</p>
    <ul>
      <li>Name</li>
      <li>Address</li>
      <li>Phone number</li>
      <li>Email address</li>
      <li>Payment details</li>
      <li>Age</li>
      <li>Gender</li>
    </ul>

    <h4>Data Sharing</h4>
    <p>While placing an order, the information you provide may be shared with our financial service providers and distribution partners to ensure your request can be successfully processed and delivered. We only share relevant information with these parties; all such providers are obligated to keep your data confidential.</p>

    <p>Cake Plaza will not email you in the future unless you have given us your consent (except for order confirmations, delivery updates, or feedback requests).</p>

    <p>No sensitive personal information will be requested from clients.</p>

    <h4>Cookies</h4>
    <p>For each new visitor to the site, we automatically log certain data on how our site is used. If your browser is set to accept them, we use "cookies" — small data files stored on your device for record-keeping. Cookies help us tailor the website experience based on your preferences. If you prefer not to accept cookies, you can configure your browser to reject them or notify you when one is being sent.</p>

    <h4>Consent</h4>
    <p>The customer's consent for sharing information with our distributors and banking partners is considered implied.</p>

    <h4>Policy Updates</h4>
    <p>Cake Plaza may update its policy from time to time. If we make significant changes in the way we use your personal data, we will notify you by email or post an announcement on the site.</p>

    <h4>Contact Us</h4>
    <p>If you have any questions or comments about our privacy policy, please email us at <a href="mailto:info@cakeplaza.in">info@cakeplaza.in</a>.</p>

    <p>Thank you for visiting Cake Plaza.</p>
  </div>
  </div>



@endsection