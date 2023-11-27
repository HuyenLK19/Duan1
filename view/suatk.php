<?php 
    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
        extract($_SESSION['user']);
    }
 ?>

<!-- start -->
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
            <form action="index.php?act=suatk&id=<?=$id?>" method="post" class="form-validation">

                <div class="form-group">
                    <label for="tentk">ID<span class="text-danger">*</span></label>
                    <input type="hidden" name="id" value="<?=$id ?>">
                </div>
                <div class="form-group">
                    <label for="tentk">Tên người dùng<span class="text-danger">*</span></label>
                    <input type="text" name="user" parsley-trigger="change" required class="form-control" value="<?=$name ?>">
                </div>
                <div class="form-group">
                    <label for="user">Tài khoản<span class="text-danger">*</span></label>
                    <input type="text" name="user" parsley-trigger="change" required class="form-control" value="<?=$user ?>">
                </div>
                <div class="form-group">
                    <label for="pass">Mật khẩu<span class="text-danger">*</span></label>
                    <input type="text" name="pass" parsley-trigger="change" required class="form-control" value="<?=$pass ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email<span class="text-danger">*</span></label>
                    <input type="email" name="email" parsley-trigger="change" required class="form-control" value="<?=$email ?>">
                </div>
                <div class="form-group">
                    <label for="address">Địa chỉ<span class="text-danger">*</span></label>
                    <input type="text" name="address" parsley-trigger="change" required class="form-control" value="<?=$address ?>">
                </div>
                <div class="form-group">
                    <label for="tel">Số điện thoại<span class="text-danger">*</span></label>
                    <input type="text" name="tel" parsley-trigger="change" required class="form-control" value="<?=$tel ?>">
                </div>

                <div class="form-group text-right mb-0">
                    <input type="submit" value="Cập nhật" class="btn btn-primary waves-effect waves-light mr-1" name="capnhat">
                    <input type="reset" value="Reset" class="btn btn-danger waves-effect">
                    <a href="index.php?act=listtk" class="btn btn-secondary">Danh sách tài khoản</a>
                </div>

            </form>
        </div>
    </div>
</div>
