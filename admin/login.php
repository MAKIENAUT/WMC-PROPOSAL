<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <div class="login_container">
            <div class="login_title">
                <div class="title_logo">
                    <a href="https://westmigrationagency.com/">
                        <img src="../photos/wma-logo.png">
                    </a>
                    <h2>Admin Login</h2>
                </div>
            </div>
            <div class="form_proper">
                <form action="login.php" method="post" name="login">
                    <input 
                        value=""
                        type="text" 
                        id="username" 
                        name="username" 
                        autocomplete="off"
                        placeholder="Username">

                    <input 
                        value=""
                        id="password"
                        type="password"
                        name="password"
                        autocomplete="off"
                        placeholder="Password">

                    <button 
                        id="submit"
                        name="submit"
                        type="submit"
                        onclick="resetForm()">
                        LOGIN
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>