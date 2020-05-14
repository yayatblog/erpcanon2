<html>
<head>
	<title>Menu Login</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css');?>">
  <style>
          body{
        font-family: sans-serif;
        background: #d4860b;
      }

      h1{
        text-align: center;
        /*ketebalan font*/
        font-weight: 300;
      }

      .tulisan_login{
        text-align: center;
        /*membuat semua huruf menjadi kapital*/
        text-transform: uppercase;
      }

      .kotak_login{
        width: 350px;
        background: white;
        border-radius: 10px;
        box-shadow:rgba(0, 0, 0, 0.5);
        /*meletakkan form ke tengah*/
        margin: 80px auto;
        padding: 30px 20px;
      }

      label{
        font-size: 11pt;
      }

      .form_login{
        /*membuat lebar form penuh*/
        box-sizing : border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 20px;
      }

      .tombol_login{
        background: #46de4b;
        color: white;
        font-size: 11pt;
        width: 100%;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
      }

      .link{
        color: #232323;
        text-decoration: none;
        font-size: 10pt;
      }
  </style>
</head>
<body>
 
	<!-- <h1>Menu Login <br/></h1> -->
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="<?= base_url('login/login_aksi');?>" method="POST">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username atau email .." autocomplete="off">
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="<?= base_url('registrasi');?>">Registrasi</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>