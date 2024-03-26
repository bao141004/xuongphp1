<?php
    function showProduct(){
        $sql = "SELECT * from product as a inner join category as b on a.id_category = b.id_category";
        $listproduct = pdo_query($sql);
        return $listproduct;
    }
    function addProduct($name_product,$price,$image,$mota,$id_category){
        $sql = "INSERT INTO `product` (`name_product`, `price`, `image`, `mota`, `id_category`)
         VALUES ('$name_product', '$price', '$image', '$mota', '$id_category')";
        pdo_execute($sql);
    }
    function deleteProduct($id_product){
        $sql ="DELETE FROM product WHERE `product`.`id_product` = $id_product";
        pdo_execute($sql);
    }
    function loadOneProduct($id_product){
        $sql ="SELECT * from product where id_product = $id_product";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function updateProduct($id_product,$name_product,$price,$image,$mota,$id_category){
        if($image != ""){
            $sql ="UPDATE `product` SET `name_product` = '$name_product', `price` = '$price', `image` = '$image',
         `mota` = '$mota', `id_category` = '$id_category' WHERE `product`.`id_product` = $id_product";
        } else {
            $sql ="UPDATE `product` SET `name_product` = '$name_product', `price` = '$price', 
         `mota` = '$mota', `id_category` = '$id_category' WHERE `product`.`id_product` = $id_product";
        }
          pdo_execute($sql);
    }
?>