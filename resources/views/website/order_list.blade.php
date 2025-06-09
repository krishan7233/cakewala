@extends('website.website_app')
@section('content')


  <style>
 

    .container3 {
      max-width: 1000px;
     margin:auto;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      margin-top: 190px;
       margin-bottom: 50px;
    }

    h2 {
      margin-bottom: 20px;
    }

    .order-card {
      border: 1px solid #e0e0e0;
      border-radius: 6px;
      padding: 15px;
      margin-bottom: 20px;
      background: #fafafa;
    }

    .order-header {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .order-info {
      margin-top: 10px;
      font-size: 14px;
      color: #555;
    }

  .status {
    padding: 10px 35px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: bold;
    color: white;
    line-height: 19px;
    height: 40px;
}

    .status.pending {
      background: #f39c12;
    }

    .status.delivered {
      background: #2ecc71;
    }
   
    .status.cancelled {
      background: #e74c3c;
    }
   h2 {
    margin-bottom: 20px;
    font-size: 25px;
    font-weight: 700;
}
    @media (max-width: 600px) {
      .order-header {
        flex-direction: column;
        align-items: flex-start;
      }
      .container3 {
   margin-top: 100px;
    margin-bottom: 50px;
}
.order-header {
    flex-direction: row;
}
.status {
    padding: 10px 15px;
   }
    }
  </style>


  <div class="container3">
    <h2>My Orders</h2>
@if($orders->count())
    @foreach($orders as $order)
    <div class="order-card">
      <div class="order-header">
        <div>
          <strong>Order #{{ $order->payment_id }}</strong><br>
          Placed on:  {{ $order->created_at->format('d M Y') }}<br>
           Order Message:  {{ $order->order_messages ?? 'N/A' }}
        </div>
        <div class="status delivered">{{ $order->order_status == 1 ? 'Complete' : 'Pending' }}</div>
      </div>
      <div class="order-info">
         Items: 
        @php
          $items = $order->items ?? ['N/A']; // If you have a relation, adjust accordingly
          $itemNames = is_array($items) ? implode(', ', $items) : $items; 
        @endphp
       
        @foreach ($itemNames as $item)
            {{ $item->product->name ?? 'N/A' }}<br>
        @endforeach
        <br>

        Total: ₹{{ number_format($order->payment_amount, 2) }}<br>
        Payment: {{ $order->payment_type ?? 'N/A' }}<br>
        Payment Status: {{ $order->payment_status ?? 'N/A' }}<br>
        Delivery Address: {{ $order->users_address[0]->name ?? 'N/A' }},{{ $order->users_address[0]->mobile  ?? 'N/A' }},{{ $order->users_address[0]->address  ?? 'N/A' }},{{ $order->users_address[0]->landmark  ?? 'N/A' }},{{ $order->users_address[0]->pincode  ?? 'N/A' }}
      
      </div>
    </div>
    @endforeach
  @else
    <p>No orders found.</p>
  @endif
  

  
  

  </div>




@endsection