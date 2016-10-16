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

                            <div id="modules" class="box-filter category-filter">
                                <h2 class="widget-title">Products</h2>
                            </div>

                            <!-- End Categories -->
                            <div id="categories" class="box-filter brands-filter">
                                <h2 class="widget-title">Categories</h2>
                            </div>

                            <!-- End Distance -->
                            <div id="brands" class="box-filter distance-filter">
                                <h2 class="widget-title">Compatible Brands</h2>
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
                                <ul id="items" class="row product-grid auto-clear">
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
                                                        <?php if($result['Product Type'] == 'Optical Transceiver') { ?>
                                                            <a href="{{ url('products/transceivers/' . $result['id']) }}" class="btn btn-price btn-sm" >Product Details</a>
                                                        <?php } else { ?>
                                                            <a href="{{ url('products/cables/' . $result['id']) }}" class="btn btn-price btn-sm" >Product Details</a>
                                                        <?php } ?>
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
                                                            <h3 class="mgs-norec-title">No results were found</h3>
                                                            <ul class="mgs-norec-body">
                                                                <li>Check your spelling.</li>
                                                                <li>Check the product no is correct.</li>
                                                                <li><a href="{{ url('contact') }}">Contact us</a>, we will help you find it.
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
    {{ Form::open(array('action'=>'ProductController@searchProducts', 'method' => 'post', 'id' => 'filter_form')) }}
        <input type="hidden" id="keyword" name="search"/>
        <input type="hidden" id="filter_modules" name="filter_modules"/>
        <input type="hidden" id="filter_categories" name="filter_categories"/>
        <input type="hidden" id="filter_brands" name="filter_brands"/>
    {{ Form::close() }}
@endsection

@section('custom_scripts')
    <script>
        $( document ).ready(function() {

            var keyword = '<?php echo $keyword; ?>';
            $('#search').val(keyword);
            var modules = '<?php echo json_encode($modules); ?>';
            var filter_modules = <?php echo (isset($filter_modules) && sizeof($filter_modules) > 0) ? json_encode($filter_modules) : json_encode(array()); ?>;
            var categories = '<?php echo json_encode($categories); ?>';
            var filter_categories = '<?php echo (isset($filter_categories) && sizeof($filter_categories) > 0) ? json_encode($filter_categories) : json_encode(array()); ?>';
            var brands = '<?php echo json_encode($brands); ?>';
            var filter_brands = '<?php echo (isset($filter_brands) && sizeof($filter_brands) > 0) ? json_encode($filter_brands) : json_encode(array()); ?>';


            var modules = JSON.parse(modules);
            var modules_html = '<ul>';
            console.log(filter_modules);
            for (var key in modules) {

                if(modules[key]['Product Type'] == 'Optical Transceiver') {
                    console.log(filter_modules.indexOf(modules[key]['Level 2 Form Factor']) );
                    if(filter_modules.indexOf(modules[key]['Level 2 Form Factor']) != -1) {
                        modules_html += '<li><a class="filters modules active">' + modules[key]['Level 2 Form Factor'] + '</a></li>';
                    } else {
                        modules_html += '<li><a class="filters modules">' + modules[key]['Level 2 Form Factor']+ '</a></li>';
                    }
                } else {
                    if(filter_modules.indexOf(modules[key]['Level 2 Cable Type']) != -1) {
                        modules_html += '<li><a class="filters modules active">' + modules[key]['Level 2 Cable Type'] + '</a></li>';
                    } else {
                        modules_html += '<li><a class="filters modules">' + modules[key]['Level 2 Cable Type']+ '</a></li>';
                    }
                }
            }
            modules_html += '</ul>';
            $('#modules').append(modules_html);

            var categories = JSON.parse(categories);
            var categories_html = '<ul>';
            for (var key in categories) {
                if(categories[key]['Product Type'] == 'Optical Transceiver') {
                    if(filter_categories.indexOf(categories[key]['Level 3 Type of Standard']) != -1) {
                        categories_html += '<li><a class="filters categories active">' + categories[key]['Level 3 Type of Standard'] + '</a></li>';
                    } else {
                        categories_html += '<li><a class="filters categories">' + categories[key]['Level 3 Type of Standard']+ '</a></li>';
                    }
                } else {
                    if(filter_categories.indexOf(categories[key]['Form']) != -1) {
                        categories_html += '<li><a class="filters categories active">' + categories[key]['Form'] + '</a></li>';
                    } else {
                        categories_html += '<li><a class="filters categories">' + categories[key]['Form']+ '</a></li>';
                    }
                }
            }
            categories_html += '</ul>';
            $('#categories').append(categories_html);

            var brands = JSON.parse(brands);
            var brands_html = '<ul>';
            var unique_brands = [];
            for (var key in brands) {
                if (brands[key]['Product Type'] == 'Optical Transceiver') {
                    if(unique_brands.indexOf(brands[key]['Compatible Brand']) == -1) {
                        if (filter_brands.indexOf(brands[key]['Compatible Brand']) != -1) {
                            brands_html += '<li><a class="filters brands active">' + brands[key]['Compatible Brand'] + '</a></li>';
                        } else {
                            brands_html += '<li><a class="filters brands">' + brands[key]['Compatible Brand'] + '</a></li>';
                        }
                        unique_brands.push(brands[key]['Compatible Brand']);
                    }
                } else {
                    if(unique_brands.indexOf(brands[key]['Compatible Brands']) == -1) {
                        if (filter_brands.indexOf(brands[key]['Compatible Brands']) != -1) {
                            brands_html += '<li><a class="filters brands active">' + brands[key]['Compatible Brands'] + '</a></li>';
                        } else {
                            brands_html += '<li><a class="filters brands">' + brands[key]['Compatible Brands'] + '</a></li>';
                        }
                        unique_brands.push(brands[key]['Compatible Brands']);
                    }
                }
            }

            brands_html += '</ul>';
            $('#brands').append(brands_html);

            $('.filters').click(function () {
                if ( $( this ).hasClass( "active" ) ) {
                    $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }

                var modules = [];
                $('.modules').each(function () {
                    if ( $( this ).hasClass( "active" ) ) {
                        modules.push($( this ).text());
                    }
                });

                var categories = [];
                $('.categories').each(function () {
                    if ( $( this ).hasClass( "active" ) ) {
                        categories.push($( this ).text());
                    }
                });

                var brands = [];
                $('.brands').each(function () {
                    if ( $( this ).hasClass( "active" ) ) {
                        brands.push($( this ).text());
                    }
                });

                $('#keyword').val(keyword);
                $('#filter_modules').val(modules);
                $('#filter_categories').val(categories);
                $('#filter_brands').val(brands);

                $('#filter_form').submit();

            });

            $('#items').paginate({
                perPage: 24,
                useHashLocation: false,
                paginatePosition:   ['bottom']
            });

        });
    </script>
@endsection