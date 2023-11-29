<style>
    .box-ul li a {
        font-size: 20px;
    }

    .profile-card__name,
    .profile-card__email,
    .address-card__name,
    .address-card__row,
    .address-card__row-content {
        font-size: 20px;
        margin-top: 15px;
    }

    .address-card__row-title {
        font-size: 18px;
    }
</style>
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
                        <h4 class="account-nav__title">Menu</h4>
                        <ul class="box-ul">
                            <li class="account-nav__item"><a href="index.php?act=suatk&&id=<?php echo $user_info[0][0]; ?>">Chỉnh sửa hồ sơ</a></li>
                            <li class="account-nav__item"><a href="index.php?act=lichsumua">Lịch sử đặt hàng</a></li>
                            <!-- <li class="account-nav__item"><a href="account-order-details.html">Đơn mua</a> -->
                            </li>

                            <li class="account-nav__item"><a href="index.php?act=matkhau">Mật khẩu</a></li>
                            <li class="account-nav__item"><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                    <div class="dashboard">

                        <!-- Kiểm tra xem ảnh đại diện có tồn tại không -->
                        <?php
                        foreach ($user_info as $tk) {
                            extract($tk);

                            $hinh = "upload/avatar/" . $user_info[0][5];
                            echo '   <div class="card-body profile-card__body">
                            <div class="profile-card__avatar"><img src="' . $hinh . '" alt=""></div>
                        <div class="profile-card__name">' . $name . '</div>
                        <div class="profile-card__email">' . $email . '</div>
                        <div class="profile-card__edit">
                        </div>
                    </div>
                <div class="dashboard__address card address-card address-card--featured">
                    <div class="address-card__badge">ĐỊA CHỈ MẶC ĐỊNH</div>
                    <div class="address-card__body">
                    <div class="address-card__row-title">Tài khoản</div>

                        <div class="address-card__name">' . $user . '</div>
<div class="address-card__row">
                            ' . $address . '
                        </div>
                        <div class="address-card__row">
                            <div class="address-card__row-title">Số điện thoại</div>
                            <div class="address-card__row-content">' . $tel . '</div>
                        </div>
                        <div class="address-card__row">
                            <div class="address-card__row-title">Địa chỉ email</div>
                            <div class="address-card__row-content">' . $email . '</div>
                        </div>
                       
                        <div class="address-card__footer">
                            
                        </div>
                    </div>
                </div>';
                        }

                        ?>

                    </div>
                    <div class="dashboard__orders card">
                        <div class="card-header">
                            <h5>Đơn đặt đã đặt</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-table">
                            <div class="table-responsive-sm">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TÊN SẢN PHẨM</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>GIÁ</th>
                                            <th>SỐ LƯỢNG</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>PHƯƠNG THỨC THANH TOÁN</th>
                                            <th>TỔNG</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($listdh as $dh) {
                                        ?>
                                            <tr>
                                                <td><a href="#"><?=$dh['id']?></a></td>
                                                <td><?=$dh['tensp']?></td>
                                                <td><?=$dh['ngaydathang']?></td>
                                                <td><?=$dh['giasp']?> VND</td>
                                                <td><?=$dh['soluong']?></td>
                                                <td><?php  
                                                    if ($dh['status'] == 0){
                                                        echo "Đang vận chuyển";
                                                    } else echo "Đơn đã hủy";
?></td>
                                                <td><?php  
                                                    if ($dh['pttt'] == 1){
                                                        echo "Thanh toán khi nhận hàng";
                                                    } else echo "Chuyển khoản";
                                                ?></td>
                                                <td><?php echo $dh['giasp'] * $dh['soluong'] ?> VND</td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
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
</div>
