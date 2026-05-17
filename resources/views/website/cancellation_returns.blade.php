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
 h2 {
      font-size: 25px;
    }
@media only screen and (max-width: 600px) {
.container3 {
    margin-top: 115px;

}
}


</style>
  <div class="container3">
    <div class="breadcrumb">
      HOME PAGE <span>/  CANCELLATION & RETURN</span>
    </div>
      <div class="policy-section">
    <h1 style="font-size: 25px;">Discount, Return and Cancellation Strategy</h1>

    <p>As a leading provider of bakery items, <strong>Cake Plaza</strong> pursues a well-defined Refund, Return, and Cancellation Policy to achieve optimal customer satisfaction. When a customer connects with us via phone, email, or chat, we aim to provide the desired technical support or customer service. However, there may be instances where the customer still finds the product unsatisfactory due to reasons beyond our control. In such cases, we follow the return or cancellation policy outlined below:</p>

    <h2>Applicable Scenarios for Refund or Cancellation</h2>
    <ul>
      <li><strong>Online Payment Transaction Failure</strong> – In such cases, the payment will be refunded as per the <em>(Bank name)</em> Bank Payment Return Policy.</li>
      <li>Refund or cancellation is applicable only in cases of natural disasters and genuine grievances.</li>
    </ul>

    <p><strong>Cake Plaza Gurgaon</strong> is not responsible for any mistake in the delivery address or other incorrect details furnished on the website. In such cases, if the order is not delivered due to wrong information, the payment made will not be refunded.</p>

    <p>Refunds do not include shipping charges or credit/debit card processing fees under any refund conditions.</p>

    <p>Cake Plaza Gurgaon is not liable if the recipient is unreachable or unavailable during delivery. In such cases, Cake Plaza Gurgaon reserves the right to cancel the order without any explanation, and no refunds will be provided.</p>

    <p>Returns or refunds will be applicable only when a customer’s order is placed via the website or from our physical store address mentioned below:</p>

    <p><strong>Shop No. 11, Behind JMD Megapolis,<br>
    Tikri, Sector 48, Gurugram, Haryana 122001</strong></p>
  </div>
  </div>



@endsection