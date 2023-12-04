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
        <form id="loginForm">
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
    <script src="./jquery.js"></script>
    <script>
        $("document").ready(function(){
            $("#loginForm").submit(function(e){
                e.preventDefault();
                let username = $("#admin-username").val();
                let password = $("#admin-password").val();
                $.ajax({
                    type: "POST",
                    url: "./PHP/login.php",
                    data: {username: username, password: password},
                    success: function(response){
                        if(response.includes("Admin Login Successfully...")){
                            $(".message").html(response).css({
                                "color":"green",
                                "text-align":"center",
                                "background-color":"grey",
                                "background-color":"white"
                            });
                            setTimeout(function(){
                                document.location.href = "./PHP/welcomeAdmin.php"
                            }, 4000)
                        }else{
                            $(".message").html(response).css({
                                "color":"red",
                                "text-align":"center",
                                "background-color":"white"
                            })
                        }
                    }
                })
            })
        })
    </script>
</body>
</html>