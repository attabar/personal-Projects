<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./assets/css/adminLoginStyle.css">
</head>
<body>
    <div class="login-page">
        <form id="loginForm" autocomplete="off">
            <div class="admin-brand">
                <h2>Admin Login</h2>
                <img src="./assets/img/admin.jpeg" alt="" srcset="">
            </div>
            <div class="message"></div>
            <div class="username-container">
                <label for="admin-username" class="username-label">Username</label>
                <input type="text" name="username" id="admin-username">
            </div>
            <div class="password-container">
                <label for="" class="password-label">Password</label>
                <input type="password" name="password" id="admin-password">
            </div>
            <div class="login-button">
                <button type="submit">Login</button>
                <a href="">Forgot Password</a>
            </div>
        </form>
    </div>
    <!-- Jquery file -->
    <script src="./jquery.js"></script>
    <!-- Ajax Request -->
    <script src="./JS/admin.js"></script>
</body>
</html>