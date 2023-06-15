<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form action="/FP/sendResetLink" method="post">
        <label for="Username">Email:</label>
        <input type="email" id="Username" name="Username" required>
        <input type="submit" value="Send Reset Link">
    </form>
</body>
</html>




