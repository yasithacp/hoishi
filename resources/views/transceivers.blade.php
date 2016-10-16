@extends('layouts.master')

@section('title', 'Optical Transceivers')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')

@section('content')
    <div class="content-shop left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar-shop sidebar-left">
                        <div class="widget widget-filter">

                            <div id="categories" class="box-filter category-filter">
                                <h2 class="widget-title">Categories</h2>
                            </div>

                            <!-- End Categories -->
                            <div id="brands" class="box-filter brands-filter">
                                <h2 class="widget-title">Compatible Brands</h2>
                            </div>

                            <!-- End Distance -->
                            <div id="distances" class="box-filter distance-filter">
                                <h2 class="widget-title">Distance</h2>
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
                                <h2>{{ $module }} Transceivers</h2>
                            </div>
                            <div class="tab-content">
                                <ul id="items" class="row product-grid auto-clear">
                                    @foreach($transceivers as $transceiver)
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="product-thumb">
                                                    <a href="{{ url('products/transceivers/' . $transceiver['id']) }}">
                                                        <?php $img = str_replace('+', '_plus', 'images/products/hoishi_' . trim(strtolower($transceiver['Form Factor'])) . '.jpg'); ?>
                                                        <img class="first-thumb" alt="" src="{{ asset($img) }}">
                                                    </a>

                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title-product"><a href="#">{{ $transceiver->Model }}</a></h3>
                                                    <div class="contact-product">
                                                        <a href="{{ url('products/transceivers/' . $transceiver['id']) }}" class="btn btn-price btn-sm" >Product Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    <?php if ( sizeof($transceivers) == 0 ) { ?>
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
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="sort-pagi-bar">
                                            <div id='page_navigation' class="product-pagi-nav"></div>
                                        </div>
                                    </div>
                                </div>
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
    {{ Form::open(array('action'=>'ProductController@filterTransceivers', 'method' => 'post', 'id' => 'filter_form')) }}
        <input type='hidden' id='current_page' />
        <input type='hidden' id='show_per_page' />
        <input type="hidden" id="filter_module" name="filter_module"/>
        <input type="hidden" id="filter_categories" name="filter_categories"/>
        <input type="hidden" id="filter_brands" name="filter_brands"/>
        <input type="hidden" id="filter_distances" name="filter_distances"/>
    {{ Form::close() }}
@endsection

@section('custom_scripts')
<script>
    $( document ).ready(function() {
        var module = '<?php echo $module; ?>';
        var filter_category = '<?php echo (isset($filter_categories) && sizeof($filter_categories) > 0) ? json_encode($filter_categories) : json_encode(array()); ?>';
        var filter_brand = '<?php echo (isset($filter_brands) && sizeof($filter_brands) > 0) ? json_encode($filter_brands) : json_encode(array()); ?>';
        var filter_distance = '<?php echo (isset($filter_distances) && sizeof($filter_distances) > 0) ? json_encode($filter_distances) : json_encode(array()); ?>';
        var categories = '<?php echo json_encode($categories); ?>';
        var brands = '<?php echo (isset($brands)) ? json_encode($brands) : json_encode(array()); ?>';
        var distances = '<?php echo (isset($distances)) ? json_encode($distances) : json_encode(array()); ?>';

        var filter_category = JSON.parse(filter_category);

        if(filter_category.length == 0 || filter_category[0] == "") {
            $('#brands').hide();
            $('#distances').hide();
        }

        var categories = JSON.parse(categories);
        var categories_html = '<ul>';
        for (var key in categories) {
            if(filter_category.indexOf(categories[key]['Level 3 Type of Standard']) != -1) {
                categories_html += '<li><a class="filters categories active">' + categories[key]['Level 3 Type of Standard'] + '</a></li>';
            } else {
                categories_html += '<li><a class="filters categories">' + categories[key]['Level 3 Type of Standard'] + '</a></li>';
            }
        }
        categories_html += '</ul>';
        $('#categories').append(categories_html);

        if(filter_category.length > 0) {
            var brands = JSON.parse(brands);
            var brands_html = '<ul>';
            for (var key in brands) {
                if(filter_brand.indexOf(brands[key]['Compatible Brand']) != -1) {
                    brands_html += '<li><a class="filters brands active">' + brands[key]['Compatible Brand'] + '</a></li>';
                } else {
                    brands_html += '<li><a class="filters brands">' + brands[key]['Compatible Brand'] + '</a></li>';
                }
            }
            brands_html += '</ul>';
            $('#brands').append(brands_html);

            var distances = JSON.parse(distances);
            var distances_html = '<ul>';
            for (var key in distances) {
                if(filter_distance.indexOf(distances[key]['Reach']) != -1) {
                    distances_html += '<li><a class="filters distances active">' + distances[key]['Reach'] + '</a></li>';
                } else {
                    distances_html += '<li><a class="filters distances">' + distances[key]['Reach'] + '</a></li>';
                }
            }
            distances_html += '</ul>';
            $('#distances').append(distances_html);
        }

        $('.filters').click(function () {
            if ( $( this ).hasClass( "active" ) ) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }

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

            var distances = [];
            $('.distances').each(function () {
                if ( $( this ).hasClass( "active" ) ) {
                    distances.push($( this ).text());
                }
            });

            $('#filter_module').val(module);
            $('#filter_categories').val(categories);
            $('#filter_brands').val(brands);
            $('#filter_distances').val(distances);

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