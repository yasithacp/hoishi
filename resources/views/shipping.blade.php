@extends('layouts.master')

@section('title', 'Shipping')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')
@section('metadata')
    @parent

    <meta name="description" content="We offer free shipping on selected orders with immediate dispatch and tracking">
    <meta name="keywords" content="Optical Transceiver, Manufacturer, Fibre Optic Transceiver, Compatible, Free Shipping, Fast, Global, Next Business Day, International, From Factory, Direct, Express">
@endsection

@section('content')
    <div class="inner_content-shop">
        <div class="banner-slider10 simple-owl-slider">
            <div class="wrap-item">
                <div class="item-banner10">
                    <div class="banner-thumb">
                        <a href="#"><img src="images/slide/banner_shipping.jpg" alt="" /></a>
                    </div>
                    <div class="banner-info">
                        <div class="container">
                            <div class="banner-content-text">
                                <div class="inner-content-text">
                                    <h2>Worldwide free shipping on selected orders</h2>
                                    <h4>Serviced by FedEx, UPS, DHL, TNT and EMS </h4>
                                    <a href="product_list" class="shopnow">View Products</a>
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
                        <h2 class="title-shop-page">Delivery & Shipping</h2>
                        <p class="des-shop-page">Delivery time is estimated using our propriety method, which is based on the buyer’s proximity to the item location, the shipping service selected and the sellers shipping history. Delivery times may vary, especially during peak periods. Generally, shipping time is 1-5 business days after the receipt of the official purchase order. Courier tracking will be provided.</p>
                        <h3 class="sub-title-h3">Credit Account</h3>
                        <p class="des-shop-page">We offer 30-day terms to all customers (subject to credit checks)</p>
                        <h3 class="sub-title-h3">Free Shipping</h3>
                        <p class="des-shop-page">We offer worldwide free shipping on selected orders</p>
                        <h3 class="sub-title-h3">Shipping Options</h3>
                        <p class="des-shop-page">We drop ship worldwide to virtually any address serviced by FedEx, UPS, DHL, TNT and EMS. Even with international shipping fees and tariffs. Import duties are the responsibility of the customer.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
