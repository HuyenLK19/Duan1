<!-- site__body -->
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">

            <div class="page-header__title">
                <h1>Thủ tục thanh toán</h1>
            </div>
        </div>
    </div>
    <div class="checkout block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Chi tiết thanh toán</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-first-name">Tên</label> <input
                                        type="text" class="form-control" id="checkout-first-name"
                                        placeholder="First Name"></div>
                                <div class="form-group col-md-6"><label for="checkout-last-name">Họ</label> <input
                                        type="text" class="form-control" id="checkout-last-name"
                                        placeholder="Last Name"></div>
                            </div>
                            <div class="form-group"><label for="checkout-company-name">Tên công ty <span
                                        class="text-muted">(Tùy chọn)</span></label> <input type="text"
                                    class="form-control" id="checkout-company-name" placeholder="Company Name"></div>
                            <div class="form-group"><label for="checkout-country">Quốc gia</label> <select
                                    id="checkout-country" class="form-control form-control-select2">
                                    <option>Chọn một quốc gia...</option>
                                    <option>United States</option>
                                    <option>Russia</option>
                                    <option>Italy</option>
                                    <option>France</option>
                                    <option>Ukraine</option>
                                    <option>Germany</option>
                                    <option>Australia</option>
                                </select></div>
                            <div class="form-group"><label for="checkout-street-address">Địa chỉ đường phố</label>
                                <input type="text" class="form-control" id="checkout-street-address">
                            </div>
                            <div class="form-group"><label for="checkout-address">Căn hộ, dãy phòng, căn hộ, v.v. (Tùy
                                    chọn) <span class="text-muted">(Optional)</span></label> <input type="text"
                                    class="form-control" id="checkout-address"></div>
                            <div class="form-group"><label for="checkout-city">Thị trấn / Thành phố</label> <input
                                    type="text" class="form-control" id="checkout-city"></div>
                            <div class="form-group"><label for="checkout-state">Quận</label> <input type="text"
                                    class="form-control" id="checkout-state"></div>
                            <div class="form-group"><label for="checkout-postcode">Mã bưu / Zip</label> <input
                                    type="text" class="form-control" id="checkout-postcode"></div>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-email">Địa chỉ email</label>
                                    <input type="email" class="form-control" id="checkout-email">
                                </div>
                                <div class="form-group col-md-6"><label for="checkout-phone">Điện thoại</label> <input
                                        type="text" class="form-control" id="checkout-phone"></div>
                            </div>
                            <div class="form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input" type="checkbox"
                                                id="checkout-create-account"> <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label"
                                        for="checkout-create-account">Tạo một tài khoản?</label></div>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">Chi tiết vận chuyển</h3>
                            <div class="form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input" type="checkbox"
                                                id="checkout-different-address"> <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label"
                                        for="checkout-different-address">SGửi đến một địa chỉ khác?</label></div>
                            </div>
                            <div class="form-group"><label for="checkout-comment">Ghi chú đơn hàng <span
                                        class="text-muted">(Tùy chọn)</span></label> <textarea id="checkout-comment"
                                    class="form-control" rows="4"></textarea></div>
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
                                        <th>
                                            Sản phẩm</th>
                                        <th>Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                    <tr>
                                        <td>Máy Bào Điện Brandix KL370090G 300 Watts × 2</td>
                                        <td>$1,398.00</td>
                                    </tr>
                                    <tr>
                                        <td>Undefined Tool IRadix DPS3000SY 2700 watts × 1</td>
                                        <td>$849.00</td>
                                    </tr>
                                    <tr>
                                        <td>Brandix Router Power Tool 2017ERXPK × 3</td>
                                        <td>$3,630.00</td>
                                    </tr>
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Tổng phụ</th>
                                        <td>$5,877.00</td>
                                    </tr>
                                    <tr>
                                        <th>Lưu trữ tín dụng</th>
                                        <td>$-20.00</td>
                                    </tr>
                                    <tr>
                                        <th>Đang chuyển hàng</th>
                                        <td>$25.00</td>
                                    </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Tổng cộng</th>
                                        <td>$5,882.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active"><label
                                            class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio" checked="checked">
                                                    <span class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">Chuyển khoản trực
                                                tiếp</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Thực hiện thanh
                                                toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng
                                                ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn đặt hàng của
                                                bạn sẽ không được vận chuyển cho đến khi tiền đã được xóa trong tài
                                                khoản của chúng tôi.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item"><label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio"> <span
                                                        class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">Kiểm tra thanh toán</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Please send a
                                                check to Store Name, Store Street, Store Town, Store State / County,
                                                Store Postcode.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item"><label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio"> <span
                                                        class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">Cash on delivery</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay with cash upon
                                                delivery.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item"><label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio"> <span
                                                        class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">PayPal</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay via PayPal;
                                                you can pay with your credit card if you don’t have a PayPal account.
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input" type="checkbox"
                                                id="checkout-terms"> <span class="input-check__box"></span> <svg
                                                class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label"
                                        for="checkout-terms">Tôi đã đọc và đồng ý với <a target="_blank"
                                            href="terms-and-conditions.html"> các điều khoản và điều kiện của trang
                                            web</a>*</label></div>
                            </div><button type="submit" class="btn btn-primary btn-xl btn-block">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->