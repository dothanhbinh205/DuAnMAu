<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên Hệ - Shop Online</title>
    <link rel="stylesheet" href="./views/css/lienhe.css">
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
            <section class="contact">
                <h2>Liên Hệ Chúng Tôi</h2>
                <p>Nếu bạn có bất kỳ câu hỏi hoặc cần hỗ trợ, hãy liên hệ với chúng tôi qua biểu mẫu dưới đây hoặc thông tin liên lạc:</p>
                <p>Điện thoại: 0123-456-789</p>
                <p>Email: contact@shoponline.com</p>

                <form action="#" method="post" class="contact-form">
                    <label for="name">Tên của bạn:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email của bạn:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Lời nhắn:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>

                    <button type="submit">Gửi</button>
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