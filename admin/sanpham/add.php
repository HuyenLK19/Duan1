<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Thêm sản phẩm</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label>Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="tensp" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Danh mục<span class="text-danger">*</span></label>
                    <select class="custom-select" parsley-trigger="change" required name="iddm">
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            ?>
                            <option value="<?php echo $danhmuc['id'] ?>">
                                <?php echo $danhmuc['name'] ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="giasp" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="hinh" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea class="form-control" rows="5" name="mota"></textarea>
                </div>
                <div class="form-group text-right mb-0">
                    <input type="submit" value="Thêm" class="btn btn-primary waves-effect waves-light mr-1" name="themmoi">
                    <input type="reset" value="Reset" class="btn btn-danger waves-effect">
                    <a href="index.php?act=listsp" class="btn btn-secondary">Danh sách sản phẩm</a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao == 1)) {
                    ?>
                    <div class="alert alert-success text-success alert-dismissible fade show" style="margin-top: 20px;" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        Thêm thành công!
                    </div>
                    <?php
                }
                ?>
            </form>
        </div>
    </div>
</div>