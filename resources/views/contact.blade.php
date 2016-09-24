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
                        <a href="#"><img src="images/slide/slider_about_1.jpg" alt="" /></a>
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
                            <div class="form-contact">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="name" value="Name *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="email" value="Email *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="Phone" value="Phone" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" name="Subject" value="Subject *" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue">
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea name="message" cols="30" rows="8" onfocus="if (this.value==this.defaultValue) this.value = ''" onblur="if (this.value=='') this.value = this.defaultValue"></textarea>
                                            <input type="submit" value="Send" />
                                        </div>
                                    </div>
                                </form>
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
                                <a class="f-color" href="mailto:sales@hoishi.com">careers@hoishi.com</a>
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