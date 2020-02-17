<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" type="text/css" href="media.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    
</head>
<body>
<center><div class="box_login">
        <h1 style="text-align:center;text-size:70px">LOGIN</h1>
            <p style="text-align:center;font-size: 20px;">Silahkan Masukan Akun Anda</p>
        <form action="landing.php" method="POST" style="text-align:center">
        <!-- memasukan username -->
		    <label>Username</label>
		    <input type="text" name="username" class="form_login" placeholder="Enter Username">
        <!-- memasukan password -->
		    <label>Password</label>
		    <input type="text" name="password" class="form_login" placeholder="Enter Password">
        <!-- tombol login -->
		    <input type="submit" class="tombol_login" value="LOGIN">
            </form>
        </div></center>
</body>
</html>