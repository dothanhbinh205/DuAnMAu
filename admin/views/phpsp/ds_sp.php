<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./views/css/ds_sp.css">
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
        <form action="" method="post">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($cates as $cate) { ?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['name_dm'] ?></option>
                <?php } ?>
            </select>
            <input type="submit" name="listok" value="GO">
        </form>
        <div class="lietke">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH</th>
                    <th>GIÁ</th>
                    <th>LƯỢT XEM</th>
                    <th></th>
                </tr>
                <?php
                foreach ($product as $products) {
                ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $products['id'] ?></td>
                        <td><?php echo $products['name'] ?></td>
                        <td><img src="<?= $products['img'] ?>" alt="" style="height:50px"></td>
                        <td><?php echo $products['price'] ?></td>
                        <td><?php echo $products['luotxem'] ?></td>
                        <td>
                            <a href="?act=updatesp&id=<?= $products['id'] ?>"><input type="button" value="Sửa"></a>
                            <a href="?act=delete-product&id=<?= $products['id'] ?>"><input type="button" value="Xoá"></a>
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
            <a href="?act=home_product"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</body>

</html>