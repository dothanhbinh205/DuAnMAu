<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #ffebf0;
            font-family: 'Arial', sans-serif;

            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            width: 350px;
        }
        .khung{
            margin-top: 10%;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #ff4b5c;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #ff4b5c;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid #ff4b5c;
            border-radius: 5px;
            outline: none;
        }

        .input-group input:focus {
            border-color: #ff91a4;
        }

        button {
            background-color: #ff4b5c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #ff91a4;
        }

        .extra-buttons {
            margin-top: 20px;
            text-align: center;
        }

        .extra-buttons a {
            text-decoration: none;
            color: #ff4b5c;
            margin: 0 10px;
            font-weight: bold;
        }

        .extra-buttons a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

<div class="khung">    <div class="login-container">

        <h2>Đăng nhập</h2>
        <form  method="POST">
            <div class="input-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="user" required placeholder="Tên Đăng Nhập.......">
            </div>
            <div class="input-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="pass" required placeholder="Mật Khẩu Đăng Nhập........">
            </div>
            <button type="submit" name="btn_login">Đăng nhập</button>
        </form>
        
        <div class="extra-buttons">
            <a href="">Đăng ký</a>
            <a href="#">Quên mật khẩu?</a>
            <a href="../?act=/">Quay Lại</a>
</div>

    </div>
</div>
</body>
</html>