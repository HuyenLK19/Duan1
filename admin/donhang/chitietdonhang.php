
<div class="row">
    <div class="col-md-12">
        <div class="mt-3">
            <div class="clearfix">
                <div class="float-left mb-2">
                    <h3 class="m-0 d-print-none">Đơn hàng số <?php echo $_GET['id'] ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="float-left mt-3">
                        <p><strong>Ngày đặt hàng: </strong><?php echo $oneBill[0]['ngaydathang'] ?></p>
                        <p><strong>Tình trạng đơn hàng: </strong><?php if ($oneBill[0]['status'] == 0) { ?>
                                <span class="badge badge-success">Đang được vận chuyển</span>
                        </p>
                    <?php } else { ?>
                        <span class="badge badge-dark">Đã bị hủy</span></p>
                    <?php } ?>
                    <p><strong>ID đơn hàng: </strong>#<?php echo $oneBill['id'] ?></p>
                    </div>

                </div>
                <!-- end col -->
                <div class="col-4 offset-2">
                    <div class="text-sm-right">
                        <h5 class="font-16">Địa chỉ giao hàng<?php echo $oneBill[0]['address'] ?></h5>
                        <address class="line-h-24">
                            Tên người nhận: <?php echo $oneBill['tentk'] ?><br>
                            Địa chỉ: <?php echo $oneBill['diachi'] ?><br>
                            SĐT: <?php echo $oneBill['tel'] ?>
                        </address>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="row mt-3">
                <div class="col-sm-6">
                    <h5 class="font-16">Địa chỉ thanh toán</h5>
                    <address class="line-h-24">
                        Cửa hàng STROYKAI<br>
                        Hà Nội<br>
                        <abbr title="Phone">SĐT:</abbr> 091234567
                    </address>

                </div>

                <div class="col-sm-6">
                    <div class="text-sm-right">
                        <p><b>Tổng tiền:</b></p>
                        <h3><?php echo $oneBill['soluong']*$oneBill['giasp'] ?> VNĐ</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->