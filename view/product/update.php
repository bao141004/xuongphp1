
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1 class="mt-3">Sửa Sản Phẩm</h1>
    <?php 
        if (is_array($oneProduct)){
            extract($oneProduct);
            $hinh = "./public/" . $image;
            if (is_file($hinh)){
                $hinh = "<img src='" . $hinh . "' height='80'>";
            }else {
                $hinh = "no photo";
            } 
            ?> 

        <?php }?> 
   
    <form action="index.php?act=updatesp" class="row g-3 needs-validation mt-4" method="post" enctype="multipart/form-data" novalidate>
    <div class="row">
        
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $name_product ?>" name="name_product"  required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom02" class="form-label">Giá</label>
            <input type="number" class="form-control" id="validationCustom02" value="<?php echo $price ?>" name="price"  required>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom02" class="form-label">Hình Ảnh</label>
            <input type="file" class="form-control" id="validationCustom02"  name="image" value="Otto" ><?php echo $hinh ?>
            <div class="valid-feedback">
            Looks good!
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom03" class="form-label">Mô tả</label>
            <input type="text" class="form-control" name="mota" value="<?php echo $mota ?>" id="validationCustom03" required>
            <div class="invalid-feedback">
            Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <label for="validationCustom04" class="form-label" >Danh mục</label>
        <select class="form-select" name="iddm" id="validationCustom04" required>
        <?php
            foreach ($listcategory as $value){
                if($oneProduct['id_category']==$value['id_category']){
                    echo'<option value="'.$value['id_category'].'" selected>'.$value['name_category'].'</option>';
                }else{
                    echo'<option value="'.$value['id_category'].'">'.$value['name_category'].'</option>';
                }
                    
            }
        ?>
        </select>
        <div class="invalid-feedback">
        Please select a valid state.
        </div>
    </div>
   
   
    <div class="col-12">
        <input type="hidden" name="id_product" value="<?=$id_product ?>">
        <button class="btn btn-primary" name="update" type="submit">Sửa Sản Phẩm</button>
    </div>
    <?php
        if(isset($thongbao)){
            echo "alert($thongbao)";
        }   
    ?>
    </form>

    <a class="btn btn-success mt-2" href="index.php?act=list">Về Danh Sách Sản Phẩm</a>
    </div>
    
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>
</body>
</html>