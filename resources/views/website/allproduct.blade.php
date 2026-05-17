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
 .breadcrumb, .breadcrumb:last-child {
    color: #787878;
    font-size: 16px;
}
div#mobilebread {
    display: none;
}
h1 {
    font-size: 22px;
    font-weight: 600;
}

.eggStatusContainer {
    display: flex;
    align-items: center;
    margin-bottom: 0;
    margin-top: -30px;
    position: absolute;
    background: #fff;
    width: fit-content;
    padding: 2px;
    border-radius: 4px;
    margin-left: 15px;
    cursor: auto;
}
.sqContainer.eggless {
    border: 2px solid #22AA00;
}
.sqContainer {
    width: 15px;
    height: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
}
.withoutEggCircle {
    width: 0;
    height: 0;
    border: 3.5px solid #22AA00;
    border-radius: 50%;
}
@media only screen and (max-width: 600px) {
.row.filt {
    background: #EFEFEF;
    width: 100%;
    border-radius: 10px;
    padding: 10px;
}
div#desktopfil {
    display: none;
}
div#mobileMenu {
    display: block;
    background: #fff;
}
.overlay.active {
    display: block;
    background: #fff;
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
 font-size: 22px;
 font-weight: 600px;
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
                <h1>All Product </h1>
            </div>
            <div class="row m-0" id="desktopbread">
                <div class="col s12 breadcrumb-wrapper paddingTopArea" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="{{URL('/')}}" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="0" />
                    </span>

                    <svg width="16" height="27" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg"
                        class="breadcrumb-delim">
                        <path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z"></path>
                    </svg>
                    <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="{{ route('product.by.category', 'allproduct') }}" class="breadcrumb" itemtype="https://schema.org/WebPage" itemprop="item">
                            <span itemprop="name">Cakes</span>
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
                                    By Category</span>
                           

                                <select id="categoryFilter" class="form-control">
                                    <option value="">All Category</option>
                                     @foreach($category as $ct)
                                        <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col m2 s2" style="">
                     <!--<span-->
                     <!--           style=" display : block;font-size: 12px;margin-top: 1px; font-weight:600; pointer-events: none;">-->
                     <!--           Sort By Flavour</span>-->
                     <!--       <div id="desktopSortEvnt" class='category-sort' style="clear: both;">-->
                         

                     <!--       <select   id="flavourFilter" class="form-control">-->
                     <!--               <option value="">Default</option>-->
                     <!--               @foreach($flavours as $id => $flavour)-->
                     <!--                   <option value="{{ $id }}">{{ $flavour }}</option>-->
                     <!--               @endforeach-->
                     <!--           </select>-->
                     <!--       </div>-->
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
                    
                    
                                        <style>
.filter-modal {
    position: fixed;
    top: 165px;
    left: 0;
    width: 100%;
    height: 63%;
    background-color: #f5f5f5;
    z-index: 10000;
    display: none;
    padding: 10px;
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
.active{
    background: #fff;
    color:#000;
}
.btn-group.mb-3 a {
    background: #fff;
    color:#000;
    border:1px solid #9e9e9e;
    margin: 2px;
}
.category-scroll-wrapper {
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS */
}

.category-scroll-wrapper .btn-group {
    display: inline-flex;
    flex-wrap: nowrap;
}

</style>

<!-- Filter Modal -->
<div id="productFilter" class="filter-modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.6); z-index: 9999;">
    <div style="background: #fff; margin: 50px auto; padding: 10px; width: 90%; max-width: 800px; border-radius: 10px; position: relative;">
        
        <!-- Close Icon -->
        <div style="position: absolute; top: 10px; right: 15px; cursor: pointer;" onclick="closeFilterModal()">
            <span style="font-size: 24px; font-weight: bold;">&times;</span>
        </div>

        <!-- Modal Content -->
        <div class="row" style="display: flex; flex-wrap: wrap;">
            <div class="col m5 s5" style="padding-top: 8px;">
                <div style="font-weight:600;font-size: 18px;">
                    Cakes <span style="font-size:14px; padding-left:10px; font-weight: 300;">({{ $products->count() }} items)</span>
                </div>
            </div>

            <div class="col m2 s2" style="cursor: pointer; margin-left: 0px;">
                <div id="desktopSortEvnt" class='price-filter' style="clear: both;">
                    <span style="display: block; font-size: 12px; margin-top: 1px; font-weight: 600;">Filter By Category</span>
                    <select id="categoryFilter2" class="form-control" style="width: 100%; margin-top: 5px;">
                        <option value="">All Category</option>
                        @foreach($category as $ct)
                            <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col m2 s2" style="margin-left: 0px;">
                <span style="display: block; font-size: 12px; margin-top: 1px; font-weight: 600;">Filter By Price</span>
                <select id="priceFilter2" class="form-control" style="width: 100%; margin-top: 5px;">
                    <option value="">All Products</option>
                    <option value="0-499">499 and Below</option>
                    <option value="500-999">500 - 999</option>
                    <option value="1000-1499">1000 - 1499</option>
                    <option value="1500-5000">1500 - 5000</option>
                </select>
            </div>
        </div>
    </div>
</div>


<div class="category-scroll-wrapper mb-3">
    <div class="btn-group mb-3" role="group">
        @foreach($filtercat as $catId => $catName)
            <a href="{{ route('allproduct', ['categoryFilter' => $catId]) }}"
               class="btn btn-outline-primary {{ request('categoryFilter') == $catId ? 'active' : '' }}">
                {{ $catName }}
            </a>
        @endforeach
    </div>
</div>


                  
<div class="section" style="padding:0px">
    <ul class="row cat-products-wrapper catProductContent" style="display: block; flex-wrap: wrap;">
        @include('website.product-list', ['products' => $products])
    </ul>

    <div id="product-loader" style="display:none; text-align:center;background: #000;width: 100px;margin: auto;padding: 10px;color:#fff;">Loading...</div>
    <div id="load-more-end" style="display:none; text-align:center;">No more products</div>

    <div id="pagination-data" data-next-page="{{ $products->nextPageUrl() }}"></div>
    <div style="text-align:center;display:none; margin-top:20px;">
        <button id="load-more-btn" class="btn btn-primary">Load More</button>
    </div>
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
        </div> 

           
    </main>
    <script>
 function closeFilterModal() {
        document.getElementById('productFilter').style.display = 'none';
    }
</script>
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


// $(document).on('click', '#load-more-btn', function () {
//     let nextPage = $('#pagination-data').data('next-page');
//     if (!nextPage) return;

//     $('#product-loader').show();
//     $('#load-more-btn').hide();

//     $.ajax({
//         url: nextPage,
//         type: 'GET',
//         dataType: 'json',
//         success: function (res) {
//             console.log(res);
//             const tempDiv = $('<div>').html(res.html);

//             // Extract new product items and new pagination-data
//             const newProducts = tempDiv.find('li');
//             const newPagination = tempDiv.find('#pagination-data');

//             $('.catProductContent').append(newProducts);

//             // Replace old pagination-data div with new one
//             $('#pagination-data').replaceWith(newPagination);

//             const nextUrl = newPagination.data('next-page');
//             if (nextUrl) {
//                 $('#load-more-btn').show();
//             } else {
//                 $('#load-more-end').show();
//             }
//         },
//         complete: function () {
//             $('#product-loader').hide();
//         },
//         error: function () {
//             // alert('Failed to load more products.');
//             $('#product-loader').hide();
//             $('#load-more-btn').show();
//         }
//     });
// });
</script>

<script>

     

        $(document).ready(function() {

                $('#categoryFilter2, #priceFilter2').on('change', function() {
                // $('#priceFilter, #sortFilter').on('change', function() {
                let url = new URL(window.location.href);
    
                // Get selected values
                let categoryFilter2 = $('#categoryFilter2').val();
             
                // let flavour = $('#flavourFilter').val(); // get multiple selected values
               
                if (categoryFilter2) {
                    url.searchParams.set('categoryFilter', categoryFilter2);
                } else {
                    url.searchParams.delete('categoryFilter');
                }
    
                //   if (flavour) {
                //     url.searchParams.set('flavour', flavour);
                // } else {
                //     url.searchParams.delete('flavour');
                // }
              
    
                let priceRange2 = $('#priceFilter2').val();
      
                if (priceRange2) {
                    let prices = priceRange2.split('-');
                    url.searchParams.set('minPrice', prices[0]);
                    url.searchParams.set('maxPrice', prices[1] || '');
                } else {
                    url.searchParams.delete('minPrice');
                    url.searchParams.delete('maxPrice');
                }
                window.location.href = url.href;
            });
            
            // Handle filter changes
            // $('#categoryFilter, #flavourFilter').on('change', function() {
            $('#categoryFilter, #priceFilter').on('change', function() {
                // $('#priceFilter, #sortFilter').on('change', function() {
                let url = new URL(window.location.href);
    
                // Get selected values
                let categoryFilter = $('#categoryFilter').val();
             
                // let flavour = $('#flavourFilter').val(); // get multiple selected values
               
                if (categoryFilter) {
                    url.searchParams.set('categoryFilter', categoryFilter);
                } else {
                    url.searchParams.delete('categoryFilter');
                }
    
                //   if (flavour) {
                //     url.searchParams.set('flavour', flavour);
                // } else {
                //     url.searchParams.delete('flavour');
                // }
              
    
                let priceRange = $('#priceFilter').val();
      
                if (priceRange) {
                    let prices = priceRange.split('-');
                    url.searchParams.set('minPrice', prices[0]);
                    url.searchParams.set('maxPrice', prices[1] || '');
                } else {
                    url.searchParams.delete('minPrice');
                    url.searchParams.delete('maxPrice');
                }
                window.location.href = url.href;
            });
    
            // Set selected values based on URL
            let urlParams = new URLSearchParams(window.location.search);
            let categoryFilter = urlParams.get('categoryFilter');
            // let flavour = urlParams.get('flavour');
         
    
            if (categoryFilter) {
                $('#categoryFilter').val(categoryFilter);
            }
    
            // if (flavour) {
            //     $('#flavourFilter').val(flavour);
            // }
            
            let minPrice = urlParams.get('minPrice');
            let maxPrice = urlParams.get('maxPrice');

            if (minPrice && maxPrice) {
                $('#priceFilter').val(`${minPrice}-${maxPrice}`);
            }
            
        });

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

