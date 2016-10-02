@extends('layouts.master')

@section('title', 'Product List')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')
@section('metadata')
    @parent

    <meta name="description" content="Transceivers range from 100BASE-FX to 100Gb and cover optical and copper transceivers such as GBIC, SFP, Xenpak, X2, XFP, SFP+, QSFP+ and CFP. Cable Assemblies include AOC and DAC">
    <meta name="keywords" content="Optical Transceiver, Manufacturer, Distributor, Fibre Optic Transceiver, Compatible, Cisco, SFP, GBIC, QSFP, CFP, XFP, X2, XENPAK, CSFP, AOC, DAC, Active Optical Cable, Cable Assemblies">
@endsection

@section('content')
    <div class="inner-content-shop">
        <div class="banner-slider10 simple-owl-slider">
            <div class="wrap-item">
                <div class="item-banner10">
                    <div class="banner-thumb">
                        <a href="#"><img src="{{ URL::asset('images/slide/banner_product_list.jpg') }}" alt="" /></a>
                    </div>
                    <div class="banner-info">
                        <div class="container">
                            <div class="banner-content-text">
                                <div class="inner-content-text">
                                    <h2>Global Network, Global Connectivity, Global Reach</h2>
                                    <h4>Fully compliant to TUE, CE, FCC, UL and RoHS standards</h4>
                                    <a href="{{ url('product_information') }}" class="shopnow">Learn More</a>
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
                        <div class="shop-tab-product">
                            <div class="box-shop-page">
                                <h2 class="title-shop-page">Optic Transceivers</h2>
                                <p class="des-shop-page">Transceivers range from 100Base-FX to 100Gb CFP products and cover optical and copper transceivers such as GBIC, SFP, SFP+, X2, XENPAK, XFP, 100Gb CFP and QSFP+. All transceivers are standards-based and comply with MSA.</p>
                            </div>
                            <div class="tab-content">
                                <ul class="row product-grid auto-clear">
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/CFP') }}">
                                                    <img class="first-thumb" alt="hoishi CFP Modules" src="{{ URL::asset('images/products/hoishi_cfp.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">CFP Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/CSFP') }}">
                                                    <img class="first-thumb" alt="hoishi CSFP Modules" src="{{ URL::asset('images/products/hoishi_csfp.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">CSFP Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/GBIC') }}">
                                                    <img class="first-thumb" alt="hoishi GBIC Modules" src="{{ URL::asset('images/products/hoishi_gbic.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">GBIC Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/QSFP+') }}">
                                                    <img class="first-thumb" alt="hoishi QSFP+ Modules" src="{{ URL::asset('images/products/hoishi_qsfp_plus.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">QSFP+ Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/QSFP28') }}">
                                                    <img class="first-thumb" alt="hoishi QSFP28 Modules" src="{{ URL::asset('images/products/hoishi_qsfp28.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">QSFP28 Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/QSFP100') }}">
                                                    <img class="first-thumb" alt="hoishi QSFP100 Modules" src="{{ URL::asset('images/products/hoishi_qsfp100.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">QSFP100 Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/SFP') }}">
                                                    <img class="first-thumb" alt="hoishi SFP Modules" src="{{ URL::asset('images/products/hoishi_sfp.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">SFP Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/SFP+') }}">
                                                    <img class="first-thumb" alt="hoishi SFP+ Modules" src="{{ URL::asset('images/products/hoishi_sfp_plus.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">SFP+ Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/X2') }}">
                                                    <img class="first-thumb" alt="hoishi X2 Modules" src="{{ URL::asset('images/products/hoishi_x2.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">X2 Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/XENPAK') }}">
                                                    <img class="first-thumb" alt="hoishi XENPAK Modules" src="{{ URL::asset('images/products/hoishi_xenpak.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">XENPAK Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('products/XFP') }}">
                                                    <img class="first-thumb" alt="hoishi XFP Modules" src="{{ URL::asset('images/products/hoishi_xfp.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">XFP Modules</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-content-shop">
                        <div class="shop-tab-product">
                            <div class="box-shop-page">
                                <h2 class="title-shop-page">Cable Assemblies</h2>
                                <p class="des-shop-page">There are two types of cable assembly, Direct Attached Cable (DAC) and Active Optical Cable (AOC). DAC is used to connect one mobility access switch with another when forming a stack which can either be passive and active. AOC is an alternative to optical transceivers, which eliminate the interface between transceiver module and cable.</p>
                            </div>
                            <div class="tab-content">
                                <ul class="row product-grid auto-clear">
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('cables/DIRECT ATTACH CABLES') }}">
                                                    <img class="first-thumb" alt="" src="{{ URL::asset('images/products/hoishi_dac.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">DAC</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a href="{{ url('cables/ACTIVE OPTICAL CABLES') }}">
                                                    <img class="first-thumb" alt="" src="{{ URL::asset('images/products/hoishi_aoc.jpg') }}">
                                                </a>

                                            </div>
                                            <div class="product-info">
                                                <h3 class="title-product"><a href="#">AOC</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Shop Tab -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="inner-content-shop">
                        <div class="shop-tab-product">
                            <div class="box-shop-page">
                                <h2 class="title-shop-page">Compatible Brands</h2>
                                <p class="des-shop-page">Vendor branded optical transceivers & cables are expensive and are not made by the vendors themselves; instead they use contract manufacturers to build, assemble and package industry standard parts for them. Our optical transceivers and cables are 100% compatible with virtually every hardware manufacturer including Cisco, 3Com, HP, Juniper, Extreme, Nortel and Huawei to name a few.</p>
                            </div>
                            <div class="tab-content">
                                <ul class="row product-grid auto-clear">
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="3COM" src="{{ URL::asset('images/brands/3com.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="alcatel lucent" src="{{ URL::asset('images/brands/alcatel-lucent.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="allied telesis" src="{{ URL::asset('images/brands/allied-telesis.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="avaya" src="{{ URL::asset('images/brands/avaya.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="brocade" src="{{ URL::asset('images/brands/brocade.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="cisco" src="{{ URL::asset('images/brands/cisco.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="d-link" src="{{ URL::asset('images/brands/d-link.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="dell" src="{{ URL::asset('images/brands/dell.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="enterasys" src="{{ URL::asset('images/brands/enterasys.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="extreme" src="{{ URL::asset('images/brands/extreme.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="force10" src="{{ URL::asset('images/brands/force10.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="foundry networks" src="{{ URL::asset('images/brands/foundry.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="h3c" src="{{ URL::asset('images/brands/h3c.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="hp" src="{{ URL::asset('images/brands/hp.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="huawei" src="{{ URL::asset('images/brands/huawei.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="intel" src="{{ URL::asset('images/brands/intel.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="juniper" src="{{ URL::asset('images/brands/juniper.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="linksys" src="{{ URL::asset('images/brands/linksys.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="netgear" src="{{ URL::asset('images/brands/netgear.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="nortel networks" src="{{ URL::asset('images/brands/nortel.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="smc networks" src="{{ URL::asset('images/brands/smc.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="sun" src="{{ URL::asset('images/brands/sun.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="zte" src="{{ URL::asset('images/brands/zte.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                        <div class="item-product">
                                            <div class="product-thumb">
                                                <a>
                                                    <img class="first-thumb" alt="zyxel" src="{{ URL::asset('images/brands/zyxel.jpg') }}">
                                                </a>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Shop Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection