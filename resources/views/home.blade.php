@extends('layouts.master')

@section('title', 'Optical and Copper Transceivers')
@section('dropdown_class', 'category-dropdown')
@section('metadata')
    @parent

    <meta name="description" content="Hoishi is an industry leading manufacturer and distributor of optical and copper transceivers and cable assemblies">
    <meta name="keywords" content="Optical Transceivers, Manufacturer, Distributor, Fibre Optic Transceiver, Compatible, Cisco, SFP, GBIC, QSFP, CFP, XFP, X2, XENPAK, CSFP, AOC, DAC">
@endsection

@section('facebook_feed')
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection

@section('content')
    <div class="banner-slider-mobile"> <img src="images/slide/slider-mobile.jpg"> </div>
    <div class="banner-slider">
        <div class="rev-slider">
            <ul>
                <li class="slide1" data-transition="slide">
                    <img src="images/slide/bg-s1-01.png" alt="" />
                    <div class="tp-caption lfl" data-x="320" data-y="40" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><h2 class="title-c1">4 Channel 40 Gigabit QSFP+</h2></div>
                    <div class="tp-caption lfl" data-x="320" data-y="120" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><p class="dec-c1">QSFP-40G-SR-HO supports link lengths of 100M and 150M on OM3 and OM4 MM fiber cables</p></div>
                    <div class="tp-caption lfl" data-x="320" data-y="230" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><a href="product_list" class="item2 btn-bgc1" href="#">Learn More</a></div>
                    <div class="tp-caption lfb" data-x="right" data-y="bottom" data-start="2000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:0;"><img src="images/slide/s1-01.png" alt="" /></div>
                </li>
                <li class="slide2" data-transition="slide">
                    <img src="images/slide/bg-s1-02.png" alt="" />
                    <div class="tp-caption lfl" data-x="320" data-y="40" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><h2 class="title-c2">Complete range of Juniper compliant DAC</h2></div>
                    <div class="tp-caption lfl" data-x="320" data-y="120" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><p class="dec-c2">QFX-QSFP-DAC-3M-HO - Direct Attached - Passive</p></div>
                    <div class="tp-caption lfl" data-x="320" data-y="230" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><a href="product_list" class="item2 btn-bgc2" href="#">Learn More</a></div>
                    <div class="tp-caption lfb" data-x="right" data-y="bottom" data-start="2000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:0;"><img src="images/slide/s1-02.png" alt="" /></div>
                </li>
                <li class="slide3" data-transition="slide">
                    <img src="images/slide/bg-s1-03.png" alt="" />
                    <div class="tp-caption lfl" data-x="320" data-y="40" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><h2 class="title-c3">Reliable, Compatible, Affordable</h2></div>
                    <div class="tp-caption lfl" data-x="320" data-y="120" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><p class="dec-c3">Comprehensive portfolio of HP compatible products with unique propriety coding</p></div>
                    <div class="tp-caption lfl" data-x="320" data-y="230" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><a href="product_list" class="item2 btn-bgc3" href="#">Learn More</a></div>
                    <div class="tp-caption lfb" data-x="right" data-y="bottom" data-start="2000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:0;"><img src="images/slide/s1-03.png" alt="" /></div>
                </li>
                <li class="slide4" data-transition="slide">
                    <img src="images/slide/bg-s1-04.png" alt="" />
                    <div class="tp-caption lfl" data-x="320" data-y="40" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><h2 class="title-c4">SFP+ to SFP+ Cisco Active Optical Cables</h2></div>
                    <div class="tp-caption lfl" data-x="320" data-y="120" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><p class="dec-c2">100% Cisco compatible AOC SFP-10G-AOC3M</p></div>
                    <div class="tp-caption lfl" data-x="320" data-y="230" data-start="1000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:1;"><a href="product_list" class="item2 btn-bgc4" href="#">Learn More</a></div>
                    <div class="tp-caption lfb" data-x="right" data-y="bottom" data-start="2000" data-speed="1000" data-easing="easeInOutQuint" data-endspeed="300" style="z-index:0;"><img src="images/slide/s1-04.png" alt="" /></div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Banner Slider -->
    <div class="main-content-home">
        <div class="container">
            <div class="privacy-shipping privacy-shipping12">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item-privacy-shipping" href="warranty">
                            <ul>
                                <li><i class="fa fa-tags"></i></li>
                                <li>
                                    <h2>Warranty</h2>
                                    <span>3yr limited lifetime</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item-privacy-shipping" href="shipping">
                            <ul>
                                <li><i class="fa fa-plane"></i></li>
                                <li>
                                    <h2>FREE SHIPPING</h2>
                                    <span>on selected orders</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item-privacy-shipping" href="product_overview">
                            <ul>
                                <li><i class="fa fa-usd"></i></li>
                                <li>
                                    <h2>Affordable</h2>
                                    <span>up to 90% off</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <a class="item-privacy-shipping" href="product_list">
                            <ul>
                                <li><i class="fa fa-certificate"></i></li>
                                <li>
                                    <h2>Compatibility</h2>
                                    <span>guaranteed</span>
                                </li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Privacy Shipping -->
            <div class="box-adv-col1">
                <div class="item-adv-simple">
                    <a href="product_list"><img src="images/home/ads_home.jpg" alt=""></a>
                </div>
            </div>
            <!-- End Box Adv Col1 -->
            <div class="bottom-home2 bottom-home12">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-bottom-home2">
                            <h2>Latest News</h2>
                            <div class="fb-page" data-href="https://www.facebook.com/HoishiLightSpeedData/" data-tabs="timeline" data-width="370" data-height="238" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/HoishiLightSpeedData/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HoishiLightSpeedData/">Hoishi</a></blockquote></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-bottom-home2 box-testimo">
                            <h2>Case Studies</h2>
                            <div class="testimo-slider rect-arrow slider-home2">
                                <div class="wrap-item">
                                    <div class="item-testimo">
                                        <div class="author-testimo">
                                            <div class="author-test-link">
                                                <a href="case_studies"><img src="images/home/case_study_1.jpg" alt="" /></a>
                                            </div>
                                            <div class="author-test-info">
                                                <h3>Value Added Coding</h3>
                                                <a href="case_studies">Read more</a>
                                            </div>
                                        </div>
                                        <div class="author-testimo">
                                            <div class="author-test-link">
                                                <a href="case_studies"><img src="images/home/case_study_2.jpg" alt="" /></a>
                                            </div>
                                            <div class="author-test-info">
                                                <h3>Expert Support</h3>
                                                <a href="case_studies">Read more</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <a href="case_studies" class="viewall">View All</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="box-bottom-home2">
                            <div class="box-newsletter">
                                <h2>Sign up for newsletter</h2>
                                <p>Sign up to newsletter to learn about our new products and latest news.</p>
                                {{ Form::open(array('action'=>'ProductController@subscribe', 'method' => 'post', 'class' => 'smart-search-form')) }}
                                    <input type="text"  name="email" placeholder="Enter your e-mail "/>
                                    <input type="submit" value="Subscribe" />
                                {{ Form::close() }}
                            </div>
                            <div class="social-home2 social-network">
                                <h2>Connect with us</h2>
                                <ul>
                                    <li><a href="https://www.facebook.com/HoishiLightSpeedData/" target="_blank"><img alt="" src="images/home/s1.png"></a></li>
                                    <li><a href="https://twitter.com/Hoishi_Ltd" target="_blank"><img alt="" src="images/home/s2.png"></a></li>
                                    <li><a href="https://www.linkedin.com/company/hoishi" target="_blank"><img alt="" src="images/home/s3.png"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bottom Home 2 -->
        </div>
    </div>
@endsection