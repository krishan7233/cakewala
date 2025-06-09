@extends('admin.app')
@section('content')

<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Product Detail</h1>
                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Product
                </p>
            </div>
            <div>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary"> View All
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Product Detail</h2>
                    </div>

                    <div class="card-body product-detail">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="row">
                                    <div class="single-pro-img">
                                        <div class="single-product-scroll">
                                            <div class="single-product-cover">
                                                @foreach($product->images as $image)

                                                    <div class="single-slide zoom-image-hover">
                                                        <img class="img-responsive"
                                                            src="{{ asset($image->image) }}" alt=""
                                                            style="width: 100%; height: 400px; object-fit: cover; border-radius: 8px;"

                                                            >
                                                    </div>
                                                @endforeach
                                             
                                            </div>
                                            <div class="single-nav-thumb">
                                                @foreach($product->images as $image)
                                                    <div class="single-slide">
                                                        <img class="img-responsive"
                                                            src="{{ asset($image->image) }}" alt=""
                                                            style="width: 80px; height: 80px; object-fit: cover; border: 2px solid #eee; border-radius: 6px; margin: 5px; cursor: pointer; transition: border 0.2s;"

                                                            >
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="row product-overview">
                                    <div class="col-12">
                                        <h5 class="product-title">{{$product->name}}</h5>
                                        <p class="product-rate">
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star is-rated"></i>
                                            <i class="mdi mdi-star"></i>
                                        </p>
                                        <p class="product-desc">Short Description :{{$product->short_description}}</p>
                                        <p class="product-desc">Long Description :{{$product->long_description}}
                                        </p>
                                       
                                        <h5>Product Varients</h5>
                                        <ul class="product-size-price">
                                            <table class="table table-bordered w-75">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>Stock</th>
                                                        <th>Price (Rs.)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($product->variants as $variant)
                                                        <tr>
                                                            <td>{{ $variant->size }}</td>
                                                            <td>{{ $variant->stock }}</td>
                                                            <td>Rs. {{ number_format($variant->price, 2) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        </ul>
                                        
                                   <h5>Product Flavours</h5>

                                    @if(!empty($flavours))
                                        <ul>
                                            @foreach($flavours as $flavour)
                                                <li>{{ $flavour }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No flavours specified.</p>
                                    @endif



                                       
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                       
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->


@endsection
