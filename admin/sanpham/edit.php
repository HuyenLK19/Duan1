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
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=editsp" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label for="name">Tên sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="name" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="cate">Danh mục<span class="text-danger">*</span></label>
                    <select class="custom-select" name="cate" parsley-trigger="change" required>
                        <option value="">Chọn danh mục</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pass1">Giá sản phẩm<span class="text-danger">*</span></label>
                    <input type="text" name="price" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Hình ảnh</label>
                    <input type="file" name="image" class="filestyle form-control">
                </div>
                <div class="form-group">
                    <label for="example-textarea">Mô tả</label>
                    <textarea class="form-control" rows="5" id="example-textarea"></textarea>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                        Cập nhật
                    </button>
                    <button type="reset" class="btn btn-danger waves-effect">
                        Reset
                    </button>
                    <a href="index.php?act=listsp" class="btn btn-secondary">Danh sách sản phẩm</a>
                </div>
            </form>
        </div>
    </div>
</div>