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
                            <th>Số lượng</th>

                            <th>Tổng</th>
                            <th>Pương thức thanh toán</th>
                            <th>Trạng thái đơn hàng</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbill as $bill) {
                        ?>
                            <tr onclick="window.location.href='index.php?act=chitietdonhang&&id=<?php echo $bill['id'] ?>'" style="cursor: pointer;">
                                <td><?php echo $bill['id'] ?></td>

                                <td><?php echo $bill['soluong'] ?></td>

                                <td><?php echo $bill['tong'] ?></td>
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