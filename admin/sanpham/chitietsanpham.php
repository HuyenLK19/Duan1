<!-- <div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Chi tiết sản phẩm <?php echo $_GET['id'] ?></h4>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <form class="form-horizontal mt-4 mt-lg-0">
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Tên sản phẩm</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $product['name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Danh mục</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $product['cate_name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Giá sản phẩm</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $product['price'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Hình ảnh</label>
            <img src="../css/images/products/<?php echo $product['img'] ?>" style="width: 80px; height: 100px; margin-left: 10px">
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Mô tả</label>
            <div class="col-md-10">
                <textarea class="form-control" rows="5" readonly id="example-textarea"><?php echo $product['mota'] ?>
                </textarea>
            </div>
        </div>
    </form>
</div>
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Bình luận</h4>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%;">
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Nội dung bình luận</th>
                            <th>Người bình luận</th>
                            <th>Ngày bình luận</th>
                            <th style="width: 100px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Good</td>
                            <td>Mark</td>
                            <td>27/05/2004</td>
                            <td>
                                <a href="index.php?act=delbl" style="font-size: 20px;"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Good</td>
                            <td>Mark</td>
                            <td>27/05/2004</td>
                            <td>
                                <a href="index.php?act=delbl" style="font-size: 20px;"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Good</td>
                            <td>Mark</td>
                            <td>27/05/2004</td>
                            <td>
                                <a href="index.php?act=delbl" style="font-size: 20px;"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->
<!-- start  -->
<div class="row">
    <div class="col-md-12">
        <div class="mt-3">
            <div class="clearfix">
                <div class="float-left mb-2">
                    <img src="../upload/product/anh1.webp">
                </div>
                <div class="float-right">
                    <h3 class="m-0 d-print-none">Thông tin sản phẩm</h3>
                        <p><strong>Tên sản phẩm: </strong> ABCD</p>
                        <p><strong>Giá sản phẩm: </strong> <span class="badge badge-success">Paid</span></p>
                        <p><strong>Order ID: </strong> #123456</p>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <div class="float-left mt-3">
                        <p><b>Hello, Stanley Jones</b></p>
                        <p class="text-muted">Thanks a lot because you keep purchasing our products. Our company
                            promises to provide high quality products for you as well as outstanding
                            customer service for every transaction. </p>
                    </div>

                </div><!-- end col -->
                <div class="col-4 offset-2">
                    <div class="mt-3 float-right">
                        <p><strong>Order Date: </strong> Jan 17, 2016</p>
                        <p><strong>Order Status: </strong> <span class="badge badge-success">Paid</span></p>
                        <p><strong>Order ID: </strong> #123456</p>
                    </div>
                </div><!-- end col -->
            </div>
            <!-- end row -->

            <div class="row mt-3">
                <div class="col-sm-6">
                    <h5 class="font-16">Billing Address</h5>

                    <address class="line-h-24">
                        Stanley Jones<br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>

                </div>

                <div class="col-sm-6">
                    <div class="text-sm-right">
                        <h5 class="font-16">Shipping Address</h5>

                        <address class="line-h-24">
                            Stanley Jones<br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-centered mt-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Item</th>
                                    <th>Quantity</th>
                                    <th>Unit Cost</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <b>Laptop</b> <br />
                                        Brand Model VGN-TXN27N/B
                                        11.1" Notebook PC
                                    </td>
                                    <td>1</td>
                                    <td>$1799</td>
                                    <td class="text-right">$1799</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <b>Warranty</b> <br />
                                        Two Year Extended Warranty -
                                        Parts and Labor
                                    </td>
                                    <td>3</td>
                                    <td>$499</td>
                                    <td class="text-right">$1497</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <b>LED</b> <br />
                                        80cm (32) HD Ready LED TV
                                    </td>
                                    <td>2</td>
                                    <td>$412</td>
                                    <td class="text-right">$824</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="clearfix pt-4">
                        <h6 class="text-muted">Notes:</h6>

                        <small>
                            All accounts are to be paid within 7 days from receipt of
                            invoice. To be paid by cheque or credit card or direct payment
                            online. If account is not paid within 7 days the credits details
                            supplied as confirmation of work undertaken will be charged the
                            agreed quoted fee noted above.
                        </small>
                    </div>

                </div>
                <div class="col-6">
                    <div class="float-right">
                        <p><b>Sub-total:</b> $4120.00</p>
                        <p><b>VAT (12.5):</b> $515</p>
                        <h3>$4635.00 USD</h3>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="mt-4">
                <div class="text-right d-print-none">
                    <a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light mr-1"><i class="fa fa-print mr-1"></i> Print</a>
                    <a href="#" class="btn btn-success waves-effect waves-light">Submit</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- end row -->