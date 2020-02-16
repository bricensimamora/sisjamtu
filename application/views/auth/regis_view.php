<!--
Jangan lupa dihapus kalau sudah tidak digunakan
-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Regis</title>
</head>
<body class="container">

<form action="<?php echo base_url("auth/regis"); ?>" method="post">

<div class="form-group">
    <label for="inputNama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="namaHelp">
</div>
<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
</div>
<div class="form-group">
    <label for="inputPassword">Password</label>
    <input type="password" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
</div>
<button type="submit" class="btn btn-primary">Masuk</button>

</form>
    
</body>
</html>