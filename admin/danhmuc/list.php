<!-- start  -->
<div class="row">
    <div class="col-12">
        <div>
            <h4 class="header-title mb-3">Danh sách danh mục</h4>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-6" style="position: relative; left: 20%;">
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Tên danh mục</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($list_danhmuc as $danhmuc) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $danhmuc['id'] ?></th>
                            <td><?php echo $danhmuc['name'] ?></td>
                            <td>
                                <a href="index.php?act=editdm&&id=<?php echo $danhmuc['id'] ?>" style="margin: 0 20px;font-size: 20px;"><i class="ti-pencil"></i></a>
                                <a href="index.php?act=deldm&&id=<?php echo $danhmuc['id'] ?>" style="font-size: 20px;"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <a href="index.php?act=adddm" class="btn btn-secondary">Thêm danh mục</a>
            </div>
        </div>
    </div>
    <!-- end -->

</div>
</div>