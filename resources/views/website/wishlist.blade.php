@extends('website.website_app')
@section('content')
<!DOCTYPE html>

  <style>
  
    .container3 {
      max-width: 95%;
      margin:auto;
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      margin-bottom: 50px;
      margin-top: 190px;
    }

   h2 {
    margin-bottom: 20px;
    font-size: 26px;
    font-weight: 700;
}

   .wishlist-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

    .wishlist-card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      overflow: hidden;
      background: #fff;
      display: flex;
      flex-direction: column;
      transition: box-shadow 0.2s ease;
    }

    .wishlist-card:hover {
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .wishlist-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .wishlist-details {
      padding: 15px;
      flex-grow: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .wishlist-details h4 {
      margin: 0 0 10px;
      font-size: 18px;
    }

    .price {
      color: #2ecc71;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .wishlist-actions {
      margin-top: auto;
      display: flex;
      gap: 10px;
    }

    .wishlist-actions button {
      flex: 1;
      padding: 8px 12px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
      font-weight: 500;
      font-size: 14px;
    }

    .btn-remove {
      background-color: #e74c3c;
      color: white;
    }

    .btn-add-cart {
      background-color: #3498db;
      color: white;
      width: 37%;
    text-align: center;
    }
.btn-add-cart {
    background-color: #3498db;
    color: white;
    width: 50%;
    text-align: center;
    border-radius: 10px;
    line-height: 34px;
}
    @media (max-width: 500px) {
      .wishlist-details h4 {
        font-size: 16px;
      }
        .wishlist-grid {
        grid-template-columns: 1fr;
    }
      
    .container3 {
   
      margin-bottom: 50px;
      margin-top: 90px;
    }
    }
  </style>
  <div class="container3">
    <h2>My Wishlist</h2>
    <div class="wishlist-grid">
@foreach($wishlist as $wish)
    @php
        $product = $wish->product;
        $image = $product->images->first();  // Get the first image
        $variant = $product->variants->first();  // Get the first variant

        $detailRoute = $product->subcategory?->subcat_slug
            ? route('product.detail.withsub', [
                'cat_slug' => $product->category->cat_slug,
                'subcat_slug' => $product->subcategory->subcat_slug,
                'product_slug' => $product->slug,
            ])
            : route('product.detail', [
                'cat_slug' => $product->category->cat_slug,
                'product_slug' => $product->slug,
            ]);
    @endphp

    <div class="wishlist-card">
        <img src="{{ $image ? asset($image->image) : 'https://via.placeholder.com/400x300' }}" alt="{{ $product->name }}">

        <div class="wishlist-details">
            <h4>{{ $product->name }}</h4>
            <div class="price">₹{{ $variant ? $variant->price : 'N/A' }}</div>

            <div class="wishlist-actions">
                <a href="{{ $detailRoute }}" class="btn-add-cart">View</a>
                <button class="btn-remove remove-wishlist-btn" data-product-id="{{ $wish->product->id }}">Remove</button>
            </div>
        </div>
    </div>
@endforeach

<div class="pagination-wrapper" style="text-align: center; margin-top: 20px;">
  {{ $wishlist->links('pagination::bootstrap-5') }}
</div>
     

    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function () {
    $('.remove-wishlist-btn').on('click', function (e) {
        e.preventDefault();
        let productId = $(this).data('product-id');
        let button = $(this);

        if (confirm('Are you sure you want to remove this item from your wishlist?')) {
            $.ajax({
                url: '{{ route('wishlist.remove') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId
                },
                success: function (response) {
                    messageSweetalert(response);
                    // if (response.status) {
                    //     // Option 1: Remove the item visually
                    //     messageSweetalert(response);
                    //     button.closest('.wishlist-card').remove();

                    // } else {
                    //   messageSweetalert(response);
                    // }
                },
                error: function (xhr) {
                    messageSweetalert(xhr.responseJSON.message);
                    // alert('Error: ' + xhr.responseJSON.message);
                }
            });
        }
    });
});

</script>

@endsection