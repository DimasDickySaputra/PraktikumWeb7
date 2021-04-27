<html>
<head>
    <title>Membuat Login Dengan PHP</title> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/>
    <br/>
    <center><h2>Silahkan ISI USERNAME dan PASSWORD ANDA</h2></center>   
    <br/>
    <div class="login">
    <br/>
        <form action="ceklogin.php" method="post">
            <div>
                <label>Username:</label>
                <input type="text" name="username" id="username" placeholder="Masukkan Username Anda" />
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" id="password" placeholder="Masukkan Password Anda" />
            </div>          
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
        </form>
    </div>
</body>
</body>
</html>