<div class="site__body">
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Trang chủ</a> <svg class="breadcrumb-arrow"
                                        width="6px" height="9px">
                                        <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                        <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $ctsp['name']?>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="product product--layout--standard" data-layout="standard">
                        <div class="product__content"><!-- .product__gallery -->
                            <div class="product__gallery">
                                <div class="product-gallery">
                                    <div class="product-gallery__featured"><button class="product-gallery__zoom"><svg
                                                width="24px" height="24px">
                                                <use xlink:href="css/images/sprite.svg#zoom-in-24"></use>
                                            </svg></button>
                                        <div class="owl-carousel" id="product-image">
                                            <div class="product-image product-image--location--gallery"><!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="upload/product/<?php echo $ctsp['img'] ?>" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img" src="upload/product/<?php echo $ctsp['img'] ?>"
                                                        alt=""></a></div>
                                            <div class="product-image product-image--location--gallery"><!--
                                --> <a href="css/images/products/product-16-3.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img"
                                                        src="css/images/products/product-16-3.jpg" alt=""></a></div>
                                            <div class="product-image product-image--location--gallery"><!--
                                The data-width and data-height attributes must contain the size of a larger version
                                of the product image.

                                If you do not know the image size, you can remove the data-width and data-height
                                attribute, in which case the width and height will be obtained from the naturalWidth
                                and naturalHeight property of img.product-image__img.
                                --> <a href="css/images/products/product-16-4.jpg" data-width="700" data-height="700"
                                                    class="product-image__body" target="_blank"><img
                                                        class="product-image__img"
                                                        src="css/images/products/product-16-4.jpg" alt=""></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .product__gallery / end --><!-- .product__info -->
                            <div class="product__info">
                                <div class="product__wishlist-compare"><button type="button"
                                        class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                        data-placement="right" title="Wishlist"><svg width="16px" height="16px">
                                            <use xlink:href="css/images/sprite.svg#wishlist-16"></use>
                                        </svg></button> <button type="button" class="btn btn-sm btn-light btn-svg-icon"
                                        data-toggle="tooltip" data-placement="right" title="Compare"><svg width="16px"
                                            height="16px">
                                            <use xlink:href="css/images/sprite.svg#compare-16"></use>
                                        </svg></button></div>
                                <h1 class="product__name"><?php echo $ctsp['name']?></h1>
                                <div class="product__rating">
                                    <div class="product__rating-stars">
                                        <div class="rating">
                                            <div class="rating__body"><svg class="rating__star rating__star--active"
                                                    width="13px" height="12px">
                                                    <g class="rating__fill">
                                                        <use xlink:href="css/images/sprite.svg#star-normal"></use>
                                                    </g>
                                                    <g class="rating__stroke">
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
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
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
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
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
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
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
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
                                                        <use xlink:href="css/images/sprite.svg#star-normal-stroke"></use>
                                                    </g>
                                                </svg>
                                                <div class="rating__star rating__star--only-edge rating__star--active">
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
                                    <div class="product__rating-legend"><a href="#">7 Reviews</a><span>/</span><a
                                            href="#">Viết đánh giá</a></div>
                                </div>
                                <div class="product__description"><?php echo $ctsp['mota']; ?></div>
                                
                            </div><!-- .product__info / end --><!-- .product__sidebar -->
                            <div class="product__sidebar">
                                <div class="product__availability">Availability: <span class="text-success">In
                                        Stock</span></div>
                                <div class="product__prices">700.000 VND</div><!-- .product__options -->
                                <form class="product__options">
                                    <div class="form-group product__option"><label class="product__option-label"
                                            for="product-quantity">Số Lượng</label>
                                        <div class="product__actions">
                                            <div class="product__actions-item">
                                                <div class="input-number product__quantity"><input id="product-quantity"
                                                        class="input-number__input form-control form-control-lg"
                                                        type="number" min="1" value="1">
                                                    <div class="input-number__add"></div>
                                                    <div class="input-number__sub"></div>
                                                </div>
                                            </div>
                                            <div class="product__actions-item product__actions-item--addtocart"><button
                                                    class="btn btn-primary btn-lg">Thêm vào giỏ hàng</button></div>
                                        </div>
                                    </div>
                                </form><!-- .product__options / end -->
                            </div><!-- .product__end -->
                            <div class="product__footer">
                                <div class="product__tags tags">
                                </div>
                                <div class="product__share-links share-links">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tabs product-tabs--sticky">
                        <div class="product-tabs__list">
                            <div class="product-tabs__list-body">
                                <div class="product-tabs__list-container container"><a href="#tab-description"
                                        class="product-tabs__item product-tabs__item--active">Mô tả</a> <a
                                        href="#tab-reviews" class="product-tabs__item">Bình luận</a></div>
                            </div>
                        </div>
                        <div class="product-tabs__content">
                            <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                                <div class="typography">
                                    <h3>Mô tả sản phẩm</h3>
                                    <p><?php echo $ctsp['mota']?></p>
                                    
                                </div>
                            </div>
                            <div class="product-tabs__pane" id="tab-specification">
                                <div class="spec">
                                    <h3 class="spec__header">Specification</h3>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">General</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Material</div>
                                            <div class="spec__value">Aluminium, Plastic</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Engine Type</div>
                                            <div class="spec__value">Brushless</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Battery Voltage</div>
                                            <div class="spec__value">18 V</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Battery Type</div>
                                            <div class="spec__value">Li-lon</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Number of Speeds</div>
                                            <div class="spec__value">2</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Charge Time</div>
                                            <div class="spec__value">1.08 h</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Weight</div>
                                            <div class="spec__value">1.5 kg</div>
                                        </div>
                                    </div>
                                    <div class="spec__section">
                                        <h4 class="spec__section-title">Dimensions</h4>
                                        <div class="spec__row">
                                            <div class="spec__name">Length</div>
                                            <div class="spec__value">99 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Width</div>
                                            <div class="spec__value">207 mm</div>
                                        </div>
                                        <div class="spec__row">
                                            <div class="spec__name">Height</div>
                                            <div class="spec__value">208 mm</div>
                                        </div>
                                    </div>
                                    <div class="spec__disclaimer">Information on technical characteristics, the delivery
                                        set, the country of manufacture and the appearance of the goods is for reference
                                        only and is based on the latest information available at the time of
                                        publication.</div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div><!-- .block-products-carousel -->
            <div class="block block-products-carousel" data-layout="grid-5" data-mobile-grid-columns="2">
                <div class="container">
                    <div class="block-header">
                        <h3 class="block-header__title">Sản phẩm tương tự</h3>
                        <div class="block-header__divider"></div>
                        <div class="block-header__arrows-list"><button
                                class="block-header__arrow block-header__arrow--left" type="button"><svg width="7px"
                                    height="11px">
                                    <use xlink:href="css/images/sprite.svg#arrow-rounded-left-7x11"></use>
                                </svg></button> <button class="block-header__arrow block-header__arrow--right"
                                type="button"><svg width="7px" height="11px">
                                    <use xlink:href="css/images/sprite.svg#arrow-rounded-right-7x11"></use>
                                </svg></button></div>
                    </div>
                    <div class="block-products-carousel__slider">
                        <div class="block-products-carousel__preloader"></div>
                        <div class="owl-carousel">
                            <!-- <?php
                                foreach($list as $sp){
                            ?> -->
                                                        <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card product-card--hidden-actions"><button
                                            class="product-card__quickview" type="button"><svg width="16px"
                                                height="16px">
                                                <use xlink:href="css/images/sprite.svg#quickview-16"></use>
                                            </svg> <span class="fake-svg-icon"></span></button>
                                        <div class="product-card__image product-image"><a href="product.html"
                                                class="product-image__body"><img class="product-image__img"
                                                    src="css/images/products/anh2.webp" alt=""></a></div>
                                        <div class="product-card__info">
                                            <div class="product-card__name"><a href="product.html"><?php echo $sp['name']?></a>
                                            </div>
                                            <div class="product-card__rating">
                                                <div class="product-card__rating-stars">
                                                    <div class="rating">
                                                        <div class="rating__body"><svg
                                                                class="rating__star rating__star--active" width="13px"
                                                                height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="css/images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="css/images/sprite.svg#star-normal-stroke">
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
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="css/images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="css/images/sprite.svg#star-normal-stroke">
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
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="css/images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="css/images/sprite.svg#star-normal-stroke">
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
                                                            </div><svg class="rating__star rating__star--active"
                                                                width="13px" height="12px">
                                                                <g class="rating__fill">
                                                                    <use xlink:href="css/images/sprite.svg#star-normal">
                                                                    </use>
                                                                </g>
                                                                <g class="rating__stroke">
                                                                    <use
                                                                        xlink:href="css/images/sprite.svg#star-normal-stroke">
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
                                                                    <use
                                                                        xlink:href="css/images/sprite.svg#star-normal-stroke">
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
                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In Stock</span></div>
                                            <div class="product-card__prices">149.000 VND</div>
                                            <div class="product-card__buttons"><button
                                                    class="btn btn-primary product-card__addtocart" type="button">Add To
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
                                                    </svg> <span
                                                        class="fake-svg-icon fake-svg-icon--compare-16"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <div class="block-products-carousel__column">
                            </div>
                            <?php        
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div><!-- .block-products-carousel / end -->
        </div><!-- site__body / end -->