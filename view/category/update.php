
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
    <h1 class="mt-3">Sửa Danh Mục</h1>
    <?php 
        if (is_array($oneCategory)){
            extract($oneCategory);
            ?> 
        <?php }?> 
    <form action="index.php?act=updatedanhmuc" class="row g-3 needs-validation mt-4" method="post" novalidate>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Tên Danh Mục</label>
            <input type="text" class="form-control" id="validationCustom01" value="<?php echo $name_category ?>" name="name_category"  required>
            
        </div>
    </div>
   
    <div class="col-12">
        <input type="hidden" name="id_category" value="<?=$id_category ?>">
        <button class="btn btn-primary" name="update" type="submit">Sửa Danh Mục</button>
    </div>
    <?php
        if(isset($thongbao)){
            echo "alert($thongbao)";
        }   
    ?>
    </form>

    <a class="btn btn-success mt-2" href="index.php?act=listdm">Về Danh Sách Danh Mục</a>
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