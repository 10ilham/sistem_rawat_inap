<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Junior Web Developer</title>
    <link href="./dist/img/digitalent.png" rel="icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    		<!-- cek pesan notifikasi -->
			<?php
			if (isset($_GET['pesan'])) {
				$pesan = $_GET['pesan'];
				if ($pesan == "gagal") {
					echo "<script> 
							$(document).ready(function() {
								alert('Login gagal! Username atau password salah!');
							});
						</script>";
				}
			}
			?>
    
        <div class="container">
          <h1>Login</h1>
          <form method="post" action="cek_login.php">
                <label>Username</label><br>
                <input type="text" name="username" placeholder="Masukkan username"><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="Masukkan password"><br>
                <button class="login" onclick="Login()">Login</button>		
            </form>
        </div>
</body>
</html>