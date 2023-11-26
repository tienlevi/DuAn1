<?php 
function viewCart($delete){
    $i = 0;
    foreach ($_SESSION['mycart'] as $cart) {
       $image = '../Img/'.$cart[2].'';
       if($delete === 1){
        $xoa = 'index.php?act=deletecart&id='.$i.'';
       } else {
        $xoa = "";
       }
       echo '<div class="inner-item">
       <div class="inner-item-name">
           <img src="'.$image.'" alt=""/>
           <div class="inner-item-name-price">
           <h2>'.$cart[1].'</h2>
           <p>Giá: '.$cart[3].'đ</p>
           </div>
       </div>
       <h2>Số lượng:
       <div class="quantity-cart">
           <button class="quantity-cart-btn decrease">-</button>
           <input type="number" name="soluong" class="count" value="1">
           <button class="quantity-cart-btn increase">+</button>
       </div>
   </h2>
       <a href='.$xoa.'><i class="fa-solid fa-trash"></i></a>
   </div>';
   $i += 1;
   }
}

function insert_giohang($iduser,$idpro,$name,$img,$giatien,$iddonhang ){
$sql="INSERT into giohang values(null,'$iduser','$idpro','$name','$img','$giatien',1,'$iddonhang')";
return pdo_execute($sql);
}

function loadCart($iddonhang){
    $sql = "SELECT * FROM giohang WHERE iddonhang = $iddonhang";
    $giohang = pdo_query($sql);
    return $giohang;
}

function loadHoaDon($iddonhang){
    $sql = "SELECT * FROM giohang WHERE iduser = $iddonhang";
    $giohang = pdo_query($sql);
    return $giohang;
}

function loadHoaDonUser($id){
    $sql = "SELECT giohang.id, giohang.iduser,
    giohang.idpro, giohang.name, giohang.img, giohang.giatien,
    giohang.soluong, giohang.iddonhang, donhang.thoigiandathang, donhang.trangthai FROM giohang
    LEFT JOIN donhang ON giohang.iddonhang = donhang.id WHERE iduser = $id";
    $giohang = pdo_query($sql);
    return $giohang;
}

?>