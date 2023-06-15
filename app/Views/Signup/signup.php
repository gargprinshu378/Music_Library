<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="/js/new.js"></script>
</head>
<body>
    <!-- Creating a form for login -->
    <form method="post" action="/Signup/create">
        <div class="form-margin">
        <div class="index">
                <div>
                    <!-- Input for username -->
                    <h2>Name</h2>
                    <input name="Name" id="Name" type="text" placeholder="Name" class="login-username">
                </div>
            </div>
            <div class="index">
                <div>
                    <!-- Input for username -->
                    <h2>Username</h2>
                    <input name="Username" id="Username" type="email" placeholder="Email" class="login-username">
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
                <div>
                    <!-- Input for password -->
                    <h2>Confirm Password</h2>
                    <input name="Confirm_Password" id="Confirm_Password" type="password" placeholder="Confirm Password" class="login-username">
                </div>
            </div>
            <div class="index">
                <!-- Signup submit type -->
                <input type="submit" name="Signup" value="Signup" class="login-btn">
            </div>
        </div>
    </form>
</body>
</html>
