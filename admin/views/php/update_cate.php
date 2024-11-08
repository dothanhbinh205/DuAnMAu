<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./views/css/admin.css">
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
        <h2>Cập nhật loại hàng</h2>
      </div>
      <div class="form">
        <form action="?act=update-Category&id=<?= $cateEdit['id']  ?>" method="POST">
           <div class="inputloai"> 
            <label>Mã loại:</label><br><br>
            <input type="text" name="id" disabled>
           </div>
           <div class="inputloai">
            <label>Tên loại:</label><br><br>
            <input type="text" name="name_dm" value="<?= $cateEdit['name_dm']  ?>">
           </div>
           <div class="chucnang">
            <input type="submit" value="Cập nhật">
            <input type="reset" value="Nhập lại">
            <a href="?act=list-cate"><input type="button" value="Danh sách"></a>
           </div>
        </form>
      </div>
    </div>
</body>
</html>