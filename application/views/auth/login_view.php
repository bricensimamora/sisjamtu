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

  <link rel="stylesheet" href="<?php echo base_url('assets/css/login-email-style.css'); ?>">

	<title>Login</title>
</head>

<body>

<div class="container h-100">

  <div class="row align-items-center h-100">
    <!-- Row Kosong-Box-Kosong -->
    
    <div class="col-sm-5 mx-auto">
      <!-- Logo dan Tulisan -->
      <div class="login-logo text-center">
        <img class="img-fluid" src="<?php echo base_url('assets/images/polstatstis.png');?>" alt="logo polstat" width="20%" height="20%">
        <span class="login-sisjamtu">LOGIN SISJAMTU</span>
      </div>
      <!-- End Logo dan Tulisan -->

      <!-- Kotak Form -->
      <div class="card">
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
  <strong>Copyright &copy; Polstat Dev Team <?php echo date('Y') ?>.</strong> All rights reserved.
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