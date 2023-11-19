<!-- <div class="row">
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
</div> -->
<!-- start  -->
<div class="row">
    <div class="col-md-12">
        <div class="mt-3">
            <div class="clearfix">
                <div class="float-left mb-2">
                    <?php
                    if ($tk[0][5] != ''){
                    ?>
                    <img src="../upload/avatar/<?php echo $tk[0][5] ?>">
                    <?php
                    }
                    ?>
                </div>
                <div class="float-right" style="width: 300px;">
                    <h3 class="m-0 d-print-none">Thông tin người dùng</h3>
                    <p style="text-align: left; margin-top: 10px;"><strong>Tên người dùng: </strong> <?php echo $tk[0][1] ?></p>
                    <p style="text-align: left;"><strong>Tài khoản: </strong> <?php echo $tk[0][2] ?></p>
                    <p style="text-align: left;"><strong>Mật khẩu: </strong> <?php echo $tk[0][3] ?></p>
                    <p style="text-align: left;"><strong>Email: </strong> <?php echo $tk[0][4] ?></p>
                    <p style="text-align: left; word-wrap: break-word; white-space: pre-wrap;"><strong>Địa chỉ: </strong> <?php echo $tk[0][6] ?></p>
                    <p style="text-align: left;"><strong>Số điện thoại: </strong> <?php echo $tk[0][7] ?></p>
                    <p style="text-align: left;"><strong>Trạng thái: </strong> <?php if ($tk[0][8] == 0){
                        echo '<span class="badge badge-dark">Tạm dừng</span>';
                    } else echo'<span class="badge badge-success">Hoạt động</span>';?></p>
                    <p style="text-align: left;"><strong>Vai trò: </strong> <?php if ($tk[0][9] == 0){
                        echo '<span class="badge badge-info">User</span>';
                    } else if($tk[0][9] == 1) {
                        echo '<span class="badge badge-warning">Nhân viên</span>';
                    } else echo '<span class="badge badge-danger">Admin</span>';?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->