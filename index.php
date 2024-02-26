<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');</style>
</head>
<body>
    <vidio autoplay loop muted plays-inline class="back-vidio">
        <source src="img/tt.mp4" type="vidio/mp4">
    </vidio>
    <form method="POST" action="cek_login.php">
    </form>
    <div class="wrapper">
        <form action="cek_login.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <input type="submit" value="Login" class="btn"></input>
            <div class="register-link">
            </div>
            <br>
            <center><p>Don't have an account? <a href="register.php">Register</a></p></center>
        </form>
    </div>
</body>
</html>
<?

