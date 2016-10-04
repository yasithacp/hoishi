<!DOCTYPE HTML>
<html lang="en-US">
<head>
    @section('metadata')
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.hoishi.com/" />
        <meta property="og:title" content="Hoishi – Optical and Copper Transceivers">
        <meta property="og:description" content="Hoishi is an industry leading manufacturer and distributor of optical and copper transceivers and cable assemblies">
        <meta property="og:image" content="https://www.hoishi.com/images/social/hoishi-og-img.jpg">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Hoishi_Ltd">
        <meta name="twitter:title" content="Hoishi – Optical and Copper Transceivers">
        <meta name="twitter:description" content="Hoishi is an industry leading manufacturer and distributor of optical and copper transceivers and cable assemblies">
        <meta name="twitter:image" content="https://www.hoishi.com/images/social/hoishi-og-img.jpg" />
    @show

    <title>Hoishi – @yield('title')</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-linearicons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.fancybox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery-ui.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.transitions.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/owl.theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('js/slideshow/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/theme.css') }}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" media="all"/>

    <!-- ****** favicon ****** -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon/favicon.ico') }}">
    <link rel="icon" sizes="16x16 32x32 64x64" href="{{ URL::asset('images/favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="196x196" href="{{ URL::asset('images/favicon/favicon-192.png') }}">
    <link rel="icon" type="image/png" sizes="160x160" href="{{ URL::asset('images/favicon/favicon-160.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('images/favicon/favicon-96.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ URL::asset('images/favicon/favicon-64.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('images/favicon/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('images/favicon/favicon-16.png') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('images/favicon/favicon-57.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('images/favicon/favicon-114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('images/favicon/favicon-72.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('images/favicon/favicon-144.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('images/favicon/favicon-60.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('images/favicon/favicon-120.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('images/favicon/favicon-76.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('images/favicon/favicon-152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('images/favicon/favicon-180.png') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/favicon-144.png">
    <meta name="msapplication-config" content="images/favicon/browserconfig.xml">
    <!-- ****** favicon ****** -->

</head>
<body>
@yield('facebook_feed')
<div class="wrap">
    <div id="header">
        <div class="container">
            <div class="header4">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="logo4">
                            <a href="/"><img src="{{asset('images/home/logo.svg')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12">
                        <div class="smart-search search-form4">
                            {{ Form::open(array('action'=>'ProductController@searchProducts', 'method' => 'post', 'class' => 'smart-search-form')) }}
                                <input type="text"  name="search" placeholder="Find product, categories..." />
                                <input type="submit" value="search" />
                            {{ Form::close() }}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="wrap-contacts">
                            <span>CALL US: <strong><a href="tel:+44 207 242 4650">+44 208 242 4650</a></strong></span>
                            <span>EMAIL: <strong><a href="mailto:sales@hoishi.com">sales@hoishi.com</a></strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header2 -->
        </div>
        <div class="header-nav2 header-nav12">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 menu-fix">
                        <div class="@yield('dropdown_class')" data-items="10">
                            <h2 class="title-category-dropdown"><span>Product Categories</span></h2>
                            <div class="wrap-category-dropdown">
                                <ul class="list-category-dropdown">
                                    <li>
                                        <a href="#" class="menu-title">Optical Transceivers</a>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/CFP') }}">CFP Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">CFP modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/CFP/BROCADE-FOUNDRY') }}">BROCADE-FOUNDRY</a></li>
                                                            <li><a href="{{ url('products/CFP/CIENA') }}">CIENA</a></li>
                                                            <li><a href="{{ url('products/CFP/CISCO CFP') }}">CISCO CFP</a></li>
                                                            <li><a href="{{ url('products/CFP/JUNIPER CFP') }}">JUNIPER CFP</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_cfp.jpg') }}" alt="hoishi cfp" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/CSFP') }}">CSFP Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">CSFP modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/CSFP/BIDI') }}">BIDI</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_csfp.jpg') }}" alt="hoishi csfp" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/GBIC') }}" >GBIC Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">GBIC modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/GBIC/BIDI') }}">BIDI</a></li>
                                                            <li><a href="{{ url('products/GBIC/CWDM') }}">CWDM</a></li>
                                                            <li><a href="{{ url('products/GBIC/DWDM') }}">DWDM</a></li>
                                                            <li><a href="{{ url('products/GBIC/EX') }}">EX</a></li>
                                                            <li><a href="{{ url('products/GBIC/LX') }}">LX</a></li>
                                                            <li><a href="{{ url('products/GBIC/SX') }}">SX</a></li>
                                                            <li><a href="{{ url('products/GBIC/T') }}">T</a></li>
                                                            <li><a href="{{ url('products/GBIC/ZX') }}">ZX</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_gbic.jpg')}}" alt="hoishi gbic" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/QSFP+') }}">QSFP+ Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">QSFP+ modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/QSFP+/BIDI') }}">BIDI</a></li>
                                                            <li><a href="{{ url('products/QSFP+/ER4') }}">ER4</a></li>
                                                            <li><a href="{{ url('products/QSFP+/IR4') }}">IR4</a></li>
                                                            <li><a href="{{ url('products/QSFP+/LR4') }}">LR4</a></li>
                                                            <li><a href="{{ url('products/QSFP+/SR4') }}">SR4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_qsfp_plus.jpg')}}" alt="hoishi qsfp" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/QSFP28') }}">QSFP28 Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">QSFP28 modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/QSFP28/LR4') }}">LR4</a></li>
                                                            <li><a href="{{ url('products/QSFP28/PLRL4') }}">PLRL4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_qsfp28.jpg')}}" alt="hoishi qsfp28" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/QSFP100') }}">QSFP100 Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">QSFP100 modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/QSFP100/LR4') }}">LR4</a></li>
                                                            <li><a href="{{ url('products/QSFP100/PLRL4') }}">PLRL4</a></li>
                                                            <li><a href="{{ url('products/QSFP100/SR4') }}">SR4</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_qsfp100.jpg')}}" alt="hoishi qsfp100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/SFP') }}">SFP Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">SFP modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/SFP/BIDI') }}">BIDI</a></li>
                                                            <li><a href="{{ url('products/SFP/CWDM') }}">CWDM</a></li>
                                                            <li><a href="{{ url('products/SFP/DWDM') }}">DWDM</a></li>
                                                            <li><a href="{{ url('products/SFP/EX') }}">EX</a></li>
                                                            <li><a href="{{ url('products/SFP/FX') }}">FX</a></li>
                                                            <li><a href="{{ url('products/SFP/LX') }}">LX</a></li>
                                                            <li><a href="{{ url('products/SFP/LW') }}">LW</a></li>
                                                            <li><a href="{{ url('products/SFP/ONS') }}">ONS</a></li>
                                                            <li><a href="{{ url('products/SFP/SX') }}">SX</a></li>
                                                            <li><a href="{{ url('products/SFP/SW') }}">SW</a></li>
                                                            <li><a href="{{ url('products/SFP/T') }}">T</a></li>
                                                            <li><a href="{{ url('products/SFP/ZX') }}">ZX</a></li>
                                                            <li><a href="{{ url('products/SFP/ZXL') }}">ZXL</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_sfp.jpg')}}" alt="hoishi sfp" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/SFP+') }}">SFP+ Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">SFP+ modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/SFP+/BIDI') }}">BIDI</a></li>
                                                            <li><a href="{{ url('products/SFP+/CWDM') }}">CWDM</a></li>
                                                            <li><a href="{{ url('products/SFP+/DWDM') }}">DWDM</a></li>
                                                            <li><a href="{{ url('products/SFP+/ER') }}">ER</a></li>
                                                            <li><a href="{{ url('products/SFP+/LR') }}">LR</a></li>
                                                            <li><a href="{{ url('products/SFP+/LRL') }}">LRL</a></li>
                                                            <li><a href="{{ url('products/SFP+/LRM') }}">LRM</a></li>
                                                            <li><a href="{{ url('products/SFP+/SR') }}">SR</a></li>
                                                            <li><a href="{{ url('products/SFP+/T') }}">T</a></li>
                                                            <li><a href="{{ url('products/SFP+/ZR') }}">ZR</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_sfp_plus.jpg')}}" alt="hoishi sfp+" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/X2') }}">X2 Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">X2 modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/X2/CX4') }}">CX4</a></li>
                                                            <li><a href="{{ url('products/X2/DWDM') }}">DWDM</a></li>
                                                            <li><a href="{{ url('products/X2/ER') }}">ER</a></li>
                                                            <li><a href="{{ url('products/X2/LR') }}">LR</a></li>
                                                            <li><a href="{{ url('products/X2/LRM') }}">LRM</a></li>
                                                            <li><a href="{{ url('products/X2/LX') }}">LX</a></li>
                                                            <li><a href="{{ url('products/X2/SR') }}">SR</a></li>
                                                            <li><a href="{{ url('products/X2/T') }}">T</a></li>
                                                            <li><a href="{{ url('products/X2/ZR') }}">ZR</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_x2.jpg')}}" alt="hoishi x2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/XENPAK') }}">XENPAK Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">XENPAK modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/XENPAK/DWDM') }}">DWDM</a></li>
                                                            <li><a href="{{ url('products/XENPAK/ER') }}">ER</a></li>
                                                            <li><a href="{{ url('products/XENPAK/LR') }}">LR</a></li>
                                                            <li><a href="{{ url('products/XENPAK/LRM') }}">LRM</a></li>
                                                            <li><a href="{{ url('products/XENPAK/LX4') }}">LX4</a></li>
                                                            <li><a href="{{ url('products/XENPAK/SR') }}">SR</a></li>
                                                            <li><a href="{{ url('products/XENPAK/ZR') }}">ZR</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_xenpak.jpg')}}" alt="hoishi xenpak" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('products/XFP') }}">XFP Modules</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">XFP modules</h2>
                                                        <ul>
                                                            <li><a href="{{ url('products/XFP/BIDI') }}">BIDI</a></li>
                                                            <li><a href="{{ url('products/XFP/CX4') }}">CX4</a></li>
                                                            <li><a href="{{ url('products/XFP/CWDM') }}">CWDM</a></li>
                                                            <li><a href="{{ url('products/XFP/DWDM') }}">DWDM</a></li>
                                                            <li><a href="{{ url('products/XFP/ER') }}">ER</a></li>
                                                            <li><a href="{{ url('products/XFP/LR') }}">LR</a></li>
                                                            <li><a href="{{ url('products/XFP/LRM') }}">LRM</a></li>
                                                            <li><a href="{{ url('products/XFP/ONS') }}">ONS</a></li>
                                                            <li><a href="{{ url('products/XFP/SR') }}">SR</a></li>
                                                            <li><a href="{{ url('products/XFP/ZR') }}">ZR</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_xfp.jpg')}}" alt="hoishi xfp" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="menu-title">Cable Assemblies</a>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('cables/DIRECT ATTACH CABLES') }}">DAC</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">DAC</h2>
                                                        <ul>
                                                            <li><a href="{{ url('cables/DIRECT ATTACH CABLES/SFP+ TWINAX') }}">SFP+ TWINAX</a></li>
                                                            <li><a href="{{ url('cables/DIRECT ATTACH CABLES/QSFP+ TWINAX') }}">QSFP+ TWINAX</a></li>
                                                            <li><a href="{{ url('cables/DIRECT ATTACH CABLES/QSFP100 TWINAX') }}">QSFP100 TWINAX</a></li>
                                                            <li><a href="{{ url('cables/DIRECT ATTACH CABLES/QSFP28 TWINAX') }}">QSFP28 TWINAX</a></li>
                                                            <li><a href="{{ url('cables/DIRECT ATTACH CABLES/SFP+ INFINIBAND') }}">SFP+ INFINIBAND</a></li>
                                                            <li><a href="{{ url('cables/DIRECT ATTACH CABLES/STACKING') }}">STACKING</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_dac.jpg') }}" alt="hoishi dac" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="has-cat-mega">
                                        <a href="{{ url('cables/ACTIVE OPTICAL CABLES') }}">AOC</a>
                                        <div class="cat-mega-menu cat-mega-style2">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="list-cat-mega-menu">
                                                        <h2 class="title-cat-mega-menu">AOC</h2>
                                                        <ul>
                                                            <li><a href="{{ url('cables/ACTIVE OPTICAL CABLES/ACTIVE OPTICAL CABLES') }}">AOC</a></li>
                                                            <li><a href="{{ url('cables/ACTIVE OPTICAL CABLES/QSFP100 ACTIVE OPTICAL CABLES') }}">QSFP100 AOC</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="zoom-image-thumb">
                                                        <img src="{{asset('images/products/hoishi_aoc.jpg') }}" alt="hoishi aoc" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <a href="#" class="expand-category-link"></a>
                            </div>
                        </div>
                        <!-- End Category Dropdown -->
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-6">
                        <nav class="main-nav main-nav4">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">Company</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('about') }}">About Us</a></li>
                                        <li><a href="{{ url('why_us') }}">Why Us</a></li>
                                        <li><a href="{{ url('case_studies') }}">Case Studies</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Products</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('product_overview') }}">Product Overview</a></li>
                                        <li><a href="{{ url('product_information') }}">Product Information</a></li>
                                        <li><a href="{{ url('product_list') }}">product List</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Support</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('shipping') }}">Shipping</a></li>
                                        <li><a href="{{ url('warranty') }}">Warranty</a></li>
                                        <li><a href="{{ url('faq') }}">FAQ</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('contact') }}">Contacts</a>
                                </li>
                            </ul>
                            <a href="#" class="toggle-mobile-menu"><span>Menu</span></a>
                        </nav>
                        <!-- End Main Nav -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Nav2 -->
    </div>
    <!-- End Header -->

    <div id="content">
        @yield('content')
    </div>

    <div id="footer">
        <div class="footer4">
            <div class="container">
                <div class="list-menu-footer4">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="box-menu-footer4">
                                <h2>Company</h2>
                                <ul>
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                                    <li><a href="{{ url('why_us') }}">Why Us</a></li>
                                    <li><a href="{{ url('case_studies') }}">Case Studies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="box-menu-footer4">
                                <h2>Products</h2>
                                <ul>
                                    <li><a href="{{ url('product_overview') }}">Products Overview</a></li>
                                    <li><a href="{{ url('product_information') }}">Product Information</a></li>
                                    <li><a href="{{ url('product_list') }}">Product List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="box-menu-footer4">
                                <h2>Support</h2>
                                <ul>
                                    <li><a href="{{ url('shipping') }}">Shipping</a></li>
                                    <li><a href="{{ url('warranty') }}">Warranty</a></li>
                                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="box-menu-footer4">
                                <h2>Contact Us</h2>
                                <ul>
                                    <li><a href="tel:+44 207 242 4650">+44 208 242 4650</a></li>
                                    <li><a href="mailto:sales@hoishi.com">sales@hoishi.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End List Menu Footer -->
                <div class="list-order-policy">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item-order-policy">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li><span>3yr limited lifetime WARRANTY</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item-order-policy">
                                <ul>
                                    <li><i class="fa fa-plane"></i></li>
                                    <li><span>FREE SHIPPING On selected orders</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item-order-policy">
                                <ul>
                                    <li><i class="fa fa-usd"></i></li>
                                    <li><span>AFFORDABLE up to 90% off</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item-order-policy last-item">
                                <ul>
                                    <li><i class="fa fa-certificate"></i></li>
                                    <li><span>COMPATIBILITY guaranteed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Order Policy -->
                <div class="copyright-social4">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <p class="copyrigh4">©2016 <a href="http://www.hoishi.com">hoishi.com</a></p>
                            <div class="policy4">
                                <label>Policies: </label>
                                <a href="{{ url('terms') }}">Terms & Conditions</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="social-footer social-footer4 social-network">
                                <label>KEEP IN TOUCH</label>
                                <ul>
                                    <li><a href="https://www.facebook.com/HoishiLightSpeedData/" target="_blank"><img src="{{asset('images/home/s1.png')}}" alt=""></a></li>
                                    <li><a href="https://twitter.com/Hoishi_Ltd" target="_blank"><img src="{{asset('images/home/s2.png')}}" alt=""></a></li>
                                    <li><a href="https://www.linkedin.com/company/hoishi" target="_blank"><img src="{{asset('images/home/s3.png')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Footer -->
</div>
</body>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-84898000-1', 'auto');
    ga('send', 'pageview');
</script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.0.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.fancybox.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/TimeCircles.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/slideshow/jquery.themepunch.revolution.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/slideshow/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.jcarousellite.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery.elevatezoom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/theme.js') }}"></script>
@yield('custom_scripts')
</html>