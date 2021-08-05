<?php 
    if(isset($_COOKIE["admin"])){
		header("Location: dash.php");
	}
	?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from referralsystem.codesler.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 09:51:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign In</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/neat.minc619.css?v=1.0">
  </head>
  <body>

    <div class="o-page o-page--center">
      <div class="o-page__card">
        <div class="c-card c-card--center">
          <span class="c-icon c-icon--large u-mb-small">
            <img src="tile.png" alt="Logo">
          </span>

          <h4 class="u-mb-medium">Welcome Back :)</h4>
		            <form id="signInForm" method="post">
            <div class="c-field">
              <label class="c-field__label">Email</label>
              <input class="c-input u-mb-small" type="text" name="email" placeholder="Email" required>
            </div>
            
            <div class="c-field">
              <label class="c-field__label">Password</label>
              <input class="c-input u-mb-small" type="password" placeholder="Password" name="password" required>
            </div>
			<input type="hidden" name="signInForm" value="1">
            <button type="submit" id="submit" class="c-btn c-btn--fullwidth c-btn--info" >Login</button>
            <input type="hidden" name="signIn" value="1">
          </form>
		 
        </div>
      </div>
    </div>
    <script src="../js/neat.minc619.js?v=1.0"></script>
	<script>
	$(document).ready(function(){
	


	$('#signInForm').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: 'core/actions.php',
			data: $('#signInForm').serialize(),
			success: function (val) {
				console.log(val);
				if (val == "0" || val == "") {
					alert('Invalid Login');
				}else {
					setTimeout(function() {
					location.replace('dash.php');
					}, 500);
				}
			}
		});
	});


	});
	</script>
  </body>

<!-- Mirrored from referralsystem.codesler.com/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 09:51:47 GMT -->
</html>