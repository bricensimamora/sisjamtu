<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="icon" href="<?= base_url("assets/images/polstatstis.png"); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/login-style.css'); ?>">
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url('assets/js/jquery-3.5.1.min.js');?>"></script>
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
	<script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>

	<title>Login</title>
</head>

<body>

<div class="container h-100">

  <div class="row align-items-center h-100">
    <!-- Row Kosong-Box-Kosong -->
    
    <div class="col-sm-5 mx-auto">
      <!-- Kotak Form -->
      <div class="card">

        <!-- Logo dan Tulisan -->
        <div class="login-logo text-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/polstatstis.png');?>" alt="logo polstat" width="20%" height="20%">
          <span class="login-sisjamtu">LOGIN SISJAMTU</span>
        </div>
        <!-- End Logo dan Tulisan -->

        <div class="card-body">

          <form id="form" action="<?php echo base_url("auth/login"); ?>" method="post">

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

        </div>
      </div>
      <!-- End Kotak Form -->

    </div>
  </div>

</div>

<footer>
  <div class="container-fluid fixed-bottom padding text-center">
  <strong>&copy; <?php echo date('Y') ?>. Polstat Dev Team.</strong>
  </div>
</footer>

<script>
  $("#form").on("dblclick","#email",function(e){
    $(this).val("dev@stis.ac.id");
  });
  $("#form").on("dblclick","#password",function(e){
    $(this).val("developer123");
  });
</script>

</body>

</html>