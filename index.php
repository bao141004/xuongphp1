<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
    include "model/pdo.php"; 
    include "model/product.php";
    include "model/category.php";
    if (isset($_GET['act']) && ($_GET['act'] != "")){
        $act = $_GET['act'];
        switch($act){
            case "listdm":
                $listcategory = listCategory();
                include "view/category/list.php";
                break;
            case "adddm":
                if(isset($_POST['adddm'])){
                    $name_category = $_POST['name_category'];
                    addCategory($name_category);
                    $thongbao ="Thêm Danh Mục Thành Công";
                }
                $listcategory = listCategory();
                include "view/category/add.php";
                break;
            case "deletedm":
                if(isset($_GET['id_category'])){
                    deletecategory($_GET['id_category']);
                }
                $listcategory = listCategory();
                include "view/category/list.php";
                break;
            case "updatedm":
                if(isset($_GET['id_category'])){
                     $oneCategory = loadOneCategory($_GET['id_category']);
                }
                $listcategory = listCategory();
                include "view/category/update.php";
                break;
            case "updatedanhmuc":
                if(isset($_POST['update'])){
                    $id_category = $_POST['id_category'];
                    $name_category =$_POST['name_category'];
                    updateCategory($id_category,$name_category);
                    $thongbao= "Sửa Sản Phẩm Thành Công";
                }
                $listcategory =listCategory();
                include "view/category/list.php";
                break;    
            case "list":
                $listproduct = showProduct();
            include "view/product/list.php";
                break;
            case "add":
                if (isset($_POST['add'])){
                    $name_product = $_POST['name_product'];
                    $price = $_POST['price'];
                    $mota = $_POST['mota'];
                    $id_category = $_POST['iddm'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "public/";
                    $target_file = $target_dir. basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                    addProduct($name_product,$price,$image,$mota,$id_category);
                    $thongbao= "Thêm Sản Phẩm Thành Công";
                }
                $listcategory = listCategory();
                include "view/product/add.php";
                break;
            case "update":
                if(isset($_GET['id_product'])){
                    $oneProduct = loadOneProduct($_GET['id_product']);
                }
                $listcategory = listCategory();
                include "view/product/update.php";
                break;
            case "updatesp":
                if(isset($_POST['update'])){
                    $id = $_POST['id_product'];
                    $name_product = $_POST['name_product'];
                    $price = $_POST['price'];
                    $mota = $_POST['mota'];
                    $id_category = $_POST['iddm'];
                    $image = $_FILES['image']['name'];
                    $target_dir = "public/";
                    $target_file = $target_dir. basename($_FILES['image']['name']);
                    move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                    updateProduct($id,$name_product,$price,$image,$mota,$id_category);
                    $thongbao= "Sửa Sản Phẩm Thành Công";
                }
                $listproduct = showProduct();
                $listcategory = listCategory();

                include "view/product/list.php";
                break;    
            case "delete":
                if(isset($_GET['id_product'])){
                    deleteProduct($_GET['id_product']);
                }
                $listproduct = showProduct();
                include "view/product/list.php";
                break;
          
        }
    }else {
        include "dangnhap.php";
         ?>
       
   <?php }
?> 