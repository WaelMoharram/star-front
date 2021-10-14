<?php
include('header-ar.html');
?>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row align-items-stretch gutter-20 min-vh-60">
                    <div class="col-md-8">

                        <div class="row align-items-stretch gutter-20 h-100">
                            <div class="col-md-6 min-vh-25 min-vh-md-0">
                                <a href="shop-ar.php" class="grid-inner d-block h-100" style="background-image: url('images/star/electric.jpeg');"></a>
                            </div>

                            <div class="col-md-6 min-vh-25 min-vh-md-0">
                                <a href="shop-ar.php" class="grid-inner d-block h-100" style="background-image: url('images/star/fans.jpeg'); background-position: right center;"></a>
                            </div>

                            <div class="col-md-12 min-vh-25 min-vh-md-0 pb-md-0">
                                <a href="shop-ar.php" class="grid-inner d-block h-100" style="background-image: url('images/star/electrics.jpeg');"></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 min-vh-50">
                        <a href="shop-ar.php" class="grid-inner d-block h-100" style="background-image: url('images/star/lamps.jpeg'); background-position: center top;"></a>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="fancy-title title-border title-center topmargin-sm">
                    <h4>ماركات</h4>
                </div>

                <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/1.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/2.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/4.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/5.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/6.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/7.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/8.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/9.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/10.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/11.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/12.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/13.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/14.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/15.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/16.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/19.png" alt="Clients"></a></li>
                    <li class="grid-item"><a href="#"><img src="images/clients/logo/18.png" alt="Clients"></a></li>
                </ul>
                <div class="clear"></div>

                <div class="tabs topmargin-lg clearfix" id="tab-3">

<!--                    <ul class="tab-nav clearfix">-->
<!--                        <li><a href="#tabs-9">New Arrivals</a></li>-->
<!--                        <li><a href="#tabs-10">Best sellers</a></li>-->
<!--                        <li><a href="#tabs-11">You may like</a></li>-->
<!--                    </ul>-->

<!--                    <div class="tab-container">-->

                        <div class="tab-content" id="tabs-9">

                            <div class="shop row gutter-30">


                                <?php
                                for ($i=1;$i<5;$i++){
                                    include('card-index.product-ar.html');
                                }
                                ?>




                            </div>

                        </div>



<!--                    </div>-->

                </div>

                <div class="clear bottommargin-sm"></div>

                <div class="row justify-content-center col-mb-50 mb-0">
                    <div class="col-sm-6 col-lg-4">
                        <div class="fancy-title title-border">
                            <h4>من نحن</h4>
                        </div>
                        <p>Jane Jacobs educate, leverage affiliate Martin Luther King Jr. agriculture conflict resolution dignity. Cooperation international progress non-partisan lasting change meaningful.</p>
                    </div>

                    <div class="col-sm-6 col-lg-4 subscribe-widget">
                        <div class="fancy-title title-border">
                            <h4>اشترك ليصلك كل جديد</h4>
                        </div>
                        <p>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form2" action="include/subscribe.php" method="post" class="mb-0">
                            <div class="input-group mx-auto">
                                <div class="input-group-text"><i class="icon-email2"></i></div>
                                <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <button class="btn btn-secondary" type="submit">اشترك الأن</button>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="fancy-title title-border">
                            <h4>تواصل معنا</h4>
                        </div>

                        <a href="#" class="social-icon si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-delicious" data-bs-toggle="tooltip" data-bs-placement="top" title="Delicious">
                            <i class="icon-delicious"></i>
                            <i class="icon-delicious"></i>
                        </a>

                        <a href="#" class="social-icon si-paypal" data-bs-toggle="tooltip" data-bs-placement="top" title="PayPal">
                            <i class="icon-paypal"></i>
                            <i class="icon-paypal"></i>
                        </a>

                        <a href="#" class="social-icon si-flattr" data-bs-toggle="tooltip" data-bs-placement="top" title="Flattr">
                            <i class="icon-flattr"></i>
                            <i class="icon-flattr"></i>
                        </a>

                        <a href="#" class="social-icon si-android" data-bs-toggle="tooltip" data-bs-placement="top" title="Android">
                            <i class="icon-android"></i>
                            <i class="icon-android"></i>
                        </a>

                        <a href="#" class="social-icon si-smashmag" data-bs-toggle="tooltip" data-bs-placement="top" title="Smashing Magazine">
                            <i class="icon-smashmag"></i>
                            <i class="icon-smashmag"></i>
                        </a>

                        <a href="#" class="social-icon si-gplus" data-bs-toggle="tooltip" data-bs-placement="top" title="Google+">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-wikipedia" data-bs-toggle="tooltip" data-bs-placement="top" title="Wikipedia">
                            <i class="icon-wikipedia"></i>
                            <i class="icon-wikipedia"></i>
                        </a>

                        <a href="#" class="social-icon si-stumbleupon" data-bs-toggle="tooltip" data-bs-placement="top" title="StumbleUpon">
                            <i class="icon-stumbleupon"></i>
                            <i class="icon-stumbleupon"></i>
                        </a>

                        <a href="#" class="social-icon si-foursquare" data-bs-toggle="tooltip" data-bs-placement="top" title="FourSquare">
                            <i class="icon-foursquare"></i>
                            <i class="icon-foursquare"></i>
                        </a>

                        <a href="#" class="social-icon si-call" data-bs-toggle="tooltip" data-bs-placement="top" title="Call">
                            <i class="icon-call"></i>
                            <i class="icon-call"></i>
                        </a>

                        <a href="#" class="social-icon si-ninetyninedesigns" data-bs-toggle="tooltip" data-bs-placement="top" title="Ninety Nine Design">
                            <i class="icon-ninetyninedesigns"></i>
                            <i class="icon-ninetyninedesigns"></i>
                        </a>

                        <a href="#" class="social-icon si-forrst" data-bs-toggle="tooltip" data-bs-placement="top" title="Forrst">
                            <i class="icon-forrst"></i>
                            <i class="icon-forrst"></i>
                        </a>

                        <a href="#" class="social-icon si-digg" data-bs-toggle="tooltip" data-bs-placement="top" title="Digg">
                            <i class="icon-digg"></i>
                            <i class="icon-digg"></i>
                        </a>
                    </div>
                </div>

                <div class="clear"></div>



            </div>

            <div class="section mb-0">
                <div class="container">

                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-thumbs-up2"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>100% Original</h3>
                                    <p class="mt-0">We guarantee you the sale of Original Brands.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-credit-cards"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>Payment Options</h3>
                                    <p class="mt-0">We accept Visa, MasterCard and American Express.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-truck2"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>Free Shipping</h3>
                                    <p class="mt-0">Free Delivery to 100+ Locations on orders above LE 40.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="feature-box fbox-plain fbox-dark fbox-sm">
                                <div class="fbox-icon">
                                    <i class="icon-undo"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3>30-Days Returns</h3>
                                    <p class="mt-0">Return or exchange items purchased within 30 days.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="section border-top-0 border-bottom-0 mb-0 p-0 bg-transparent footer-stick">
                <div class="container clearfix">

                    <div class="row col-mb-50">
                        <div class="col-md-6 d-none d-md-flex align-self-end">
                            <img src="images/services/4.jpg" alt="Image" class="mb-0">
                        </div>

                        <div class="col-md-6 mb-5 subscribe-widget">
                            <div class="heading-block">
                                <h3><strong>GET 20% OFF*</strong></h3>
                                <span>Our App scales beautifully to different Devices.</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet cumque, perferendis accusamus porro illo exercitationem molestias.</p>

                            <div class="widget-subscribe-form-result"></div>
                            <form id="widget-subscribe-form3" action="include/subscribe.php" method="post" class="mb-0">
                                <div class="input-group" style="max-width:400px;">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                    <input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <button class="btn btn-danger" type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->
<?php
include('footer.html');
?>