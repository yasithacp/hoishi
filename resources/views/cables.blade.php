@extends('layouts.master')

@section('title', 'Cable Assemblies')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')

@section('content')
    <div class="content-shop left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar-shop sidebar-left">
                        <div class="widget widget-filter">

                            <div id="forms" class="box-filter category-filter">
                                <h2 class="widget-title">Categories</h2>
                            </div>

                            <!-- End Categories -->
                            <div id="brands" class="box-filter brands-filter">
                                <h2 class="widget-title">Compatible Brands</h2>
                            </div>

                        </div>
                        <!-- End Filter -->
                    </div>
                    <!-- End Sidebar Shop -->
                </div>

                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="main-content-shop">
                        <div class="shop-tab-product">
                            <div class="shop-tab-title">
                                <h2>{{ $type }}</h2>
                            </div>
                            <div class="tab-content">
                                <ul id="items" class="row product-grid auto-clear">
                                    @foreach($cables as $cable)
                                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="item-product">
                                                <div class="product-thumb">
                                                    <a href="{{ url('products/cables/' . $cable['id']) }}">
                                                        <?php
                                                            if($cable['Level 2 Cable Type'] == 'DIRECT ATTACH CABLES') {
                                                                $img = 'images/products/hoishi_dac.jpg';
                                                            } else {
                                                                $img = 'images/products/hoishi_aoc.jpg';
                                                            }
                                                        ?>
                                                        <img class="first-thumb" alt="" src="{{ asset($img) }}">
                                                    </a>

                                                </div>
                                                <div class="product-info">
                                                    <h3 class="title-product"><a href="#">{{ $cable->Model }}</a></h3>
                                                    <div class="contact-product">
                                                        <a href="{{ url('products/cables/' . $cable['id']) }}" class="btn btn-price btn-sm" >Product Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    <?php if ( sizeof($cables) == 0 ) { ?>
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
    {{ Form::open(array('action'=>'ProductController@filterCables', 'method' => 'post', 'id' => 'filter_form')) }}
    <input type="hidden" id="filter_type" name="filter_type"/>
    <input type="hidden" id="filter_forms" name="filter_forms"/>
    <input type="hidden" id="filter_brands" name="filter_brands"/>
    {{ Form::close() }}
@endsection

@section('custom_scripts')
    <script>
        $( document ).ready(function() {
            var type = '<?php echo $type; ?>';
            var filter_forms = '<?php echo (isset($filter_forms) && sizeof($filter_forms) > 0) ? json_encode($filter_forms) : json_encode(array()); ?>';
            var filter_brand = '<?php echo (isset($filter_brands) && sizeof($filter_brands) > 0) ? json_encode($filter_brands) : json_encode(array()); ?>';

            var forms = '<?php echo json_encode($forms); ?>';
            var brands = '<?php echo (isset($brands)) ? json_encode($brands) : json_encode(array()); ?>';

            var filter_forms = JSON.parse(filter_forms);

            if(filter_forms.length == 0 || filter_forms[0] == "") {
                $('#brands').hide();
            }

            var forms = JSON.parse(forms);
            var forms_html = '<ul>';
            for (var key in forms) {
                if(filter_forms.indexOf(forms[key]['Form']) != -1) {
                    forms_html += '<li><a class="filters forms active">' + forms[key]['Form'] + '</a></li>';
                } else {
                    forms_html += '<li><a class="filters forms">' + forms[key]['Form'] + '</a></li>';
                }
            }
            forms_html += '</ul>';
            $('#forms').append(forms_html);

            if(filter_forms.length > 0) {
                var brands = JSON.parse(brands);
                var brands_html = '<ul>';
                for (var key in brands) {
                    if(filter_brand.indexOf(brands[key]['Compatible Brands']) != -1) {
                        brands_html += '<li><a class="filters brands active">' + brands[key]['Compatible Brands'] + '</a></li>';
                    } else {
                        brands_html += '<li><a class="filters brands">' + brands[key]['Compatible Brands'] + '</a></li>';
                    }
                }
                brands_html += '</ul>';
                $('#brands').append(brands_html);
            }

            $('.filters').click(function () {
                if ( $( this ).hasClass( "active" ) ) {
                    $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }

                var forms = [];
                $('.forms').each(function () {
                    if ( $( this ).hasClass( "active" ) ) {
                        forms.push($( this ).text());
                    }
                });

                var brands = [];
                $('.brands').each(function () {
                    if ( $( this ).hasClass( "active" ) ) {
                        brands.push($( this ).text());
                    }
                });

                $('#filter_type').val(type);
                $('#filter_forms').val(forms);
                $('#filter_brands').val(brands);

                $('#filter_form').submit();

            })

            $('#items').paginate({
                perPage: 24,
                useHashLocation: false,
                paginatePosition:   ['bottom']
            });

        });
    </script>
@endsection