<?php
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<style>
    .demobinhluan {
        border: .5px solid gray;

        width: 100%;

        overflow-y: auto;

    }

    .demobinhluan h2 {
        width: 96%;
        height: 40px;
        background-color: #80aacc;
        color: #fff;
        padding: 0 20px;
    }

    .demobinhluan .form_searchs {
        margin-top: 20px;


    }

    .demobinhluan .form_searchs input {
        height: 30px;
        
    }

    .demobinhluan .form_searchs input:nth-child(2) {
        width: 80%;
        margin-left: 20px;

    }

    .demobinhluan .form_searchs input:nth-child(1) {

        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 0 10px;
    }
  .btbinhluan{
    background-color: #FFD333;
    border: none;
    color: #3D464C;
  }
  .btbinhluan:hover{
    background-color: #3D464C;
    border: 1px solid #fff;
    color: #fff;
  }
    table {
        width: 100%;
        margin-left: 10px;
        height: 200px;

    }

    table td:nth-child(1) {
        width: 50%;
    }

    table td:nth-child(2) {
        width: 20%;
    }

    table td:nth-child(3) {
        width: 30%;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<body>
    <div class="demobinhluan">
        <div class="list">
            <ul>
                <table>
                    <?php
                    foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '<tr><td>' . $noidung . '</td>';
                        echo '<td>' . $iduser . '</td>';
                        echo '<td>' . $ngaybinhluan . '</td></tr>';
                    }
                    ?>
                </table>

                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                    echo '
        <div id="commentFormWrapper">
            <form id="commentForm" action="' . $_SERVER['PHP_SELF'] . '" method="POST">
                <input type="hidden" name="idpro" value="' . $idpro . '">
                <input type="text" name="noidung" placeholder="Nội dung bình luận">
                <input type="submit" name="guibinhluan" class="btbinhluan" value="Gửi bình luận">
            </form>
        </div>
    ';
                } else {
                    echo '<h1>Bạn vui lòng đăng nhập để bình luận</h1>';
                }
                ?>

            </ul>
        </div>
    </div>
    <?php
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $noidung = $_POST['noidung'];
        if (isset($_SESSION['user'])) {
            $iduser = $_SESSION['user']['id'];
        }
        $idpro = $_POST['idpro'];
        $ngaybinhluan = date('Y-m-d H:i:s'); // Định dạng ngày tháng giống MySQL
        insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
        header("location: " . $_SERVER['HTTP_REFERER']);
    }

    ?>
</body>
<script>
    $(document).ready(function() {
        $("#commentForm").submit(function(e) {
            e.preventDefault(); // Ngăn chặn sự kiện mặc định của form

            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    // Xử lý phản hồi từ server nếu cần
                    console.log(response);

                    // Nếu muốn cập nhật phần bình luận sau khi gửi
                    $("#binhluan").load("view/binhluanform.php", {
                        idpro: <?= isset($_REQUEST['idsp']) ? $_REQUEST['idsp'] : null ?>
                    });
                }
            });
        });
    });
</script>
</html>