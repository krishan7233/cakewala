<input type="hidden" id="pageCountIndex" value="0" />
<link itemprop="url" href="cake.html" />
<meta itemprop="numberOfItems" content="40" />

@php $prdCounter = 1; @endphp

@foreach ($products as $product)

    @php
        $variant = $product->variants->first();
        $image = $product->images->first();

        $discountedPrice = $variant
            ? ($variant->price - ($variant->price * $variant->discount / 100))
            : 0;
    @endphp

    <li class="col s6 m3 product odd prd_cnt_mb_{{ $prdCounter }}" itemprop="itemListElement"
        itemscope itemtype="http://schema.org/ListItem"
        style="padding:0 8px 9px !important;margin-left: 0;">
        <meta itemprop="position" content="{{ $prdCounter }}" />

        <a href="{{ route($product->subcategory?->subcat_slug ? 'product.detail.withsub' : 'product.detail', [
            'cat_slug' => $product->category->cat_slug,
            'subcat_slug' => $product->subcategory?->subcat_slug,
            'product_slug' => $product->slug,
        ]) }}"
            data-adbositionPl="{{ $prdCounter }}"
            data-primaryCategoryPl="{{ $product->category->name ?? '' }}"
            data-prodId="{{ $product->id }}"
            data-prodSecond="Chocolate"
            itemprop="url"
            target="_BLANK"
            rel="noopener noreferrer">

            <div style="cursor: pointer;">
                <div class="new-slide-card-without-city product-card z-depth-0">

                    <div style="position:relative;">
                        @if ($image)
                            @if($product->product_type)
                            <div class="center-align new-product-tag bg-best-seller ">{{$product->product_type??''}}</div>
                            @endif
                            <picture>
                                <source data-srcset="{{ asset($image->image) }}" type="image/webp" />
                                <img width="400" height="400"
                                    class="center-block responsive-img lazyload product-card-radius"
                                    src="{{ asset($image->image) }}"
                                    data-src="{{ asset($image->image) }}"
                                    alt="{{ $product->name }}"
                                    title="{{ $product->name }}" />
                            </picture>
                        @endif

                        <div id="wishListDesktopITem" class="wishlistItemDesignForAllDevice" style="position:absolute;">
                            <div id="addToWishlistForm{{ $product->id }}" style="display:contents">
                                <label>
                                    <input type="hidden" tabindex="-1" name="wishlistItemId"
                                        id="wItemId_{{ $product->id }}">
                                </label>
                            </div>
                        </div>
                         @if($product->category->eggless_option != 0)
                        <div class="eggStatusContainer"><span class="sqContainer eggless"><span class="withoutEggCircle"></span></span></div>
                        @endif
                    </div>

                    <div class="new-slide-content-without-city" style="text-align:left;">
                        <div class="truncate" style="color:#666;text-transform: capitalize;font-size: 15px;">
                            {{ $product->name }}
                        </div>

                        <div class="price" style="text-align:left;font-size:0px; color:#333;">
                            @if ($variant)
                                <span class="moneySymbol moneyFontSize" style="font-size:18px;">&nbsp;</span>
                                <span class="moneyCal moneyFontSize"
                                    style="font-weight:700;font-size: 18px;margin-left:4px;"
                                    data-inr="{{ $variant->price }}">
                                    ₹ {{ number_format($discountedPrice, 2) }}
                                </span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </a>
    </li>

    @php $prdCounter++; @endphp

@endforeach

@if ($products->hasMorePages())
    <div id="pagination-data" data-next-page="{{ $products->nextPageUrl() }}"></div>
@else
    <div id="pagination-data" data-next-page=""></div>
@endif
