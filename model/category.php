<?php
    function listCategory(){
        $sql = "select * from category";
        $listcategory = pdo_query($sql);
        return $listcategory;
    }
    function addCategory($name_category){
        $sql = "INSERT INTO `category` ( `name_category`) VALUES ( '$name_category')";
        pdo_execute($sql);
    }
    function deletecategory($id_category){
        $sql = "DELETE FROM category WHERE `category`.`id_category` = $id_category";
        pdo_execute($sql);
    }
    function loadOneCategory($id_category){
        $sql = "SELECT * from category where id_category = $id_category";
        $ct = pdo_query_one($sql);
        return $ct;
    }
    function updateCategory($id_category,$name_category){
        $sql = "UPDATE `category` SET `name_category` = '$name_category'
         WHERE `category`.`id_category` = $id_category";
        pdo_execute($sql);
    }
?>