<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Cập nhật danh mục sản phẩm</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%;">
        <form class="form-horizontal" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-2 col-form-label" for="tensp">Tên danh mục</label>
                <div class="col-md-10">
                    <input type="text" name="tensp" class="form-control">
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <a href="index.php?act=listdm" class="btn btn-info">Danh sách</a>
            </div>
        </form>
    </div>
    <!-- end -->
</div>