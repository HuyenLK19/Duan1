<?php
include "../model/pdo.php";
include "../model/cart.php";
insert_giohang($_GET['id']);
$listgiohang = listall_giohang();
foreach ($listgiohang as $gh) {
?>
    <div class="dropcart__product">
        <div class="product-image dropcart__product-image">
            <a href="index.php?act=chitietsanpham&idsp=<?php echo $gh['idpro'] ?>" class="product-image__body">
                <img class="product-image__img" src="upload/product/<?php echo $gh['img'] ?>" alt="">
            </a>
        </div>
        <div class="dropcart__product-info">
            <div class="dropcart__product-name"><a href="index.php?act=chitietsanpham&idsp=<?php echo $gh['idpro'] ?>"><?php echo $gh['name'] ?></a></div>
            <div class="dropcart__product-meta"><span class="dropcart__product-quantity"><?php echo $gh['soluong'] ?></span> ×
                <span class="dropcart__product-price"><?php echo $gh['price'] ?> VND</span>
            </div>
        </div><button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon" onclick="window.location.href='index.php?act=delcart&id=<?php echo $gh['id'] ?>'"><svg width="10px" height="10px">
                <use xlink:href="css/images/sprite.svg#cross-10">
                </use>
            </svg></button>
    </div>
<?php
}
?>