<?php 
if(isset($_GET["ref"])){
		$refer_code = $_GET["ref"];
  }
  ?>
  <!doctype html>
<html lang="en">
  
<!-- Mirrored from referralsystem.codesler.com/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 09:51:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">	 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="https://referralsystem.codesler.com/apple-touch-icon.png">
    <link rel="shortcut icon" href="https://referralsystem.codesler.com/favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://referralsystem.codesler.com/css/neat.min.css">
  </head>
  <body>

    <div class="o-page o-page--center">
      <div class="o-page__card">
        <div class="c-card c-card--center">
          <span class="c-icon c-icon--large u-mb-small">
            <img src="https://referralsystem.codesler.com/tile.png" alt="Logo">
          </span>

          <h4 class="u-mb-medium">Sign Up to Earn Money</h4>
		           <form id="signUp" method="post">
            <div class="c-field">
              <label class="c-field__label">Name</label>
              <input class="c-input u-mb-small" type="text" placeholder="e.g. Muhammad Ahmad" name="name" required>
            </div>
			
			 <div class="c-field">
              <label class="c-field__label">Username</label>
              <input class="c-input u-mb-small"  type="text" placeholder="e.g. Ahmad5565" name="user_name" required>
            </div>

            <div class="c-field">
              <label class="c-field__label">Email Address</label>
              <input class="c-input u-mb-small" type="email" placeholder="e.g. muhammadahmad@gnmail.com.com" name="email" required>
            </div>
            <div class="c-field u-mb-small">
              <label class="c-field__label">Mobile No</label>
              <input class="c-input" type="number" placeholder="Mobile No" name="mobile_no" required>
            </div>
            
            <div class="c-field u-mb-small">
              <label class="c-field__label">Password</label>
              <input class="c-input" type="password" placeholder="Numbers, Pharagraphs Only" name="password" required>
            </div>
            <?php if(isset($_GET["ref"])){ ?>
            <div class="c-field u-mb-small">
              <label class="c-field__label">Refer Code</label>
              <input class="c-input" type="text" placeholder="Refer Code (Optional)" value="<?php echo $refer_code;?>" name="refer_code">
            </div>
            <?php }else{ ?>
<div class="c-field u-mb-small">
<label class="c-field__label">Refer Code</label>
<input class="c-input" type="text" placeholder="Refer Code (Optional)" name="refer_code">
</div>
<?php } ?>

			<br>
            <input type="submit" class="c-btn c-btn--fullwidth c-btn--info">
			<br>
			<br>
      <input type="hidden" name="signUp" value="1">
			<p>Have an account already? <a href="login.php">Login now</p>
          </form>
        </div>
      </div>
    </div>
    <script src="https://referralsystem.codesler.com/js/neat.min.js?v=1.0"></script>
	<script>
   $(function () {
            $('#signUp').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'comp/actions.php',
                    data: $('#signUp').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                            alert("Error");
                        } 
                           else {
                                setTimeout(function () {
                                    location.replace('index.php');
                                }, 500);
                            }
                    }
                });

            });
        })
</script>
  </body>

<!-- Mirrored from referralsystem.codesler.com/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 09:51:41 GMT -->
</html>