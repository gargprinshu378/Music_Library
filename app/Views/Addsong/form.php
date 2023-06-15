<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Song</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <form method="post" action="/Addsong/create">
        <div class="form-margin">
        <div class="index">
                <div>
                    <h2>Song Title</h2>
                    <input name="Song_Title" id="Song_Title" type="text" placeholder="Title" class="login-username" required>
                </div>
            </div>
            <div class="index">
                <div>
                    <h2>Singer</h2>
                    <input name="Singer" id="Singer" type="text" placeholder="Name of the Singer" class="login-username" required>
                </div>
            </div>
            <div class="index">
                <div>
                    <h2>Genre</h2>
                    <input name="Genre" id="Genre" type="text" placeholder="Genre" class="login-username" required>
                </div>
            </div>
            <div class="index">
                <div>
                    <h2>Choose an audio file</h2>
                    <input type="file" id="myfile" name="myfile" class="login-username" required>
                </div>
            </div>
            <div class="index">
                <input type="submit" name="Add" value="Add" class="login-btn">
            </div>
            <div class="index">
                <a href="/Feed/new" class="login-btn">Go to main Page</a>
            </div>
            <div class="index">
                <a href="/Home/index" class="login-btn">Log Out</a>
            </div>
        </div>
    </form>
</body>
</html>
