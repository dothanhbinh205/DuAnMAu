<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./views/css/adminsp.css">
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
      <h2>Cập nhật sản phẩm</h2>
    </div>
    <div class="form">
      <form action="?act=update-product&id=<?= $productEdit['id']  ?>" method="POST" enctype="multipart/form-data">
        <div class="inputloai">
          <label>Mã sản phẩm:</label><br><br>
          <input type="text" name="id" disabled>
        </div>
        <div class="inputloai">
          <label>Tên sản phẩm:</label><br><br>
          <input type="text" name="name" value="<?= $productEdit['name'] ?>">
        </div>
        <div class="inputloai">
          <label>Giá:</label><br><br>
          <input type="number" name="price" value="<?= $productEdit['price'] ?>">
        </div>
        <div class="inputloai">
          <label>Ảnh:</label><br><br>
          <input type="file" name="img" id="" <?= $productEdit['img'] ?>>
        </div>
        <div class="inputloai">
          <label>Mô tả:</label><br><br>
          <textarea name="mota" cols="30" rows="10" value="<?= $productEdit['mota'] ?>"></textarea>
        </div>
        <div class="chucnang">
          <input type="submit" value="Cập nhật">
          <input type="reset" value="Nhập lại">
          <a href="?act=list-product"><input type="button" value="Danh sách"></a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>