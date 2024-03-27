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
    <table class="table table-striped mt-3">
        <thead>
            <th>STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Hình Ảnh</th>
            <th>Mô Tả</th>
            <th>Danh Mục</th>
            <th>Trạng thái</th>
        </thead>
        <?php $stt = 1?>
        <tbody>
            <?php
                foreach($listproduct as $pro){
                    extract($pro);
                    $delete = "index.php?act=delete&id_product=".$id_product;
                    $update = "index.php?act=update&id_product=".$id_product;
                    $hinh = "./public/" . $image;
                    if (is_file($hinh)){
                        $hinh = "<img src='" . $hinh . "' height='80'>";
                    }else {
                        $hinh = "no photo";
                    }
            ?>
                <tr>
                    <td><?php echo $stt ++ ?></td>
                    <td><?php echo $name_product ?></td>
                    <td><?php echo $price ?></td>
                    <td><?php echo $hinh ?></td>
                    <td><?php echo $mota ?></td>
                    <td><?php echo $name_category ?></td>
                    <td>
                        <a class="btn btn-danger" href="<?php echo $delete?>" onclick="return confirm('Bạn chắc chắn muốn xóa')">Xóa</a>
                        <a class="btn btn-primary" href="<?php echo $update ?>">Sửa</a>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a class="btn btn-success mt-2" href="index.php?act=add">Thêm mới</a>
    <a class="btn btn-success mt-2" href="index.php?act=dangnhap">Về Trang Chủ</a>
    </div>
</body>
</html>
