@extends('layouts.master')

@section('title', 'Product Details')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')

@section('content')
    <div class="content-shop left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 main-content">
                    <div class="main-content-shop">
                        <div class="main-detail">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <div class="mid">
                                            <?php
                                            if($cable['Level 2 Cable Type'] == 'DIRECT ATTACH CABLES') {
                                                $img = 'images/products/hoishi_dac.jpg';
                                            } else {
                                                $img = 'images/products/hoishi_aoc.jpg';
                                            }
                                            ?>
                                            <img src="{{ asset($img) }}" alt=""/>
                                        </div>

                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $cable['Model'] }}</h2>
                                        <div class="product-code">
                                            <label>SKU </label> <span>3CSFP97-A</span>
                                        </div>
                                        <div class="product-code">
                                            <label>Availability </label> <span>Same Day Shipping</span>
                                        </div>
                                        <div class="product-code">
                                            <label>Shipping </label> <span>Calculated at Checkout</span>
                                        </div>
                                        <div class="product-code">
                                            <label>Price </label> <a class="btn btn-price btn-sm" href="{{ url('contact') }}">Ask for Price</a>
                                        </div>
                                        <!-- End Attr Info -->
                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                        </div>
                        <!-- End Main Detail -->
                        <div class="tab-detail">
                            <div class="title-tab-detail">
                                <ul role="tablist">
                                    <li class="active"><a href="#details" data-toggle="tab">Product Details </a></li>
                                </ul>
                            </div>
                            <div class="content-tab-detail">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="details">
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Form Factor</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $cable['Form'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Cable Type</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $cable['Level 2 Cable Type'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Specification </span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $cable['Specification'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Data Sheet</span></div>
                                            <div class="info-table-detail">
                                                <p><a class="btn btn-price btn-sm" href="{{ url('contact') }}">Contact Us</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Detail -->
                    </div>
                    <!-- End Main Content Shop -->
                </div>
            </div>
        </div>
    </div>
@endsection