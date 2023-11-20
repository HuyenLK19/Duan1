<!-- site__body -->
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item"><a href="#">Giỏ hàng</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg></li>
                        <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Giỏ hàng</h1>
            </div>
        </div>
    </div>
    <div class="cart block">
        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                    <tr class="cart-table__row">
                        <th class="cart-table__column cart-table__column--image">Ảnh sản phẩm</th>
                        <th class="cart-table__column cart-table__column--product">Tên sản phẩm</th>
                        <th class="cart-table__column cart-table__column--price">Giá</th>
                        <th class="cart-table__column cart-table__column--quantity">Số lượng</th>
                        <th class="cart-table__column cart-table__column--total">Tổng</th>
                        <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                </thead>
                <tbody class="cart-table__body">
                    <?php
                    $cart_total = 0;
                    foreach ($list as $gh) {
                    ?>
                        <tr class="cart-table__row">
                            <td class="cart-table__column cart-table__column--image">
                                <div class="product-image">
                                    <a href="#" class="product-image__body">
                                        <img class="product-image__img" src="upload/product/<?php echo $gh['img'] ?>" alt="">
                                    </a>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--product">
                                <a href="#" class="cart-table__product-name"><?php echo $gh['name'] ?></a>
                            </td>
                            <td class="cart-table__column cart-table__column--price" data-title="Price"><?php echo $gh['price'] ?> VNĐ</td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="<?php echo $gh['soluong'] ?>">
                                    <div class="input-number__add"></div>
                                    <div class="input-number__sub"></div>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--total" data-title="Total"><?php echo $gh['soluong']*$gh['price'] ?> VNĐ</td>
                            <td class="cart-table__column cart-table__column--remove">
                                <button type="button" class="btn btn-light btn-sm btn-svg-icon">
                                    <svg width="12px" height="12px">
                                        <use xlink:href="css/images/sprite.svg#cross-12"></use>
                                    </svg></button></td>
                        </tr>
                    <?php
                    $cart_total += $gh['price']*$gh['soluong'];
                    }
                    ?>
                </tbody>
            </table>
            <div class="cart__actions">
                <form class="cart__coupon-form">
                </form>
                <div class="cart__buttons">
                    <a href="index.php" class="btn btn-primary cart__update-button">Về trang chủ</a>
                </div>
            </div>
            <div class="row justify-content-end pt-5">
                <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Tổng tiền</h3>
                            <table class="cart__totals">
                                <thead class="cart__totals-header">
                                    <tr>
                                        <th>Tổng tiền sản phẩm</th>
                                        <td><?php echo $cart_total ?> VNĐ</td>
                                    </tr>
                                </thead>
                                <tbody class="cart__totals-body">
                                    <tr>
                                        <th>Phí ship</th>
                                        <td>25000 VNĐ</td>
                                    </tr>
                                </tbody>
                                <tfoot class="cart__totals-footer">
                                    <tr>
                                        <th>Tổng tiền</th>
                                        <td><?php 
                                        if ($cart_total != 0){
                                            echo $cart_total + 25000;
                                        } else echo 0;
                                        ?> VNĐ</td>
                                    </tr>
                                </tfoot>
                            </table><a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="index.php?act=checkout">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- site__body / end -->