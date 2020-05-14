<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="<?php echo base_url('assets/css/login-style.css'); ?>">

	<title>Login</title>
</head>

<body>

<div class="container h-100">

  <div class="row align-items-center h-100">
    <!-- BOX KOSONG -->

    <div class="col-sm-5 mx-auto">
      <div class="card">

        <!-- Logo dan Tulisan -->
        <div class="login-logo text-center">
          <img class="img-fluid" src="<?= base_url('assets/images/polstatstis.png');?>" alt="logo polstat" width="20%" height="20%">
          <span class="login-sisjamtu">Login Sisjamtu</span>
        </div>
        <!-- End Logo dan Tulisan -->

        <div class="card-body">
          
          <form action="<?= base_url("auth/token"); ?>" method="post">
          
            <div class="form-group">
              <label for="inputToken">Kode Token</label>
              <input type="text" class="form-control" id="token" name="token" aria-describedby="tokenHelp">
            </div>

            <button type="submit" class="btn btn-primary">Masuk</button>

          </form>

        </div>
      </div>
    </div>
    <!-- BOX KOSONG -->
  </div>

</div>

<footer>
  <div class="container-fluid fixed-bottom padding text-center">
  <strong>&copy; <?php echo date('Y') ?>. Polstat Dev Team.</strong>
  </div>
</footer>

</body>

</html>
