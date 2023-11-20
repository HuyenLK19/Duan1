<!-- site__body -->
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__title">
                <h1>Thanh toán</h1>
            </div>
        </div>
    </div>
    <div class="checkout block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Hóa đơn</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-first-name">Họ</label>
                                    <input type="text" class="form-control" value="Nhập họ" id="checkout-first-name">
                                </div>
                                <div class="form-group col-md-6"><label for="checkout-last-name">Tên</label>
                                    <input type="text" class="form-control" value="Nhập tên" id="checkout-last-name">
                                </div>
                            </div>
                            <div class="form-group"><label for="checkout-street-address">Địa chỉ</label>
                                <input type="text" class="form-control" id="checkout-street-address">
                            </div>
                            <div class="form-group"><label for="checkout-city">Tỉnh</label> <input type="text" class="form-control" id="checkout-city"></div>
                            <div class="form-group"><label for="checkout-state">Quận / Huyện / Thành phố</label> <input type="text" class="form-control" id="checkout-state"></div>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-email">Địa chỉ email</label>
                                    <input type="email" class="form-control" id="checkout-email">
                                </div>
                                <div class="form-group col-md-6"><label for="checkout-phone">Điện thoại</label> <input type="text" class="form-control" id="checkout-phone"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Đơn hàng của bạn</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                    <?php
                                    $cart_total = 0;
                                    foreach ($list as $gh) {
                                    ?>
                                        <tr>
                                            <td><?php echo $gh['name'] ?> × <?php echo $gh['soluong'] ?></td>
                                            <td><?php echo $gh['soluong'] * $gh['price'] ?> VNĐ</td>
                                        </tr>
                                    <?php
                                        $cart_total += $gh['price'] * $gh['soluong'];
                                    }
                                    ?>
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Tổng phụ</th>
                                        <td><?php echo $cart_total ?> VNĐ</td>
                                    </tr>
                                    <tr>
                                        <th>Phí ship</th>
                                        <td>25000 VNĐ</td>
                                    </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Tổng cộng</th>
                                        <td><?php echo $cart_total + 25000 ?> VNĐ</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="checkout_payment_method" type="radio" checked="checked">
                                                    <span class="input-radio__circle"></span> 
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Chuyển khoản</span>
                                            </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Thực hiện thanh
                                                toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng
                                                ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của
                                                bạn sẽ không được vận chuyển cho đến khi tiền đã được xóa trong tài
                                                khoản của chúng tôi.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="checkout_payment_method" type="radio"> 
                                                    <span class="input-radio__circle"></span> 
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Thanh toán bằng tiền mặt</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Thanh toán khi giao hàng.</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span class="input-check__body"><input class="input-check__input" type="checkbox" id="checkout-terms"> <span class="input-check__box"></span> <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label" for="checkout-terms">Tôi đã đọc và đồng ý với <a target="_blank" href="terms-and-conditions.html"> các điều khoản và điều kiện của trang
                                            web</a>*</label></div>
                            </div><button type="submit" class="btn btn-primary btn-xl btn-block">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->