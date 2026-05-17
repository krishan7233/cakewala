@extends('website.website_app')
@section('content')
    <main>
        <style>
        
            .card .card-content .card-title {
                margin-bottom: 0;
            }
  .col.l4.s4.view_all {
    width: 6%;
    margin-top: -56px;
    right: 30px;
    position: absolute;
}
strong {
    font-weight: 600;
}
.catEventHome .col.s2 {
    width: 12.50%;
 
}
                            .max-container.observerForCategory {
    margin-top: 190px;
            padding: 0 20px;
}
            .text {
                font-size: 17px;
                color: #333333;
            }

            .card .card-content {
                padding: 18px;
                padding: 18px;

            }

            .safe_portn .img_left {
                width: 34%;
                float: left;
            }

            .choose_gifts .select-wrapper input.select-dropdown {
                margin-bottom: 0;
                border-bottom: none;
            }

            /*            .safe-delivery > .row > .col.s3{
                            padding:0 0.2% 0;
                        }*/
            .desk_banner img.lazyload {
                max-height: 372px;
            }

            .desk_banner picture {
                text-align: center;
                width: 100%;
                margin: 0 auto;
                float: left;
            }

            .relation_dropdwn {
                margin: 0;
                max-height: 100%;
                overflow-y: auto;
                height: 400px;
            }

            .choose_option {
                margin: 0 0 10px;
                text-align: left;
                padding: 0 0 20px;
                width: 100%;
            }

            .choose_option li {
                font-size: 14px;
                color: #333;
                line-height: 31px;
                padding: 2px 10px;
                width: 100%;
                display: block;
            }

            .choose_option li:first-child {
                display: none;
            }

            .relation_dropdwn select {
                display: none;
            }

            .label_finder span.selected {
                color: #1BA23E !important;
            }

            .label_finder {
                position: relative;
            }

            .label_finder:after {
                content: "";
                width: 40px;
                height: 44px;
                top: 0px;
                right: -10px;
                pointer-events: none;
             
                     position: absolute;
                        }
                        .occasion-cat{
                            font-size: 15px;
                            color: #666666;
                            display: block;
                            opacity: 0.9;
                        }
                        .occasion-text{
                            display: block;
                            font-size: 24px;
                            color: #333;
                            line-height: 23px;
                            background: #ffffff;
                            z-index: 9;
                        }
                        .rel-cat{
                            font-size: 15px;
                            color: #666666;
                            display: block;
                            opacity: 0.9;
                        }
                        .shop-by-rel-text{
                            display: block;
                            font-size: 24px;
                            color: #333;
                            line-height: 23px;
                            background: #ffffff;
                            z-index: 9;
                        }
                        .view_all{
                            border-radius: 6px;
                            border: 1px solid #FF4E84;
                            width: 7%!important;
                            font-size: 15px;
                            text-align: center;
                            color: white;
                            float: right!important;
                            background-color:#FF4E84;
                            padding: 7px!important;
                        }
                
                        .desktop-left-title{
                            padding-bottom:11px!important;
                            color:#4D4D4D;
                            font-weight:600;
                            font-size:15px!important;
                            text-align:left;
                        }
                        .desktop-title{
                            padding-bottom:11px!important;
                            color:#404040;
                            margin:0 auto;
                            padding-top:0.9%;
                            text-align:center;
                            font-size:30px;
                            font-weight: 600;
                        }
                        .swiper-button-next, .swiper-button-prev {
                            width: 40px;
                            height: 40px;
                            background: #fff;
                            border-radius: 50%;
                            box-shadow: 0 1px 2px rgb(0 0 0 / 30%);
                            display:none;
                        }
                        .swiper-button-next:after, .swiper-button-prev:after {
                            line-height:1.8!important;
                        }
                        :root{
                            --swiper-theme-color:#545454;
                            --swiper-navigation-size: 22px;
                        }
                
                        .padding-vl{
                            padding:0 9px 10px!important;
                
                        }
                        .padding-v2{
                            padding:0 7px 21px!important;
                            margin-bottom: 15px!important;
                        }
                        .page-description-content {
    color: #787878;
    margin-top: -85px;
}
                        
                                @media only screen and (max-width: 600px) {
              .catEventHome .col.s2 {
    width: 25%!important;
    padding-left: 10px;
   
             }
             .adbHomePage img {
    height: 150px;
}
                        .adbHomePage.container {
    margin-top: 0!important;
}
             .col.s12.page-description-content {
    margin-top: -70px;
}
             .wrapped-f1 {
    text-align: center;
    font-size: 12px!important;
    color: #333333;
    font-weight: 400!important;
    margin-top: 0px;
    padding-bottom: 10px;
}
    .rowapd {
    margin-top: 40px!important;
    padding: 0!important;
} 
.row .col.s8 {
    width: 100%;
  
}
.view_all_personalised {
  width: 44%;
    text-align: center;

                                }
                                .max-container.observerForCategory {
    margin-top: 110px;
            padding: 0 0px;
            padding-left: 0 !important;
}
.row .col.s3 {
    width: 50%;

}
.view_all_multiple {
  width: 34%!important;
    text-align: center;
    margin-right: 13px!important;
}
.row.center-align.container.man {
    padding: 10px 0px!important;
    width: 94%!important;
    display: block!important;
    margin-left: 10px!important;
}
        
        .man .col.s3 {
    width: 100%!important;

}    
.col.l4.s4.view_all {
    width: 20%!important;
    margin-top: -5px;
    right: 0px;
    position: absolute;
    font-size:10px;
}
span.name {
    font-size: 10px!important;
}
span.moneyCal {
    font-size: 10px!important;
}
 span.moneySymbol {
    font-size: 10px!important;
}                                   
                                    
   span.badge {
    min-width: 1rem!important;
}
    span.cat {
    font-size: 9px!important;
}     
                                    
                                }
                        @media(min-width:930px) and (max-width:1221px){
                            .occasion-cat{
                                font-size:12px;
                            }
                            .occasion-text{
                                font-size:18px;
                            }
                            .rel-cat{
                                font-size:13px;
                            }
                            .shop-by-rel-text{
                                font-size:19px;
                            }
                        }
                
                        .img-radius{
                            border-radius:7px
                        }
                
                        .choose_option li:hover{
                            cursor:pointer;
                            background-color:#9e9e9e21;
                        }
                        .padding-f1{
                            width:12.5%!important;
                            padding: 0 9px 0!important;
                        }
                        .wrapped-f1{
                            text-align: center;
                            font-size: 16px;
                            color: #333333;
                            font-weight: 500!important;
                            margin-top: 9px;
                        }
                        .rowapd{
                            padding: 17px 25px 17px;
                        }
                        .card-content-mod{
                            border-radius:none!important;
                            color:#333333;
                            font-size:18px;
                            text-align: center;
                            padding: 8px!important;
                        }
                        .best_seller_btn{
                            background-color: #FF4E84;
                            border-radius: 4px;
                            width:76%;
                            color: #fff;
                            padding: 4px 10px 4px;
                            display: inline-block;
                            box-shadow: 0px 1px 5px #00000029;
                        }
                        .card-content-mod-up{
                            border-bottom-right-radius: 10px;
                            border-bottom-left-radius: 10px;
                            background-color: #FFFFFF;
                            font-size:18px;
                            width:100%;
                            color:#333333;
                            padding: 8px!important;
                            display: inline-block;
                            box-shadow: 0px 1px 5px #00000029;
                        }
                        .absoluteposup{
                            margin-top: -12px;
                            text-align: center;
                        }
                        .corp_border {
                            border-radius : 10px;
                        }
                        .gif') }}tWrappedText {
     font-weight:700;
                    margin:0 auto;
                    font-size:35px;
                    color:#333333;
                    text-align:center;
                    padding: 0% 0 1.3%;
                    ;
                }

                .view-more-bttn {
                    text-align:center;
                    background-color:#FF4E84;
                    display: inline-flex;
                    padding: 7px 17px 7px !important;
                    font-size:15px !important;
                    border-radius: 4px;
                    color:#FFFFFF;
                    text-transform: uppercase;
                    margin-top: 10px;
                }

                .internationalCountryFont {
                    font-weight:600;

                }

                .premiumGifts {
                    padding: 0px 25px;
                }

                .imageRadius {
                    border-radius: 10px !important;
                }

                .containerOne {
                    display: flex;
                    justify-content: space-between;
                    align-items: flex-start;
                    margin: 8px 31px;
                }

                .leftOne,
                .rightOne,
                .centerOne {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                    /* Adjust spacing between images */
                }

                .containerOne img {
                    width: 100%;
                    max-width: 100%;
                    /* Ensure the image does not exceed its natural size */
                    height: auto;
                }

                .tabsOne {
                    display: flex;
                    margin-bottom: 10px;
                }

                .tabOne {
                    flex: 1;
                    padding: 10px;
                    text-align: center;
                    cursor: pointer;
                    background-color: #fff;
                    border: 1px solid #ccc;
                }

                .tabOne:hover {
                    background-color: #fff;
                }

                .content {
                    display: none;
                }

                .active {
                    display: block;
                }

                .paddingTopImage {
                    padding: 8px !important;
                    padding-top: 0px !important;
                    border-radius: 20px !important;
                }

                .view_all {
                    border-radius: 4px;
                    border: 1px solid #FF4E84;
                    font-size: 16px;
                    text-align: center;
                    color: white;
                    margin-right: 10px;
                    float: right !important;
                    padding: 4px !important;
                    background-color: #FF4E84;
                    cursor: pointer;
                }

                #dynCartAddonsProduct {
                    background: #fff;
                    width: 100%;
                    float: left;
                }

                .your-slider-class {
                    padding: 0px 70px 0px 78px;
                }

                .recently-view-slider {
                    padding: 0px 70px 0px 70px;
                }

                .recently-view-slider .slick-initialized .slick-slide {
                    color: #FFF;
                    margin: 0 15px 0 0;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .recently-view-slider .slick-next, .slick-prev {
                    z-index: 5;
                }

                .recently-view-slider .slick-next {
                    right: 15px;
                }

                .recently-view-slider .slick-prev {
                    left: 15px;
                }

                .recently-view-slider .slick-next:before, .slick-prev:before {
                    color: #000;
                    font-size: 26px;
                }

                .recently-view-slider .slick-dots {
                    display:none !important;
                }

                .recently-view-slider .slick-track {
                    float: left
                }

                .recently-view-slider .slick-prev, .slick-next {
                    font-size: 0; line-height: 0; position: absolute; top: 50%; display: block; left:93%; border-radius: 50%; width: 58px; height: 60px; padding: 0; -webkit-transform: translate(0, -50%); -ms-transform: translate(0, -50%); transform: translate(0, -50%); cursor: pointer; color: transparent; border: 1px solid #efefef; outline: none; z-index: 9;
                }

                .recently-view-slider .slick-prev {
                    background: rgba(219, 219, 219, 0.5) url("{{ asset('assets/website/groot/2023/12/18/desktop/arrow-left.png') }}") no-repeat 11px 11px; background-size: 17px; background-size: 84px !important; background-position: -13px; left: 58px !important; ;
                }

                .recently-view-slider .slick-next {
                    background: rgba(219, 219, 219, 0.5) url("{{ asset('assets/website/groot/2023/12/18/desktop/arrow-right.png') }}") no-repeat 11px 11px; right : 2px; background-size: 84px !important; background-position: -13px;
                }

                .recently-view-slider .slick-dots {
                    display:none !important;
                }

                .tabOne.active {
                    background: #484848;
                    color: white;
                }

                .custom-tab {
                    margin-right: 10px;
                    padding: 10px;
                    cursor: pointer;
                    background-color: #eee;
                }

                .custom-tab:hover {
                    background-color: #ddd;
                }


                .custom-tab-content.active {
                    display: block;
                }

                .addColorForPlant {
                    background: #EFFAED 0% 0% no-repeat padding-box;
                }

                .addColorForChocolate {
                    background: #F3EAD9 0% 0% no-repeat padding-box;
                }

                .addColorForCombos {
                    background: #FFFAEB 0% 0% no-repeat padding-box;
                }

                .plantActiveTab {
                    background: #484848 !important;
                    color: white !important;
                }

                .plantActiveTab {
                    background: #484848 !important;
                    color: white !important;
                }

                .chocolatesActiveTab {
                    background: #484848 !important;
                    color: white !important;
                }

                .combosActiveTab {
                    background: #484848 !important;
                    color: white !important;
                }

                .custom-tab-content {
                    display: none;
                }

                .custom-tab-content.active {
                    display: block;
                }

                .bottomLineDesign::before {
                    content: "";
                    display: block;
                    border-bottom: 2px solid #b0b6b9;
                    Width: 93.1%;
                    top: 50px;
                    left: 13px;
                    opacity: 0.4;
                    position: absolute;
                }



                .carousel-container {
                    position: relative;
                    overflow: hidden;
                    width: 400px;
                    /* Adjust the width as needed */
                    margin: 0 auto;
                }

                .carousel-wrapper {
                    display: flex;
                    transition: transform 0.5s ease;
                }

                .carousel-item {
                    flex: 0 0 auto;
                    width: 100%;
                }

                .prev-btn,
                .next-btn {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;
                    font-size: 18px;
                    font-weight: bold;
                    background-color: #333;
                    color: #fff;
                    border: none;
                    padding: 10px;
                    margin: 0 5px;
                }

                .prev-btn {
                    left: 0;
                }

                .next-btn {
                    right: 0;
                }

                .carousel-container {
                    position: relative;
                    overflow: hidden;
                    width: 100%;
                    margin: 0 auto;
                }

                .carousel-wrapper {
                    position: relative;
                    display: flex;
                    transition: transform 0.5s ease;
                }

                .carousel-item {
                    flex: 0 0 calc(25% - 20px);
                    margin: 0 10px;
                }

                .next-btn-click {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;
                    font-size: 18px;
                    font-weight: bold;
                    border: none;
                    padding: 10px;
                    margin: 0 5px;
                    z-index: 1;
                    /* Ensure buttons appear above the carousel items */
                }

                .prev-btn-click {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    cursor: pointer;
                    font-size: 18px;
                    font-weight: bold;
                    border: none;
                    padding: 10px;
                    margin: 0 5px;
                    z-index: 2;
                    /* Increase the z-index value */
                }

                .prev-btn-click {
                    left: -58px !important;
                }

                .next-btn-click {
                    right: 0;
                }

                .prev-next-container {
                    position: relative;
                }

                .allHoursMinutesSecondsDesign {
                    line-height:49px; font-family:Open Sans, sans-serif; font-weight:lighter; margin:0; font-size:43px; color:#fafafa; position: relative;
                }

                .hourDesign {
                    color:#3f3f3f; padding: 10px; border-radius: 10px; position: absolute; top: -69px; left: 108px; font-size: 13px; font-weight:600;
                }

                .minutesDesign {
                    color:#3f3f3f; padding: 10px; border-radius: 10px; position: absolute; top: -69px; font-size: 13px; left: 193px; font-weight:600;
                }

                .secondsDesign {
                    color:#3f3f3f; padding: 10px; border-radius: 10px; POSITION: ABSOLUTE; TOP: -69PX; FONT-SIZE: 13PX; font-weight: 600; left: 280px;
                }

                .hourLeftToday {
                    color:black;
                    font-size: 48px;
                    position: absolute;
                    top: 24px;
                    left: 6px;

                }

                .view_all_trending_button {
                    background: #FFE085 0% 0% no-repeat padding-box;
                    border: 1px solid #E6E6E6;
                    border-radius: 6px;
                    color: #22181C;
                    text-transform: uppercase;
                    padding: 7px !important;
                    font-weight: 700;
                    width:25% !important;
                    text-align:center;
                }

                .view_all_personalised {
                    background: #CCE8FF 0% 0% no-repeat padding-box;
                    border: 1px solid #E6E6E6;
                    border-radius: 6px;
                    color: #22181C;
                    text-transform: uppercase;
                    padding: 7px !important;
                    font-weight: 700;
                    width:24%;
                    text-align:center;
                }

              .view_all_multiple {
    background: #E2E2E2 0% 0% no-repeat padding-box;
    border: 1px solid #E6E6E6;
    border-radius: 4px;
    color: #22181C;
    margin-top: -11px;
    font-weight: 700;
    padding: 7px 10px !important;
    width: 8%;
    text-align: center;
    margin-right: 37px;
}

              

                .productTextMargin {
                    margin-left: 12px !important;
                    font-size: 14px !important;

                }

                .belowTextSpaceMargin {
                    margin-left: 12px !important;
                    font-size: 14px !important;
                }

                .moneySymbolDesign {
                    font-size: 12px !important;
                }

                .moneyCalculationDesign {
                    font-size: 12px !important;
                }

                .discountMoneyDesign {
                    font-size: 12px !important;

                }
                
                
                

                @media only screen and (min-width: 1200px) and (max-width: 1500px) {

                    .hourDesign {
                        color: #3f3f3f;
                        padding: 10px;
                        border-radius: 10px;
                        position: absolute;
                        top: -77px;
                        left: 108px;
                        font-size: 11px;
                        font-weight: 600;
                    }

                    .minutesDesign {
                        color: #3f3f3f;
                        padding: 10px;
                        border-radius: 10px;
                        position: absolute;
                        top: -76px;
                        font-size: 11px;
                        left: 172px;
                        font-weight: 600;
                    }

                    .secondsDesign {
                        color: #3f3f3f;
                        padding: 10px;
                        border-radius: 10px;
                        POSITION: ABSOLUTE;
                        TOP: -75PX;
                        FONT-SIZE: 11PX;
                        font-weight: 600;
                        left: 238px;
                    }

                    .recently-view-slider .slick-next {
                        background: rgba(219, 219, 219, 0.5) url("{{ asset('assets/website/groot/2023/12/18/desktop/arrow-right.png') }}") no-repeat 11px 11px; right : 2px; background-size: 84px !important; background-position: -13px; left: 92% !important; position:absolute;
                    }

                    .slick-next slick-arrow {
                        left:92.4% !important;
                        position:absolute !important;

                    }

                

                    .productTextMargin {
                        margin-left: 12px !important;
                        font-size: 14px !important;

                    }

                    .belowTextSpaceMargin {
                        margin-left: 12px !important;
                        font-size: 14px !important;
                    }

                    .moneySymbolDesign {
                        font-size: 11px !important;
                    }

                    .moneyCalculationDesign {
                        font-size: 11px !important;
                    }

                    .discountMoneyDesign {
                        font-size: 10px !important;

                    }

                    .belowTextSpaceMargin {
                        font-size: 14px;
                        margin-left: 12px;
                    }


                    .hourLeftToday {
                        font-size: 43px !important;
                    }

                    .timerDesignForDesktop {
                        font-size: 28px !important;
                    }

                    .hourLeftToday {
                        color: black;
                        position: absolute;
                        top: 36px;
                        left: 6px;
                    }
                }



                    @media screen and (min-width: 1200px) and (max-width: 1366px) {
                        .recently-view-slider .slick-next {
                           
                            no-repeat 11px 11px;
                            right: 2px;
                            background-size: 84px !important;
                            background-position: -13px;
                            left: 92% !important;
                            position: absolute;
                        }

                        .recently-view-slider .slick-prev, .slick-next {
                            font-size: 0;
                            line-height: 0;
                            position: absolute;
                            top: 50%;
                            display: block;
                            left: 92.4% !important;
                            border-radius: 50%;
                            width: 58px;
                            height: 60px;
                            padding: 0;
                            -webkit-transform: translate(0, -50%);
                            -ms-transform: translate(0, -50%);
                            transform: translate(0, -50%);
                            cursor: pointer;
                            color: transparent;
                            border: 1px solid #efefef;
                            outline: none;
                            z-index: 9;
                        }

                        .slick-next.slick-arrow {
                            position: absolute !important;
                            left: 92.4% !important;
                        }
                    }

                   

                }


                @media screen and (min-width: 1367px) and (max-width: 1500px) {

                 

                    .recently-view-slider .slick-next {
                         right : 2px; background-size: 84px !important; background-position: -13px; left: 92% !important; position:absolute;
                    }

                    .recently-view-slider .slick-prev, .slick-next {
                        font-size: 0; line-height: 0; position: absolute; top: 50%; display: block; left:92.4% !important; border-radius: 50%; width: 58px; height: 60px; padding: 0; -webkit-transform: translate(0, -50%); -ms-transform: translate(0, -50%); transform: translate(0, -50%); cursor: pointer; color: transparent; border: 1px solid #efefef; outline: none; z-index: 9;
                    }

                    .slick-next slick-arrow {
                        left:92.4% !important;
                        position:absolute !important;

                    }

                    .hourDesign {
                        position: absolute !important;
                        top: -74px !important;
                        left: 106px !important;
                        font-size: 11px !important;
                    }

                    .minutesDesign {
                        position: absolute !important;
                        top: -74px !important;
                        font-size: 11px !important;
                        left: 170px !important;
                    }

                    .secondsDesign {
                        POSITION: ABSOLUTE !important;
                        TOP: -74PX !important;
                        FONT-SIZE: 11PX !important;
                        font-weight: 600 !important;
                        left: 236px !important;

                    }
         
                }

              
                 
                 .swiper-wrapper {
    position: relative;
    width: 100%;
    height: auto;
    
}
              
              
        </style>

     
        <div style="" class=" max-container observerForCategory">
            <div class="row catEventHome" style="">
                @foreach ($categorys as $category)
                    <div class="adobeEventPos col s2 padding-f1">
                        <div style="aspect-ratio:1">
                            <a class="center-align" href="{{ route('product.by.category', $category->cat_slug) }}">
                                <img alt="cake delivery" loading="lazy" widgetType="featured category"
                                    class="responsive-img imageRadius" src="{{ asset($category->photo) }}"
                                    style="width:100%; height:100%">
                            </a>
                        </div>
                        <div class="wrapped-f1">{{ $category->name }}</div>
                    </div>
                @endforeach
       </div>
       
       
          <div class="adbHomePage container" style="max-width: 1920px!important;width: 100%!important;margin-top:0px;">
       <div class="swiper-container desk_banners adobeHeroBanner"
              style="margin:0 auto;padding:0 0 0;text-align: center;position:relative; overflow: hidden;">
             <div class="swiper-wrapper">

                  @foreach ($banners as $banner)
                   <div class="swiper-slide">
                          <a class="center-align" href="best-selling-plants86b7.html?showMain=true">
                              <img alt="dynamic" height="auto" style="width:100%" loading="lazy"
                               src="{{ asset($banner->image) }}" title="Plant Delivery In India">
                          </a>
               </div>
                 @endforeach


         </div>
         <div class="swiper-pagination"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
         </div>
        </div>
         
            <div style="margin-top:-7px;margin: 0 auto;padding-top:0px!important;padding-left: 26px;margin-bottom: 19px;" class=" max-container observerForCategory">
               
                <div class="row catEventHomeWithTitle"
                    style=" margin: 0 auto ;padding-top:0px!important;margin-top: 8px;margin-top: -10px;">
                    <div class="col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:0 auto;">
                        <div class="desktop-left-title"
                            style="text-align: center;font-size: 34px!important;margin-top: 40px;">
                            kidscake
                        </div>
                    </div>
                     
                </div>
                <div class="col l12 s12 m12" style="padding:0;margin:0 auto;margin-top: -10px;margin-bottom: 5px;">
                        <div class=" col l4 s4 desktop-left-title">
                        </div>
                        <div class=" col l4 s4 desktop-left-title">
                            <div class="color: #333333;" style="text-align: center;font-size: 20px;font-weight: 500;">
                                Dreamy cakes for every occasion</div>
                        </div>
                        <a style="color:white" href="{{ route('product.by.category', 'kids-cake') }}">
                            <div class="col l4 s4 view_all"
                                style="background: #E2E2E2 0% 0% no-repeat padding-box;border: 1px solid #E6E6E6;border-radius: 4px;color: #22181C;font-weight:600;padding: 7px!important;">
                                VIEW ALL
                            </div>
                        </a>
                    </div>
                <div class="row rowapd catEventHomeWithTitle"
                    style=" margin: 0 auto ;padding-top:0px!important;padding-left: 26px;margin-bottom: 19px;padding-right: 26px;">
                   


                    @foreach ($kidscake_products as $product)
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
                                                    style="font-size: 15px;display:block;font-weight:800;text-align: center;" class="name">{{ $product->name }}</span>
                                                
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
               




                <div class="row catEventHomeWithTitle max-container" style=" margin: 0 auto ;padding-top:0px!important;">
                    <div class="col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:0 auto;">
                        <div class="desktop-left-title"
                            style="text-align: center;font-size: 34px!important;margin-top: 35px;margin-top: 0px;">
                            Designer Cakes
                        </div>
                    </div>
                </div>
                  <div class="col l12 s12 m12"
                        style="padding:0;margin:0 auto;margin-top: -10px;margin-bottom: 20px;margin-bottom: 15px;">
                        <div class=" col l4 s4 desktop-left-title">
                        </div>
                        <div class=" col l4 s4 desktop-left-title">
                            <div class="color: #333333;" style="text-align: center;font-size: 20px;font-weight: 500;">
                                Petals of Happiness</div>
                        </div>
                        <a style="color:white" href="{{ route('product.by.category', 'designer-cakes') }}"> 
                            <div class="col l4 s4 view_all"
                                style="background: #E2E2E2 0% 0% no-repeat padding-box;border: 1px solid #E6E6E6;border-radius: 4px;color: #22181C;font-weight:600;padding: 7px!important;">
                               VIEW ALL 
                            </div>
                       </a>
                    </div>
                <div class="row rowapd catEventHomeWithTitle max-container"
                    style=" margin: 0 auto ;padding-top: 0px;padding-bottom: 36px;">

                  

                    @foreach ($designer_cakes_products as $product)
                        <div class="adobeEventPos col s3 l3 m3 padding-vl ">
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
                                        <img alt="Birthday Flowers" loading ="lazy" widgetType="flower category"
                                            class=" lazyload responsive-img "
                                            src="{{ asset($product->images->first()->image) }}"
                                            data-src="{{ asset($product->images->first()->image) }}"
                                            style="width:100%;height:100%">
                                        <div class="card-content col l12 s12 m12"
                                            style='padding: 17px 0px 13px;padding-top:0px;'>
                                            <div class=" col l12 s12 m12 truncate"
                                                style='padding-right: 0;text-align:center;color:#404040;line-height:19px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #e8e8e8;border-radius: 0px 0px 15px 15px;border-top: 0px;padding-bottom: 12px;'>
                                                <span
                                                    style="font-size: 18px;display:block;font-weight:800;text-align: center;padding-top: 12px;padding-bottom: 7px;" class="name">{{ $product->name }}
                                                </span>
                                               
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


              





             
                <div class="row center-align container man"
                    style='padding: 32px 47px 32px 71px;background: #FFFAEB 0% 0% no-repeat padding-box;border-radius: 20px;margin: 0px 22px;max-width: 1540px;padding-right: 0px;margin-top:40px'>
                    <div class="col l12 m12 safe_portn" style="float: none; margin: 0 auto;">
                        <div class=" col s3 m3 l3"
                            style=" text-align:center;padding:0; display: flex; align-items: center;">
                            <div class="img_left">
                                <img class=" lazyload responsive-img" loading ="lazy" alt="processing-gif-second"
                                    src="{{ asset('assets/website/img/preferred-time-slot-selection.webp') }}"
                                    
                                    style="width:100%;height:100%">
                            </div>
                            <div class="content_right"
                                style="text-align:left;font-weight:bold;line-height:118%;padding-left:15px;width:100%;">
                                <div style="line-height:24px;color: #333333;font-size:20px;">Preferred Time<span
                                        style="color:#333333;font-size:18px;display: block;">Slot Selection</span></div>
                            </div>
                        </div>
                        <div class=" col s3 m3 l3"
                            style=" text-align:center;padding:0; display: flex; align-items: center;">
                            <div class="img_left">
                                <img class=" lazyload responsive-img" loading ="lazy" alt="processing-gif-second"
                                    src="{{ asset('assets/website/img/delivery-in-cities.webp') }}"
                                  
                                    style="width:100%;height:100%">

                            </div>
                            <div class="left"
                                style="text-align:left;font-weight:bold;line-height:118%;padding-left:15px;width:100%;">
                                <div style="line-height:24px;color: #333333;font-size:20px;">Delivery in 700+ <span
                                        style="color:#333333;font-size:18px;display: block;">Cities</span></div>

                            </div>
                        </div>
                        <div class=" col s3 m3 l3"
                            style=" text-align:center;padding:0; display: flex; align-items: center;">
                            <div class="img_left">
                                <img class=" lazyload responsive-img " loading ="lazy" alt="processing-gif-second"
                                    src="{{ asset('assets/website/img/twenty-million-people-trust-us.webp') }}"
                                 
                                    style="width:100%;height:100%">
                            </div>
                            <div class="left"
                                style="text-align:left;font-weight:bold;line-height:118%;padding-left:15px;width:100%;">
                                <div style="line-height:24px;color: #333333;font-size:20px;">20 Million People <span
                                        style="color:#333333;font-size:18px;display: block;">Trust Us</span></div>
                            </div>
                        </div>

                        <div class=" col s3 m3 l3"
                            style=" text-align:center;padding:0; display: flex; align-items: center;">
                            <div class="img_left">
                                <img class=" lazyload responsive-img " loading ="lazy" alt="processing-gif-second"
                                    src="{{ asset('assets/website/img/pincodes-serviced-till-date.webp') }}"
                                   
                                    style="width:100%;height:100%">

                            </div>
                            <div class="left"
                                style="text-align:left;font-weight:bold;line-height:118%;padding-left:15px;width:100%;">
                                <div style="line-height:24px;color: #333333;font-size:20px;">18000+ Pincodes <span
                                        style="color:#333333;font-size:18px;display: block;">Serviced Till Date</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top:0px!important;">
                    <div class="col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:0 auto;">
                        <div class="desktop-left-title"
                            style="margin-left: 5px;text-align: center;font-size: 34px!important;margin-top: 31px;margin-top: 60px;padding-bottom: 3px!important;">
                            Combos and Hampers
                        </div>
                    </div>
                </div>
                
                  <div class="col l12 s12 m12"
                        style="padding:0;margin:0 auto;margin-top: 0px;margin-bottom: 15px!important;">
                        <div class=" col l4 s4 desktop-left-title">
                        </div>
                        <div class=" col l4 s4 desktop-left-title">
                            <div class="color: #333333;" style="text-align: center;font-size: 20px;font-weight: 500;">
                                Tailored For Every Occasion</div>
                        </div>
                        <a style="color:white" href="{{ route('product.by.category', 'kids-cake') }}">
                            <div class="col l4 s4 justifyEndClass"
                                style="justify-content: end;display: flex;padding-left: 0px;margin-top: 10px;">
                                <span class="view_all_multiple"> VIEW ALL </span>
                            </div>
                        </a>
                    </div>
                
                <div class="row rowapd catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top: 0px;">
                  

                    @foreach ($combos_hampers as $product)

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
                                    <img alt="Flowers and Teddy" loading ="lazy" widgetType="combos category"
                                        class=" lazyload responsive-img "
                                        src="{{ asset($product->images->first()->image) }}"
                                        data-src="{{ asset($product->images->first()->image) }}"
                                        style="width:100%;height:100%">
                                    <div class="card-content col l12 s12 m12"
                                        style='padding: 17px 0px 13px;padding-top:2px;'>
                                        <div class=" col l12 s12 m12 truncate"
                                            style='padding-right: 0;text-align:center;color:#404040;line-height:19px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #e8e8e8;border-radius: 0px 0px 15px 15px;border-top: 0px;padding-bottom: 13px;'>
                                            <span
                                                style="font-size:17px;display:block;font-weight:800;padding-top: 12px;
                                                                                                      padding-bottom: 7px;" class="name">{{ $product->name }} </span>
                                           
                                            <span style='font-size:13px;' class="moneySymbol">₹ </span>
                                            <span style='font-size:13px;' class="moneyCal" data-inr="{{$product->variants->first()->price}}">{{$product->variants->first()->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach
                  
                </div>

                <div class="row catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top:0px!important;">
                    <div class="col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:0 auto;">
                        <div class="desktop-left-title"
                            style="text-align: center;font-size: 34px!important;margin-top: 30px;">
                            Festive Seasonal
                        </div>
                    </div>
                </div>
                <div class="col l12 s12 m12" style="padding:0;margin:0 auto;margin-top: -11px;margin-bottom: 5px;">
                        <div class=" col l4 s4 desktop-left-title">
                        </div>
                        <div class=" col l4 s4 desktop-left-title">
                            <div class="color: #333333;" style="text-align: center;font-size: 20px;font-weight: 500;">Add
                                greens to your living space</div>
                        </div>
                        <a style="color:white" href="{{ route('product.by.category', 'festive-seasonal-cakes') }}">
                            <div class="col l4 s4 justifyEndClass"
                                style="justify-content: end;display: flex;padding-left: 0px;">
                                <span class="view_all_multiple"> VIEW ALL </span>
                            </div>
                        </a>
                    </div>
                <div class="row rowapd catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top: 0px;">
                    
                    @foreach ($festive_seasonal_prpduct as $product)
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
                                        <img alt="Indoor Plants" loading ="lazy" widgetType="plant category"
                                            class=" lazyload responsive-img "
                                            src="{{ asset($product->images->first()->image) }}"
                                            data-src="{{ asset($product->images->first()->image) }}"
                                            style="width:100%;height:100%">
                                        <div class="card-content col l12 s12 m12"
                                            style='padding: 17px 0px 13px;padding-top: 2px;'>
                                            <div class=" col l12 s12 m12 truncate"
                                                style='padding-right: 0;text-align:center;color:#404040;line-height:19px;background: #FFFFFF 0% 0% no-repeat padding-box;
                                                                                                                                                                        border: 1px solid #e8e8e8;
                                                                                                                                                                        border-radius: 0px 0px 15px 15px;
                                                                                                                                                                        border-top: 0px;
                                                                                                                                                                            padding-bottom: 12px;'>
                                                <span
                                                    style="font-size: 18px;display:block;font-weight:800;text-align: center;padding-top: 12px;padding-bottom: 7px;" class="name">{{ $product->name }}</span>
                                              
                                                <span style='font-size:15px;' class="moneySymbol">₹ </span>
                                                <span style='font-size:15px;' class="moneyCal" data-inr="{{ $product->variants->first()->price }}">{{ $product->variants->first()->price }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
               
        
                </div>


                <div id="Tab4" class="content">
                    <div class="your-slider-class">
                    </div>
                </div>

               

                <div class="row catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top:0px!important;margin-top: -10px;">
                    <div class="col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:0 auto;">
                        <div class="desktop-left-title"
                            style="text-align: center;font-size: 34px!important;margin-top: 60px;">
                            Chocolates
                        </div>
                    </div>
                </div>
                  <div class="col l12 s12 m12"
                        style="padding:0;margin-bottom:6px;margin:0 auto;margin-top: -10px;margin-bottom: 8px;">
                        <div class=" col l4 s4 desktop-left-title">
                        </div>
                        <div class=" col l4 s4 desktop-left-title" style="    font-size: 19px!important;">
                            <div style="text-align: center;font-size: 20px;font-weight: 500;">Sweet Temptations to Share
                            </div>
                        </div>
                        <a style="color:white" href="{{ route('product.by.category', 'kids-cake') }}">
                            <div class="col l4 s4 justifyEndClass"
                                style="justify-content: end;display: flex;padding-left: 0px;">
                                <span class="view_all_multiple"> VIEW ALL </span>
                            </div>
                        </a>
                    </div>
                <div class="row rowapd catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top:0px!important;">
                  

                    @foreach ($products as $product)
                    <div class="adobeEventPos col s3 l3 m3 padding-vl" style="padding: 17px 16px 17px;">
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
                                    <img alt="Chocolate Combos" widgetType="chocolate category"
                                        class=" lazyload responsive-img "
                                        src="{{ asset($product->images->first()->image) }}"
                                        data-src="{{ asset($product->images->first()->image) }}"
                                        style="width:100%;height:100%">
                                    <div class="card-content col l12 s12 m12"
                                        style='padding: 17px 0px 13px;padding-top: 0px;'>
                                        <div class=" col l12 s12 m12 truncate"
                                            style='padding-right: 0;text-align: center;color:#404040;line-height:19px;background: #FFFFFF 0% 0% no-repeat padding-box;
                                                                                                                                                         border: 1px solid #e8e8e8;
                                                                                                                                                         border-radius: 0px 0px 15px 15px;
                                                                                                                                                         border-top: 0px;
                                                                                                                                                         padding-bottom: 13px;'>
                                            <span
                                                style="font-size:17px;display:block;font-weight:800;padding-top: 12px;padding-bottom: 7px;" class="name">{{ $product->name }}</span>
                                           
                                            <span style='font-size:13px;' class="moneySymbol">₹ </span>
                                            <span style='font-size:13px;' class="moneyCal" data-inr="{{ $product->variants->first()->price }}">{{ $product->variants->first()->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    
                @endforeach
                    
                </div>

                
               
                
                <div class="row rowapd catEventHomeWithTitle max-container"
                    style=" margin: 0 auto!important;padding-top:30px!important;padding-left: 15px;padding-right: 17px;">
                    <div class="col l12 s12 m12" style="padding:0;margin-bottom:6px;margin:0 auto">
                        <div class="col l12 s12 desktop-left-title"
                            style="text-align:center;font-size: 34px!important;margin-top: -14px;margin-bottom: 8px;">
                            Gift Categories
                        </div>

                    </div>

                    @foreach ($gift_categorys as $category)
                    <div class="adobeEventPos col s3 l3 m3 " style="padding: 0 9px 32px">
                        <a class="center-align" href="{{ route('product.by.category', $category->cat_slug) }}">
                            <div class="card "
                                style='border-radius:14px;box-shadow:none;overflow:hidden;margin:0;background-color: #FFFFFF!important;'>
                                <div class="card-image">
                                    <img alt="Jewellery" loading ="lazy" widgetType="explore more categories"
                                        class=" lazyload responsive-img "
                                        src="{{ asset($category->photo) }}"
                                        data-src="{{ asset($category->photo) }}"
                                        style="width:100%;height:100%">
                                    <div class="card-content col l12 s12 m12"
                                        style='padding: 17px 0px 13px;padding-top: 0px;'>
                                        <div class=" col l12 s12 m12 truncate"
                                            style='padding-right: 0;text-align:center;color:#404040;line-height:19px;background: #FAFAFA 0% 0% no-repeat padding-box;
                                                                                                                                                      border: 1px solid #e1e1e1;
                                                                                                                                                      border-radius: 0px 0px 15px 15px;
                                                                                                                                                      border-top: 0px;
                                                                                                                                                         padding-bottom: 16px;
                                                                                                                                                         padding-top: 16px;'>
                                            <span style="font-size:17px;display:block;font-weight:800" class="cat">{{ $category->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
            
            
             
         

                </div>
            

          
            </div>
            <div class="section container" style="margin:0 auto!important;">
                <div class="row">
                    <div class="col s12 page-description-content">
                        <h1 style="">Send Flower and Cakes anywhere in India from Cake Plaza</h1>
                        <p dir="ltr">Cake Plaza is one of the best online companies in India. We deliver beautiful combos of online Flower and Cake. We have a wide variety of flowers, delicious cakes and online personalised gifts. Sending flowers and cake to your loved ones is one of the best gifts, which makes them feel special on their special days like a birthday or Anniversary. Flower and cake gift surprise at Midnight delivery works miraculously, which gives a wide smile on your loved one's face. When you are just confused about what to gift, sending online Flower and Cake are first choice gifts for all age group people.</p>
                        
                        <h2 dir="ltr">Guaranteed Delivery of Flowers and Cakes in India with Cake Plaza | Order Flowers & Cake Online</h2>
                        <p dir="ltr">We provide 100% guaranteed deliveries of Online Flowers and Cake Delivery in India as we believe in making our customers first choice. We want our customers to happily order us again. Once you place your order then you will get a confirmed delivery within 3 hours of placing the order. We believe in making the trust of our customers and our goodwill in the market. Cake Plaza doesn't simply vow to offer such creatively made Flowers and cake combos in Delhi, Mumbai, Bangalore, or Kolkata that are sufficiently multipurpose.</p>
                        <h2 dir="ltr">Freshest Online Flowers & Cakes in India with Free Shipping at Your Doorstep</h2>
                        <p dir="ltr">Presently the time has so changed to Order Flowers and cake Online in India. Else we have to surge nearby business sectors on Birthday, Anniversaries or some other event. But with us you can purchase flowers as we are the best florist, cake bakers having the culinary art of bread in the kitchen, party presents, chocolate baskets, customized presents, and Gift combos. Presently, our innovation has been redesigned that at our website you will get everything at one spot wherever you want to send the Online Flowers and Cake Delivery in Delhi. by putting a request at our online site Cake Plaza. Presently regardless of whether you are occupied in your work and stuck in some other state or nation because of any explanation</p>
                        <h2 dir="ltr">Say Your Feelings with Cakes at Midnight Delivery | Get the Best Combo of Cakes and Cakes For Anniversary</h2>
                        <p dir="ltr">All things and emotions are considered at our website. With us, you can Send Flowers and Cake in Delhi NCR, Like Faridabad, Delhi, and Ghaziabad, : which is for adoring couples like you have in your family and friends. Yes, Cake Plaza is devoted to Send Flowers and Cake Online to India. We have a very good arrangement of the online flower combos: and the Online Theme cakes: that you can Send Flowers and Cake Online to India. Yes, we have everything arranged for you at a single place. We will have the option to answer every gifting problem and of your emotional questions and get you the most ideal choice accessible.</p>
                       <p dir="ltr"> <strong>Cake for Father: </strong> Send delicious Sugar Free cakes: for your grounded Dad. We will arrange same day delivery for you to make your father’s day special and we make a point to leave not any stone unturned as we have speciality revealed in our best seller cakes while furnishing cakes as a big surprise you can order flowers and chocolate combos. Another significant angle is that you don’t need to book everything in advance. You can book orders at the last minute as well one the endowments of midnight delivery are always there for you. But you need an amazing gift for your loved father independently.</p>
                        <p dir="ltr"> <strong>Cake for Mother: </strong> For that dear Mom who has won your unconditional love, we have the most delectable combo of cake with teddies: and flowers arranged with chocolates that spread affection and care. You should simply tap on our site choosing the best delicacies that will gladly help you to convey love.</p>
                         <p dir="ltr"> <strong>Cake for Sister: </strong> Cake Plaza permits you to send flowers and cake for your sister in combos around the same time itself. The 12 PM delivery of gifts is another element offered by Cake Plaza to make your sister smile in the mid-night.</p>
                         
                       <p dir="ltr">  <strong>Cake for Brother: </strong> Your flower and cake delivery will be on time with the best quality of your chosen online flower bouquet and flavorful cake at your brother’s doorstep showing your love and emotion. Your loved brother will surely persistently recall that unexpected lifetime gifts and make memories forever.</p>

<p dir="ltr"> <strong>Cake for Boyfriend: </strong> You simply need to recollect the special dates of your boyfriend’s birthday or your anniversary and start scrolling among the products on our website for submitting the request of flowers and cake at Cake Plaza. Rest we will deal to handle best with everything subsequent to putting in your request.</p>

<p dir="ltr"> <strong>Cake for Girlfriend: </strong> With our website, you can order romantic Valentine cakes for her. : She will cherish the gifts and make it certain to have a life-changing experience. The main part of our delivery can be very much articulated from the way that “Reliability is our centre Name”. To submit your request and order cakes for your girlfriend today with us and connect with your ‘somebody unique’ and delight her with the best combos we have.</p>

<p dir="ltr"> <strong>Cake for Husband: </strong> Our every combo joins the joy of same day delivery or 12 PM online flower and cake delivery choices with a colossal assortment for your husband’s birthday. Aside from that, we have picked some significant urban community gifts where you can order and send flowers Online cake shop in Gurgaon, Chennai, Pune, Mumbai, Kolkata and Hyderabad.</p>

<p dir="ltr"> <strong>Cake for Wife:  </strong>At Cake Plaza, you will get everything from cake to flowers and personalised gifts. Here we also provide delivery in various territories, which are reached in the burn-through time to her doorstep.</p>

<p dir="ltr"> <strong>Cake for Anniversary:  </strong>Flowers make your loved partner feel special and the sweetness of the cake makes them incredibly happy. Cake Plaza serves a huge variety of excellent quality gift combos and personalized gifts, which you can send along with the flower and cake anywhere in India.</p>
                    </div>
                </div>
            </div>


<section class="faq-section">
  <h2>Frequently Asked Questions</h2>
  
  <div class="faq-item">
    <button class="faq-question">Q: Can I Send A Birthday Cake In Delhi Via Cake Plaza?</button>
    <div class="faq-answer">A: Yes, we deliver cakes all over in India within 3 hours of placing the order. Make your specials once more happy on their special occasions with Cake Plaza.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: Which Cake Is the Best For A Birthday?</button>
    <div class="faq-answer">A: Cake Plaza has a huge variety of cakes according to different tastes and preferences. Cakes like truffle cake, vanilla cake, strawberry & fondant cakes in different flavours are best for birthday for adults as well as children.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: Are There Any Extra Charges For Midnight Birthday Cake Delivery from Cake Plaza?</button>
    <div class="faq-answer">A: Yes, we charge INR 250 for late-night or midnight deliveries anywhere in India. Surprising your loved one by sending midnight cakes late at night will make their birthday special and bring happiness on their face.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What Is The Starting Range of Birthday Cakes at Cake Plaza?</button>
    <div class="faq-answer">A: The starting range or price for ½ kg Cake is INR 449. You can order any flavour in half kg cake flavour. All flavours are delicious and fresh in taste.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What if I want to Have Add-Ons With The Birthday Cakes?</button>
    <div class="faq-answer">A: Yes, at Cake Plaza, you will have a huge variety of add-ons. You can order gifts with a cake, which can be delivered along with Flowers, Teddy bear, Personalize gifts, Mugs, Cushions, and Chocolates.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: In which cities Birthday Cake Delivery is Available?</button>
    <div class="faq-answer">A: You can avail cakes and gifts at any place across India like Delhi, Gurgaon, Punjab, Chennai, Bangalore, and Kolkata.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: Do I Have an option to write a message on the cake?</button>
    <div class="faq-answer">A: Yes, you can make us write your birthday message or names on the cakes. It will surely delight the recipient whose birthday is on that day.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What are the available options for payment?</button>
    <div class="faq-answer">A: You can pay through online Debit card, Credit card, PayTM, and Google pay. We do not take orders on COD.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What is the charge for same day delivery of Flowers & Cake?</button>
    <div class="faq-answer">A: We don’t charge anything for any delivery as our service is completely free. We spread happiness and our customers are a priority, so we provide same day delivery of flowers, cakes, and personalised gifts for free and on time.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What is my expected delivery time for Flowers & Cake?</button>
    <div class="faq-answer">A: We provide Flowers & Cake delivery within 3 hours of placing the order online by our website Cake Plaza. Sitting anywhere in your comfort zone, you can just place your order and make your special ones happy.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What is the order cut off for Flowers & Cake same day delivery?</button>
    <div class="faq-answer">A: We take Flowers & Cake order 24*7. Our delivery service is available from 9 AM to 9 PM.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Q: What are the available options for payment while ordering Flowers & Cake?</button>
    <div class="faq-answer">A: You can order Flowers & Cake through Debit card, Credit card, PayTM, and Google pay.</div>
  </div>
</section>




        </div>

        <style>
        .faq-section {
  max-width: 1600px;
  margin: 40px auto;
  padding: 0 20px;
  font-family: 'Segoe UI', sans-serif;
}

.faq-section h2 {
  text-align: center;
  margin-bottom: 30px;
  font-size: 28px;
  color: #333;
}

.faq-item {
  border: 1px solid #ddd;
  border-radius: 8px;
  margin-bottom: 15px;
  overflow: hidden;
  transition: box-shadow 0.3s ease;
}

.faq-item:hover {
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.faq-question {
  width: 100%;
  padding: 15px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: left;
  background-color: #f9f9f9;
  border: none;
  cursor: pointer;
  outline: none;
  color: #111;
}

.faq-answer {
  padding: 0 20px 15px;
  display: none;
  background: #fff;
  color: #444;
  font-size: 15px;
  line-height: 1.6;
}

        
        
            .blog-excerpt-container {
                padding: 0 20px;
                margin-top: 20px;
                margin-bottom: 50px;
            }

            @media only screen and (max-width: 600px) {
                .blog-excerpt-container {
                    padding: 0;
                    width: 100%;
                }
            }

            .blog-col {
                padding-top: 10px !important;
            }

            .blog-title {
                font-size: 16px;
            }

            .blog-excerpt {
                font-size: 14px;
            }

            .blog-excerpt p {
                margin-top: 10px;
            }
        </style>

       
        <div data-target="country-field" class="modal-trigger checkCountryName" style="color:red"><span
                id="messageItem"></span></div>
        </div>
        <style>
            .modal-mobile-show {
                display: none
            }

            .borderModal {
                border-radius: 10px;
            }

            @media only screen and (max-width:765px) {
                .modal-desktop-show {
                    display: none
                }

                .modal-mobile-show {
                    display: block
                }

                .country-center-align {
                    position: relative;
                    bottom: 30px;
                    color: black;
                    font-size: 17px;
                    padding-left: 15px
                }

                .coupon-modal {
                    background: rgb(255, 255, 255) !important;
                    overflow-x: hidden !important;
                    z-index: 1003 !important;
                    display: none;
                    opacity: 0;
                    transform: scaleX(1) scaleY(1) !important;
                    top: 0% !important;
                    min-height: 100vh !important;
                }

                .modal-overlay {
                    position: static;
                    z-index: 999;
                    top: -25%;
                    left: 0;
                    bottom: 0;
                    right: 0;
                    height: 125%;
                    width: 100%;
                    background: #000;
                    display: none;
                    will-change: opacity;
                }
            }

            option {
                background: white;
            }

            .newSpaceBetween {
                display: grid;
                justify-content: center;
            }


            @media only screen and (max-width:765px) {
                .modal-desktop-show {
                    display: none
                }

                .modal-mobile-show {
                    display: block
                }

                .countrySpace .d-space a {
                    pointer-events: none !important;
                }

                .countrySpace .d-space {
                    padding: 0px 0 15px !important;
                    width: 100% !important;
                }

                .countrySpace .d-space img {
                    width: 48px;
                    height: 25px;
                }

                .countrySearchInput {
                    border: none !important;
                }

                .countrySelected {
                    padding: 0;
                }

                #countrySelected img {
                    width: 48px;
                    height: 25px;
                }

                .inputBorderInternational {
                    width: 100%;
                    background: #ffffff;
                    border: 1px solid #cacaca;
                    display: flex;
                    line-height: 51px;
                    height: 54px !important;
                    position: relative;
                    border-radius: 4px 4px 0px 0px;

                }

                .contryImg {
                    display: inline-block;
                    vertical-align: middle;
                }

                .contryText {
                    vertical-align: middle;
                    display: inline-block;
                    padding-left: 12px;
                    font-size: 15px;
                    color: #555555;
                    font-weight: 600;
                }
            }

            .countryShowHide {
                display: none;
            }

            .countryBorder {
                border-bottom: 1px solid #cacaca;
                margin-bottom: 14px;
            }

            @media only screen and (min-width: 375px) {
                #set-left-arrow-width {
                    width: 20px !important;
                    font-size: 30px !important;
                }
            }

            .set-outside-border {
                height: auto;
                padding: 24px 24px;
                border: 1px solid #cacaca;
                border-top: none;
                margin: 0px 24px 22px;
                background: #FAFAFA 0% 0% no-repeat padding-box;
                border-radius: 0px 0px 4px 4px;
            }

            .countryBorder {
                border-bottom: 1px solid #cacaca;
                margin-bottom: 14px;
            }

            @media only screen and (max-width: 765px) {
                .d-space {
                    padding: 0px 0 12px !important;
                    width: 100% !important;
                }

                .d-space img {
                    width: 48px;
                    height: 25px;
                }
            }

            .user-name__saved-add_span {
                font-size: 18px;
            }

            @media screen and (min-width: 768px) {
                .countrylist-modal-mobile {
                    display: none;
                }
            }
        </style>
        
        </div>
        </div>

        <input type="hidden" id="serverCurrentHour" value="17" />
        <input type="hidden" id="serverCurrentMinute" value="12" />
        <input type="hidden" id="serverCurrentSecond" value="20" />

    

        <script type="text/javascript">
            var webApp = {
                getCategoryProducts: "/category-items/list",
                getRecentlyViewProducts: "/recently-view/list",
            };
        </script>
        <input type="hidden" id="ntCustEmail" value="">
        <input type="hidden" id="ntCustId" value="">
        <script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const answer = button.nextElementSibling;

      document.querySelectorAll('.faq-answer').forEach(a => {
        if (a !== answer) a.style.display = 'none';
      });

      answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
  });
</script>

    </main>
@endsection
