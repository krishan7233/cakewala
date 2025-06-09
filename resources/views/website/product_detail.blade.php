@extends('website.website_app')
@section('content')
<main>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Materialize JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <style>
   .datepicker-modal {
    max-width: 2px !important;
    left: 0% !important;
    top: 0% !important;
    min-width: 100%!important;
    bottom: 0;
}
.pdp-input__div [type=radio]:checked+span {
    background-color: #FF4E84;
    color: #000 !important;
}
div#cartOptionsModal {
    padding: 10px;
}
   #image_order_preview img {
  margin-top: 10px;
  max-width: 100%;
  height: auto;
}
.col.s6.m6.l6.addTCart.adtoCart {
    display: flex;
    gap: 10px;
}
.swiper-container.desk_banners.product-detail.swiper-initialized.swiper-horizontal.swiper-pointer-events.swiper-backface-hidden {
    display: none;
}
#cartOptionsModal p label {
    border: 1px solid #000;
    padding: 8px;
    width: 100%;
    max-width: 100%;
    min-width: 100%;
}
#cartOptionsModal span {
    width: 93%;
    margin-bottom: 10px;
}

div#order_image-input {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 10px;
    width: 48%;
    margin-bottom: 10px;
}
       .dropdown-content.select-dropdown {
      height: 372px !important;
      }
      .pointer {
      cursor: pointer;
      }
      .container3 {
       margin-top: 160px!important;
      }
.breadcrumb:before {
display: none;
}
.main-nav {
    height: 118px;
    margin: 0!important;
}
.nav-center {
    margin-top: -37px;
}
.col.m12 {
    padding: 0;
}
.dropdown-content li {
    min-height: 29px;

}
.carousel.carousel-slider {
    top: 0;
    left: 0;
    height: 310px!important;
    display: flex;
    gap: 10px;
}
.card.center-align {
    background: #ffffff00;
}
.carousel .indicators .indicator-item {
 
    height: 10px;
    width: 10px;
    margin: 0px 4px;
    background-color: #000000;

}
.container {
    width: 100%;
    max-width: 95%;
}
.footer-highlights .highlight {
    padding: 20px 18px 15px;
    border-right: 1px solid #e2e2e2;
}
.carousel .carousel-item {
    visibility: visible!important;
  
}
.breadcrumb {
    color: #000000;
}
.breadcrumb:last-child {
    color: #000000;
    font-size: 18px;
}
input#product_messages {
    width: 45%!important;
    padding: 0 10px!important;
}
input#deliveryInfo {
    padding: 0 10px!important;
    width: 45%;
    border: 1px solid #000000;
    border-radius: 10px;
}
span.eggless {
    BORDER: 1PX SOLID #000;
    PADDING: 6PX 10PX;
    BORDER-RADIUS: 50PX;
}
input#modalTime {
    padding-left: 0!important;
}
input#modalDate {
    padding-left: 0!important;
}
div#cartOptionsModal {
    height: 500px;
    width: 40%;
}
.modal input {
    width: 100%!important;
}
a#saveDeliveryInfo {
    background: #000;
    color: #fff;
    margin-right: 40px;
    width: 11%;
}
[type=radio]+span:after, [type=radio]+span:before {
    opacity: 1!important;
}
      @media only screen and (min-width: 601px) {
      .datepicker-date-display {
      display: none !important;
      -webkit-box-flex: 0;
      -webkit-flex: 0 1 270px;
      -ms-flex: 0 1 270px;
      flex: 0 1 270px;
      }
      a.breadcrumb {
    font-size: 12px;
}
.datepicker-date-display {
    padding: 10px!important;
}
.breadcrumb:last-child {
    color: #000000;
    font-size: 12px;
}

.datepicker-modal {
    max-width: 2px !important;
    left: 0% !important;
    top: 0% !important;
    min-width: 100%!important;
    bottom: 0;
}
.modal .modal-content {
    padding: 0px 0px 0px 0px !important;
}
#cartOptionsModal span {
    width: 93%;
    margin-bottom: 0px!important;
}
      }
      .datepicker-clear {
      display: none !important;
      }
      .datepicker-done {
      right: 4%;
      background: #5DA434 !important;
      position: absolute;
      padding: 0px 25px;
      color: white;
      }
      .datepicker-cancel {
      background: red !important;
      padding: 0px 15px;
      color: white;
      }
      .datepicker-calendar-container {
      margin-bottom: 0px !important;
      }
      ::placeholder {
      /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #333333;
      opacity: 1;
      /* Firefox */
      }
      :-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      color: #333333;
      }
      ::-ms-input-placeholder {
      /* Microsoft Edge */
      color: #333333;
      }
      input[type=text]:not(.browser-default) {
      padding-left: 46px !important;
      }
      .dateFilter {
      margin-left: 14%;
      }
      @media only screen and (min-width: 1200px) and (max-width: 1400px) {
      .dateFilter {
      margin-left: 15.7%;
      }
      }
      @media only screen and (min-width: 1401px) and (max-width: 1600px) {
      .dateFilter {
      margin-left: 16%;
      }
      }
      @media only screen and (min-width: 1601px) and (max-width: 1800px) {
      .dateFilter {
      margin-left: 15%;
      }
      }
      .datepicker-footer {
      margin-top: 10px;
      }
      .thumbnail {
      margin: 0 0 5px 0;
      }
      img.thumbnail {
      border: 2px solid transparent;
      }
      .small-img {
      border: 2px solid #3d246d !important;
      }
      .cat-text {
      color: #636466;
      }
      .addToCart:hover {
      color: #ffffff !important;
      }
      .see-all-reviews:hover {
      box-shadow: 0 0 11px rgba(33, 33, 33, .2) !important;
      }
      .sezzle-button-text.sezzle-left {
      font-size: 13px !important;
      }
      .sezzle-payment-amount .money_Symbol {
      font-size: 11px;
      padding-right: 1px;
      display: inline-block;
      }
      #addonsModal .sezzle-shopify-info-button {
      display: none;
      }
      textarea:focus-visible {
      outline: none !important;
      }
      @media only screen and (max-height:600px) {
      .product-image-part {
      width: 82% !important;
      }
      .image-part {
      width: 34% !important;
      }
      .product-description-part {
      width: 66% !important;
      }
      .myDIV {
      width: 18% !important;
      }
      .delay-image {
      width: 373.5px !important;
      }
      }
      @media only screen and (min-height:601px) and (max-height:700px) {
      .product-image-part {
      width: 83% !important;
      }
      .image-part {
      width: 37% !important;
      }
      .product-description-part {
      width: 63% !important;
      }
      .delay-image {
      width: 407px !important;
      }
      .myDIV {
      width: 17% !important;
      }
      }
      @media only screen and (min-height:701px) and (max-height:800px) {
      .product-image-part {
      width: 84% !important;
      }
      .image-part {
      width: 42% !important;
      }
      .product-description-part {
      width: 58% !important;
      }
      .delay-image {
      width: 477.5px !important;
      }
      .myDIV {
      width: 16% !important;
      }
      }
      @media only screen and (min-height:801px) {
      .delay-image {
      width: 505.5px !important;
      }
      .product-image-part {
      width: 86% !important;
      }
      .image-part {
      width: 44% !important;
      }
      .product-description-part {
      width: 56% !important;
      }
      .myDIV {
      width: 14% !important;
      }
      }
      @media only screen and (max-width:1460px) {
      .product-detail-container {
      width: 95.5% !important;
      }
      }
      .delay-image {
      max-width: 100% !important;
      }
      .character-counter {
      position: absolute;
      top: 48px;
      width: 100%;
      text-align: right;
      }
      #addonsModal {
      min-width: 970px !important;
      }
      .progress {
      background-color: #e5e5e5;
      }
      .zoom-gallery {
      text-align: center;
      }
      .zoom-gallery-slide {
      display: none;
      }
      .zoom-gallery-slide.active {
      display: block;
      }
      .zoom-gallery .video-slide {
      position: relative;
      padding-bottom: 90%;
      padding-top: 10%;
      height: 100%;
      overflow: hidden;
      }
      .zoom-gallery .video-slide iframe,
      .zoom-gallery .video-slide object,
      .zoom-gallery .video-slide embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      }
      .zoom-gallery .selectors {
      text-align: center;
      }
      .zoom-gallery .selectors a {
      border: 1px solid transparent;
      display: inline-block;
      }
      .zoom-gallery .selectors a:hover,
      .zoom-gallery .selectors a.active {
      border-color: #ccc;
      }
      .zoom-gallery .selectors img {
      box-shadow: none !important;
      filter: none !important;
      -webkit-filter: none !important;
      }
      .zoom-gallery .selectors a[data-slide-id=video-1] {
      position: relative;
      }
      .zoom-gallery .selectors a[data-slide-id=video-1] img {
      opacity: 0.8;
      }
      .zoom-gallery .selectors a span {
      position: absolute;
      color: #fff;
      text-shadow: 0px 1px 10px #000;
      top: 50%;
      left: 50%;
      display: inline-block;
      transform: translateY(-50%) translateX(-50%);
      -webkit-transform: translateY(-50%) translateX(-50%);
      font-size: 30px;
      z-index: 100;
      }
      .zoom-gallery-slide iframe {
      width: 100%;
      height: 330px;
      }
      .productVideoButton {
      position: absolute;
      top: 23%;
      left: 0;
      right: 0;
      margin: 0 auto;
      z-index: 999;
      }
      .play-wrapper {
      position: relative;
      margin: -77px 0px 0 0;
      height: 66px;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 2;
      cursor: pointer;
      }
      #play {
      position: relative;
  
      background-size: 40% 40%;
      margin: -77px 0px 0 0;
      height: 66px;
      }
      .scrolling_up .image-part {
      top: 137px !important;
      }
      .scrolling_down .image-part {
      top: 95px !important;
      }
      .actual-list ul li::after {
      background: #707070 !important
      }
      [type=radio]+span:after,
      [type=radio]+span:before {
      opacity: 0;
      }
      [type=radio]:checked+span:after {
      opacity: 0;
      }
      [type=checkbox]+span.heartshape:not(.lever):before {
      border: none;
      background-size: 20px !important;
      top: -4px !important;
      left: 0 !important;
      width: 26px !important;
      height: 27px !important;
    
      }
      [type=checkbox]:checked+span.heartshape:not(.lever):before {
      transform: none !important;
    
      }
      [type=checkbox]+span.eggless:not(.lever):before {
      border: none;
      background-size: 20px !important;
      top: -2px !important;
      left: 0 !important;
      width: 23px !important;
      height: 22px !important;
     
      }
      [type=checkbox]:checked+span.eggless:not(.lever):before {
      transform: none !important;
    
      }
      .offer_dashbox {
      border: 1px solid #CFCFCF;
      border-radius: 10px;
      height: 41px;
      line-height: 41px;
      text-align: left;
      }
      .view-more-bttn {
      text-align: center;
      background-color: #FF4E84;
      display: inline-flex;
      padding: 8px 22px 7px !important;
      font-size: 14px !important;
      border-radius: 4px;
      color: #FFFFFF;
      cursor: pointer;
      }
      .tabs .tab a.active {
      color: white !important;
      background-color: #FF4E84 !important;
      border-top-right-radius: 7px;
      border-top-left-radius: 7px;
      }
      .tabs .indicator {
      background-color: #fff !important;
      height: 0 !important;
      }
      .tabs .tab a {
      color: #666666 !important;
      background-color: #E8E8E8 !important;
      border-top-right-radius: 7px;
      border-top-left-radius: 7px;
      }
      .pdp-input__div [type=radio]+span:hover {
      border: 1px solid #FF4E84 !important;
      }
      .pdp-input__div [type=radio]:not(:checked)+span {
      color: #666666;
      border-radius: 7px;
      border: 1px solid #CFCFCF;
      padding: 0 16px 0;
      }
      .pdp-input__div [type=radio]:checked+span {
      background-color: #FF4E84;
    
      border-radius: 7px;
      border: 1px solid #FF4E84;
      padding: 0 16px 0;
      }
      .actual-list>ul {
      margin: 0;
      }
      .contentScroller>ul {
      padding-right: 10px !important;
      }
      span.internataionDelvTime span {
      color: #e00f61;
      }
      
      .deliveryTypeTab label {
      position: relative;
      border: 1px solid rgba(0, 0, 0, 0.3);
      text-align: center;
      padding: 5px 10px 5px 10px;
      width: 100%;
      cursor: pointer;
      display: block;
      float: left;
      left: 0;
      }
      .deliveryTypeTab.cheked label {
      background: #692284;
      border: 1px solid #502078;
      }
      .deliveryTypeTab label a {
      color: #333;
      font-size: 12px;
      }
      .deliveryTypeTab.cheked label a {
      color: #fff;
      }
      .deliveryTypeTab label svg {
      float: left;
      margin: 8px 7px 0 -1px;
      display: none;
      }
      .deliveryTypeTab {
      padding: 0 !important;
      width: 40% !important;
      margin: 20px 0 30px;
      }
      .deliveryTypeTab.cheked label svg {
      display: block;
      }
      .courierProduct label {
      border-radius: 0 10px 10px 0;
      }
      .expressProduct label {
      border-radius: 10px 0 0 10px;
      }
      a#zoom-v:not(.mz-no-rt-width-css)>.mz-figure:not(.mz-no-rt-width-css)>img {
      max-height: 100% !important;
      }
      .personalized_imgDiv {
      padding: 10px;
      border: 1px solid #737373;
      border-radius: 10px;
      display: inline-block;
      cursor: pointer;
      }
      .personalized_imgDiv .uploadIMgTxt {
      font-size: 15px;
      text-align: left;
      }
      .personalized_imgDiv .uploadIMgTxt img {
      max-width: 18px;
      display: inline-block;
      margin-right: 10px;
      }
      .personalized_imgDiv .imgDiscription {
      font-size: 11px;
      color: #979797;
      margin-top: 5px;
      }
      #imgUploadModal {
      padding: 20px 1px 0px 0px;
      }
      .modal-overlay {
      pointer-events: none;
      }
      #imgUploadModal .modal-content {
      padding: 0;
      }
      .uploadImgLeft {
      display: grid;
      vertical-align: middle;
      align-items: center;
      margin-top: 20px;
      }
      .btn.selectedImgBtn {
      max-width: 200px;
      display: inline-block;
      margin: 0 auto;
      background: #FF9F00;
      box-shadow: none;
      margin-top: -41px;
      }
      .uploadImgLeft p {
      font-size: 12px;
      color: #888;
      }
      .uploadImgLeft p strong {
      color: #333;
      font-weight: bold;
      }
      .uploadImgRight ul li {
      width: 100%;
      margin: 9.2% 2%;
      float: left;
      overflow: hidden;
      height: 145px;
      margin-left: 1px;
      box-shadow: 0px 0px 8px #00000029;
      }
      .addBoxShadow {
      margin: 8px 0px;
      float: left;
      overflow: hidden;
      height: 145px;
      margin-left: 1px;
      /* box-shadow: 0px 0px 8px #00000029; */
      }
      .uploadImgCenter {
      vertical-align: middle;
      align-items: center;
      display: grid;
      text-align: center;
      position: relative;
      }
      .uploadImgCenter:after {
      content: "";
      position: absolute;
      width: 1px;
      height: 100%;
      background: #ababab;
      left: 0;
      right: 0;
      margin: auto;
      z-index: 1;
      }
      .uploadImgCenter span {
      display: inline-block;
      z-index: 2;
      background: #fafafa;
      font-weight: bold;
      }
      .uploadImgRight {
      position: relative;
      padding: 0 !important;
      }
      span#previews {
      width: 98%;
      float: left;
      min-height: inherit;
      padding: 0;
      text-align: center;
      border-width: 1px;
      position: absolute;
      border: none;
      display: block;
      }
      .uploadImgRight ul {
      position: relative;
      width: 100%;
      margin: 0;
      }
      .drop-zone {
      height: 145px;
      width: 185px;
      padding: 4px;
      display: grid;
      align-items: center;
      justify-items: center;
      text-align: center;
      font-weight: 500;
      font-size: 20px;
      cursor: pointer;
      background: #f5f5f5;
      border: 1px solid #c5c5c5 !important;
      margin-top: 4px;
      }
      .drop-zone--over {
      border-style: solid;
      }
      .drop-zone__input {
      display: none;
      }
      .drop-zone__thumb {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      background-color: #ccc;
      background-size: cover;
      position: relative;
      }
      .drop-zone__prompt {
      font-size: 20px;
      color: #666;
      }
      .drop-zone__thumb::after {
      content: attr(data-label);
      /*  displays text of data-lable*/
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 5px 0;
      color: white;
      background: rgba(0, 0, 0, 0.75);
      text-align: center;
      font-size: 14px;
      }
      .upload-item.dz-processing {
      width: 23.7%;
      height: 149px;
      text-align: center;
      background: #f5f5f5;
      border: 1px solid #c5c5c5 !important;
      border-radius: 0px;
      display: inline-block;
      float: left;
      margin: 1.2% 0%;
      position: relative;
      box-shadow: 2px 2px 2px #d7d7d7;
      z-index: 2;
      margin: 7px 5px;
      }
      .upload-item.dz-processing span {
      display: flow-root;
      max-height: max-content;
      height: 100%;
      }
      .upload-item.dz-processing img {
      width: 100%;
      height: 100%;
      }
      a.dz-remove {
      display: block;
      font-size: 0;
      position: absolute;
      height: 100%;
      top: 0;
      right: 0;
      }
      a.dz-remove1 {
      display: block;
      font-size: 0;
      position: absolute;
      height: 100%;
      top: 0;
      right: 0;
      }
      .dz-remove:after {
      content: "";
      font-size: 14px;
      position: absolute;
      right: -9px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      line-height: 20px;
      color: #fff;
      font-weight: 100;
      top: -8px;
    
      z-index: 17;
      }
      .dz-remove1:after {
      content: "";
      font-size: 14px;
      position: absolute;
      /* right: -9px; */
      left: 13%;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      line-height: 20px;
      color: #fff;
      font-weight: 100;
      top: 0px;
   
      z-index: 17;
      }
      #imgUploadModal .modal-footer {
      text-align: center;
      }
      .imgBtnUpload,
      .imgBtnUpload:hover {
      box-shadow: none;
      background: #00AE2E;
      width: 150px !important;
      }
      .image-box-width {
      width: 100% !important;
      }
      .orMainContent {
      position: relative;
      text-align: center;
      float: left;
      width: 100%;
      }
      .orUnderContent:after {
      content: "";
      display: inline-block;
      width: 100%;
      position: absolute;
      left: 8px;
      bottom: 10px;
      text-align: center;
      z-index: -1;
      border-bottom: 1px dashed #bebebe;
      }
      .dropzone .dz-preview .dz-remove {
      font-size: 1px !important;
      text-align: center;
      display: block;
      cursor: pointer;
      border: none;
      }
      .maxImageItem {
      top: 315px !important;
      }
      .topBorderOne {
      border-bottom: 1px dotted grey;
      padding: 2px 10px;
      margin-top: 10px;
      margin-bottom: 8px;
      }
      .topBorderOne:last-child {
      border-bottom: none;
      }
      .topBorderTwo {
      border-bottom: 1px dotted grey;
      padding: 2px 10px;
      margin-top: 10px;
      margin-bottom: 8px;
      }
      .topBorderThree {
      padding: 2px 10px;
      margin-top: 10px;
      margin-bottom: 4px;
      }
      .offerText {
      padding-top: 5px !important;
      font-size: 17px
      }
      .imgShow {
      width: 80px;
      height: 22px !important;
      margin-top: 6px !important;
      }
     
      .contentPointer {
      pointer-events: none;
      }
      .showCanvas {
      left: 36%;
      margin-top: 6px;
      padding: 4px;
      width: 18%;
      position: relative;
      }
      .mainDivAddToCartAndBuyNowEnable {
      pointer-events: pointer !important;
      opacity: 1;
      }
      .mainDivAddToCartAndBuyNowDisabled {
      pointer-events: none !important;
      opacity: 0.5;
      }
      .area_pincdoeDelivery:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 27px;
      height: 31px;
      }
      .location-icon-on-pdp .tt-suggestion:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 27px;
      height: 31px;
      }
      .location-icon-on-pdp .tt-suggestion:hover:after {}
      .tt-menu {
      margin-top: -6px;
      box-shadow: 0 6px 12px 0 rgb(0 0 0 / 20%);
      }
      .area_pincdoeDelivery:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 27px;
      height: 31px;
      }
      .location-icon-on-pdp .tt-suggestion:after {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 27px;
      height: 31px;
      }
      .location-icon-on-pdp .tt-suggestion:hover:after {}
      .tt-menu {
      margin-top: -6px;
      box-shadow: 0 6px 12px 0 rgb(0 0 0 / 20%);
      }
      #country-field {
      width: 32%;
      overflow: hidden;
      }
      .coupon-modal {
      background: rgb(255, 255, 255) !important;
      overflow-x: hidden !important;
      z-index: 1003 !important;
      display: none;
      opacity: 0;
      transform: scaleX(1) scaleY(1) !important;
      top: 27% !important;
      /* min-height: 46%!important; */
      }
      .modal-overlay {
      z-index: 1002;
      display: block;
      opacity: 0.7 !important;
      pointer-events: auto;
      }
      .location-icon-on-pdp .tt-suggestion {
      padding: 10px 11px 12px 30px;
      font-size: 14px;
      border: 1px solid #e6e6e6;
      background-color: #fff;
      color: #222;
      font-weight: 500;
      text-align: left;
      border-left: 0;
      border-right: 0;
      position: relative;
      cursor: pointer;
      margin-bottom: 0;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      }
      .location-icon-on-pdp .tt-suggestion:hover {
      transition: all .25s ease-in-out;
      }
      .d-space img {
      width: 45px;
      height: 45px;
      }
      .borderRadius {
      border: 2px solid #EC247C;
      border-radius: 50%;
      }
      .textColurCountry {
      color: #EC247C
      }
      /*             .btn-flat.disabled, .btn-flat:disabled, .btn-flat[disabled], .btn-floating.disabled, .btn-floating:disabled, .btn-floating[disabled], .btn-large.disabled, .btn-large:disabled, .btn-large[disabled], .btn-small.disabled, .btn-small:disabled, .btn-small[disabled], .btn.disabled, .btn:disabled, .btn[disabled], .disabled.btn-large, .disabled.btn-small {
      pointer-events: none;
      background-color: rgba(243,127,10,.5)!important;
      -webkit-box-shadow: none;
      box-shadow: none;
      color: #fff!important;
      cursor: default;
      } */
      .close-icon {
      display: none;
      position: absolute;
      right: 6px;
      top: 44%;
      width: 20px;
      }
      #addPopupMsg {
      display: none;
      }
      .cityBorder {
      border: 1px solid #ced4da !important;
      }
      .cityBorderFocus {
      border: 1px solid green !important;
      }
      .cityBorderError {
      border: 1px solid red !important;
      }
      #imgPreview {
      top: 15% !important;
      }
      .brightBorder {
      border: 1px solid #e03131 !important;
      }
      .info-tooltip {
      top: 100% !important;
      width: 260px !important;
      box-shadow: 0 4px 16px 0 rgba(0, 0, 0, .2);
      }
      .withOutDisInfo {
      height: 143px !important;
      }
      .model-header-text {
      padding: 10px;
      font-weight: 500;
      font-size: 18px;
      text-align: center;
      cursor: auto;
      background-color: #ededed;
      }
      .model-content-text {
      padding: 0 26px 15px !important;
      color: #878787;
      font-size: 16px;
      cursor: auto;
      }
      .model-serving-info {
      width: 300px;
      padding: 0;
      float: center;
      position: center;
      }
      .view-more-btn-new {
      text-align: center;
      color: #FF4E84;
      display: inline-flex;
      padding: 7px 17px 7px !important;
      font-size: 15px !important;
      border-radius: 4px;
      /* color: #FFFFFF; */
      font-weight: 600;
      cursor: pointer;
      }
      #addToWishlistButton {
      border: 1px solid #bbb6b6;
      width: 40px;
      height: 40px;
      display: block;
      border-radius: 50%;
      }
      [type=checkbox]+span.wishlist:not(.lever):before {
      margin-left: -8px !important;
      border: none;
      top: -1px;
      width: 38px;
      height: 45px;
  
      background-size: 70% !important;
      background-position: calc(100% - 10px) !important;
      }
      [type=checkbox]:checked+span.wishlist:not(.lever):before {
      margin-left: -3px !important;
      transform: none !important;
  
      background-size: 70% !important;
      background-position: calc(100% - 10px) !important;
      }
      [type=checkbox]+span.replace-heart-png:not(.lever):before {
      transform: none !important;
     
      background-size: 70% !important;
      background-position: calc(100% - 10px) !important;
      }
      [type=checkbox]+span.remove-heart-png:not(.lever):before {
      border: none;
      top: -1px !important;
      width: 38px !important;
      height: 45px !important;
   
      background-size: 70% !important;
      background-position: calc(100% - 10px) !important;
      }
      .dropzone {
      min-height: inherit;
      padding: 0;
      text-align: center;
      border-width: 1px;
      position: absolute;
      }
      .dropzone .dz-preview {
      background: white;
      display: none !important;
      }
      .dropzone.dz-clickable.dz-started {
      padding: 7px 20px;
      width: 48.5%;
      border: none;
      }
      .helpfulBtn {
      border-radius: 9px;
      text-transform: capitalize;
      background-color: #eee !important;
      color: #333;
      font-size: 13px;
      line-height: 28px;
      height: 26px;
      margin-top: 7px;
      font-weight: 700;
      }
      .dotCircle {
      height: 20px;
      width: 20px;
      background-color: green;
      border-radius: 50%;
      display: inline-block;
      }
      .maximumImageTextDesign {
      font-size: 12px;
      color: #8b8b8b;
      }
      .add-to-crt {
      background-color: #F29111 !important;
      }
      .wish-list__icon-width {
      width: 60px !important;
      height: 58px;
      background: #FFFFFF 0% 0% no-repeat padding-box;
      border: 1px solid #737373;
      border-radius: 10px;
      opacity: 1;
      padding: 5px 10px 8px 9px !important;
      }
      .wish-list__icon-width:hover {
      border: 1px solid #F55041;
      }
      .tooltip-pdp {
      display: inline-block;
      left: 52%;
      }
      .tooltip-pdp .tooltiptextDesk-pdp {
      visibility: hidden;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 11px 10px;
      font-size: 15px;
      z-index: 1;
      bottom: 100%;
      transform: translate(-52%, -0%);
      position: relative;
      }
      .tooltip-pdp:hover .tooltiptextDesk-pdp {
      visibility: visible;
      }
      .addRemoveWishlistmargin-pdp {
      position: absolute;
      left: -122px;
      }
      .addWishlistMargin-pdp {
      position: absolute;
      left: -67px;
      }
      .addWishlistStyle-pdp {
      height: 28px !important;
      margin-top: 1px;
      border-radius: 28px !important;
      }
      .removeWishlistStyle-pdp {
      height: 28px !important;
      margin-top: 1px;
      border-radius: 28px !important;
      margin-left: -40px !important;
      }
      .wishlistItemDesignForAllDevice-pdp {
      height: 28px;
      position: absolute;
      bottom: 92px;
      right: 17px;
      border-radius: 50% !important;
      width: 28px;
      }
      .border-div_color {
      border: 1px solid #F55041;
      }
      img#tooltip_image_pdp {
    margin-top: -8px;
}
.wishlist-btn img {
    margin-top: -14px;
    margin-left: 10px;
}
#addProductInCartForm [type=radio]:checked+span:after {
    opacity: 0!important;
}
div#mobilebread {
    display: none;
}
      @media only screen and (max-width: 600px) {
      .container3 {
    margin-top: 115px!important;
    }
    .breadcrumb {
    font-size: 16px;
 
}
footer.desktop {
  padding-bottom: 45px;
}
div#add {
    position: fixed;
    bottom: 0;
    width: 100%;
    background: #fff;
    margin: 0;
}
.mobile-footer {
    display: none!important;
}
.breadcrumb:last-child {
    color: #000000;
    font-size: 16px;
}
div#mobilebread {
    display: block;
}
div#desktopbread {
    display: none;
}
    div#order_image-input {
width: 93%!important;
margin-bottom: 10px;
}
    .col.foo {
    display: none;
}
.modal {
    width: 98%;
}
.col.l12.s12.m12 {
    display: block;
    width: 100%!important;
}
.col.s6.m3.l3.addon-prod-container {
    width: 50%!important;
}
    div#cartOptionsModal {
    height: 500px;
    width: 99%;
}
a#saveDeliveryInfo {
    background: #000;
    color: #fff;
    margin-right: 40px;
    width: 20%;
}
    input#deliveryInfo {
width: 88%;
  }
input#product_messages {
    width: 88%!important;
    padding: 0 10px!important;
}
.product-image-part {
    width: 100% !important;
    padding: 0!important;
}
.product-description-part {
    width: 100% !important;
    padding-left: 0!important;
}
.actual-list {
    padding: 0!important;
}
.image-part {
    width: 100% !important;
    position: relative!important;
}
.myDIV {
    width: 73% !important;
}
.product-image-div {
    width: 100%!important;
}
.col.s1.m1.l1 {
    width: 15%;
}
.adtoCart {
    width: 80%!important;
 
}
h1 {
    font-size: 20px!important;
}
span#productPrice {
    font-size: 20px!important;
}
span.moneySymbol {
    font-size: 20px!important;
   
}
.col-6 {
    margin-top: 10px;
}
.row .col.s6 {
    width: 100%;
 
}
.truncate.first_section {
    font-size: 10px;
}
.adobeEventPos {
    margin-bottom: 10px;
}
div#wrapper-recommended-cat {
    margin-top: -70px;
    padding: 10!important;
}
.col.product-description-part {
    padding: 0!important;
}
.clearfix {
    padding-right: 0px!important;
}
.col.s6.m6.l6.addTCart.adtoCart {
    display: flex;
    gap: 10px;
    width: 94%!important;
}
.image-part.scrollspy {
    display: none;
}
.swiper-container.desk_banners.product-detail.swiper-initialized.swiper-horizontal.swiper-pointer-events.swiper-backface-hidden {
    display: block;
}
.swiper-slide {
    flex-shrink: 0;
    width: 100%!important;
    height: 100%;
}
.swiper-wrapper {
  height: 50%;
}
.swiper-button-next, .swiper-button-prev {
    background: #fff;
    height: 30px;
    width: 30px;
    border-radius: 20px;
}
.swiper-button-next:after, .swiper-button-prev:after {
    font-family: swiper-icons;
    font-size: 18px;
}
}
 .weight [type=radio]+span:before {
    opacity: 0!important;
}
   </style>
   <div style="max-width: 1450px;left: 0;right: 0;margin: 0 auto;">
      <div class="container3 product-detail-container" id="list-item-address" style="margin-top:8px;">
         <div class="row m-0" id="desktopbread">
            <div class="col s12 breadcrumb-wrapper" style="padding-top: 34px;padding-bottom: 9px;">
               <input type="hidden" id="currentCityId" value="1">
               <a href="/" class="breadcrumb">Home</a>
               <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                  class="breadcrumb-delim">
                  <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
               </svg>
               <a class="breadcrumb" href="/cake">Cakes</a>
               <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                  class="breadcrumb-delim">
                  <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
               </svg>
               <a class="breadcrumb" href="javascript:;">{{ $product->name }}</a>
            </div>
         </div>
         <div class="section" style="padding-bottom:0; padding-top:0;">
            <div class="row product-canvas">
               <div class="col l12 product-left">
                  <div class="row" style="margin-bottom: 0">
                     <div style="background-color: #FFF; padding-top:10px; padding-left:10px; padding-right: 15px;width:100%; float:left;clear:both;"
                        class="clearfix">
                        <div class="image-part scrollspy"
                           style="  position: -webkit-sticky;top:0;position:sticky;float:left">
                           <div class="zoom-gallery">
                              <div class="myDIV col" style="padding: 0.75em 0;">
                                 <div style="text-align: center">
                                    <div class="selectors">
                                       @php
                                       $prdimgCounter = 0;
                                       @endphp
                                       @foreach ($product->images as $image)
                                       <a class=""
                                          style="display: inline-block; width: 70px;margin-bottom: 7px"
                                          onclick="return false;" data-slide-id="zoom"
                                          data-zoom="{{ asset($image->image) }}"
                                          data-big="{{ asset($image->image) }}"
                                          data-zoom-id="zoom-v" href="{{ asset($image->image) }}"
                                          data-image="{{ asset($image->image) }}">
                                          <picture>
                                             <source data-srcset="{{ asset($image->image) }}"
                                                type="image/webp" />
                                             <img class="thumbnail responsive-img lazyload"
                                                style="padding: 0;border: 2px solid transparent;padding-bottom: 0px"
                                                id="{{ $prdimgCounter }}"
                                                src="{{ asset($image->image) }}"
                                                data-src="{{ asset($image->image) }}" alt=""
                                                title="{{ $product->name }}"
                                                onclick="changeMainImage('{{ asset($image->image) }}')">
                                          </picture>
                                       </a>
                                       @php
                                       $prdimgCounter++;
                                       @endphp
                                       @endforeach
                                    </div>
                                    
                                 </div>
                              </div>
                              <div class="col product-image-part" style="padding: 0.75em;position: relative;">
                                 <div class="center-align product-detail-tag-desktop bg-best-seller ">
                                 </div>
                                 <link rel="preload" href="{{ asset($product->images->first()->image) }}"
                                    as='image' />
                                 <div class="center-align zoom-gallery-slide active" data-slide-id="zoom"
                                    style="margin-bottom: 18px;">
                                    <div class="product-image-div"
                                       style="box-shadow: 0px 3px 6px #00000029; position: relative; width: 400px; height: 400px;">
                                       <img id="prod-big-image"
                                          src="{{ asset($product->images->first()->image) }}"
                                          alt="{{ $product->name }}" title="{{ $product->name }}"
                                          style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                                       <div id="lens" style="
                                          position: absolute;
                                          border: 1px solid #000;
                                          width: 100px;
                                          height: 100px;
                                          opacity: 0.4;
                                          background-color: #fff;
                                          display: none;
                                          pointer-events: none;
                                          "></div>
                                    </div>
                                 </div>
                                 <!-- <div class="center-align zoom-gallery-slide active" style="margin-bottom: 18px;">
                                    <div class="product-image-div" style="box-shadow: 0px 3px 6px #00000029;">
                                       <a class="MagicZoom" id="zoom-v"
                                          data-options="zoomMode: magnifier; variableZoom: true; zoomPosition: inner; zoomWidth: auto; zoomHeight: auto;"
                                          href="{{ asset($product->images->first()->image) }}">
                                       <img id="prod-big-image" class="bg-img delay-image lazyload"
                                          style="aspect-ratio: 1/1; width: 100%;"
                                          src="{{ asset($product->images->first()->image) }}"
                                          alt="{{ $product->name }}"
                                          title="{{ $product->name }}">
                                       </a>
                                    </div>
                                    </div> -->
                                 {{-- 
                                 <div class="center-align zoom-gallery-slide active" data-slide-id="zoom"
                                    style=" margin-bottom: 18px;">
                                    <div class="product-image-div"
                                       style="box-shadow: 0px 3px 6px #00000029;">
                                       <a class="MagicZoom" id="zoom-v"
                                          data-options="autostart:false; expand: fullscreen; expandZoomMode: zoom; variableZoom : true; selectorTrigger: hover; zoomWidth:120%;zoomHeight:100%"
                                          href="{{ asset($product->images->first()->image) }}">
                                       <img id="prod-big-image" class="bg-img delay-image lazyload"
                                          style="aspect-ratio:1/1"
                                          src="{{ asset($product->images->first()->image) }}"
                                          data-src="{{ asset($product->images->first()->image) }}"
                                          alt="83221_{{ $product->name }}"
                                          title="{{ $product->name }}">
                                       </a>
                                    </div>
                                 </div>
                                 --}}
                                 <div>
                                    <div class="productVideoButton" data-slide-id="video-1" id="video_1"
                                       style="display:none;">
                                       <div class="animated-shadow">
                                          <img class="responsive-img product-video-play"
                                             id="product-video-play" style="position: relative;"
                                             src="https://assets.winni.in/groot/2023/03/13/desktop/product-detail/play-button.png" />
                                       </div>
                                    </div>
                                    <div class="productVideoButton" data-slide-id="video-2" id="video_2"
                                       style="display:none;">
                                       <div class="animated-shadow">
                                          <img class="responsive-img product-video-play"
                                             id="product-video-play" style="position: relative;"
                                             src="https://assets.winni.in/groot/2023/03/13/desktop/product-detail/play-button.png" />
                                       </div>
                                    </div>
                                    <div class="productVideoButton" data-slide-id="video-3" id="video_3"
                                       style="display:none;">
                                       <div class="animated-shadow">
                                          <img class="responsive-img product-video-play"
                                             id="product-video-play" style="position: relative;"
                                             src="https://assets.winni.in/groot/2023/03/13/desktop/product-detail/play-button.png" />
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col s12 m4 l12" style="padding:0 7px 0">
                                       <img class=" responsive-img "
                                          src="https://azure-bee-177357.hostingersite.com/public/assets/website/img/Fssai-1-1.png"
                                          style="width:100%;height:100%">
                                    </div>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                         <div class="swiper-container desk_banners product-detail"
              style="margin:0 auto;padding:0 0 0;text-align: center;position:relative; overflow: hidden;">
             <div class="swiper-wrapper">

                   
                   @foreach ($product->images as $image)
                   <div class="swiper-slide">
                          <a class="center-align" href="best-selling-plants86b7.html?showMain=true">
                              <img alt="dynamic" height="auto" style="width:100%" loading="lazy"
                               src="{{ asset($image->image) }}" title="Plant Delivery In India">
                          </a>
               </div>
                   
                   @endforeach


         </div>
         <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
         </div>
         
         
         
                        <div class="col product-description-part" style="padding-left: 100px;">
                           <div class="row" style="margin:0 auto;">
                              <div class="col l12" style="padding:0">
                                 <h1
                                    style="font-size: 24px;line-height: normal;font-weight:600;color: #323232; margin:11px auto 6px; margin-top:11px;text-transform:capitalize;display:contents">
                                    {{ $product->name }}
                                 </h1>
                              </div>
                           </div>
                           <div class="row" style="margin:0 auto;">
                              
                              @php
                              $variant = $product->variants->first();
                              $discountedPrice = $variant->price - ($variant->price * $variant->discount / 100);
                              @endphp
                              <div class="pdPriceWrapper col l12"
                                 style="margin-bottom:0; position: relative;margin-top:5px;padding-left: 0;   ">
                                 <span class="prdDesc-price"
                                    style="font-size:20px; color: #333; font-weight: normal;">
                                 <i class="fa fa-inr" aria-hidden="true"></i> </span>
                                 <div class="row"
                                    style="display:flex;margin-top: -11px;margin-bottom: 20px">
                                    <div class="col-6"
                                       style="color:#323232;display: inline-block;padding-left:10px">
                                       <div id="zoom-result" style="width: 400px;height: 400px;border: 1px solid #000;background-repeat: no-repeat;background-size: 800px 800px;
                                          display: none;
                                          margin-left: 20px;
                                          "></div>
                                       <div style="padding-right: 0;">
                                          <span
                                             style="vertical-align:super;font-size:31px; padding-right:5px;"
                                             class="moneySymbol">₹</span>
                                          <span class="product-price moneyCal"
                                             data-inr="{{$discountedPrice}}"
                                             style="color: #222; font-size:48px; font-weight: 600;"
                                             id="productPrice">{{$discountedPrice}}</span>
                                       </div>
                                    </div>
<div class="col-6" style="display: inline-block; margin-top:14px; padding-left: 8px;">
    <!-- Discount Info -->
    <!--<div style="font-size:16px; padding-left: 3px; color:#878787;">-->
    <!--    <span style="color:#636466;font-size: 15px">-->
    <!--        <span style="text-decoration:line-through;" class="moneySymbol">₹</span>-->
    <!--        <span style="text-decoration:line-through;"-->
    <!--            class="discountRate"-->
    <!--            id="mrpproductprice">-->
    <!--            {{$product->variants->first()->price}}-->
    <!--        </span>,-->
    <!--        <span style="color:#1A9102;font-size: 15px"-->
    <!--            id="DiscountProductPercentage">-->
    <!--            {{$product->variants->first()->discount}}-->
    <!--        </span>% off-->
    <!--    </span>-->
    <!--</div>-->

    <!-- Tax Info -->
    <!--<div style="color:#787878;font-size: 12px;line-height: 10px;">-->
    <!--    Inclusive of all taxes-->
    <!--</div>-->

    <!-- Zoom Result Box (Moved Below Heading & Full Width) -->
    <div id="zoom-result" style="
        width: 100%;
        height: 400px;
        background-repeat: no-repeat;
        background-size: 800px 800px;
        display: none;
        margin-top: 15px;
    "></div>
</div>

                                    <div class="col-6" style="margin-top:15px;">
                                       <ul class="right  nav-options"
                                          style="clear:both; margin: 0;padding-left:1px;  position:relative;">
                                          <li>
                                             <span>
                                                <!--<a class=" dropdown-trigger"-->
                                                <!--   data-hover="true"-->
                                                <!--   data-belowOrigin="false"-->
                                                <!--   data-target="infotooltip"-->
                                                <!--   data-constrainWidth="false">-->
                                                <!--<img src="https://assets.winni.in/groot/2023/17/icon/infoDesk.png"-->
                                                <!--   style="width:21px; height:20px;">-->
                                                <!--</a>-->
                                                <ul id="infotooltip"
                                                   class='dropdown-content info-tooltip  '
                                                   style="padding:15px 18px 0;  position: absolute;">
                                                   <span>
                                                      <div
                                                         style=" padding-bottom:0;color:#212121;font-size: 14px;font-weight:600;padding-bottom:11px">
                                                         Price Details 
                                                      </div>
                                                      <div style="clear:both">
                                                         <span style="float:left">
                                                            <span
                                                               style="color: #878787;font-weight: 500;font-size: 12px;">Maximum
                                                            Retail Price</span>
                                                            <div
                                                               style="line-height: 10px;color: #878787;font-weight: 400;font-size: 10px;">
                                                               (Inclusive of all
                                                               taxes)
                                                            </div>
                                                         </span>
                                                         <span
                                                            style="text-decoration:line-through; float:right;font-weight: 500;font-size: 14px;color:#212121;">
                                                         <span
                                                            class="moneySymbol">₹</span>
                                                         <span class=" moneyCal"
                                                            data-inr="{{ $product->variants->first()->price }}"
                                                            class="discountRate"
                                                            data-discount="{{ $product->variants->first()->price }}"
                                                            id="prodPriceDisInfo">
                                                         {{ $product->variants->first()->price }}</span>
                                                         </span>
                                                      </div>
                                                      <div
                                                         style="clear:both;padding-top:6px;font-weight:500;color:#212121;font-size:14px;padding-top:13px">
                                                         <div
                                                            style="border-bottom:1px dashed #9e9e9ecf;">
                                                         </div>
                                                         <span
                                                            style="float:left;padding-top:10px">Selling
                                                         Price</span>
                                                         <span
                                                            style="padding-top:10px;float:right">
                                                         <span
                                                            class="moneySymbol">₹</span>
                                                         <span class=" moneyCal"
                                                            data-inr=" {{ $product->variants->first()->price }}"
                                                            id="productPriceInfo">
                                                         {{ $product->variants->first()->price }}</span>
                                                         </span>
                                                      </div>
                                                      <div
                                                         style="width: 100%;margin-top:10px;padding-bottom:12px;color:#388e3c;font-size:12px;font-weight:500;display:inline-block;">
                                                         <div
                                                            style="padding-bottom:10px;border-top:1px solid #ccc">
                                                         </div>
                                                         You save
                                                         <span
                                                            class="moneySymbol">₹</span>
                                                         <span class="moneyCal"
                                                            data-inr=" {{ $product->variants->first()->price }}"
                                                            data-discount=" {{ $product->variants->first()->price }}"
                                                            id="productPriceSaveInfo">
                                                         {{ $product->variants->first()->price }}</span>
                                                         <span
                                                            id="discountProductPercentageInfo">
                                                         (
                                                         {{ $product->variants->first()->price }}%)
                                                         </span>
                                                         on this product.
                                                      </div>
                                                   </span>
                                                </ul>
                                             </span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <span style="display:none;">
                                 549</span>
                              </div>
                              <div class="col m12" style="padding: 0;display: none" id="switchProductId">
                              </div>
                              <div>
                                 <div style="text-align: center;float: left;width: 100%;">
                                    <form id="addProductInCartForm" method="POST"
                                       action="/giftbox/addproduct/21687/0" novalidate
                                       autocomplete="off">
                                       <input type="hidden" name="_csrf"
                                          value="a1e1d75d-db71-4dec-a888-6588583a2495" />
                                       <input id="deliveryZoneId" name="deliveryZoneId" value="66"
                                          type="hidden">
                                       <input id="selectedVariantSku" name="selectedVariantSku"
                                          type="hidden">
                                       <input id="selectedVariantPrice" name="selectedVariantPrice"
                                          type="hidden">
                                       <input id="selectedVariantDiscount" name="selectedVariantDiscount"
                                          type="hidden">
                                       <div id="prdut-attr-html" style="text-align:left;">
                                          <div class="row Weight" style="margin:0 auto;">
                                            @if($product->variants->first()->size !=0)
                                                 Weight :
                                                 <div class="col s12 l12 pdp-input__div"
                                                    style="margin:0 auto;padding:10px 0 10px;">
                                                    @foreach ($product->variants as $variant)
                                                    <label>
                                                    <input data-name="{{ $variant->size }}"
                                                    data-priority="1"
                                                    data-variant="{{ $variant->id }}"
                                                    id="attval_{{ $variant->size }}"
                                                    name="variant"
                                                    class="variant-radio"
                                                    type="radio"
                                                    data-price="{{ $variant->price }}"
                                                    data-discount="{{ $variant->discount }}"
                                                    value="{{ $variant->size }}"
                                                    {{ $loop->first ? 'checked' : '' }}>
                                                    <span for="attval_{{ $variant->size }}"
                                                       style="margin-right:10px; height:31px; line-height:30px; text-align:center; width:12%;">{{ $variant->size }}</span>
                                                    </label>
                                                    @endforeach
                                                 </div>
                                            @endif
                                             
                                             <div class="col s6 l6"
                                                style="padding-left: 0;clear : both;">
                                                <div class="" style="margin-top:10px;{{ $product->category->cat_slug == 'plants' ? 'display:none;' : '' }}"  >
                                                    <label>Select Flavour</label>
                                                   <select
                                                      style="border: 1px solid #737373; margin-bottom: 0; height: 39px; border-radius: 7px; padding-left: 10px !important; width: 97%;"
                                                      id="cakeFlavourAtt"
                                                      name="att_3"
                                                      required
                                                      data-id="3"
                                                      data-priority="15">
                                                        @foreach($flavours as $flavour)
                                                            <option value="{{ $flavour }}">{{ $flavour }}</option>
                                                        @endforeach
                                                    </select>

                                                   
                                                </div>
                                             </div>
                                             <a href="#" id="openServingModal" style="{{ $product->category->cat_slug == 'plants' ? 'display:none;' : '' }}">Serving Info</a>
                                             <div id="servingModal" class="serving-modal">
                                             <div class="serving-modal-content">
                                             <span class="close-serving">&times;</span>
                                             <h3>Serving Information</h3>
                                             <ul>
                                             <li><strong>0.5 kg</strong> - 4 to 6 Person</li>
                                            <li><strong>1 kg</strong> - 6 to 12 Person</li>
                                            <li><strong>1.5 kg</strong> - 12 to 18 Person</li>
                                           <li><strong>2 kg</strong> - 18 to 24 Person</li>
                                           <li><strong>2.5 kg</strong> - 24 to 30 Person</li>
                                            <li><strong>3 kg</strong> - 30 to 36 Person</li>
                                            <li><strong>4 kg</strong> - 40 to 48 Person</li>
                                          </ul>
                                            </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                              <!-- User must click this field to select options -->
                                    
    <input type="text" id="deliveryInfo" placeholder="Select Delivery Date/Time & Shipping Type" readonly class="modal-trigger" data-target="cartOptionsModal">
    
    <input type="hidden" id="selectedDate" name="selectedDate">
    <input type="hidden" id="selectedDeliveryType" name="selectedDeliveryType">
    <input type="hidden" id="selectedTimeSlot" name="selectedTimeSlot">
    
    

 
  
     <div class="cake-message-input" id="cake-message-input" style=" margin-top: 10px;">
          <input type="text" name="product_messages" id="product_messages" placeholder="Enter your message" style="padding: 8px; width: 100%; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        
            <div class="order_image-input" id="order_image-input" style=" margin-top: 10px;{{ $product->category->cat_slug == 'photo-cakes' ? '' : 'display:none;' }}">
              <input type="file" name="order_image" id="order_image" >
              <div id="image_order_preview">
                  
              </div>
            </div>
        

                              <div class="prdu-bunw-div">
                              <input type="hidden" id="productInStock" name="productInStock"
                                 value="true" />
                              <div id="parent-wrapper-add-to-cart" class="">
                              <div class="row" style="margin-top: -10px;" id="add">
                                <!--<div class="col s1 m1 l1" style="margin-top:14px;">-->
                                <!-- <div class="wishlist-item-wrapper">-->
                                <!--     <div class="wish-list__icon-width">-->
                                <!--        <div class="wishlist-btn" data-product="{{ $product->id }}">-->
                                <!--          <label for="input-add-to-wishlist-21687">-->
                                <!--            <input-->
                                <!--              id="input-add-to-wishlist-21687"-->
                                <!--              type="checkbox"-->
                                <!--              name="wishlistChecked"-->
                                <!--              class="wishlistChecked wishlist-image addToWishList"-->
                                <!--              data-productId="21687"-->
                                <!--              data-wishlistId=""-->
                                <!--            />-->
                                <!--            <span class="wishlist" id="span-add-to-wishlist-21687"></span>-->
                                <!--          </label>-->
                                <!--          <img-->
                                <!--            class=""-->
                                <!--            src="https://azure-bee-177357.hostingersite.com/public/assets/website/img/without-heart.webp"-->
                                <!--            alt="Add to wishlist"-->
                                <!--          />-->
                                <!--        </div>-->
                                <!--      </div>-->
                                <!--    </div>-->

                                <!--</div>-->
                              <div class="col s6 m6 l6 addTCart adtoCart"
                                 style="margin-bottom: 10px;margin-top: 14px;">
                              <button 
                                 type="button" 
                                 id="addToCartButton"
                                 class="adobeCartEvent btn prdDesc-buynow buy-now-mobile buyNowAdon cartUrl addToCart"
                                 style="background: #00AE2E;width: 100%; font-size: 16px; height: 44px; line-height: 45px;color: #FFF;border-radius: 5px; font-weight:500;"
                                 data-product-id="{{ $product->id }}"
                                 data-variant-id="{{ $product->variants->first()->id ?? '' }}" 
                            
                                 data-quantity="1"
                                 >
                                    <span class="addCrt">Add to Cart</span>
                              </button>
                              
                              <button 
                                 type="button" 
                                 id="BuyNowButton"
                                 class="adobeCartEvent btn prdDesc-buynow buy-now-mobile buyNowAdon cartUrl BuyNowButton"
                                 style="background: red;width: 100%; font-size: 16px; height: 44px; line-height: 45px;color: #FFF;border-radius: 5px; font-weight:500;"
                                 data-product-id="{{ $product->id }}"
                                 data-variant-id="{{ $product->variants->first()->id ?? '' }}" 
                                 data-quantity="1"
                                 >
                              <span class="buyNow">Buy Now</span>
                              </button>
                              
                              </div>
                             
                              </div>
                            <span class="eggless" style="{{ $product->category->cat_slug == 'plants' ? 'display:none;' : '' }}">Eggless</span>
                              </div>
                              
                             
                              </div>
                              </form>
                           </div>
                         
                         
                           <div class="row">
                              <!--for offers-->
                              <div class="prod-detail cat-text col l12" id="productDescriptionHeading"
                                 style="background-color:#FFF;padding: 0px 12px 15px;">
                                 <h3 style="padding:0;color:#4D4D4D;font-weight:600;font-size: 23px;">
                                    <a name="product-description" class="cat-text">
                                    Product Description
                                    </a>
                                 </h3>
                                 <div class="row">
                                    <div class="col s12">
                                       <div class='actual-list'
                                          style="padding: 0 0px 0;border-radius:6px;color: #636466;">
                                          <!--<div class="contentScroller"-->
                                          <!--   style="margin-right:0;height:auto; overflow-y: auto;">-->
                                             
                                           
                                          <!--   <p>{{ $product->short_description }}</p>-->
                                            
                                          <!--</div>-->
                                          <div class="contentScroller"
                                             style="margin-right:0;margin-top:-20px;padding-right:15px;margin-bottom:15px;height: auto; overflow-y: auto;">
                                             <p>{{ $product->long_description }}
                                             </p>
                                          </div>
                                         

                                       </div>
                                    </div>
                                    
                                  
                                  
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="wrapper-recommended-cat" class="cat-text col l12"
                  style="background-color:#FFF; padding:15px;">
                  <style type="text/css">
                     .first_section {
                     text-align: center;
                     color: #333333;
                     padding: 3% 6% 4.5%;
                     font-size: 15px;
                     border-radius: 0px 0px 10px 10px;
                     }
                     .radius {
                     border-radius: 7px
                     }
                     .background {
                     background-color: #F9F9F9;
                     }
                     .spacing-col {
                     padding: 0 6px 0 !important;
                     }
                     .custom-shadow-pd {
                     box-shadow: 0px 3px 6px #00000029;
                     }
                  </style>
                  <div style="background-color:#FFF;">
                     <h5 class="adbRecomTitle left-align"
                        style="padding-left:6px;color:#4D4D4D;font-weight:600;font-size: 22px;">
                        Recommended Product
                     </h5>
                  </div>
                  <div class="row adobeRecomm recoCategories" style="margin:0 auto;padding:15px 0 10px">
                      
                     @foreach ($productsQuery as $product)
                     <div class="col l2 m2 s4  spacing-col adobeEventPos" style="text-align: center;">
                        <div class="custom-shadow-pd radius background">
                           <a 
                           href="{{ route(@$product->subcategory->subcat_slug ? 'product.detail.withsub' : 'product.detail', [
                                        'cat_slug' => $product->category->cat_slug,
                                        'subcat_slug' => $product->subcategory?->subcat_slug,
                                        'product_slug' => $product->slug,
                                    ]) }}"
                           >
                              <img class="lazyload  responsive-img "
                                 src="{{ asset($product->images->first()->image) }}"
                                 style="width:100%;height:100%">
                              <div class="truncate first_section">
                                 {{ $product->name }}
                              </div>
                           </a>
                        </div>
                     </div>
                    @endforeach
                  </div>
               </div>
               
                <div class="row m-0" id="mobilebread">
            <div class="col s12 breadcrumb-wrapper" style="padding-top: 34px;padding-bottom: 9px;">
               <input type="hidden" id="currentCityId" value="1">
               <a href="/" class="breadcrumb">Home</a>
               <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                  class="breadcrumb-delim">
                  <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
               </svg>
               <a class="breadcrumb" href="/cake">Cakes</a>
               <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                  class="breadcrumb-delim">
                  <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
               </svg>
               <a class="breadcrumb" href="javascript:;">{{ $product->name }}</a>
            </div>
         </div>
               
            </div>
         </div>
      </div>
   </div>
   <!--</div>-->
   </div>
   </div>
</main>


<!--------model code for date and time -->
<!-- Modal -->



  <div id="cartOptionsModal" class="modal">
   <div class="modal-content">
     <h5>Select Delivery Options</h5>
 
         
         <!-- Step 1: Date Selection -->
            <div class="input-field" id="step1">
              <input type="text" id="modalDate" class="datepicker" required>
              <label for="modalDate">Select Delivery Date</label>
            </div>

            <!-- Step 2: Delivery Type (hidden initially) -->
            <div id="step2" style="display: none; margin-top: 20px;">
              <h6>Select Delivery Type</h6>
              
              <p>
                <label>
                  <input name="deliveryType" type="radio" value="99" data-type="fixed" />
                  <span>Fixed Time Delivery (₹99)</span>
                </label>
              </p>
              <div class="time-slots" id="timeSlotsFixed" style="display: none; margin-left: 20px;">
                <p>Select a time slot for Fixed Time Delivery:</p>
                <p>
                  <label>
                    <input name="timeSlot" type="radio" value="10:00 AM - 11:00 AM" />
                    <span>10:00 AM - 11:00 AM</span>
                    </label>
                </p>
                <p>
                  <label>
                    <input name="timeSlot" type="radio" value="11:00 AM - 12:00 PM" />
                     <span>11:00 AM - 12:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="12:00 PM - 01:00 PM" />
                    <span>12:00 PM - 01:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="01:00 PM - 02:00 PM" />
                     <span>01:00 PM - 02:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="02:00 PM - 03:00 PM" />
                     <span>02:00 PM - 03:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="03:00 PM - 04:00 PM" />
                <span>03:00 PM - 04:00 PM</span>
                  </label>
                </p>
                  <p>
                  <label>
                    <input name="timeSlot" type="radio" value="04:00 PM - 05:00 PM" />
               <span>04:00 PM - 05:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="05:00 PM - 06:00 PM" />
                    <span>05:00 PM - 06:00 PM</span>
                  </label>
                </p>
                 <p>
                  <label>
                    <input name="timeSlot" type="radio" value="06:00 PM - 07:00 PM" />
                     <span>06:00 PM - 07:00 PM</span>
                  </label>
                </p>
                  <p>
                  <label>
                    <input name="timeSlot" type="radio" value="07:00 PM - 08:00 PM" />
                      <span>07:00 PM - 08:00 PM</span>
                  </label>
                </p>
                   <p>
                  <label>
                    <input name="timeSlot" type="radio" value="08:00 PM - 09:00 PM" />
                         <span>08:00 PM - 09:00 PM</span>
                  </label>
                </p>
                  <p>
                  <label>
                    <input name="timeSlot" type="radio" value="09:00 PM - 10:00 PM" />
                       
                    <span>09:00 PM - 10:00 PM</span>
                  </label>
                </p>
              </div>
              
              <p>
                <label>
                  <input name="deliveryType" type="radio" value="249" data-type="pre-midnight" />
                  <span>Pre Mid-Night Delivery (₹249)</span>
                </label>
              </p>
              <div class="time-slots" id="timeSlotsPreMidnight" style="display: none; margin-left: 20px;">
                <p>Select a time slot for Pre Mid-Night Delivery:</p>
                <p>
                  <label>
                    <input name="timeSlot" type="radio" value="11:00 PM - 11:59 PM" />
                    <span>11:00 PM - 11:59 PM</span>
                  </label>
                </p>
              </div>
              
                  <p>
                    <label>
                      <input name="deliveryType" type="radio" value="19" data-type="standard" />
                      <span>Standard Delivery (₹19)</span>
                    </label>
                  </p>
                  <div class="time-slots" id="timeSlotsStandard" style="display: none; margin-left: 20px;">
                    <p>Select a time slot for Standard Delivery:</p>
                    <p>
                      <label>
                        <input name="timeSlot" type="radio" value="09:00 AM - 01:00 PM" />
                        <span>09:00 AM - 01:00 PM</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input name="timeSlot" type="radio" value="01:00 PM - 05:00 PM" />
                        <span>01:00 PM - 05:00 PM</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input name="timeSlot" type="radio" value="05:00 PM - 09:00 PM" />
                        <span>05:00 PM - 09:00 PM</span>
                      </label>
                    </p>
                     <p>
                      <label>
                        <input name="timeSlot" type="radio" value="07:00 PM - 11:00 PM" />
                        <span>07:00 PM - 11:00 PM</span>
                      </label>
                    </p>
                  </div>
                  
                  
                     <p>
                    <label>
                      <input name="deliveryType" type="radio" value="49" data-type="eariest" />
                      <span>Eariest Delivery (₹49)</span>
                    </label>
                  </p>
                  <div class="time-slots" id="timeSlotsEeariest" style="display: none; margin-left: 20px;">
                    <p>Select a time slot for Standard Delivery:</p>
                    <p>
                      <label>
                        <input name="timeSlot" type="radio" value="3:00 PM - 5:00 PM" />
                        <span>3:00 PM - 5:00 PM</span>
                      </label>
                    </p>
                    <p>
                      <label>
                        <input name="timeSlot" type="radio" value="7:00 PM - 9:00 PM" />
                        <span>7:00 PM - 9:00 PM</span>
                      </label>
                    </p>
                  </div>
                  
                  
            </div>

         


   </div>
 
   <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="saveDeliveryInfo">Save</a>
   </div>
 </div>

<!--end code of model --->

<!-- related product -->
<!--
<div class="modal fade" id="relatedProductsModal" tabindex="-1" aria-labelledby="relatedProductsModalLabel" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="relatedProductsModalLabel">Related Products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        
        
    
      </div>
      <div class="modal-body">
      <div class="carousel carousel-slider center" id="relatedProductsCarousel">
    @foreach($related_product_query as $v)
        <a class="carousel-item" href="#related-{{ $v->id }}">
            <div class="card center-align" style="padding: 20px;">
                <img src="{{ asset($v->images->first()->image) }}" alt="{{ $v->name }}" style="max-height: 150px;">
                <h6>{{ $v->name }}</h6>
                <p>₹{{ $v->variants->first()->price }}</p>
                <a
                    href="{{ route(@$v->subcategory->subcat_slug ? 'product.detail.withsub' : 'product.detail', [
                        'cat_slug' => $v->category->cat_slug,
                        'subcat_slug' => $v->subcategory?->subcat_slug,
                        'product_slug' => $v->slug,
                    ]) }}"
                    class="btn addToCart">
                    Add to Cart
                </a>
            </div>
        </a>
    @endforeach
</div>

      </div>
    </div>
  </div>
</div>
-->


 <div id="relatedProductsModal" class="modal modal-fixed-footer" tabindex="-1"
        style="z-index: 1003;opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);">
        <div class="center-align" style="background-color: #812990; color: #FFF; padding: 10px 5px; font-size:18px;">
            Make Your Gift More Special With
            <a id="Xbutton" class="right white-text" style="margin-right:10px; margin-top:4px;cursor:pointer;">
               
            </a>
        </div>
        <div class="modal-content includeAddon" style="text-align: justify;padding-top:7px;">



            <style>
                .added-addons {
                    background: #E30D68;
                    padding: 4px 10px;
                    border-radius: 13px;
                    margin-left: 10px;
                    left: 63%;
                    color: white;
                    text-transform: uppercase;
                    display: inline-block;
                    position: absolute;
                    bottom: 15px;
                    font-size: 11px;
                    line-height: normal;
                }

                .add-addons {
                    border: 1px solid #333;
                    padding: 5px 16px;
                    color: #333;
                    margin-left: 10px;
                    left: 63%;
                    text-transform: uppercase;
                    display: inline-block;
                    position: absolute;
                    bottom: 12px;
                    font-size: 11px;
                    line-height: normal;
                    font-weight: bold;
                    /*    margin-left: 10px;cursor: pointer; padding: 1px 12px;border: 1px solid #ccc; width: 55px;*/
                }

                .remove-addon {
                    border-radius: 12px;
                    padding: 12px;
                    /* font-size: 17px; */
                    position: absolute;
                    bottom: 5%;
                    right: 6%;
                    display: inline-block;
                    border: 1px solid #ccc;
                    color: #aaa;
                    background: url(https://assets.winni.in/groot/2023/06/19/addons/trash-bin.png);
                    background-size: 14px;
                    background-repeat: no-repeat;
                    background-position: 5px;
                }

                .category-buttons {
                    width: 100%;
                    margin-bottom: 2px;
                    padding: 8px 4px;
                    border-radius: 10px;
                    text-align: center;
                    background-color: #f9f9f9;
                    box-shadow: 0px 3px 8px #00000029 !important;
                }

                .bg-color {
                    /* bg-color-combo-> #E30D68 #F1948A #f0c14b  #d93025 #fb641b rgb(242, 128, 70) rgb(239, 83, 80)   #f9f9f9*/
                    background-color: #E30D68;
                    color: white !important;
                }

                .addon-prod-container label input {
                    display: none;
                }

                .addonHover:hover {
                    border: 1px solid rgb(245, 76, 131);
                }

                .addonHover {
                    border: 1px solid transparent;
                }

                .view_all {
                    border-radius: 4px;
                    border: 1px solid #FF4E84;
                    width: 8% !important;
                    font-size: 14px;
                    text-align: center;
                    color: white;
                    margin-right: 10px;
                    float: right !important;
                    padding: 0.6% 1% 0.5% 1% !important;
                    background-color: #FF4E84;
                    cursor: pointer;
                }

                .back_all {
                    border-radius: 4px;
                    border: 1px solid #FF4E84;
                    width: 8% !important;
                    font-size: 14px;
                    text-align: center;
                    color: white;
                    margin-right: 10px;
                    float: right !important;
                    padding: 0.6% 1% 0.5% 1% !important;
                    background-color: #FF4E84;
                    cursor: pointer;
                    display: none;
                }

                .desktop-left-title {
                    padding-bottom: 11px !important;
                    color: #333333;
                    font-size: 25px !important;
                    text-align: left;
                    font-weight: 600;
                }

               

                .add-new-btn {
                    border: 1px solid #F54C83;
                    text-align: center;
                    padding: 2px;
                    border-radius: 4px;
                    color: #F54C83;
                    font-size: 14px;
                    margin: 5px 10px;
                    display: block;
                    width: 89%;
                }

                .addonHover .add-new-btn:hover {
                    border: 1px solid #F54C83;
                    text-align: center;
                    padding: 2px;
                    border-radius: 4px;
                    color: #F54C83;
                    font-size: 14px;
                    margin: 5px 10px;
                    display: block;
                    width: 89%;
                    background: #F54C83;
                    color: white
                }
                .serving-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.serving-modal-content {
  background-color: #fff;
  margin: 10% auto;
  padding: 20px;
  border-radius: 10px;
  width: 300px;
  max-width: 90%;
  box-shadow: 0 5px 15px rgba(0,0,0,0.3);
  font-family: 'Segoe UI', sans-serif;
  animation: fadeIn 0.3s ease;
}

.serving-modal-content h3 {
  margin-top: 0;
  font-size: 20px;
  text-align: center;
}

.serving-modal-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.serving-modal-content ul li {
  padding: 10px 0;
  border-bottom: 1px solid #ddd;
  font-size: 15px;
  color: #444;
}

.close-serving {
  float: right;
  font-size: 22px;
  font-weight: bold;
  cursor: pointer;
  color: #444;
}

@keyframes fadeIn {
  from {opacity: 0; transform: translateY(-20px);}
  to {opacity: 1; transform: translateY(0);}
}

            </style>
            <div class="row allAddonList" style="margin:10 auto 30px;padding:0 2px 0;">
                <div class=" col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:12px auto">
               
                                  
                                    @foreach ($related_product_query as $v)
                                    <div class="col s6 m3 l3 addon-prod-container"
                                        style="padding: 0px 5px; margin-bottom: 15px; margin-top: 8px; width: 186px;"
                                        data-slick-index="5" aria-hidden="true" tabindex="-1">
                                        <div class="addonHover"
                                            style="box-shadow: 0px 0px 6px #00000029;border-radius: 7px;background: #FFFFFF 0% 0% no-repeat padding-box; position: relative;"
                                            id="select-add-addons-1-6">
                                            <label style="cursor: pointer">
                                                <input class="clckEventAddon" type="checkbox" data-addonid="46453"
                                                    id="addon-1-6"

                                                    name="adon[]" value="46453" price="149" tabindex="-1">
                                                <picture>
                                                    <source
                                                        data-srcset="{{ asset($v->images->first()->image) }}"
                                                        type="image/webp"
                                                        srcset="{{ asset($v->images->first()->image) }}">
                                                    <img class="center-block responsive-img lazyloaded"
                                                        src="{{ asset($v->images->first()->image) }}"
                                                        alt="{{ $v->name }}" title="{{ $v->name }}"
                                                        style="padding: 10px; opacity: 1;">
                                                </picture>
                                                <div class="text-left truncate"
                                                    style="white-space:nowrap;padding: 2px 7px;font-size:13px; color:#333;text-align:center; ">
                                                    {{ $v->name }}</div>
                                                <div class=" truncate"
                                                    style="font-weight: 600;position: relative;font-size:16px;margin-top:3px;text-align: center; color: #4b4848;">
                                                    <span class="moneySymbol">₹</span> <span class="moneyCal addon-1-6"
                                                        data-inr="{{ $v->variants->first()->price }}">{{ $v->variants->first()->price }}</span>
                                                </div>
                                                <div style="padding-bottom: 3px;" class="productitemlist">
                                                    <span id="add-addons-1-6" class="add-new-btn" 
                                                                data-productId="{{ $v->id }}"
                                                                data-variant-id="{{ $v->variants->first()->id ?? '' }}"
                                                                data-quantity="1"
                                                                data-price="{{ $v->variants->first()->price ?? '' }}"
                                                                >+ ADD</span>
                                                    <span id="added-1-6" class="added-label"
                                                        style="border: 1px solid #F54C83;text-align: center;padding: 2px;border-radius: 4px;color: #F54C83;font-size: 14px;margin: 5px 10px;display: none;width: 65%;background : #F54C83; color:white;">Added</span>
                                                    <span id="remove-addons-1-6" class="remove-addons-item"
                                                     data-productId="{{ $v->id }}"
                                                                data-variant-id="{{ $v->variants->first()->id ?? '' }}"
                                                                data-quantity="1"
                                                                data-price="{{ $v->variants->first()->price ?? '' }}"
                                                    style="display:none"><img
                                                            style="width: 30px;position: absolute;right: 6%;bottom: 8px;"
                                                            src="https://assets.winni.in/groot/2023/06/19/addons/trash-bin.png">
                                                    </span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                <!--</div>-->
                            <!--</div>-->




                        <!--    <button class="slick-next slick-arrow slick-disabled" aria-label="Next" type="button"-->
                        <!--        style="" aria-disabled="true">Next</button>-->
                        <!--</div>-->
                    </div>
                </div>
           
            </div>
            <div class="row" style="margin-bottom:30px;">
            </div>
            <script type="text/javascript">
                
                
                var lengths = $(".category-buttons").map(function(i, el) {
                    return $(el).text().trim().length;
                }).get();
                var maxLength = Math.max.apply(this, lengths);
                var setWidth = (maxLength) * 1.4;
                $(document).ready(function() {
                    $(".width").css('width', +setWidth + '%');
                });
            </script>
        
        <div class="modal-footer" style="height: 76px;padding: 10px; z-index:99;">
            <div class="row" style="margin-bottom: 0">
                <div class="col foo" style="width: 58%;margin-top: 3px">
                    <span
                        style="float: left;margin: 0 3% 0 0%;font-size: 17px;font-weight: 600;color: #666;text-align: left;position: relative;top: -1px">PRICE
                        <br>DETAILS </span>
                    <span style="float: left;margin: 0 4%;font-size: 16px;color: #666;text-align: left">1 Base Item <br>
                        <span style="font-size:16px; padding-right:2px;color: #222" class="moneySymbol">₹</span>
                        <span style="color: #222" id="basePrice">0</span>
                    </span>
                    <span style="float: left;font-size: 24px;position: relative;top: 16px;color: #666">+</span>
                    <span style="float: left;margin: 0 4%;font-size: 16px;color: #666;text-align: left"> <span
                            id="addonCountNumber">0</span> Add-ons<br>
                        <span style="font-size:16px; padding-right:2px;color: #222" class="moneySymbol">₹</span>
                        <span style="color: #222" id="addonPrice">0</span>
                    </span>
                    <span style="float: left;font-size: 24px;position: relative;top: 16px;color: #666">=</span>
                    <span style="float: left; font-size: 17px; margin: 0 0 0 4%;text-align: left">Total<br>
                        <span style="font-size:16px; padding-right:2px;color: #e32929;font-weight: bold"
                            class="moneySymbol">₹</span>
                        <span class="total-addon-product-price" id="total-addon-product-price" style="color: #e32929;font-weight: bold">0</span>
                    </span>
                </div>
                <div class="col" style="padding: 0;width: 41%">
                    <button  id="cartwithcontinue" data-call-route="cartroute" class="waves-effect waves-light btn cartUrladon"
                        style="float: left;background-color: #3CB324;width: 100%;height: 42px">
                        <span style="position:relative;top: 0px;">Continue</span>
                    </button>
                </div>
            </div>
        </div>
</div>

<!-- MagicZoom CSS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/magiczoom@5.1.14/magiczoom.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- MagicZoom JS -->
<script src="https://cdn.jsdelivr.net/npm/magiczoom@5.1.14/magiczoom.js" type="text/javascript"></script>

<script>
   function changeMainImage(imageUrl) {
       let bigImage = document.getElementById('prod-big-image');
       let zoomLink = document.getElementById('zoom-v');
   
       // Change image source
       bigImage.src = imageUrl;
       zoomLink.href = imageUrl;
   
       // Update MagicZoom
       if (typeof MagicZoom !== 'undefined') {
           MagicZoom.update('zoom-v');
       }
   }
</script>
<script>

$(document).ready(function () {
    
$('#order_image').on('change', function () {
    const fileInput = this;
    const previewContainer = $('#image_order_preview');

    previewContainer.empty(); // Clear previous preview

    if (fileInput && fileInput.files && fileInput.files.length > 0) {
      const imageFile = fileInput.files[0];  // The file selected

      const reader = new FileReader();
      
      // `readAsDataURL` reads the file as a base64 string (which is good for images)
      reader.onload = function (e) {
        const img = $('<img />', {
          src: e.target.result,  // Base64 encoded string for the image
          class: 'responsive-img', // Optional: Materialize class
          width: 200  // Optional: Set preview size
        });
        previewContainer.append(img);  // Append image to the preview container
      };

      // `readAsDataURL` reads the file as a Data URL (base64) string
      reader.readAsDataURL(imageFile); 
    }
  });


  
  
  
    let addonData = []; // Store all add-on data
    let addonCount = parseInt($('#addonCountNumber').text()) || 0;
    let addonPrice = parseInt($('#addonPrice').text()) || 0;

    // Add-on Add Button Click
    $('.add-new-btn').on('click', function () {
            let $this = $(this); 

        let productId = $(this).data('productid');
        let variantId = $(this).data('variant-id');
        let quantity = parseInt($(this).data('quantity')) || 1;
        let price = parseInt($(this).data('price')) || 0;
        let id = $(this).attr('id').split('-').pop();

        // Add to array
        addonData.push({
            productId: productId,
            variantId: variantId,
            quantity: quantity,
            price: price
        });

        // Update counts
        addonCount++;
        addonPrice += price;
        $('#addonCountNumber').text(addonCount);
        $('#addonPrice').text(addonPrice);

        let basePrice = parseInt($('#basePrice').text()) || 0;
        let totalPrice = basePrice + addonPrice;
        $('.total-addon-product-price').text(totalPrice);

        // Toggle buttons
        // $(this).hide();
        // $('.add-new-btn').hide();
        // $('.remove-addons-item').show();
        
              let $container = $this.closest('.productitemlist');
        $container.find('.add-new-btn').hide();
        $container.find('.remove-addons-item').show();
        $container.find('.added-label').show();
    });

    // Remove Add-on
    $('.remove-addons-item').on('click', function () {
       
        let $this = $(this);
        let productId = $this.data('productid');
        let variantId = $this.data('variant-id');
         let price =parseInt($this.data('price')) || 0;
        // Remove from array
        addonData = addonData.filter(item => !(item.productId == productId && item.variantId == variantId));

        // Update counts
        addonCount = Math.max(0, addonCount - 1);
        addonPrice = Math.max(0, addonPrice - price);
        $('#addonCountNumber').text(addonCount);
        $('#addonPrice').text(addonPrice);

        let basePrice = parseInt($('#basePrice').text()) || 0;
        let totalPrice = basePrice + addonPrice;
        $('.total-addon-product-price').text(totalPrice);

        // Toggle buttons
          let $container = $this.closest('.productitemlist');
        $container.find('.add-new-btn').show();
        $container.find('.remove-addons-item').hide();
        $container.find('.added-label').hide();
        
        // $('.add-new-btn').show();
        // $(this).hide();
    });

    // Continue Button Click - Call API
    $('#cartwithcontinue').on('click', function () {
        console.log('Add-on Data:', addonData);

        // if (addonData.length === 0) {
        //     alert('Please add at least one add-on.');
        //     return;
        // }

        // Example API Call (Update with your actual API endpoint and data)
        $.ajax({
             url: "{{ route('product.addcartwithAddons') }}", // adjust route name if different
           method: "POST",
           data: {
            _token: "{{ csrf_token() }}",
            addons: addonData 
                
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token if needed
            },
            success: function (response) {
                
                 Swal.fire({
                    title: 'Success!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                     var route = $('#cartwithcontinue').attr('data-call-route');
        
                    
                   if (route === 'checkoutRoute') {
                        // Redirect to checkout route
                        window.location.href = "{{ route('product.checkout') }}";  // Adjust route if needed
                    } else {
                        // Redirect to cart route
                        window.location.href = "{{ route('product.cart') }}";
                    }
                });
                
                setTimeout(function() {
                   var route = $('#cartwithcontinue').attr('data-call-route');
        
                    // Check if route is 'checkoutRoute', and redirect accordingly
                    if (route === 'checkoutRoute') {
                        // Redirect to checkout route
                        window.location.href = "{{ route('product.checkout') }}";  // Adjust route if needed
                    } else {
                        // Redirect to cart route
                        window.location.href = "{{ route('product.cart') }}";
                    }
        
                // window.location.href = "{{ route('product.cart') }}";
            }, 1500);
            },
            error: function (error) {
                console.error('Error:', error);
                alert('Something went wrong. Please try again.');
            }
        });
    });
});




$(document).ready(function() {
     
     
    $('.modal').modal({
        onOpenEnd: function () {
          const $input = $('#modalDate');
          const instance = M.Datepicker.getInstance($input[0]);
          setTimeout(function () {
            $input.focus();
            instance.open();
          }, 100); 
        }
    });
  
  // Initialize Datepicker
  $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    minDate: new Date(),
    defaultDate: new Date(),
    setDefaultDate: true,
    autoClose: false,
    onSelect: function() {
      $('#step2').fadeIn(); // Show delivery type options after date selected
      // Reset selections if user changes date
      $('input[name="deliveryType"]').prop('checked', false);
      $('input[name="timeSlot"]').prop('checked', false);
      $('.time-slots').hide();
    }
  });

  // Show time slots based on delivery type selection
  $('input[name="deliveryType"]').change(function() {
    // Hide all time slot sections first
    $('.time-slots').hide();
    $('input[name="timeSlot"]').prop('checked', false);

    let selectedType = $(this).data('type');

    if (selectedType === 'fixed') {
      $('#timeSlotsFixed').fadeIn();
    } else if (selectedType === 'pre-midnight') {
      $('#timeSlotsPreMidnight').fadeIn();
    } else if (selectedType === 'standard') {
      $('#timeSlotsStandard').fadeIn();
    } else if (selectedType === 'eariest') {
      $('#timeSlotsEeariest').fadeIn();
    }
    
  });
  
  
  
    // Handle Save Button
  $('#saveDeliveryInfo').click(function() {
    let date = $('#modalDate').val();
    let deliveryType = $('input[name="deliveryType"]:checked').val();
    let deliveryTypeLabel = $('input[name="deliveryType"]:checked').next('span').text();
    let timeSlot = $('input[name="timeSlot"]:checked').val() || '';

    // Validation
    if (!date || !deliveryType || ($('input[name="deliveryType"]:checked').data('type') === 'fixed' && !timeSlot)) {
      M.toast({ html: 'Please complete all steps!' });
      return;
    }

    console.log("Date:", date);
    console.log("Delivery Type:", deliveryTypeLabel);
    console.log("Time Slot:", timeSlot);

    // Populate hidden fields (if any)
    $('#selectedDate').val(date);
    $('#selectedDeliveryType').val(deliveryType);
    $('#selectedTimeSlot').val(timeSlot);

    // You can also update a combined field if needed
    $('#deliveryInfo').val(`${date} - ${deliveryTypeLabel} ${timeSlot ? '(' + timeSlot + ')' : ''}`);
    M.updateTextFields();

    M.toast({ html: 'Delivery options saved!' });
  });
  
  
});



   $(document).ready(function() {

    $('.variant-radio').change(function() {

            
               let selectedPrice = parseFloat($(this).data('price')) || 0;
            let selectedDiscount = parseFloat($(this).data('discount')) || 0;

            // Calculate the discount amount
            let discountAmount = (selectedPrice * selectedDiscount) / 100;

            // Calculate the final amount
            let finalAmount = selectedPrice - discountAmount;

            // Optional: Round to 2 decimal places
            finalAmount = finalAmount.toFixed(2);


            
            let selectedVariantId = $(this).data('variant');
            console.log(selectedVariantId);
            
            $('#productPrice').text(finalAmount);
            $('#mrpproductprice').text(parseFloat(selectedPrice).toFixed(2));
            $('#DiscountProductPercentage').text(selectedDiscount);

            $('#addToCartButton').attr('data-variant-id', selectedVariantId);
            $('#BuyNowButton').attr('data-variant-id', selectedVariantId);

    });
   });
 
   $(document).on('click', '#BuyNowButton', function(e) {
       e.preventDefault();
    
        var token = $('meta[name="csrf-token"]').attr('content');


        let date = $('#selectedDate').val();
        let time = $('#selectedTimeSlot').val();
        let shipping = $('#selectedDeliveryType').val();
        let product_messages=$('#product_messages').val();
    
        let basePrice =  $('#productPrice').text();  // Ensure this attribute exists
        $('#basePrice').text(basePrice);
        $('#total-addon-product-price').text(basePrice);
       let product_id = $(this).attr('data-product-id');  
        let variant_id = $(this).attr('data-variant-id');  
        let quantity = $(this).attr('data-quantity') || 1; 
       
           let formData = new FormData();
            formData.append('product_id', product_id);
            formData.append('variant_id', variant_id);
            formData.append('quantity', quantity);
            formData.append('delivery_date', date);
            formData.append('delivery_time', time);
            formData.append('shipping_type', shipping);
            formData.append('product_message', product_messages);
        
            // Handle image file upload
            let orderImageInput = $('#order_image')[0];
            if (orderImageInput && orderImageInput.files && orderImageInput.files.length > 0) {
                formData.append('order_image', orderImageInput.files[0]);  // Append the file
            }
        
       
       
       $.ajax({
           url: "{{ route('product.addToCart') }}", // adjust route name if different
           method: "POST",
           data: formData,
        contentType: false,   // Important: Don't set contentType for FormData
        processData: false,   
        headers: {
            'X-CSRF-TOKEN': token  // Pass CSRF token in the header
        },
           success: function(response) {
                // messageSweetalert(response);
            if (response.status === 'success') {
                // Wait for SweetAlert to close, then show the modal
                Swal.fire({
                    title: 'Success!',
                    text: 'Product Added',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Show your related products modal
                    var modalInstance = M.Modal.getInstance($('#relatedProductsModal')[0]);
                    modalInstance.open();
                            $('#cartwithcontinue').attr('data-call-route', 'checkoutRoute');  // Update route to checkoutRoute

    
                    // $('#relatedProductsModal').modal('show');
                });
            }
            
           },
           error: function(xhr) {
                messageSweetalert(xhr.responseJSON);
            //   alert('Error: ' + xhr.responseJSON.message);
           }
       });
   });
 
   $(document).on('click', '#addToCartButton', function(e) {
       e.preventDefault();
    
        var token = $('meta[name="csrf-token"]').attr('content');


        let date = $('#selectedDate').val();
        let time = $('#selectedTimeSlot').val();
        let shipping = $('#selectedDeliveryType').val();
        let product_messages=$('#product_messages').val();
    
        let basePrice =  $('#productPrice').text();  // Ensure this attribute exists
        $('#basePrice').text(basePrice);
        $('#total-addon-product-price').text(basePrice);
       let product_id = $(this).attr('data-product-id');  
        let variant_id = $(this).attr('data-variant-id');  
        let quantity = $(this).attr('data-quantity') || 1; 
       
           let formData = new FormData();
            formData.append('product_id', product_id);
            formData.append('variant_id', variant_id);
            formData.append('quantity', quantity);
            formData.append('delivery_date', date);
            formData.append('delivery_time', time);
            formData.append('shipping_type', shipping);
            formData.append('product_message', product_messages);
        
            // Handle image file upload
            let orderImageInput = $('#order_image')[0];
            if (orderImageInput && orderImageInput.files && orderImageInput.files.length > 0) {
                formData.append('order_image', orderImageInput.files[0]);  // Append the file
            }
        
       
       
       $.ajax({
           url: "{{ route('product.addToCart') }}", // adjust route name if different
           method: "POST",
           data: formData,
        contentType: false,   // Important: Don't set contentType for FormData
        processData: false,   
        headers: {
            'X-CSRF-TOKEN': token  // Pass CSRF token in the header
        },
           success: function(response) {
                // messageSweetalert(response);
            if (response.status === 'success') {
                // Wait for SweetAlert to close, then show the modal
                Swal.fire({
                    title: 'Success!',
                    text: response.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Show your related products modal
                    var modalInstance = M.Modal.getInstance($('#relatedProductsModal')[0]);
                modalInstance.open();
    
                    // $('#relatedProductsModal').modal('show');
                });
            }
            
           },
           error: function(xhr) {
                messageSweetalert(xhr.responseJSON);
            //   alert('Error: ' + xhr.responseJSON.message);
           }
       });
   });


   $(document).on('click', '.wishlist-btn', function() {
    var product_id = $(this).data('product');

    $.ajax({
        url: '{{ route("wishlist.add") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            product_id: product_id,
        },
        success: function(response) {
            // alert(response.message);
            messageSweetalert(response);
        }
    });
});
   
   
</script>
{{-- <script>
   document.addEventListener('DOMContentLoaded', function () {
       const img = document.getElementById("prod-big-image");
       const lens = document.getElementById("lens");
       const result = document.getElementById("zoom-result");
       const container = img.parentElement; // product-image-div div
   
       const zoom = 2;
   
       result.style.backgroundImage = `url('${img.src}')`;
   
       container.addEventListener("mouseenter", () => {
           lens.style.display = "block";
           result.style.display = "block";
       });
   
       container.addEventListener("mouseleave", () => {
           lens.style.display = "none";
           result.style.display = "none";
       });
   
       container.addEventListener("mousemove", function (e) {
           const rect = container.getBoundingClientRect();
           const x = e.clientX - rect.left;
           const y = e.clientY - rect.top;
   
           let lensX = x - lens.offsetWidth / 2;
           let lensY = y - lens.offsetHeight / 2;
   
           lensX = Math.max(0, Math.min(lensX, container.offsetWidth - lens.offsetWidth));
           lensY = Math.max(0, Math.min(lensY, container.offsetHeight - lens.offsetHeight));
   
           lens.style.left = lensX + 'px';
           lens.style.top = lensY + 'px';
   
           const fx = lensX / container.offsetWidth;
           const fy = lensY / container.offsetHeight;
   
           result.style.backgroundPosition = `-${fx * img.width * zoom}px -${fy * img.height * zoom}px`;
       });
   });
</script> --}}

<script>
    $(document).ready(function () {
        const $img = $("#prod-big-image");
        const $lens = $("#lens");
        const $result = $("#zoom-result");
        const zoom = 2;
    
        // Set initial background image
        $result.css("background-image", "url('" + $img.attr("src") + "')");
    
        // ✅ Update background image when prod-big-image src changes
        $img.on("load", function () {
            $result.css("background-image", "url('" + $img.attr("src") + "')");
        });
    
        const $container = $img.parent();
    
        $container.on("mouseenter", function () {
            $lens.show();
            $result.show();
        });
    
        $container.on("mouseleave", function () {
            $lens.hide();
            $result.hide();
        });
    
        $container.on("mousemove", function (e) {
            const rect = $container[0].getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
    
            let lensX = x - $lens.width() / 2;
            let lensY = y - $lens.height() / 2;
    
            lensX = Math.max(0, Math.min(lensX, $container.width() - $lens.width()));
            lensY = Math.max(0, Math.min(lensY, $container.height() - $lens.height()));
    
            $lens.css({ left: lensX + "px", top: lensY + "px" });
    
            const fx = lensX / $container.width();
            const fy = lensY / $container.height();
    
            const bgPosX = -(fx * $img.width() * zoom);
            const bgPosY = -(fy * $img.height() * zoom);
    
            $result.css("background-position", bgPosX + "px " + bgPosY + "px");
        });
    });
    </script>
    <script>
  const modal = document.getElementById("servingModal");
  const btn = document.getElementById("openServingModal");
  const closeBtn = document.querySelector(".close-serving");

  btn.onclick = function(e) {
    e.preventDefault();
    modal.style.display = "block";
  }

  closeBtn.onclick = function() {
    modal.style.display = "none";
  }

  window.onclick = function(event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  }
</script>

@endsection