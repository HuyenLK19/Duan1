<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Cập nhật sản phẩm</h4>

        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%;">
        <form class="form-horizontal" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-md-2 col-form-label" for="tensp">Tên sản phẩm</label>
                <div class="col-md-10">
                    <input type="text" name="tensp" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label" for="danhmucsp">Danh mục</label>
                <div class="col-md-10">
                    <select class="custom-select" name="danhmucsp">
                        <option selected>Chọn danh mục sản phẩm</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label" for="giasp">Giá sản phẩm</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="giasp">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label" for="anhsp">Hình ảnh</label>
                <div class="col-md-10">
                    <input type="file" name="anhsp" class="filestyle">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2 col-form-label" for="example-textarea">Mô tả</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                </div>
            </div>
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
                <a href="index.php?act=listsp" class="btn btn-info">Danh sách</a>
            </div>
        </form>
    </div>
    <!-- end -->
</div>