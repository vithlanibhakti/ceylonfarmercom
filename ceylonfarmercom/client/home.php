<html lang="en">

<head>

<meta charset="utf-8">
<style>
                        * {
                            box-sizing: border-box;
                        }
                        
                        body {
                            font-family: Verdana, sans-serif;
                        }
                        
                        .mySlides {
                            display: none;
                        }
                        
                        img {
                            vertical-align: middle;
                        }
                        /* Slideshow container */
                        
                        .slideshow-container {
                            max-width: 1000px;
                            position: relative;
                            margin: auto;
                        }
                        /* Caption text */
                        
                        .text {
                            color: #f2f2f2;
                            font-size: 15px;
                            padding: 8px 12px;
                            position: absolute;
                            bottom: 8px;
                            width: 100%;
                            text-align: center;
                        }
                        /* Number text (1/3 etc) */
                        
                        .numbertext {
                            color: #f2f2f2;
                            font-size: 12px;
                            padding: 8px 12px;
                            position: absolute;
                            top: 0;
                        }
                        /* The dots/bullets/indicators */
                        
                        .dot {
                            height: 15px;
                            width: 15px;
                            margin: 0 2px;
                            background-color: #bbb;
                            border-radius: 50%;
                            display: inline-block;
                            transition: background-color 0.6s ease;
                        }
                        
                        .active {
                            background-color: #717171;
                        }
                        /* Fading animation */
                        
                        .fade {
                            -webkit-animation-name: fade;
                            -webkit-animation-duration: 1.5s;
                            animation-name: fade;
                            animation-duration: 1.5s;
                        }
                        
                        @-webkit-keyframes fade {
                            from {
                                opacity: .4
                            }
                            to {
                                opacity: 1
                            }
                        }
                        
                        @keyframes fade {
                            from {
                                opacity: .4
                            }
                            to {
                                opacity: 1
                            }
                        }
                        /* On smaller screens, decrease text size */
                        
                        @media only screen and (max-width: 300px) {
                            .text {
                                font-size: 11px
                            }
                        }
                    </style>
      </head>          
<body>
    <?php  include ("header.php");?>
        <div class="main-content-holder">
            <div>
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="img/slide1.jpg" alt="slide-image" style="width: 100%; height: 100%;">
                            <div class="text"> One </div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="img/slide2.jpg" alt="slide-image" style="width: 100%; height: 100%;">
                            <div class="text"> Two</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="img/slide3.jpg" alt="slide-image" style="width: 100%; height: 100%;">
                            <div class="text"> Three</div>
                        </div>

                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>

                    <script>
                        var slideIndex = 0;
                        showSlides();

                        function showSlides() {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("dot");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) {
                                slideIndex = 1
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex - 1].style.display = "block";
                            dots[slideIndex - 1].className += " active";
                            setTimeout(showSlides, 2000); // Change image every 2 seconds
                        }
                    </script>


                    <div>
                        <div class="item-container1">
                            <div class="item1"><i class="fa fa-clock"></i> Delivery within 48 Hours</div>
                            <div class="item1"><i class="fa fa-paper-plane"></i>Deliver to Doorstep</div>
                            <div class="item1"><i class="fa fa-check-circle"></i>Freshness Guaranteed</div>
                            <div class="item1"><i class="fa fa-hand-pointer"></i>Click and Collect</div>
                            <div class="item1"><i class="fa fa-thumbs-up"></i>Amazing Deals</div>
                        </div>
                    </div>

                    <div>
                        <div class="p-0 m-0 row">
                            <div class="full-width-bannner-item col-lg-6 col-md-12 col-12">
                            <a href="utilityPayment.php"> <div class="slide">
                                    <img src="/ceylonfarmercom/ceylonfarmercom/client\img\slide5.jpg" style="width: 100%; height: 100%;">
                                </div>
                    </a>
                            </div>
                            <div class="bannerSpace col-12">&nbsp;</div>
                            <div class="full-width-bannner-item col-lg-6 col-md-12 col-12">
                            <a href="search.php">   <div class="slide"><img src="/ceylonfarmercom/ceylonfarmercom/client\img\slide6.jpg" style="width: 100%; height: 100%;"></div>
                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="all-container">
                        <div class="switcher-container col-md-10 col-12 offset-md-1">
                            <div class="switcher">
                                <div class="switcher-controls-container"><i class="fas fa-chevron-left"></i>
                                    <div class="switcher-control-nexus switcher-control-active">Nexus Deals</div>
                                    <div class="switcher-control-keells">GIT Lanka Deals</div><i class="fas fa-chevron-right"></i></div>
                            </div>
                            <div class="product-container">
                                <div class="m-0 row-cols-2 row-cols-xs-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 row">
                                    <div class="col" style="padding-bottom: 15px;">
                                        <div class="product-card-container">
                                            <div class="row">
                                                <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic14290.jpg">
                                                    <div class="product-card-promotion-badge">
                                                        <div class="product-card-promotion-badge-nexus">
                                                            <!-- <img class="img-fluid" src="/static/media/Nexus.0af60875.png"> -->
                                                        </div>
                                                        <div class="product-card-promotion-badge-single-line">
                                                            <div class="product-card-promotion-badge-percentage">20</div>
                                                            <div>
                                                                <div class="product-card-promotion-badge-suffix">%</div>
                                                                <div class="product-card-promotion-badge-suffix">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-name col-md-12">Krest Chicken Sausages S/Less 500g</div>
                                                <div class="product-card-price-container col-md-12">
                                                    <div class="product-card-original-price">Rs 520.00</div>
                                                    <div class="product-card-final-price">Rs 416.00 / Unit</div>
                                                </div>
                                                <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col" style="padding-bottom: 15px;">
                                        <div class="product-card-container">
                                            <div class="row">
                                                <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic88823.jpg">
                                                    <div class="product-card-promotion-badge">
                                                        <div class="product-card-promotion-badge-nexus">
                                                            <!-- <img class="img-fluid" src="/static/media/Nexus.0af60875.png"> -->
                                                        </div>
                                                        <div class="product-card-promotion-badge-single-line">
                                                            <div class="product-card-promotion-badge-percentage">29</div>
                                                            <div>
                                                                <div class="product-card-promotion-badge-suffix">%</div>
                                                                <div class="product-card-promotion-badge-suffix">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-name col-md-12">Prima Instant Noodles 430g</div>
                                                <div class="product-card-price-container col-md-12">
                                                    <div class="product-card-original-price">Rs 195.00</div>
                                                    <div class="product-card-final-price">Rs 138.00 / Unit</div>
                                                </div>
                                                <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col" style="padding-bottom: 15px;">
                                        <div class="product-card-container">
                                            <div class="row">
                                                <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic117689.jpg">
                                                    <div class="product-card-promotion-badge">
                                                        <div class="product-card-promotion-badge-nexus">
                                                            <!-- <img class="img-fluid" src="/static/media/Nexus.0af60875.png"> -->
                                                        </div>
                                                        <div class="product-card-promotion-badge-single-line">
                                                            <div class="product-card-promotion-badge-percentage">30</div>
                                                            <div>
                                                                <div class="product-card-promotion-badge-suffix">%</div>
                                                                <div class="product-card-promotion-badge-suffix">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-name col-md-12">Dove Shampo Oxygen Moisture 180ml</div>
                                                <div class="product-card-price-container col-md-12">
                                                    <div class="product-card-original-price">Rs 300.00</div>
                                                    <div class="product-card-final-price">Rs 210.00 / Unit</div>
                                                </div>
                                                <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col" style="padding-bottom: 15px;">
                                        <div class="product-card-container">
                                            <div class="row">
                                                <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic50027.jpg">
                                                    <div class="product-card-promotion-badge">
                                                        <div class="product-card-promotion-badge-nexus">
                                                            <!-- <img class="img-fluid" src="/static/media/Nexus.0af60875.png"> -->
                                                        </div>
                                                        <div class="product-card-promotion-badge-single-line">
                                                            <div class="product-card-promotion-badge-percentage">30</div>
                                                            <div>
                                                                <div class="product-card-promotion-badge-suffix">%</div>
                                                                <div class="product-card-promotion-badge-suffix">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-name col-md-12">Knorr Seasoning Cube 60g</div>
                                                <div class="product-card-price-container col-md-12">
                                                    <div class="product-card-original-price">Rs 125.00</div>
                                                    <div class="product-card-final-price">Rs 87.00 / Unit</div>
                                                </div>
                                                <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col" style="padding-bottom: 15px;">
                                        <div class="product-card-container">
                                            <div class="row">
                                                <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/Small/Default.jpg">
                                                    <div class="product-card-promotion-badge">
                                                        <div class="product-card-promotion-badge-nexus">
                                                            <!-- <img class="img-fluid" src="/static/media/Nexus.0af60875.png"> -->
                                                        </div>
                                                        <div class="product-card-promotion-badge-single-line">
                                                            <div class="product-card-promotion-badge-percentage">30</div>
                                                            <div>
                                                                <div class="product-card-promotion-badge-suffix">%</div>
                                                                <div class="product-card-promotion-badge-suffix">Off</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-card-name col-md-12">Kotmale Faluda Flav Milk 1L</div>
                                                <div class="product-card-price-container col-md-12">
                                                    <div class="product-card-original-price">Rs 250.00</div>
                                                    <div class="product-card-final-price">Rs 175.00 / Unit</div>
                                                </div>
                                                <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="switcher-main-button-holder row">
                                    <div class="input-group">
                                        <div class="btn-full"><button id="deals_view_all_nexus_btn" class="btn-inside  
   new-btn-sm " type="button"> View All Nexus Deals</button>
                                            <div class="input-group-append">
                                                <div class="input-group-text append"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 0px;">
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="section-title">
                                <div class="section-title-line"></div>
                                <div class="section-title-text"><span>Best <strong>Sellers</strong></span></div>
                                <div class="section-title-line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="best-seller-slider">
                        <div class="slide" style="transform: translateX(0%);">
                            <div class="row" style="margin: 0px; padding-bottom: 1.5625rem;">
                                <div class="col-md-10 col-12 offset-md-1">
                                    <div class="m-0 row-cols-2 row-cols-xs-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 row">
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic951015.jpg"></div>
                                                    <div class="product-card-name col-md-12">Top Crust Bread</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 59.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic952003.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Dinner Bun 4S</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 55.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic951009.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Sandwich Bread 450g</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 130.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic951017.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Kurakkan Bread 200g</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 80.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic951008.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Kurakkan Bread 400g</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 150.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide" style="transform: translateX(0%);">
                            <div class="row" style="margin: 0px; padding-bottom: 1.5625rem;">
                                <div class="col-md-10 col-12 offset-md-1">
                                    <div class="m-0 row-cols-2 row-cols-xs-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 row">
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic952001.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Hamburger Buns 2S</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 65.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic952002.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Hot Dog Bun 2S</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 65.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/Small/Default.jpg"></div>
                                                    <div class="product-card-name col-md-12">GIT Lanka Sandwich Bread 750g</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 185.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/Small/Default.jpg"></div>
                                                    <div class="product-card-name col-md-12">French Bread</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 120.00 / Unit</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col" style="padding-bottom: 15px;">
                                            <div class="product-card-container">
                                                <div class="row">
                                                    <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic914006.jpg"></div>
                                                    <div class="product-card-name col-md-12">Big Onions</div>
                                                    <div class="product-card-price-container col-md-12">
                                                        <div class="product-card-final-price">Rs 130.00 / KG</div>
                                                    </div>
                                                    <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><button id="best-seller-slider-goLeft"><i class="fas fa-chevron-left"></i></button><button id="best-seller-slider-goRight"><i class="fas fa-chevron-right"></i></button></div>
                    <div>
                        <div class="p-0 m-0 row">
                            <div class="full-width-bannner-item col-lg-6 col-md-12 col-12">
                                <div class="slide"><img src="https://essstr.blob.core.windows.net/uiimg/BannerSections/BannerSection2A.jpg" style="width: 100%; height: 100%;"></div>
                            </div>
                            <div class="bannerSpace col-12">&nbsp;</div>
                            <div class="full-width-bannner-item col-lg-6 col-md-12 col-12">
                                <div class="slide"><img src="https://essstr.blob.core.windows.net/uiimg/BannerSections/BannerSection2B.jpg" style="width: 100%; height: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 0px;">
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="section-title">
                                <div class="section-title-line"></div>
                                <div class="section-title-text"><span>Featured <strong>Products</strong></span></div>
                                <div class="section-title-line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-12 offset-md-1">
                        <div class="m-0 row-cols-2 row-cols-xs-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 row">
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic116161.jpg"></div>
                                        <div class="product-card-name col-md-12">Eh Fit O Mango 1L</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-final-price">Rs 250.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic14459.jpg"></div>
                                        <div class="product-card-name col-md-12">Dettol Soap Original 70g</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-final-price">Rs 62.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic111319.jpg"></div>
                                        <div class="product-card-name col-md-12">Durex Condoms Fetherlite 3S</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-final-price">Rs 240.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic2363.jpg"></div>
                                        <div class="product-card-name col-md-12">Watawala Tea 200g</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-final-price">Rs 260.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic119444.jpg">
                                            <div class="product-card-promotion-badge">
                                                <div class="product-card-promotion-badge-nexus">
                                                    <!-- <img class="img-fluid" src="/static/media/KeellsDeals.45f467c3.png"> -->
                                                </div>
                                                <div class="product-card-promotion-badge-single-line">
                                                    <div class="product-card-promotion-badge-percentage">15</div>
                                                    <div>
                                                        <div class="product-card-promotion-badge-suffix">%</div>
                                                        <div class="product-card-promotion-badge-suffix">Off</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-name col-md-12">Dimo Lumin Led 9W Day Pin</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-original-price">Rs 565.00</div>
                                            <div class="product-card-final-price">Rs 480.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic110200.jpg"></div>
                                        <div class="product-card-name col-md-12">Highland Uht F/C Milk Pkt 900ml</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-final-price">Rs 185.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col" style="padding-bottom: 15px;">
                                <div class="product-card-container">
                                    <div class="row">
                                        <div class="product-card-image-container col-md-12"><img class="img-fluid" src="https://essstr.blob.core.windows.net/essimg/350x/Small/Pic110201.jpg"></div>
                                        <div class="product-card-name col-md-12">Highland Uht F/C Milk Chutta 450ml</div>
                                        <div class="product-card-price-container col-md-12">
                                            <div class="product-card-final-price">Rs 100.00 / Unit</div>
                                        </div>
                                        <div class="product-card-button-container col-md-12"><button type="button" class="product-card-button-add btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i>Add to Cart</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 0px;">
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="section-title">
                                <div class="section-title-line"></div>
                                <div class="section-title-text"><span>Shop By <strong>Category</strong></span></div>
                                <div class="section-title-line"></div>
                            </div>
                        </div>
                    </div>
                    <?php
include 'config.php';
$result = mysqli_query($con,"SELECT category_image FROM categorys LIMIT 6;");
			while($row = mysqli_fetch_array($result)) {
            $img= $row['category_image'];
            
//echo $row[0]."<br>"; 
$items = array();

 $input_array[] = $img;

//print_r($items);

// Array ( 
//     [0] => Array ( [0] => ) 
//     [1] => Array ( [1] => client/img/vege.png ) 
//     [2] => Array ( [2] => client/img/juice.png ) 
//     [3] => Array ( [3] => client/img/home.png ) 
//     [4] => Array ( [4] => client/img/meat.png ) 
//     )


            }
            $List = implode(', ', $input_array); 
  
// Display the comma separated list 
//print_r($List); 
//print_r (explode(",",$List));
//echo $List[0][1];


        //     foreach($input_array as $key => $value){
        //         $newName = "array".($key+1);
        //         $$newName = $value;
        //         echo $key+1;
        // }
            
           // print_r(array_chunk($input_array, 1, true));
			?>
                    <div class="col">
                        <div class="wrapper">
                            <div class="tile1-cat" style="background: url(&quot;https://essstr.blob.core.windows.net/uiimg/ShopByCategory/ShopByCategory1.jpg&quot;);"></div>
                            <div class="">
                                <div class="slide">
                                
                                    <img src="<?php echo $img; ?>" style="width: 100%; height: auto;">
                            </div>
                            </div>
                            <div class="nested ">
                                <div class="to-bottom tile3-cat"><img src="https://essstr.blob.core.windows.net/uiimg/ShopByCategory/ShopByCategory3.jpg" style="width: 100%; height: auto;"></div>
                                <div class="to-bottom tile4-cat"><img src="https://essstr.blob.core.windows.net/uiimg/ShopByCategory/ShopByCategory4.jpg" style="width: 100%; height: auto;"></div>
                            </div>
                            <div class="nested">
                                <div class="to-bottom tile5-cat"><img src="https://essstr.blob.core.windows.net/uiimg/ShopByCategory/ShopByCategory5.jpg" style="width: 100%; height: auto;"></div>
                                <div class="to-bottom tile6-cat"><img src="https://essstr.blob.core.windows.net/uiimg/ShopByCategory/ShopByCategory6.jpg" style="width: 100%; height: auto;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 0px;">
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="section-title">
                                <div class="section-title-line" style="display: none;"></div>
                                <div class="section-title-text"></div>
                                <div class="section-title-line" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="p-0 m-0 row">
                            <div class="full-width-bannner-item col-lg-6 col-md-12 col-12">
                                <div class="slide">
                                    <img src="https://essstr.blob.core.windows.net/uiimg/BannerSections/BannerSection4A.jpg" style="width: 100%; height: 100%;"></div>
                            </div>
                            <div class="bannerSpace col-12">&nbsp;</div>
                            <div class="full-width-bannner-item col-lg-6 col-md-12 col-12">
                                <div class="slide">
                                    <img src="https://essstr.blob.core.windows.net/uiimg/BannerSections/BannerSection4B.jpg" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin: 0px;">
                        <div class="col-md-10 col-12 offset-md-1">
                            <div class="section-title">
                                <div class="section-title-line" style="display: none;"></div>
                                <div class="section-title-text"></div>
                                <div class="section-title-line" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                    <div></div>
            </div>
        </div>
        <?php include("footer.html"); ?>
</div>

<script>
$(document).ready(function() {
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
				$("#dvPassport").show();
            } else{
				$("#dvPassport").hide();
            }
        });
    }).change();

	$('#category').on('change', function() {
        
			var category_id = this.value;

debugger;
          //  alert(category_id);
			$.ajax({
				url: "get_subcat.php",
				type: "POST",
				data: {
					category_id: category_id
				},
				cache: false,
				success: function(dataResult){
					$("#sub_category").html(dataResult);
         		}
			});
		
		
	});
});
</script>