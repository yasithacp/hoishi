@extends('layouts.master')

@section('title', 'News')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')
@section('metadata')
    @parent

    <meta name="description" content="Keep up to date with the latest News">
    <meta name="keywords" content="Optical Transceiver, Manufacturer, Distributor, Fibre Optic Transceiver, Compatible, Industry News, Breaking News, Fibre Optics, Market News">
@endsection

@section('content')
    <div class="inner_content-shop">
        <div class="banner-slider10 simple-owl-slider">
            <div class="wrap-item">
                <div class="item-banner10">
                    <div class="banner-thumb">
                        <a href="#"><img src="images/slide/slider_about_1.jpg" alt="" /></a>
                    </div>
                    <div class="banner-info">
                        <div class="container">
                            <div class="banner-content-text">
                                <div class="inner-content-text">
                                    <h2>100% compatibility, performance and quality guaranteed </h2>
                                    <h4>Stringently tested in our own labs with target switches and routers from all major OEMs</h4>
                                    <a href="product_information" class="shopnow">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-content-shop">
                        <h2 class="title-shop-page">News</h2>
                        <div class="blog-post-info">
                            <h3 class="post-title"><a href="#">Lorem Khaled Ipsum  major key to success</a></h3>
                            <p class="desc">Porem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam eiusmod tempor incid idunt ut labore. Porem ipsum dolor sit ame.</p>
                            <a href="#" class="post-readmore">Read More</a>
                        </div>

                        <div class="blog-post-info">
                            <h3 class="post-title"><a href="#">Lorem Khaled Ipsum  major key to success</a></h3>
                            <p class="desc">Porem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam eiusmod tempor incid idunt ut labore. Porem ipsum dolor sit ame.</p>
                            <a href="#" class="post-readmore">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection