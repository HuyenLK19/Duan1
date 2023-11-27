<!-- site__body -->
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">

            </div>
            <div class="page-header__title">
                <h1>Tài Khoản của tôi</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 d-flex">
                    <div class="account-nav flex-grow-1">
                        <h4 class="account-nav__title">Navigation</h4>
                        <ul>
                            <li class="account-nav__item"><a href="index.php?act=suatk">Chỉnh sửa hồ sơ</a></li>
                            <li class="account-nav__item"><a href="account-orders.html">Lịch sử đơn hàng</a></li>
                            <li class="account-nav__item"><a href="account-order-details.html">Đơn mua</a></li>
                            
                            <!-- <li class="account-nav__item"><a href="account-addresses.html">Địa chỉ</a></li>
                            <li class="account-nav__item"><a href="account-edit-address.html">Sửa địa chỉ</a>
                            </li>
                            <li class="account-nav__item"><a href="account-password.html">Mật khẩu</a></li> -->
                            <li class="account-nav__item"><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                    <div class="dashboard">

                        <!--  -->


                            <!-- Kiểm tra xem ảnh đại diện có tồn tại không -->
                            <?php 
                             foreach ($user_info as $tk) {
                                extract($tk);
                                // $hinh = "upload/product/" . $img;

                        echo '   <div class="card-body profile-card__body">
                        <div class="profile-card__avatar"><img src="" alt=""></div>
                        <div class="profile-card__name">'.$name.'</div>
                        <div class="profile-card__email">'.$email.'</div>
                        <div class="profile-card__edit">
                            <a href="index.php?act=suatk" class="btn btn-secondary btn-sm">Chỉnh sửa hồ sơ</a>
                        </div>
                    </div>
                
                <div class="dashboard__address card address-card address-card--featured">
                    <div class="address-card__badge">ĐỊA CHỈ MẶC ĐỊNH</div>
                    <div class="address-card__body">
                        <div class="address-card__name">'.$name.'</div>
                        <div class="address-card__row">
                            '.$address.'
                        </div>
                        <div class="address-card__row">
                            <div class="address-card__row-title">Số điện thoại</div>
                            <div class="address-card__row-content">'.$tel.'</div>
                        </div>
                        <div class="address-card__row">
                            <div class="address-card__row-title">Địa chỉ email</div>
                            <div class="address-card__row-content">'.$email.'</div>
                        </div>
                        <div class="address-card__footer">
                            <a href="account-edit-address.html">sửa địa chỉ</a>
                        </div>
                    </div>
                </div>';

                             }

                          ?>


                             
                        </div>


                        <!--  -->
                        <div class="dashboard__orders card">
                            <div class="card-header">
                                <h5>những đơn đặt hàng gần đây</h5>
                            </div>
                            <div class="card-divider"></div>
                            <div class="card-table">
                                <div class="table-responsive-sm">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ĐẶT HÀNG</th>
                                                <th>NGÀY</th>
                                                <th>TRẠNG THÁI</th>
                                                <th>TỔNG CỘNG</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">#8132</a></td>
                                                <td>02 April, 2019</td>
                                                <td>Pending</td>
                                                <td>$2,719.00 for 5 item(s)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">#7592</a></td>
                                                <td>28 March, 2019</td>
                                                <td>Pending</td>
                                                <td>$374.00 for 3 item(s)</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">#7192</a></td>
                                                <td>15 March, 2019</td>
                                                <td>Shipped</td>
                                                <td>$791.00 for 4 item(s)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- site__body / end -->