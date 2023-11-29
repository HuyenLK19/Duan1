<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Danh sách đơn hàng</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Tên người đặt</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Ngày đặt hàng</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Phương thức thanh toán</th>
                            <th>Trạng thái</th>
                            <th class="text-right">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbill as $bill) {
                        ?>
                            <tr onclick="window.location.href='index.php?act=chitietdonhang&&id=<?php echo $bill['id'] ?>'" style="cursor: pointer;">
                                <td><?php echo $bill['id'] ?></td>
                                <td><?php echo $bill['tensp'] ?></td>
                                <td><?php echo $bill['tentk'] ?></td>
                                <td><?php echo $bill['diachi'] ?></td>
                                <td><?php echo $bill['sdt'] ?></td>
                                <td><?php echo $bill['ngaydathang'] ?></td>
                                <td><?php echo $bill['giasp'] ?></td>
                                <td><?php echo $bill['soluong'] ?></td>
                                <td>
                                    <?php
                                    if ($bill['pttt'] ==  1) {
                                        echo "Thanh toán bằng tiền mặt";
                                    } else echo "Chuyển khoản";
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($bill['status'] ==  0) {
                                        echo "Đơn hàng đang được vận chuyển";
                                    } else echo "Đơn hàng đã bị hủy";
                                    ?>
                                </td>
                                <td><?php echo $bill['soluong'] * $bill['giasp'] ?></td>
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