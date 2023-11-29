<style>
    h4{
        margin: 100px 0 0 360px;
        font-size: 30px; 
    }
   form input{
    width: 900px;
    height: 35px;
   }
   .input{
    margin-top: 15px;
   }
   .bt{
    width: 150px;
    background-color: #FFD333;
    height: 35px;
    border: none;

    
   }
   .btn{
    width: 150px;
    background-color: #C82333;
    height: 35px;
    border: none;
    color: aliceblue;

   }
   span{
    color: red;
   }
</style>
<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Cập nhật mật khẩu</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%">
        
        <form action="index.php?act=matkhau" method="post" class="form-validation" enctype="multipart/form-data">

   <div class="input">
   <label for="">Tên người dùng</label> 
    <input type="text" class="check" parsley-trigger="change" name="tendn" value="<?php echo isset($_POST['tendn']) ? htmlspecialchars($_POST['tendn']) : ''; ?>">
    <span id="tendnError" class="error"><?php echo isset($errors['tendn']) ? $errors['tendn'] : ''; ?></span><br>

   </div>
   <div class="input">
   <label for="">Mật khẩu cũ</label>
    <input type="password" class="check" parsley-trigger="change" name="old_password" id="old_password">
    <span id="oldPasswordError" class="error"><?php echo isset($errors['old_password']) ? $errors['old_password'] : ''; ?></span><br>
   
    </div>
    <div class="input">
    <label for="">Mật khẩu mới</label>
    <input type="password" class="check" name="new_password" id="new_password">
    <span id="passwordError" class="error"><?php echo isset($errors['new_password']) ? $errors['new_password'] : ''; ?></span><br>

    </div>
    <div class="input">
    <label for="">Xác nhận mật khẩu mới</label>
    <input type="password" class="check" name="confirm_password" id="confirm_password">
    <span id="confirmPasswordError" class="error"><?php echo isset($errors['confirm_password']) ? $errors['confirm_password'] : ''; ?></span><br>
    </div>
  
  
  
   
   <div class="input">
   <input type="submit" class="bt" name="doimatkhau" value="Cập nhật">
    <input type="reset" value="Reset" class="btn">
   </div>
   
</form>

      
    </div>
</div>
