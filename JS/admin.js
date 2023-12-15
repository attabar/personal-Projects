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
                            document.location.href = "./bioDataForm.php"
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