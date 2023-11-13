<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Chi tiết tài khoản</h4>
        </div>
    </div>
</div>
<div class="col-lg-6">
    <form class="form-horizontal mt-4 mt-lg-0">
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Tên người dùng</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $tk[0][1] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Tài khoản</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $tk[0][2] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Mật khẩu</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $tk[0][3] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Email</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $tk[0][4] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Địa chỉ</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $tk[0][5] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Số điện thoại</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" value="<?php echo $tk[0][6] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Trạng thái</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" 
                value="<?php 
                    if ($tk[0][7] == 0){
                        echo "Ngừng hoạt động";
                    } else echo "Hoạt động";
                ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 col-form-label">Vai trò</label>
            <div class="col-md-10">
                <input type="text" class="form-control" readonly="" 
                value="<?php 
                    if ($tk[0][8] == 0){
                        echo "User";
                    } else if ($tk[0][8] == 1){
                        echo "Nhân viên";
                    } else echo "Admin";
                ?>">
            </div>
        </div>
    </form>
</div>