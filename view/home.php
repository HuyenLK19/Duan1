<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<style>
    .slide {
        margin-top: 40px;
    }

    .slide img {
        height: 400px;
    }

    .block-products__list {
        width: 850px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 40px;
    }

    .block-products__list-item {
        width: 100%;
        height: 100%;
    }

    .block-header__titles {
        color: #DD0000;
    }

    .block-products--layout--large-first {
        margin-top: 100px;
    }

    .block-products__body {
        max-width: auto;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(4, 1fr);

        grid-gap: 10px;
    }

    .block-products__featured-item {
        width: 266.5px;
        height: 430px;
    }

    .product-card:before {
        border: none;
    }

    .product-card-hoverable .product-card__actions {
        display: none;
    }

    .product-card-hoverable:hover .product-card__actions {
        display: block;
    }

    .block-header__titles img {
        width: 50px;
        margin: -15px 0 0 -10px;
    }

    .box-service {
        width: 1120px;
        height: 350px;
        margin: auto;
        overflow: hidden;
        margin-top: 70px;
        display: flex;
        position: relative;


    }

    .box-service .box-img img {
        height: 350px;
        width: 95%;
        border-radius: 5px;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }

    .btn-sv {
        position: absolute;
        z-index: 9999;
        top: 80%;
        left: 10%;
        background-color: #FFD333;
        width: 350px;
        height: 45px;
        border: none;
        border-radius: 10px;
        font-size: 20px;

    }

    .btn-sv:hover {
        background-color: #fff;
        /* color: #FFD333; */
        border: 1px solid #292929;
    }

    .box-sv {
        width: 50%;
        height: 350px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        overflow: hidden;

    }

    .box-sv img {
        width: 100%;
        height: 100%;
        border-radius: 7px;
    }
</style>
<!-- site__body -->
<div class="site__body">
    <!-- .block-banner -->

    <!-- <div class="active-button">
                <button class="next" onclick="prevSlide(1)"><i class="fa-solid fa-arrow-right"></i></i></button>
                <button class="prev" onclick="nextSlide(-1)"><i class="fa-solid fa-arrow-right"></i></button>
            </div> -->
    <!-- .block-banner / end -->
    <!-- .block-features -->
    <div class="block block-features block-features--layout--classic">
        <div class="container">
            <div class="slide">
                <img src="css/images/banners/banner.webp" class="banner" alt="">
            </div>
            <div class="slide">
                <img src="css/images/banners/banner2.png" class="banner" alt="">
            </div>
            <div class="slide">
                <img src="css/images/banners/banner3.png" class="banner" alt="">
            </div>
            <div class="block-features__list">
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-free-delivery-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Miễn phí vận chuyển</div>
                        <div class="block-features__subtitle">Từ đơn 50k trở lên</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-24-hours-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Hỗ trợ 24/7</div>
                        <div class="block-features__subtitle">Hỗ trợ mọi lúc</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-payment-security-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">100% bảo mật</div>
                        <div class="block-features__subtitle">An toàn tuyệt đối</div>
                    </div>
                </div>
                <div class="block-features__divider"></div>
                <div class="block-features__item">
                    <div class="block-features__icon"><svg width="48px" height="48px">
                            <use xlink:href="css/images/sprite.svg#fi-tag-48"></use>
                        </svg></div>
                    <div class="block-features__content">
                        <div class="block-features__title">Ưu đãi hấp dẫn</div>
                        <div class="block-features__subtitle">Giảm giá đến 90%</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .block-features / end -->
    <div class="block block--highlighted block-categories block-categories--layout--classic">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Danh mục</h3>
                        <div class="block-header__divider"></div>
                    </div>
                    <div class="block-categories__list">
                    <?php
                        foreach($listdm as $dm){
                    ?>
                        <div class="block-categories__item category-card category-card--layout--classic">
                            <div class="category-card__body">
                                <div class="category-card__image"><a href="#"><img
                                            src="upload/category/<?php echo $dm['img']?>" alt=""></a></div>
                                <div class="category-card__content">
                                    
                                    <div class="category-card__name"><a href="#"><?php echo $dm['name']?></a></div>
                                    <div class="category-card__all"><a href="#">Hiển thị tất cả</a></div>
                                    <div class="category-card__products">572 Products</div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    </div>
                </div>
            </div>
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-4" data-mobile-grid-columns="2">
        <div class="container">
            <div class="block-header">

                <h3 class="block-header__titles">Sản phẩm Hot <img src="css/images/products/flashsale-hot.png" alt=""></h3>
                <div class="block-header__divider"></div>
                <div class="block-header__arrows-list"><button class="block-header__arrow block-header__arrow--left" type="button"><svg width="7px" height="11px">
                            <use xlink:href="css/images/sprite.svg#arrow-rounded-left-7x11"></use>
                        </svg></button> <button class="block-header__arrow block-header__arrow--right" type="button"><svg width="7px" height="11px">
                            <use xlink:href="css/images/sprite.svg#arrow-rounded-right-7x11"></use>
                        </svg></button></div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    <?php


                    foreach ($sphot as $sp) {
                        extract($sp);
                        $hinh = "upload/product/" . $img;
                        $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
                        echo '<div class="block-products-carousel__column ">
                        <div class="block-products-carousel__cell">
                            <div class="product-card product-card--hidden-actions">
                                <div class="product-card__badges-list">
                                    <div class="product-card__badge product-card__badge--new">New</div>
                                </div>
                                <div class="product-card__image product-image"><a href="' . $linksp . '"
                                        class="product-image__body"><img class="product-image__img"
                                            src="' . $hinh . '" alt=""></a></div>
                                <div class="product-card__info">
                                    <div class="product-card__name"><a href="' . $linksp . '">' . $name . '</a></div>
                                    <div class="product-card__rating">
                                        <div class="product-card__rating-stars">
                                            <div class="rating">
                                                <div class="rating__body"><svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="css/images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="css/images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="css/images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="css/images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div
                                                        class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="css/images/sprite.svg#star-normal">
                                                            </use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card__rating-legend">9 Reviews</div>
                                    </div>
                                    <ul class="product-card__features-list">
                                        <li>Speed: 750 RPM</li>
                                        <li>Power Source: Cordless-Electric</li>
                                        <li>Battery Cell Type: Lithium</li>
                                        <li>Voltage: 20 Volts</li>
                                        <li>Battery Capacity: 2 Ah</li>
                                    </ul>
                                </div>
                                <div class="product-card__actions">
                                    <div class="product-card__availability">Availability: <span class="text-success">In
                                            Stock</span></div>
                                    <div class="product-card__prices">' . $price . ' VND</div>
                                    <div class="product-card__buttons"><button
                                            class="btn btn-primary product-card__addtocart" onclick="window.location.href=`index.php?act=addtocart&&id='.$id.'`" type="button">Add To
                                            Cart</button> <button
                                            class="btn btn-secondary product-card__addtocart product-card__addtocart--list"
                                            type="button">Add To Cart</button> <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="css/images/sprite.svg#wishlist-16"></use>
                                            </svg> <span
                                                class="fake-svg-icon fake-svg-icon--wishlist-16"></span></button>
                                        <button
                                            class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare"
                                            type="button"><svg width="16px" height="16px">
                                                <use xlink:href="css/images/sprite.svg#compare-16"></use>
                                            </svg> <spa
                                                class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div><!-- .block-products-carousel / end -->


    <div class="box-service">
        <div class="box-img">
            <img src="css/images/products/anhshop1.jpeg" alt="">
            <a href="index.php?act=lienhe"><button class="btn-sv">Liên hệ ngay nhận ưu đãi lớn</button></a>
        </div>
        <div class="box-sv">
            <img src="css/images/products/sale.png" alt="">
            <!-- <img src="css/images/products/sale2.webp" alt=""> -->

        </div>
    </div>



    <!-- .block-products -->
    
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Tất cả sản phẩm</h3>
                <div class="block-header__divider"></div>
            </div>


            <div class="block-products__body">
                <?php

                $i = 0;
                foreach ($allsp as $sp) {
                    extract($sp);
                    $hinh = "upload/product/" . $img;
                    $linksp = "index.php?act=chitietsanpham&idsp=" . $id;

                    echo '
                    <div class="product-card product-card--hidden-actions product-card-hoverable">
                   

                    <div class="block-products__featured ">
                    
                    <div class="block-products__featured-item ">
                        <div class="product-card product-card--hidden-actions">
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--new">New</div>
                            </div>
                            <div class="product-card__image product-image"><a href="' . $linksp . '"
                                    class="product-image__body"><img class="product-image__img"
                                        src="' . $hinh . '" alt=""></a></div>
                            <div class="product-card__info">
                                <div class="product-card__name"><a href="' . $linksp . '">' . $name . '</a></div>
                                <div class="product-card__rating">
                                    <div class="product-card__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body"><svg class="rating__star rating__star--active"
                                                    width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                        </use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                        </use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                        </use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star rating__star--active" width="13px"
                                                    height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                        </use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div><svg class="rating__star" width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke">
                                                        </use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge">
                                                    <div class="rating__fill">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                    <div class="rating__stroke">
                                                        <div class="fake-svg-icon"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__rating-legend">9 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">Availability: <span class="text-success">In
                                        Stock</span></div>
                                <div class="product-card__prices">' . $price . ' VND</div>
                               
                            </div>
                        </div>
                    </div>
                    </div>
                    
                   
                </div>';
                    $i += 1;
                }

                ?>

            </div>

        </div>
    </div>
</div><!-- .block-products / end -->
</div><!-- site__body / end -->
<script>
    // slide
    let indexs = 0;
    const slideShow = () => {
        const mySlide = document.querySelectorAll('.slide');
        for (let i = 0; i < mySlide.length; i++) {
            mySlide[i].style.display = "none";
        }
        indexs++;

        if (indexs > mySlide.length - 1) {
            indexs = 0;
        }
        mySlide[indexs].style.display = "block";
        setTimeout(slideShow, 2000);
    }
    slideShow();
</script>