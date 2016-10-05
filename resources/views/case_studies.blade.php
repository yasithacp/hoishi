@extends('layouts.master')

@section('title', 'Case Studies')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')
@section('metadata')
    @parent

    <meta name="description" content="Quality, exceptional service and one of the broadest ranges of stock in the industry">
    <meta name="keywords" content="Optical Transceivers, Manufacturer, Distributor, Fibre Optic Transceiver, Compatible, Leading, Innovative, Influential, Independent, Tier One, Years Experience">
@endsection

@section('content')
    <div class="inner_content-shop">
        <div class="banner-slider10 simple-owl-slider">
            <div class="wrap-item">
                <div class="item-banner10">
                    <div class="banner-thumb">
                        <a href="#"><img src="images/slide/banner_case_studies.jpg" alt="" /></a>
                    </div>
                    <div class="banner-info">
                        <div class="container">
                            <div class="banner-content-text">
                                <div class="inner-content-text">
                                    <h2>Integrity, Leadership, People, Customers</h2>
                                    <h4>Our objectives provide us with guidelines by which we achieve meaningful results</h4>
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
                        <h2 class="title-shop-page">Case Studies</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="cs-body">
                        <h3 class="case-title">Case Study 1 – Value Added Coding</h3>
                        <p class="des-shop-page">A large European systems integrator approached us for a customized solution to re-code compatible vendor specific transceivers that they had been procuring through Hoishi and other sources. They were becoming increasingly frustrated with some OEM switch vendors locking ports when 3rd party optics were sourced and implemented.</p>
                        <p class="des-shop-page">Sometimes having to wait long periods of time to receive small quantities of expensive optics with the same specification as those that they currently had in stock or had used in redundant hardware. Our solution was to provide them with the necessary hardware and software to re-code small quantities of standard GBIC, SFP, SFP+, Xenpak to their own specific requirement. This eliminated the need to buy costly vendor specific parts, shortened the lead-time and enabled them to exchange parts as equipment was upgraded or added to. The result, a significant cost saving, easier stock management and ultimately better service to the end user.</p>
                        <p class="des-shop-page">
                        <ul class="cs-list">
                            <li>Troubleshoot transceiver compatibility at customer site</li>
                            <li>Shorten the product lead-time</li>
                            <li>Maximize product stock at customer site</li>
                            <li>Meet customer OEM requests</li>
                        </ul>
                        </p>                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="cs-body">
                        <h3 class="case-title">Case Study 2 – Expert Support</h3>
                        <p class="des-shop-page">The components of X2 DWDM are short in the market place and many factories do not produce them any more, so the lead-time is very long, sometimes months and the price is high.</p>
                        <p class="des-shop-page">Hoishi’s solution was to recommend to the end-user to use X2 to SFP+ converter for the requirement. This way the customer can use the more common SFP+ format that many companies hold the components for.  Meaning a fast turn around and lower total cost.</p>
                        <p class="des-shop-page">DWDM-10GSFP-XXX is approximately 4x the price of the X2 to SFP+ convertor. Lead-time is within 3-4 days.</p>
                        <p class="des-shop-page">X2 to SFP+ converter + DWDM-10GSFP-XXXX compared with DWDM-X2-XXXX not only yields significant cost saving but also allows easier upgrade options as the SFP+ modules can be used in alternate switches in the future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection