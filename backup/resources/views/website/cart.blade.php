@extends('website.website_app')
@section('content')
<!DOCTYPE html>

  <style>
      .container1 {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      max-width: 1200px;
      margin: auto;
      margin-top: 80px;
      margin-bottom:80px;
    }

    .cart-section {
      flex: 2;
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .order-summary {
      flex: 1;
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      border: 1px solid #ccc;
    }

    .cart-header {
      font-weight: bold;
      font-size: 20px;
      color: #d63c3c;
      margin-bottom: 20px;
    }

    .cart-item {
      display: flex;
      margin-bottom: 20px;
      border-bottom: 1px solid #eee;
      padding-bottom: 15px;
    }

    .cart-item img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 8px;
    }

    .item-info {
      margin-left: 20px;
      flex: 1;
    }

    .item-info h4 {
      margin: 0;
      font-size: 16px;
    }

    .item-info .price {
      color: #111;
      font-weight: bold;
      font-size: 18px;
    }

    .item-info .small {
      color: #666;
      font-size: 14px;
      margin-top: 5px;
    }

    .qty-selector {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    .qty-selector button {
      background: none;
      border: 1px solid #ccc;
      padding: 4px 10px;
      font-size: 16px;
    }

    .qty-selector span {
      padding: 0 10px;
      font-size: 16px;
    }

    .summary-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .summary-row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .grand-total {
      background: #fff7f4;
      font-weight: bold;
      padding: 10px;
      border-radius: 5px;
      margin-top: 20px;
    }

    .btn {
      background: #f65555;
      color: white;
      border: none;
      padding: 0px 20px;
      font-size: 16px;
      width: 100%;
      margin-top: 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .continue-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #377dff;
      font-weight: bold;
      text-decoration: none;
    }
button.btn.remove-btn {
    width: 15%;
    margin-top: 0;
}
   

    @media (max-width: 768px) {
      .container1 {
        flex-direction: column;
      }
      .container1 {
margin-top: 110px;
margin-bottom: 40px!important;

}
.max-container {
padding-left: 0!important;
}
.cart-item {
    flex-direction: column;
    align-items: flex-start;
    text-align: left;
}
.row.rowapd.catEventHomeWithTitle {
    padding: 0!important;
 }
 button.btn.remove-btn {
    width: 35%;
    margin-top: 15px;
}
      .item-info {
        margin-left: 0;
        margin-top: 10px;
      }
      .row .col.s3 {
    width: 50%;
}
    }
  </style>
</head>
<body>
  <div class="container1">
   
    <div class="cart-section">
      <div class="cart-header">My Cart ({{@$cartItems->count()}} items)</div>
     
      @php
      $totalPrice = 0;
      $subtotalPrice=0;
      $delivery_charge=0;
    @endphp
      @if($cartItems->count())
    
        @foreach($cartItems as $item)
        @php
        $itemTotal = $item->price * $item->quantity + $item->shipping_charge;
        $delivery_charge+=$item->shipping_charge;
        $subtotalPrice+=$item->price * $item->quantity;
        $totalPrice += $itemTotal;
      @endphp
          <div class="cart-item">
            <img src="{{ asset($item->product->images->first()->image)}}" alt="Trio Mousse Cake">
                <div class="item-info">
                  <h4>{{ $item->product->name }}</h4>
                  <p>dilivery date time :{{ $item->delivery_date }} {{ $item->time_slot }}</p>
                  <p>message : {{ $item->product_message }}</p>
                  <p>shipping Charges :₹ {{$item->shipping_charge}}</p>
                  <div class="price">Price :₹ {{ $item->price * $item->quantity }}</div>
                  <div class="small">Weight: {{ $item->variant->size ?? 'Default' }}</div>
                  <div class="qty-selector">
                    <button class="qty-btn" data-action="decrease" data-id="{{ $item->id }}">-</button>
                    <span class="item-qty" data-id="{{ $item->id }}">{{ $item->quantity }}</span>
                    <button class="qty-btn" data-action="increase" data-id="{{ $item->id }}">+</button>
                  </div>
                  
                
                </div>
                <button class=" btn remove-btn" data-action="remove" data-id="{{ $item->id }}">Remove</button>

          </div>
          @endforeach

          @else
            <p>Your cart is empty!</p>
        @endif

    </div>

  
    <div class="order-summary">
      <div class="summary-title">Order Summary</div>
      <div class="summary-row">
        <span>Sub Total</span>
        <span>₹ {{ number_format(@$subtotalPrice, 2) }}</span>
      </div>
      <div class="summary-row">
        <span>Delivery Charges</span>
        <span style="color: green;">₹ {{$delivery_charge}}</span>
      </div>
      <div class="summary-row grand-total">
        <span>Grand Total</span>
        <span>₹ {{ number_format(@$totalPrice, 2) }}</span>
      </div>
      @if(Auth::check() && Auth::user()->role == 2)
          <a class="btn" href="{{ route('product.checkout') }}">Place Order</a>
      @else
          <a class="btn" href="{{ route('login') }}">Place Order</a>
      @endif

      <a href="{{route('web.index')}}" class="continue-link">Continue Shopping</a>
     
    </div>
  </div>


  @if($similearproductsQuery->count())

  <div style="margin-top:-7px;margin: 0 auto;padding-top:0px!important;padding-left: 26px;margin-bottom: 19px;" class=" max-container observerForCategory">
               
    <div class="row catEventHomeWithTitle"
        style=" margin: 0 auto ;padding-top:0px!important;margin-top: 8px;margin-top: -10px;">
        <div class="col l12 s12 m12" style="padding-left:26px;margin-bottom:6px;margin:0 auto;">
            <div class="desktop-left-title"
                style="text-align:left;font-size: 34px!important;margin-bottom: 20px;">
                Similar  Product
            </div>
        </div>
    </div>
    <div class="row rowapd catEventHomeWithTitle"
        style=" margin: 0 auto ;padding-top:0px!important;padding-left: 26px;margin-bottom: 19px;padding-right: 26px;">
 


        @foreach ($similearproductsQuery as $product)
            <div class="adobeEventPos col s3 l3 m3 padding-vl">
                <a class="center-align" 
                href="{{ route(@$product->subcategory->subcat_slug ? 'product.detail.withsub' : 'product.detail', [
                                        'cat_slug' => $product->category->cat_slug,
                                        'subcat_slug' => $product->subcategory?->subcat_slug,
                                        'product_slug' => $product->slug,
                                    ]) }}"
                >
                    <div class="card "
                        style='border-radius:14px;box-shadow:none;overflow:hidden;margin:0;background-color: #FFFFFF!important;'>
                        <div class="card-image">
                            <img loading ="lazy" alt="Birthday Cakes" widgetType="cake category"
                                class=" lazyload responsive-img "
                                src="{{ asset($product->images->first()->image) }}"
                                data-src="{{ asset($product->images->first()->image) }}"
                                style="width:100%;height:100%">
                            <div class="card-content col l12 s12 m12"
                                style='padding: 17px 0px 13px;padding-top: 0px;'>
                                <div class="truncate"
                                    style='padding-right: 0;text-align: center;color: #404040;border: 1px solid;padding-top: 12px;padding-bottom: 10px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #e8e8e8;border-radius: 0px 0px 15px 15px;border-top: 0px;'>
                                    <span
                                        style="font-size: 15px;display:block;font-weight:800;text-align: center;">{{ $product->name }}</span>
                                    <span style='font-size:15px;'>Price</span>
                                    <span style='font-size:15px;' class="moneySymbol">₹ </span>
                                    <span style='font-size:15px;' class="moneyCal" data-inr="{{$product->variants->first()->price}}">{{$product->variants->first()->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>
   

  
</div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    
    
$(document).ready(function() {


  $('.qty-btn').on('click', function() {
    let cartItemId = $(this).data('id');
    let action = $(this).data('action');

    $.ajax({
      url: '{{ route("updateCartQty") }}',
      type: 'POST',
      data: {
        cart_item_id: cartItemId,
        action: action,
        _token: '{{ csrf_token() }}'
      },
      success: function(response) {
          messageSweetalert(response);
      }
    });
  });
  
    $('.remove-btn').on('click', function() {
        console.log('ddd');
    let cartItemId = $(this).data('id');
    let action = $(this).data('action');

    $.ajax({
      url: '{{ route("deletecartitem") }}',
      type: 'POST',
      data: {
        cart_item_id: cartItemId,
        action: action,
        _token: '{{ csrf_token() }}'
      },
      success: function(response) {
          messageSweetalert(response);
      }
    });
  });
  
});
</script>

</script>


@endsection