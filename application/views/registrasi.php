<html>
<head>
	<title>Menu Registrasi</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css');?>">
</head>
<body>
 
	<h1>Menu Registrasi<br/></h1>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Registrasi</p>
 
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." autocomplete="off">
            
            <label>Email</label>
			<input type="email" name="email" class="form_login" placeholder="Email .." autocomplete="off">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

            <label>Konfirmasi  Password</label>
			<input type="password" name="password2" class="form_login" placeholder="Konfirmasi Password">

			<input type="submit" class="tombol_login" value="REGISTRASI">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="<?= base_url('login');?>">Login</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>