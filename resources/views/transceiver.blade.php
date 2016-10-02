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
                                            <?php $img = str_replace('+', '_plus', 'images/products/hoishi_' . trim(strtolower($transceiver['Form Factor'])) . '.jpg'); ?>
                                            <img src="{{ asset($img) }}" alt=""/>
                                        </div>

                                    </div>
                                    <!-- End Gallery -->
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $transceiver['Model'] }}</h2>
                                        <div class="product-code">
                                            <label>Product Code </label> <span>3CSFP97-A</span>
                                        </div>
                                        <div class="product-code">
                                            <label>Availability </label> <span>Next Day Shipping</span>
                                        </div>
                                        <div class="product-code">
                                            <label>Shipping </label> <span>Calculated on Order Volume</span>
                                        </div>
                                        <div class="product-code">
                                            <label>Price </label> <a class="btn btn-price btn-sm" href="{{ url('contact') }}">Contact Us</a>
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
                                                <p>{{ $transceiver['Form Factor'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Port Interface</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Interface'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Interface Details</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Interface Details'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Data Rate</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Speed'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Wavelength</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Wavelength'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Distance</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Reach'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Temperature Range</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Temperature'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Digital Diagnostics (DDM/DOM)</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['DOM / DDM Monitoring'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Connection</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Connection'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Hot Swappable</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Interchangeable'] }}</p>
                                            </div>
                                        </div>
                                        <div class="table-content-tab-detail">
                                            <div class="title-table-detail"><span>Dimensions</span></div>
                                            <div class="info-table-detail">
                                                <p>{{ $transceiver['Size'] }}</p>
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