@extends('website.website_app')
@section('content')
    <main>
        <style type="text/css">
            .paddingTopArea {

                padding-top: 42px !important;
            }

            .ratingDivCat {
                display: flex;
                align-items: center;
                height: 21px;
                gap: 2px;
            }
            .container3 {
    margin-top: 200px;
}
.pagination li a {
    color: #444;
   
    font-size: 1.2rem;
    padding: 0 10px;
    line-height: 10px;
}
li.page-item {
    padding: 10px;
    text-align: center;
    line-height: 10px;
}
.row.filt {
    background: #EFEFEF;
    width: 100%;
    border-radius: 10px;
    padding: 10px;
}
.row .col.m5 {
    width: 40%;
 }
 .row .col.s2 {
    width: 30%;
 }
 div#mobilebread {
    display: none;
}
 .breadcrumb, .breadcrumb:last-child {
    color: #787878;
    font-size: 16px;
}
@media only screen and (max-width: 600px) {
.container3 {
    margin-top: 110px;
}
.section {
    margin-top: 50px;
}
div#mobilebread {
    display: block;
}
div#desktopbread {

    display: none;
}
.row.filt {
    background: #EFEFEF;
    width: 100%;
    border-radius: 10px;
    padding: 10px;
}
div#desktopfil {
    display: none;
}
h1 {
 margin:0;
}
.row .col.m5 {
    width: 100%;
 }
 .row .col.s2 {
    width: 100%;
    margin-top: 10px;
 }
.new-slide-card-without-city {
 padding-right: 0px;
 padding-top: 10px;

}
.new-slide-card-without-city {

 padding-left: 0px;
 padding-right: 0px;
 
}
.truncate {
    font-size: 9px;
}
span.moneyCal.moneyFontSize {
    font-size: 16px!important;
}
span.moneySymbol.moneyFontSize {
    font-size: 16px!important;
}
span.crossMoneyFont {
    font-size: 10px!important;
}
.briefPageTitle h1 {
 font-size: 30px;
}
  right: -132px;
}
}

        </style>

<style>
    .pagination-wrapper .pagination {
        justify-content: center;
    }
    .pagination-wrapper .page-item .page-link {
        color: #333;
        border-radius: 4px;
        margin: 0 3px;
    }
    .pagination-wrapper .page-item.active .page-link {
        background-color: #49a316;
        border-color: #49a316;
        color: #fff;
    }
</style>

      
        <div class="container3" >
            <div class="briefPageTitle" style="margin: 50px 0px -38px 20px;">
                <h1>{{ $category->name }}</h1>
            </div>
            <div class="row m-0" id="desktopbread">
                <div class="col s12 breadcrumb-wrapper paddingTopArea" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="index.html" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </span>

                    <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                        class="breadcrumb-delim">
                        <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
                    </svg>
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="#!" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Cakes</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </span>
                </div>

            </div>

            <div class="white" itemscope itemtype="http://schema.org/ItemList" style="padding:3px;">
                <div class="section" style="padding: 0 10px;">
                    <div class="row filt" id="desktopfil">
                        <div class="col m5 s5" style="padding-top: 8px;">
                            <div style="font-weight:600;font-size: 18px;">
                                Cakes<span style="font-size:14px; padding-left:10px; font-weight: 300;">({{$products->count()}}
                                    items)</span>
                            </div>
                        </div>
                       
                        <div class="col m2 s2" style="cursor: pointer;">
                            <div id="desktopSortEvnt" class='price-filter' style="clear: both;">
                                <span class="moneySymbol"
                                    style="font-size: 13px;width: 18px; position: absolute; z-index: 1; margin-left: 7px; margin-top: 13px; pointer-events: none;"></span>
                                <span
                                    style=" display: block; font-size: 12px; margin-top: 1px; font-weight: 600; pointer-events: none;">Filter
                                    By Price</span>
                           

                                <select id="priceFilter" class="form-control">
                                    <option value="">All Products</option>
                                    <option value="0-499">499 and Below</option>
                                    <option value="500-999">500 - 999</option>
                                    <option value="1000-1499">1000 - 1499</option>
                                    <option value="1500-5000">1500 - 5000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col m2 s2" style="">
                     <span
                                style="display : block;font-size: 12px;margin-top: 1px; font-weight:600; pointer-events: none;">
                                Sort By Flavour</span>
                            <div id="desktopSortEvnt" class='category-sort' style="clear: both;">
                         

                            <select   id="flavourFilter" class="form-control">
                                    <option value="">Default</option>
                                    @foreach($flavours as $id => $flavour)
                                        <option value="{{ $id }}">{{ $flavour }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                   
                    <style>
.filter-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    z-index: 10000;
    display: none;
}

.filter-content {
    background: #fff;
    max-width: 600px;
    margin: 10% auto;
    padding: 20px;
    border-radius: 8px;
    position: relative;
}

.close-btn {
    position: absolute;
    right: 15px;
    top: 10px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
}
</style>

                    <!-- Filter Modal -->
<div id="productFilter" class="filter-modal" style="display: none;">
    <div class="filter-content">
        <span id="closeFilter" class="close-btn">&times;</span>

        <div class="row filt">
            <div class="col m5 s5" style="padding-top: 8px;">
                <div style="font-weight:600;font-size: 18px;">
                    Cakes<span style="font-size:14px; padding-left:10px; font-weight: 300;">({{ $products->count() }} items)</span>
                </div>
            </div>
            <div class="col m2 s2">
                <span style="font-size: 12px; font-weight: 600;">Filter By Price</span>
                <select id="priceFilter" class="form-control">
                    <option value="">All Products</option>
                    <option value="0-499">499 and Below</option>
                    <option value="500-999">500 - 999</option>
                    <option value="1000-1499">1000 - 1499</option>
                    <option value="1500-5000">1500 - 5000</option>
                </select>
            </div>
            <div class="col m2 s2">
                <span style="font-size: 12px; font-weight: 600;">Sort By Flavour</span>
                <select id="flavourFilter" class="form-control">
                    <option value="">Default</option>
                    @foreach($flavours as $id => $flavour)
                        <option value="{{ $id }}">{{ $flavour }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>




                    
                    <div class="section" style="padding:0px">
                        <ul class="row cat-products-wrapper catProductContent" style="display: block;flex-wrap: wrap;">
                            <input type="hidden" id="pageCountIndex" value="0" />
                            <link itemprop="url" href="cake.html" />
                            <meta itemprop="numberOfItems" content="40" />
                            @php
                                $prdCounter = 1;
                            @endphp
                            @foreach ($products as $product)
                            @php
                            
                                $discountedPrice = $product->variants->first()->price - ($product->variants->first()->price * $product->variants->first()->discount / 100);
                            @endphp
                                <li class="col s6 m3  product odd prd_cnt_mb_{{ $prdCounter }}" itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem"
                                    style="padding:0 8px 9px !important;margin-left: 0;">
                                    <meta itemprop="position" content="{{ $prdCounter }}" />
                                      <a href="{{ route(@$product->subcategory->subcat_slug ? 'product.detail.withsub' : 'product.detail', [
                                        'cat_slug' => $product->category->cat_slug,
                                        'subcat_slug' => $product->subcategory?->subcat_slug,
                                        'product_slug' => $product->slug,
                                    ]) }}"
                                        data-adbositionPl="{{ $prdCounter }}" data-primaryCategoryPl="{{ $product->category->name ?? '' }}" data-prodId="{{ $product->id }}"
                                        data-prodSecond="Chocolate" itemprop="url" target="_BLANK"
                                        rel="noopener noreferrer">
                                        <div data-adbositionPl="{{ $prdCounter }}" data-primaryCategoryPl="{{ $product->category->name ?? '' }}" data-prodId="{{ $product->id }}"
                                            data-prodSecond="Chocolate" itemprop="url" style="cursor: pointer;">
                                            <div class="new-slide-card-without-city product-card z-depth-0">
                                                
                                                <div style="position:relative;">
                                                    <picture>
                                                        <source
                                                            data-srcset="{{ asset($product->images->first()->image) }}"
                                                            type="image/webp" />
                                                        <img width="400" height="400"
                                                            class="center-block responsive-img lazyload product-card-radius"
                                                            src="{{ asset($product->images->first()->image) }}"
                                                            data-src="{{ asset($product->images->first()->image) }}"
                                                            alt="83221_Yummylicious Chocolate cake"
                                                            title="{{ $product->name }}" />
                                                    </picture>
                                                    <div id="wishListDesktopITem" class="wishlistItemDesignForAllDevice"
                                                        style="position:absolute;">
                                                        <div id="addToWishlistForm21687" style="display:contents">
                                                            <label>
 
                                                                <input type="hidden" tabindex="-1" name="wishlistItemId"
                                                                    id="wItemId_21687">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-slide-content-without-city" style="text-align:left;">
                                                    <div class="truncate"
                                                        style="color:#666;text-transform: capitalize;font-size: 15px;">
                                                        {{ $product->name }}</div>
                                                    <div class="price"
                                                        style=" text-align:left;font-size:0px; color:#333;/*color:#ec018c;/*color:#222;*/">
                                                        <span class="moneySymbol moneyFontSize"
                                                            style="font-size:18px;">₹&nbsp;</span>
                                                        <span data-inr="{{$product->variants->first()->price}}" class="moneyCal moneyFontSize"
                                                            style="font-weight:700;font-size: 18px;margin-left:4px;">
                                                            {{$discountedPrice}}</span>
                                                        {{-- <div class="ratingDivCat"
                                                            style="float:right;background: #49a316  0% 0% no-repeat padding-box;padding: 0px 4px 0px 5px;border-radius:4px;margin-top: 0px;">
                                                            <span
                                                                style="color: #FFFFFF;font-size:14px;  padding-top:0px; ">4.7</span>
                                                            <div>
                                                                <p style="padding:0px;margin:0px;" class="starForProduct">★
                                                                </p>
                                                            </div>
                                                        </div> --}}
                                                        <!--<span class="crossMoneyFont"-->
                                                        <!--    style="text-decoration:line-through; font-size:14px; padding-left: 3px; color:#878787;">-->
                                                        <!--    <span class="moneySymbol discountFontSize">-->
                                                        <!--        ₹ </span>-->
                                                        <!--    <span data-inr="799" class="discountRate discountFontSize">-->
                                                                
                                                        <!--        {{$product->variants->first()->price}}</span>-->
                                                        <!--</span>-->
                                                        <!--<span class="discountOffPrice"-->
                                                        <!--    style="color: #359B44;font-weight: 700;font-size: 11px;background: #E5F7EE;border-radius: 3px;padding: 5px 5px 4px 5px;margin-left: 2px;">-->
                                                        <!--    {{$product->variants->first()->discount}}% off-->
                                                        <!--</span>-->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @php
                                $prdCounter++;
                            @endphp
                            @endforeach
                            <div class="pagination-wrapper" style="text-align: center; margin-top: 20px;">
                                {{ $products->links('pagination::bootstrap-5') }}
                            </div>
                            
                            
                        </ul>
                    </div>
                </div>

              
              
                <style>
                    :root {
                        --star-size-plp: 90px;
                        --star-color-plp: #fff;
                        --star-background-plp: #fc0;
                        --star-border-color-plp: #fc0;
                    }

                    .stars-for-customer-review {
                        --percent-plp: calc(var(--rating-plp) / 5 * 100%);
                        font-size: var(--star-size-plp);
                        line-height: 1;
                        position: relative;
                        text-align: center;
                        justify-content: center;
                        display: flex;
                    }

                    .stars-for-customer-review::before {
                        content: '★★★★★';
                        letter-spacing: 3px;
                        background: linear-gradient(90deg, var(--star-background-plp) var(--percent-plp), var(--star-color-plp) var(--percent-plp));
                        -webkit-background-clip: text;
                        -webkit-text-fill-color: transparent;
                        justify-content: center;
                        display: flex;
                    }

                    .stars-for-customer-review::after {
                        content: '★★★★★';
                        letter-spacing: 3px;
                        position: absolute;
                        color: transparent;
                        -webkit-text-stroke: 1px var(--star-border-color-plp);
                        justify-content: center;
                        display: flex;
                    }
                </style>
             
               
              
              
            </div>
         
   <div class="row m-0" id="mobilebread">
                <div class="col s12 breadcrumb-wrapper paddingTopArea" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="index.html" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </span>

                    <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                        class="breadcrumb-delim">
                        <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
                    </svg>
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="#!" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Cakes</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </span>
                </div>

            </div>
           
    </main>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
     

        $(document).ready(function() {
            // Handle filter changes
            $('#priceFilter, #flavourFilter').on('change', function() {

            // $('#priceFilter, #sortFilter').on('change', function() {
                let url = new URL(window.location.href);
    
                // Get selected values
                let priceRange = $('#priceFilter').val();
                // let sort = $('#sortFilter').val();
                let flavours = $('#flavourFilter').val(); // get multiple selected values

                if (priceRange) {
                    let prices = priceRange.split('-');
                    url.searchParams.set('minPrice', prices[0]);
                    url.searchParams.set('maxPrice', prices[1] || '');
                } else {
                    url.searchParams.delete('minPrice');
                    url.searchParams.delete('maxPrice');
                }
    
               if (flavours) {
        url.searchParams.set('flavour', flavours);
    } else {
        url.searchParams.delete('flavour');
    }
                // if (sort) {
                //     url.searchParams.set('sort', sort);
                // } else {
                //     url.searchParams.delete('sort');
                // }
    
                window.location.href = url.href;
            });
    
            // Set selected values based on URL
            let urlParams = new URLSearchParams(window.location.search);
            let minPrice = urlParams.get('minPrice');
            let maxPrice = urlParams.get('maxPrice');
            let flavourFilter = urlParams.get('flavour');
    
            if (minPrice && maxPrice) {
                $('#priceFilter').val(`${minPrice}-${maxPrice}`);
            }
    
            if (flavourFilter) {
                $('#flavourFilter').val(flavourFilter);
            }
        });
    </script>
    <script>
  function toggleWishlist(btn) {
    const pid = btn.dataset.pid;
    const icon = btn.querySelector('img');

    // Toggle the active class
    btn.classList.toggle('active');

    // Switch icon image
    const isActive = btn.classList.contains('active');
    icon.src = isActive
      ? "{{asset('assets/website/img/with-heart.webp')}}"
      : "{{asset('assets/website/img/wishllisticon.png')}}";

    // Optionally: Send AJAX request to server to add/remove wishlist
    console.log(`Product ID ${pid} ${isActive ? 'added to' : 'removed from'} wishlist.`);
  }
</script>

@endsection

