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
            <a href="?act=/">Trang chủ</a>
            <a href="">Giới thiệu</a>
            <a href="">Liên hệ</a>
            <a href="">Góp ý</a>
            <a href="">Hỏi đáp</a>
        </nav>
        <main>
            <article>
                <div class="row mb">
                    <div class="boxtitle">Sản phẩm chi tiết</div>
                    <div class=" row boxcontent anvata">
                         <img src="<?= $homeproduct_ct['img'] ?>" alt="">
                         <h2>$<?= $homeproduct_ct['price'] ?></h2>
                         <h3><?= $homeproduct_ct['name'] ?></h3>
                         <p>Lượt xem: <?= $homeproduct_ct['luotxem'] ?></p>
                         <p>Gới thiệu: <?= $homeproduct_ct['mota'] ?></p>
                    </div>
                </div>  

                <div class="row mb">
                    <div class="boxtitle">Bình luận</div>
                    <div class=" row boxcontent">
                        
                    </div>
                </div>  

                <div class="row mb">
                    <div class="boxtitle">Sản phẩm cùng loại</div>
                    <div class=" row boxcontent">
                        <?php foreach($homeproduct_cungloai as $homeproduct_cungloai){ ?>
                              <li><a href="?act=sanphamct&id=<?= $homeproduct_cungloai['id'] ?>"><?=$homeproduct_cungloai['name']?></a></li>
                        <?php } ?>    
                    </div>
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
                            <?php foreach ($homecate as $homecates) { ?>
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
                        <?php foreach ($homeproductlx as $homeproductlxs) { ?>
                            <div class="anhtop">
                                <img src="<?= $homeproductlxs['img'] ?>" alt="">
                                <a href="#"><?= $homeproductlxs['name'] ?></a>
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