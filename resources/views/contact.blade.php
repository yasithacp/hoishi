@extends('layouts.master')

@section('title', 'Contact Us')
@section('dropdown_class', 'category-dropdown hidden-category-dropdown')
@section('metadata')
    @parent

    <meta name="description" content="Dedicated support and sales teams available 24x7">
    <meta name="keywords" content="Optical Transceiver, Manufacturer, Distributor, Fibre Optic Transceiver, Compatible, Email, Phone, 24x7, Call Centre, Call Back, Fill in Form">
@endsection

@section('content')
    <div class="inner_content-shop">
        <div class="banner-slider10 simple-owl-slider">
            <div class="wrap-item">
                <div class="item-banner10">
                    <div class="banner-thumb">
                        <a href="#"><img src="images/slide/banner_contacts.jpg" alt="" /></a>
                    </div>
                    <div class="banner-info">
                        <div class="container">
                            <div class="banner-content-text">
                                <div class="inner-content-text">
                                    <h2>Global Network, Global Connectivity, Global Reach</h2>
                                    <h4>24x7 dedicated sales and support teams</h4>
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
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="inner-content-shop">
                        <div class="contact-form-page">
                            <h2>contact from</h2>
                            <?php if(isset($message)) { ?>
                                <div class="item-message-box item-message-success">
                                    <p>{{ $message }}</p>
                                </div>
                            <?php } ?>
                            <div class="form-contact">
                                {{ Form::open(array('action'=>'ProductController@contact', 'method' => 'post')) }}
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="name" placeholder="Name *" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="email" placeholder="Email *" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="subject" placeholder="Subject *" required>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="body" cols="30" rows="8"></textarea>
                                            <input type="submit" value="Send" />
                                        </div>
                                    </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="inner-content-shop">
                        <div class="contact-form-page">
                            <h2>Global Contacts</h2>
                            <div class="contact-box">
                                <h4>Sales</h4>
                                <p><a href="tel:+44 (0) 208 242 4650">+44 (0) 208 242 4650</a></p>
                                <a class="f-color" href="mailto:sales@hoishi.com">sales@hoishi.com</a>
                            </div>
                            <div class="contact-box">
                                <h4>Technical Support</h4>
                                <p><a href="tel:+44 (0) 208 242 4650">+44 (0) 208 242 4650</a></p>
                                <a class="f-color" href="mailto:support@hoishi.com ">support@hoishi.com </a>
                            </div>
                            <div class="contact-box">
                                <h4>Development/Engineering</h4>
                                <p><a href="tel:+852 812 575 28">+852 812 575 28</a></p>
                                <a class="f-color" href="mailto:technical@hoishi.com">technical@hoishi.com</a>
                            </div>
                            <div class="contact-box">
                                <h4>Careers</h4>
                                <p>We are always looking for qualified sales and technical staff.</p>
                                <a class="f-color" href="mailto:careers@hoishi.com">careers@hoishi.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="inner-content-shop">
                        <div class="contact-form-page">
                            <h2>Office Locations</h2>
                            <div class="contact-box">
                                <h4>United Kingdom</h4>
                                <p>27 Old Gloucester Street,<br>London, WC1N 3AX.</p>
                            </div>
                            <div class="contact-box">
                                <h4>China</h4>
                                <p>B1501, Tianyue Yuan, 2nd<br> Wenxin Road, Nanshan District,<br> Shenzen</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection