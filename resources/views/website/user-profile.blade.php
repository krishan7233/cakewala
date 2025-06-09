@extends('website.website_app')
@section('content')


  <style>
 

    .container3 {
      max-width: 1000px;
      margin:auto;
      background: #fff;
      border-radius: 8px;
      padding: 20px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      margin-top: 190px;
      margin-bottom: 50px;
    }

    .profile-header {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .profile-header img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid #ddd;
    }

    .profile-info h2 {
      margin: 0;
      font-size: 24px;
    }

    .profile-info p {
      margin: 4px 0;
      color: #555;
    }

    .profile-details {
      margin-top: 30px;
    }

    .profile-details h3 {
      margin-bottom: 15px;
      font-size: 20px;
    }

    .detail-row {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #eee;
      flex-wrap: wrap;
    }

    .detail-row span {
      color: #333;
    }

    @media (max-width: 600px) {
      .profile-header {
        flex-direction: column;
        align-items: flex-start;
      }
.container3 {
     
      margin-top: 90px;
      margin-bottom: 50px;
    }
      .detail-row {
        flex-direction: column;
      }
    }
  </style>
@if(auth()->check())

  <div class="container3">
      
    <div class="profile-header">
        <img 
    src="{{ auth()->user()->user_image ? auth()->user()->user_image : 'https://azure-bee-177357.hostingersite.com/public/assets/website/img/user-icon-grey.webp' }}" 
    alt="User Profile">

      <div class="profile-info">
        <h2>{{ auth()->user()->name }}</h2>
        <p>Email: {{ auth()->user()->email }}</p>
        <p>Phone: +91 {{ auth()->user()->phone ?? 'N/A' }}</p>
      </div>
    </div>

    <div class="profile-details">
      <h3>Account Information</h3>
      <!--<div class="detail-row"><span>Username:</span> <span>johndoe123</span></div>-->
      <!--<div class="detail-row"><span>Gender:</span> <span>Male</span></div>-->
      <!--<div class="detail-row"><span>Date of Birth:</span> <span>01-Jan-1990</span></div>-->
      <!--<div class="detail-row"><span>Address:</span> <span>123, Example Street, City, Country</span></div>-->
    </div>
    
    
  </div>

@else
    <div class="container3">
        <p>Please <a href="{{ route('login') }}">login</a> to view your profile details.</p>
    </div>
@endif



@endsection