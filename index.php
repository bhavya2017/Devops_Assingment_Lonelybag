<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aniflix - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://wallpaperaccess.com/full/4466322.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        nav {
            background-color: #111;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
            color: #ff4747;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 15px;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #ff4747;
        }

        .login-box {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-box h1 {
            margin-bottom: 20px;
            font-size: 36px;
            color: white;
        }

        .login-form {
            background: rgba(0, 0, 0, 0.75);
            padding: 30px;
            border-radius: 15px;
            width: 90%;
            max-width: 400px;
            box-shadow: 0 0 15px rgba(255, 71, 71, 0.5);
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: none;
            font-size: 14px;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            background-color: #ff4747;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            margin-top: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .login-form button:hover {
            background-color: #ff6a6a;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #ccc;
            font-size: 14px;
        }

        .footer a {
            color: #ff9999;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav>
    <div class="site-header__start">
        <a href="./homepage.php" class="brand">
            <img src="./media/images/ah_logo.png" alt="Logo" style="height: 60px;">
        </a>
    </div>
    <ul>
        <li><a href="#">Genres</a></li>
        <li><a href="#">Types</a></li>
        <li><a href="#">New Releases</a></li>
        <li><a href="#">Ongoing</a></li>
        <li><a href="#">Recent</a></li>
    </ul>
</nav>
<div class="login-box">
    <h1>Login to Aniflix</h1>
    <form class="login-form" method="POST" action="handlers/loginHandler.php">
        <input type="email" name="email" placeholder="Email Address" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
    </form>
</div>

<div class="footer">
    &copy; 2025 Aniflix | <a href="#">Need Help?</a>
</div>

</body>
</html>
