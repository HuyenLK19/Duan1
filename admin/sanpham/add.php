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
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label for="name">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="name" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="cate">Danh mục<span class="text-danger">*</span></label>
                    <select class="custom-select" name="cate" parsley-trigger="change" required>
                        <option value="">Chọn danh mục</option>
                        <?php
                        foreach ($listCate as $row) {
                        ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="price" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" name="image" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <textarea class="form-control" rows="5" name="mota"></textarea>
                </div>
                <div class="form-group text-right mb-0">
                    <input class="btn btn-primary waves-effect waves-light mr-1" name="them" value="Thêm" type="submit">
                    <button type="reset" class="btn btn-danger waves-effect">
                        Reset
                    </button>
                    <a href="index.php?act=listsp" class="btn btn-secondary">Danh sách sản phẩm</a>
                </div>
            </form>
        </div>
        <?php
        if (isset($alert) && ($alert != 0)) {
        ?>
            <div class="alert alert-success text-success alert-dismissible fade show" style="margin-top: 20px;" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                Thêm tài khoản thành công!
            </div>
        <?php
        }
        ?>
    </div>
</div>