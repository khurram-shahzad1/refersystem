<?php require '../comp/db.php';
     if(!isset($_COOKIE['admin'])){
        header("Location: index.php");
         }else{

         }
    
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from referralsystem.codesler.com/withdraw.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 10:46:02 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Withdrwal Money</title>
  <meta name="description" content="Neat">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Favicon -->
  <link rel="apple-touch-icon" href="../apple-touch-icon.png">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="../css/neat.minc619.css?v=1.0">
</head>

<body>

  <div class="o-page">
    <br />
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


        <a class="c-sidebar__footer" href="core/actions.php?signout=1">
          Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
        </a>
      </aside>
    </div>
    <main class="o-page__content" style="margin-top:-24px">
      <header class="c-navbar u-mb-medium">
        <button class="c-sidebar-toggle js-sidebar-toggle">
          <i class="feather icon-align-left"></i>
        </button>

        <h2 class="c-navbar__title">My Dashboard</h2>

      </header>

      <div class="container">
        <h3>Withdrawl Requests</h3>
        <br>

        <div class="c-card">
          <div class="row">
            <div class="col-12">
              <div class="c-table-responsive@wide">
                <table class="c-table">
                  <thead class="c-table__head">
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">#ID</th>
                      <th class="c-table__cell c-table__cell--head">Amount</th>
                      <th class="c-table__cell c-table__cell--head">By</th>
                      <th class="c-table__cell c-table__cell--head">Status</th>
                      <th class="c-table__cell c-table__cell--head">Actions</th>
                    </tr>
                  </thead>

                  <tbody>
              </div>
            </div>
            <?php
include '../comp/db.php';
$sql = "SELECT * FROM withdraw";
$query = mysqli_query($GLOBALS['conn'], $sql);
$i = 1;

?> <?php while ($data = mysqli_fetch_array($query)) {?>
            <tr class="c-table__row">
              <td class="c-table__cell">
                <?php echo $i++; ?>
              </td>
              <td class="c-table__cell">
                <a class="c-badge c-badge--small c-badge--success">₨.<?php echo $data['withdraw_amount'] ?></a>
              </td>
              <td class="c-table__cell"><?php echo $data['payment_method'] ?> </td>
              <td class="c-table__cell">
                <?php if($data['status'] == 0){
                                echo "<a class='c-badge c-badge--small c-badge--danger'>Not Approved</a>";
                                }else{
                                echo"<a class='c-badge c-badge--small c-badge--success'>Approved</a>";
                    }
                    ?></td>
              <td class="c-table__cell">
                <button uid=<?php echo $data['id'] ?> class="btn btn-sm btn-success m-t-5 approve">Approve</button>
              </td>
            </tr>
            <?php } ;?> </tbody>
            </table>
          </div>
        </div>
      </div>
  </div>
  </div>
  <br>
  <br>

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

  </div>
  </div>
  </main>

  </div>

  <!-- Main JavaScript -->
  <script src="../js/neat.minc619.js?v=1.0"></script>
  <script>
$(".approve").on("click", function(approve){
  approve.preventDefault();
      var uid = $(this).attr('uid').trim();
      var prnt = $(this).parent().siblings(".status");
      
      var status = 1;
        $.ajax({
          type: 'post',
          url: 'core/actions.php',
          data: {approve:uid , status:status},
          success: function (val) {
            console.log(val);
            if (val == 1) {
              setTimeout(function () {
                alert("Approved");
               location.replace('withdraw.php');
              }, 500);
			  // location.reload();
            }else {
              
            }
          }
        });
      });
  </script>
</body>

<!-- Mirrored from referralsystem.codesler.com/withdraw.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 10:46:02 GMT -->

</html>