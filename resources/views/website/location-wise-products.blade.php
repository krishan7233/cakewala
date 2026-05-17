@extends('website.website_app')

@section('title', $category->meta_title)
@section('meta_description', $category->description ?? $category->name)
@section('google_analytics')
    {!! $category->google_analytics !!}
@endsection

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
    padding-top: 150px;
    background: #f4f7f8;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
}
.white1 {
    background-color: #fff!important;
    padding: 20px 0!important;
    border-radius: 10px;
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
h1 {
    font-size: 22px;
    font-weight: 600;
}
@media only screen and (max-width: 600px) {
.container3 {
    margin-top: 85px;
    padding-top: 1px;
    background: #f4f7f8;
    padding-left: 0;
    padding-right: 0;
    padding-bottom: 30px;
}
.white1 {
    background-color: #fff!important;
    padding: 5px 0!important;
    border-radius: 10px;
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
                        <a href="{{ url('/') }}" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </span>

                    <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                        class="breadcrumb-delim">
                        <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
                    </svg>
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="{{ route('product.by.category', $category->cat_slug) }}" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">{{$category->name}}</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </span>
                </div>

            </div>

            <div class="white1" itemscope itemtype="http://schema.org/ItemList" style="padding:3px;">
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
                    Cakes<span style="font-size:14px; padding-left:10px; font-weight: 300;"> items</span>
                </div>
            </div>
            <div class="col m2 s2">
                <span style="font-size: 12px; font-weight: 600;">Filter By Price</span>
                <select id="priceFilter2" class="form-control">
                    <option value="">All Products</option>
                    <option value="0-499">499 and Below</option>
                    <option value="500-999">500 - 999</option>
                    <option value="1000-1499">1000 - 1499</option>
                    <option value="1500-5000">1500 - 5000</option>
                </select>
            </div>
            <div class="col m2 s2">
                <span style="font-size: 12px; font-weight: 600;">Sort By Flavour</span>
                <select id="flavourFilter2" class="form-control">
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
                        @include('website.product-list', ['products' => $products])
                            
                            
                        </ul>
                        
                          <div id="product-loader" style="display:none; text-align:center;background: #000;width: 100px;margin: auto;padding: 10px;color:#fff;">Loading...</div>
                            <div id="load-more-end" style="display:none; text-align:center;">No more products</div>
                        
                            <div id="pagination-data" data-next-page="{{ $products->nextPageUrl() }}"></div>
                            <div style="text-align:center;display:none; margin-top:20px;">
                                <button id="load-more-btn" class="btn btn-primary">Load More</button>
                            </div>
                        
                        {!! $category->footer_description ?? '' !!}
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
    
let isLoading = false;

$(window).on('scroll', function () {
    const nextPage = $('#pagination-data').data('next-page');
    const scrollTop = $(window).scrollTop();
    const windowHeight = $(window).height();
    const docHeight = $(document).height();

    if (!nextPage || isLoading) return;

    // Trigger when near bottom (100px threshold)
    if (scrollTop + windowHeight + 100 >= docHeight) {
        isLoading = true;

        $('#product-loader').show();
        $('#load-more-btn').hide(); // Hide the button while loading

        $.ajax({
            url: nextPage,
            type: 'GET',
            dataType: 'json',
            success: function (res) {
                const tempDiv = $('<div>').html(res.html);

                const newProducts = tempDiv.find('li');
                const newPagination = tempDiv.find('#pagination-data');

                $('.catProductContent').append(newProducts);
                $('#pagination-data').replaceWith(newPagination);

                const nextUrl = newPagination.data('next-page');
                if (nextUrl) {
                    $('#load-more-btn').show(); // Show button if more data
                } else {
                    $('#load-more-end').show(); // Show 'no more data' message
                    $('#load-more-btn').hide();
                }
            },
            complete: function () {
                $('#product-loader').hide();
                isLoading = false;
            },
            error: function () {
                $('#product-loader').hide();
                $('#load-more-btn').show();
                isLoading = false;
            }
        });
    }
});
</script>
    <script>
     

        $(document).ready(function() {
            // Handle filter changes
            
             $('#priceFilter2, #flavourFilter2').on('change', function() {

            // $('#priceFilter, #sortFilter').on('change', function() {
                let url = new URL(window.location.href);
    
                // Get selected values
                let priceRange2 = $('#priceFilter2').val();
                // let sort = $('#sortFilter').val();
                let flavours2 = $('#flavourFilter2').val(); // get multiple selected values

                if (priceRange2) {
                    let prices = priceRange2.split('-');
                    url.searchParams.set('minPrice', prices[0]);
                    url.searchParams.set('maxPrice', prices[1] || '');
                } else {
                    url.searchParams.delete('minPrice');
                    url.searchParams.delete('maxPrice');
                }
    
               if (flavours2) {
                    url.searchParams.set('flavour', flavours2);
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

