<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .container {
            margin-left:400px
        }
    .main-login{
        padding-top: 150px;
        text-align: center;
        width:500px;
        /*align-items: center;*/
        vertical-align: middle;
        }

            #parent {
        /*display: table;*/
        width: 50%;
        vertical-align: middle;
        text-align: center;

        }
        .login {
        margin: 20px auto;
        width: 300px;
        }
        .login-screen {
        /*background-color: #FFF;*/
        margin: 0px 50px;
        padding-top: 1000px;
        background-color: #3498DB;
        padding: 20px;
        border-radius: 5px;
        text-align: center;

        }

        .app-title {
        text-align: center;
        color: #777;
        }

        .login-form {
        text-align: center;
        }
        .control-group {
        margin-bottom: 10px;
        }

        input {
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 10px 0;
        width: 250px;
        transition: border .5s;
        }

        input:focus {
        border: 2px solid #3498DB;
        box-shadow: none;
        }

        .btn {
        border: 2px solid transparent;
        background: #3498DB;
        color: #ffffff;
        font-size: 16px;
        line-height: 25px;
        padding: 10px 0;
        text-decoration: none;
        text-shadow: none;
        border-radius: 3px;
        box-shadow: none;
        transition: 0.25s;
        display: block;
        width: 250px;
        margin: 0 auto;
        }

        .btn:hover {
        background-color: #2980B9;
        }

        .login-link {
        font-size: 12px;
        color: #444;
        display: block;
            margin-top: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-login", id="parent">
        
        <?php 
        if(isset($_SESSION['name'])){
            echo "HELLO" ." ".$_SESSION['name'];
   ?>
     <a class="btn btn-success mt-2" href="index.php?act=list">Danh Sách Sản Phẩm</a>
      <a class="btn btn-success mt-2" href="index.php?act=listdm">Danh sách Danh Mục</a>
      <a class="btn btn-danger mt-2" href="index.php?act=dangxuat">Đăng Xuất</a>
      <?php }else{?>
        <form align="center" action="index.php?act=dangnhap" class="needs-validation" method="POST" novalidate>
        <div class="login-screen">
            <div class="app-title">
                <h1>Login</h1>
            </div>
            <div class="login-form">
                <div class="control-group">
                    <input type="text" class="login-field" value="" id="validationCustom01" required placeholder="username" name="name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                    <div class="invalid-feedback">
            Mời nhập tên đăng nhập
            </div>
                </div>
            </div>    
            <div class="control-group">
                <input type="password" class="login-field" value="" id="validationCustom01" required placeholder="password" name="matkhau">
                <label class="login-field-icon fui-lock" for="login-pass"></label>
                
            <div class="invalid-feedback">
            Mời nhập mật khẩu
            </div>
            </div>
                <input type="submit" value="Log in" name="dangnhap" class="btn btn-primary btn-large btn-block" >
        </div>
        </form>

        <?php } ?>
        </div>
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