@extends('layouts.master')

@section('title', 'Search Results')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')

@section('content')
    <div class="content-shop left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar-shop sidebar-left">
                        <div class="widget widget-filter">

                            <div class="box-filter category-filter">
                                <h2 class="widget-title">Categories</h2>
                                <ul>
                                    <li><a href="#">BIDI</a></li>
                                    <li><a href="#">CWDM</a></li>
                                    <li><a href="#">DWDM</a></li>
                                    <li><a href="#">EX</a></li>
                                    <li><a href="#">FX</a></li>
                                    <li><a href="#">LW</a></li>
                                    <li><a href="#">ONS</a></li>
                                    <li><a href="#">OC</a></li>
                                    <li><a href="#">ONS</a></li>
                                    <li><a href="#">SX</a></li>
                                    <li><a href="#">T</a></li>
                                    <li><a href="#">ZX</a></li>
                                    <li><a href="#">ZXL</a></li>
                                    <li><a href="#">SW</a></li>
                                </ul>
                            </div>

                            <!-- End Categories -->
                            <div class="box-filter brands-filter">
                                <h2 class="widget-title">Compatible Brands</h2>
                                <ul>
                                    <li><a href="#">3COM</a></li>
                                    <li><a href="#">ACCCEDIAN</a></li>
                                    <li><a href="#">ADTRAN</a></li>
                                    <li><a href="#">ADVA</a></li>
                                    <li><a href="#">ALCATEL</a></li>
                                </ul>
                            </div>

                            <!-- End Distance -->
                            <div class="box-filter distance-filter">
                                <h2 class="widget-title">Distance</h2>
                                <ul>
                                    <li><a href="#">80 - 100m</a></li>
                                    <li><a href="#">1 - 5km</a></li>
                                    <li><a href="#">10 - 20km</a></li>
                                    <li><a href="#">25 - 40km</a></li>
                                    <li><a href="#">100 - 120km</a></li>
                                </ul>
                            </div>
                            <!-- End Price -->

                        </div>
                        <!-- End Filter -->
                    </div>
                    <!-- End Sidebar Shop -->
                </div>

                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="main-content-shop">
                        <div class="shop-tab-product">
                            <div class="shop-tab-title">
                                <?php if(isset($keyword)) { ?>
                                <h2>Search Result for {{ $keyword }}</h2>
                                <?php } else { ?>
                                <h2>All Products</h2>
                                <?php } ?>
                            </div>
                            <div class="tab-content">
                                <ul class="row product-grid auto-clear">
                                    @foreach($results as $result)
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="product-thumb">
                                                    <?php if($result['Product Type'] == 'Optical Transceiver') { ?>
                                                        <a href="{{ url('products/transceivers/' . $result['id']) }}">
                                                    <?php } else { ?>
                                                        <a href="{{ url('products/cables/' . $result['id']) }}">
                                                    <?php } ?>
                                                        <?php
                                                            if($result['Product Type'] == 'Optical Transceiver'){
                                                                $img = str_replace('+', '_plus', 'images/products/hoishi_' . trim(strtolower($result['Form Factor'])) . '.jpg');
                                                            } else {
                                                                if($result['Level 2 Cable Type'] == 'DIRECT ATTACH CABLES') {
                                                                    $img = 'images/products/hoishi_dac.jpg';
                                                                } else {
                                                                    $img = 'images/products/hoishi_aoc.jpg';
                                                                }
                                                            }
                                                        ?>
                                                        <img class="first-thumb" alt="" src="{{ asset($img) }}">
                                                    </a>

                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title-product"><a href="#">{{ $result['Model'] }}</a></h3>
                                                    <div class="contact-product">
                                                        <a href="{{ url('contact') }}" class="btn btn-price btn-sm" >Product Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    <?php if ( sizeof($results) == 0 ) { ?>
                                        <div class="col-md-9 col-sm-8 col-xs-12">
                                            <div class="main-content-shop">
                                                <div class="shop-tab-product">
                                                    <div class="tab-content">
                                                        <div class="msg-wrapper-norec">
                                                            <h3 class="mgs-norec-title">Sorry, no results were found</h3>
                                                            <ul class="mgs-norec-body">
                                                                <li>Check your spelling.</li>
                                                                <li>Check the product no is correct.</li>
                                                                <li><a href="{{ url('contact') }}">Contact us</a>, we will help you to find it.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- End Sort Pagibar -->
                                                    </div>
                                                </div>
                                            <!-- End Main Content Shop -->
                                        </div>
                                    <?php } ?>
                                </ul>
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                                        {{--<div class="sort-pagi-bar">--}}
                                            {{--<div class="product-pagi-nav">--}}
                                                {{--<a href="#" class="active">1</a>--}}
                                                {{--<a href="#">2</a>--}}
                                                {{--<a href="#">3</a>--}}
                                                {{--<a href="#" class="next">next <i class="fa fa-angle-double-right"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <!-- End Sort Pagibar -->
                            </div>
                        </div>
                        <!-- End Shop Tab -->
                    </div>
                    <!-- End Main Content Shop -->
                </div>

            </div>
        </div>
    </div>
@endsection