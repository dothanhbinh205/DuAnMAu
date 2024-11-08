<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Góp Ý - Shop Online</title>
    <link rel="stylesheet" href="./views/css/gop_y.css">
</head>

<body>
    <div class="boxcenter">
        <header>

            <h2>Siêu Thị Trực Tuyến</h2>
        </header>
        <nav>

            <a href="?act=/">Trang chủ</a>
            <a href="?act=gioithieu">Giới thiệu</a>
            <a href="?act=lienhe">Liên hệ</a>
            <a href="?act=gop_y">Góp ý</a>
            <a href="?act=hoidap">Hỏi đáp</a>
            <a href="?act=login">Đăng nhập</a>

        </nav>

        <main>
            <section class="feedback">
                <h2>Góp Ý Của Bạn</h2>
                <p>Chúng tôi luôn mong nhận được phản hồi từ bạn để cải thiện dịch vụ của mình.</p>

                <form action="#" method="post" class="feedback-form">
                    <label for="name">Tên của bạn:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email của bạn:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="rating">Đánh giá của bạn:</label>
                    <select id="rating" name="rating" required>
                        <option value="5">5 - Rất tốt</option>
                        <option value="4">4 - Tốt</option>
                        <option value="3">3 - Bình thường</option>
                        <option value="2">2 - Kém</option>
                        <option value="1">1 - Rất kém</option>
                    </select>

                    <label for="comments">Nhận xét:</label>
                    <textarea id="comments" name="comments" rows="5" required></textarea>

                    <button type="submit">Gửi Góp Ý</button>
                </form>
            </section>
        </main>

        <footer>
            <p>Liên hệ: 0123-456-789 | Email: contact@shoponline.com</p>
            <p>&copy; 2024 Shop Online. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>