<?php 
require 'comp/db.php';
     if(isset($_COOKIE['user_id'])){
      $uid = $_COOKIE['user_id'];
      $sql = "SELECT * FROM user WHERE id = '$uid'";
      $query = mysqli_query($GLOBALS['conn'], $sql);
      $data = mysqli_fetch_array($query);
      $id = $data['id'];
         }
    
?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from referralsystem.codesler.com/refer.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 10:45:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Refer</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/neat.minc6191.css?v=1.0">
  </head>
  <body>

    <div class="o-page">
      <div class="o-page__sidebar js-page-sidebar">
        <aside class="c-sidebar">
          <div class="c-sidebar__brand">
        UserPanel
          </div>

          <!-- Scrollable -->
          <div class="c-sidebar__body">
            <span class="c-sidebar__title">Dashboards</span>
            <ul class="c-sidebar__list">
              <li>
                <a class="c-sidebar__link is-active" href="dash.php">
                  <i class="c-sidebar__icon feather icon-home"></i>Dashboard
                </a>
              </li>
			  <li>
                <a class="c-sidebar__link " href="refer.php">
                  <i class="c-sidebar__icon feather icon-share"></i>Earn Money
                </a>
              </li>
			  <li>
                <a class="c-sidebar__link " href="account.php">
                  <i class="c-sidebar__icon feather icon-user"></i>My Account
                </a>
              </li>
              <li>
                <a class="c-sidebar__link " href="withdraw.php">
                  <i class="c-sidebar__icon feather icon-pocket"></i>Money Withdraw
                </a>
              </li>
            </ul>

          </div>
          

          <a class="c-sidebar__footer" href="comp/actions.php?signout=1">
            Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
          </a>
        </aside>
      </div>
      <main class="o-page__content">
        <header class="c-navbar u-mb-medium">
          <button class="c-sidebar-toggle js-sidebar-toggle">
            <i class="feather icon-align-left"></i>
          </button>

          <h2 class="c-navbar__title">My Dashboard</h2>
        
        </header>
        <div class="container">
        <?php 
                  $uid = $_COOKIE['user_id'];
                  $sql = "SELECT * FROM payment WHERE user_id = '$uid' and status = '1'";
                  $query = mysqli_query($GLOBALS['conn'], $sql);
                  $data = mysqli_fetch_array($query);
                    if($data['status'] == "1"){
                     echo "
                     <div class='c-card'>
                            <h3>Earning</h3>
                       <p>Share your Refer link and code to earn money.</p>
                       <br>
                  <div class='form-group'>
                   <label for='usr'>Your Refer Link:</label>
                   <input type='text' class='form-control input-lg' value='http://localhost/earnp/signup.php?ref=$id'  disabled>
                 </div>
                  <div class='form-group'>
                   <label for='usr'>Your Refer Code:</label>
                   <input type='text' class='form-control input-lg' value='$id' disabled>
                 </div>
                 
                 
                 </div>";
                    }else{
                     
                    } ?>
       
<div class="c-card">
<h2>All Refers</h3><br>
<div class="row">
            <div class="col-12">
              <div class="c-table-responsive@wide">
                <table id="myTable" class="c-table">
                  <thead class="c-table__head">
                    <tr class="c-table__row">
                    <th class="c-table__cell c-table__cell--head">Customer</th>
                      <th class="c-table__cell c-table__cell--head">Email</th>
                      <th class="c-table__cell c-table__cell--head">Join On</th>
                    </tr>
                  </thead>

                  <tbody>
                  <?php 
                  $uid = $_COOKIE['user_id'];
                  $sql = "SELECT * FROM user WHERE refer_code = '$uid'";
                  $query = mysqli_query($GLOBALS['conn'], $sql);
                  while ($data = mysqli_fetch_array($query)) { ?>
                  <tr class="c-table__row">
                  <td class="c-table__cell"><?php echo $data['user_name'] ?></td>
                  <td class="c-table__cell"><?php echo $data['email'] ?></td>
                  <td class="c-table__cell"><?php echo $data['date_time'] ?></td>
                  </tr>
                  <?php } ;?>
				          </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
		<div class="col-12">
              <footer class="c-footer">
                <p>© 2018</p>
                <span class="c-footer__divider">|</span>
                <nav>
                  <a class="c-footer__link" href="#">Terms</a>
                  <a class="c-footer__link" href="#">Privacy</a>
                  <a class="c-footer__link" href="#">FAQ</a>
                  <a class="c-footer__link" href="#">Help</a>
                </nav>
              </footer>

            </div>        </div>
      </main>
    </div> 

    <!-- Main JavaScript -->
		<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <script src="js/neat.minc6191.js?v=1.0"></script>
  </body>

<!-- Mirrored from referralsystem.codesler.com/refer.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 10:46:02 GMT -->
</html>