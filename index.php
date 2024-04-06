<?php
 $hide_menu=true;
include 'header.php';

?>

<div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 510px;">
                            <img class="img-fluid" src="img/image1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">20% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Creative Products</h3>
                                    <a href="products-category.php?type=creative" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 510px;">
                            <img class="img-fluid" src="img/scrap.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">20% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Scrap Yard</h3>
                                    <a href="products-category.php?type=scrap" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    


    <!-- Offer Start -->
    <div class="container-fluid offer ">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="img/creative.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3"></h5>
                        <h1 class="mb-4 font-weight-semi-bold">Creatives</h1>
                        <a href="products-category.php?type=creative" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="img/scrap.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3"></h5>
                        <h1 class="mb-4 font-weight-semi-bold">Scrap Yard</h1>
                        <a href="products-category.php?type=scrap" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Creative Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
    <!-- Static images -->
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/c1.jpg" alt="Static Image 1">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Protect the Animals Mugs</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 2500</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/c2.jpg" alt="Static Image 2">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Recycled Glass Elephants Night Light</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 1500</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/c3.jpg" alt="Static Image 3">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Bishnupur Handpainted Terracotta</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 200</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/c4.jpg" alt="Static Image 4">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Handmade Applique Work Notebook</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 300</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<<!-- Products Start -->
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Scrap Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
    <!-- Static images -->
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/s1.jpg" alt="Static Image 1">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Tyres</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 500</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/s2.jpg" alt="Static Image 2">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Battery</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 750</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/s3.jpg" alt="Static Image 3">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Ram</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹500</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
        <div class="card product-item border-0 mb-4">
            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img style="width:300px; height:300px;" class="img-fluid w-100" src="./user/assets/img/s4.jpg" alt="Static Image 4">
            </div>
            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3">Old Television</h6>
                <div class="d-flex justify-content-center">
                    <h6>₹ 2500</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include 'footer.php';

?>