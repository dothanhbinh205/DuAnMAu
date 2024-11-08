<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./views/css/ds_lh.css">
</head>

<body>
    <div class="boxcenter">
        <header>
            <h1>Admin</h1>
        </header>
        <nav>
            <a href="?act=/">Trang chủ</a>
            <a href="?act=home_admin">Danh mục</a>
            <a href="?act=home_product">Hàng hoá</a>
            <a href="#">Khách hàng</a>
            <a href="#">Bình luận</a>
            <a href="#">Thống kê</a>
        </nav>
        <div class="tieude">
            <h2>Danh sách loại hàng</h2>
        </div>
        <div class="lietke">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($cates as $cate) {
                ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $cate['id'] ?></td>
                        <td><?php echo $cate['name_dm'] ?></td>
                        <td>
                            <a href="?act=update&id=<?=$cate['id']?>"><input type="button" value="Sửa"></a>
                            <a href="?act=delete-cate&id=<?=$cate['id']?>"><input type="button" value="Xoá"></a>
                        </td>
                    </tr>
                <?php
                }  
                ?>
            </table>
        </div>
        <div class="button">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="?act=home_admin"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</body>

</html>