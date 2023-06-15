<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Creating a form for login -->
    <form method="post" action="/Home/create">
        <div class="form-margin">
            <div class="index">
                <div>
                    <!-- Input for username -->
                    <h2>Username</h2>
                    <input name="Username" id="Username" type="email" placeholder="Username" class="login-username">
                </div>
            </div>
            <div class="index">
                <div>
                    <!-- Input for password -->
                    <h2>Password</h2>
                    <input name="Password" id="Password" type="password" placeholder="Password" class="login-username">
                </div>
            </div>
            <div class="index">
                <!-- Login submit type -->
                <input type="submit" name="Login" value="Login" class="login-btn">
            </div>
            <div class="index">
                <a href="/FP/index" class="login-btn">Forgot Password</a>
            </div>
            <div class="index">
                <a href="/Signup/new" class="login-btn">Sign Up</a>
            </div>
        </div>
    </form>
</body>
</html>







   
