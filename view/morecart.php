<?php
session_start();
include "../model/sanpham.php";
include "../model/pdo.php";
include "../model/cart.php";
if (isset($_GET['id'])) {
    del_giohang($_GET['id']);
}
?>
<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                            <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
                        </svg></li>
                    <li class="breadcrumb-item"><a href="index.php?act=cart">Giỏ hàng</a> <svg class="breadcrumb-arrow" width="6px" height="9px">
                            <use xlink:href="css/images/sprite.svg#arrow-rounded-right-6x9"></use>
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
                foreach ($_SESSION['cart'] as $cart) {
                    $sp = listone_sanpham($cart[0]);
                ?>
                    <tr class="cart-table__row">
                        <td class="cart-table__column cart-table__column--image">
                            <div class="product-image">
                                <a href="#" class="product-image__body">
                                    <img class="product-image__img" src="upload/product/<?php echo $sp['img'] ?>" alt="">
                                </a>
                            </div>
                        </td>
                        <td class="cart-table__column cart-table__column--product">
                            <a href="#" class="cart-table__product-name"><?php echo $sp['name'] ?></a>
                        </td>
                        <td class="cart-table__column cart-table__column--price" data-title="Price"><?php echo $sp['price'] ?> VNĐ</td>
                        <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                            <div class="input-number"><input class="form-control input-number__input" type="number" min="1" value="<?php echo $cart[1] ?>">
                                <div class="input-number__add" onclick="<?php $cart[1]++ ?>"></div>
                                <div class="input-number__sub" onclick="<?php $cart[1]-- ?>"></div>
                            </div>
                        </td>
                        <td class="cart-table__column cart-table__column--total" data-title="Total"><?php echo $cart[1] * $sp['price'] ?> VNĐ</td>
                        <td class="cart-table__column cart-table__column--remove">
                            <button type="button" class="btn btn-light btn-sm btn-svg-icon" onclick="delCart(<?php echo $sp['id'] ?>)">
                                <svg width="12px" height="12px">
                                    <use xlink:href="css/images/sprite.svg#cross-12"></use>
                                </svg></button>
                        </td>
                    </tr>
                <?php
                    $cart_total += $sp['price'] * $cart[1];
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
                                        if ($cart_total != 0) {
                                            echo $cart_total + 25000;
                                        } else echo 0;
                                        ?> VNĐ</td>
                                </tr>
                            </tfoot>
                        </table>
                        <?php
                        if (count($_SESSION['cart']) == 0) {
                        ?>
                            <button class="btn btn-secondary btn-xl btn-block cart__checkout-button" disabled>Thanh toán</button>
                        <?php
                        } else {
                        ?>
                            <a class="btn btn-primary btn-xl btn-block cart__checkout-button" href="index.php?act=checkout">Thanh toán</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>