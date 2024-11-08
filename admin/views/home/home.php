<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./views/css/style.css" />
</head>

<body>
  <div class="boxcenter">
    <header>
      <h1>Siêu Thị Trực Tuyến</h1>
    </header>
    <nav>

      <a href="">Trang chủ</a>
      <a href="?act=gioithieu">Giới thiệu</a>
      <a href="?act=lienhe">Liên hệ</a>
      <a href="?act=gop_y">Góp ý</a>
      <a href="?act=hoidap">Hỏi đáp</a>
      <a href="?act=login">Đăng nhập</a>

    </nav>
    <main>
      <article>
        <div class="banner">
          <img src="./views/img/banner-la-gi.jpg" alt="">
        </div>

        <div class="row">
          <?php foreach($homeproduct as $homeproducts){ ?>
          <div class="boxsp ">
           <a href="?act=sanphamct&id=<?= $homeproducts['id'] ?>">
            <div class="img"><img src="<?= $homeproducts['img'] ?>" alt="" /></div>
            <p>$<?= $homeproducts['price'] ?></p>
           <?= $homeproducts['name'] ?></a>
          </div>
          <?php }?>
          <!-- <div class="boxsp mr">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp mr">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp mr">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp mr">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp mr">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div>
          <div class="boxsp">
            <div class="img"><img src="./views/img/anh1.jpg" alt="" /></div>
            <p>$30</p>
            <a href="#">OK</a>
          </div> -->
        </div>



      </article>

      <aside>
        <div class="nd">
          <div class="boxtitle">TÀI KHOẢN</div>
          <div class="boxcontent formtaikhoan">
            <form action="#" method="POST">
              <div class="inputtk">
                <label>Tên đăng nhập</label>
                <input type="text" name="user" id="" required><br>
              </div>
              <div class="inputtk">
                <label>Mật khẩu</label><br>
                <input type="text" name="pass" id="" required><br>
              </div>
              <div class="inputcheckbox">
                <input type="checkbox" name="" id="">Ghi nhớ tài khoản?<br>
              </div>
              <div class="inputsumbit">
                <input type="submit" value="Đăng nhập">
              </div>
            </form>
            <li>
              <a href="#">Quên mật khẩu</a>
            </li>
            <li>
              <a href="#">Đăng ký thành viên</a>
            </li>
          </div>
        </div>

        <div class="nd">
          <div class="boxtitle">DANH MỤC</div>
          <div class="boxcenter1 menudoc">
            <ul>
              <?php foreach($homecate as $homecates){ ?>
                <li>
                <a href=""><?= $homecates['name_dm'] ?></a>
              </li>
              <?php } ?>
              <!-- <li>
                <a href="#">Đồng hồ</a>
              </li>
              <li>
                <a href="#">Điện thoại</a>
              </li>
              <li>
                <a href="#">Laptop</a>
              </li>
              <li>
                <a href="#">Máy tính bảng</a>
              </li> -->
            </ul>
          </div>
          <div class="boxfooter">
            <form action="" method="POST">
              <input type="text" name="" id="" placeholder="Tìm kiếm từ khoá...">
            </form>
          </div>
        </div>

        <div class="nd">
          <div class="boxtitle">TOP 10 YÊU THÍCH</div>
          <div class="boxcontent top10">
          <?php foreach($homeproductlx as $homeproductlxs){ ?>
            <div class="anhtop">
              <a href="?act=sanphamct&id=<?= $homeproductlxs['id'] ?>">
              <img src="<?= $homeproductlxs['img'] ?>" alt="">
              <?= $homeproductlxs['name'] ?></a>
            </div>
          <?php } ?>
            <!-- <div class="anhtop">
              <img src="./views/img/dongho.png" alt="">
              <a href="#">Sir Rodney's Marmalade</a>
            </div>
            <div class="anhtop">
              <img src="./views/img/dongho.png" alt="">
              <a href="#">Sir Rodney's Marmalade</a>
            </div>
            <div class="anhtop">
              <img src="./views/img/dongho.png" alt="">
              <a href="#">Sir Rodney's Marmalade</a>
            </div>
            <div class="anhtop">
              <img src="./views/img/dongho.png" alt="">
              <a href="#">Sir Rodney's Marmalade</a>
            </div>
            <div class="anhtop">
              <img src="./views/img/dongho.png" alt="">
              <a href="#">Sir Rodney's Marmalade</a>
            </div> -->

          </div>
        </div>
      </aside>
    </main>
    <footer>binhdtph53742 @ 2024</footer>
  </div>
</body>

</html>