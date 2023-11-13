<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Cập nhật tài khoản</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        <div class="">
            <form action="index.php?act=editsp" enctype="multipart/form-data" class="form-validation">
                <div class="form-group">
                    <label for="name">Tên người dùng<span class="text-danger">*</span></label>
                    <input type="text" name="name" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="name" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="cate">Mật khẩu<span class="text-danger">*</span></label>
                    <input type="text" name="name" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass1">Email<span class="text-danger">*</span></label>
                    <input type="text" name="price" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass1">Địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="price" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass1">Số điện thoại<span class="text-danger">*</span></label>
                    <input type="text" name="price" parsley-trigger="change" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass1">Trạng thái<span class="text-danger">*</span></label>
                    <select class="custom-select" name="cate" parsley-trigger="change" required>
                        <option value="">Chọn trạng thái tài khoản</option>
                        <option value="0">Dừng hoạt động</option>
                        <option value="1">Hoạt động</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pass1">Vai trò<span class="text-danger">*</span></label>
                    <select class="custom-select" name="cate" parsley-trigger="change" required>
                        <option value="">Chọn vai trò của tài khoản</option>
                        <option value="0">User</option>
                        <option value="1">Nhân viên</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
                <div class="form-group text-right mb-0">
                    <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                        Cập nhật
                    </button>
                    <button type="reset" class="btn btn-danger waves-effect">
                        Reset
                    </button>
                    <a href="index.php?act=listsp" class="btn btn-secondary">Danh sách tài khoản</a>
                </div>
            </form>
        </div>
    </div>
</div>