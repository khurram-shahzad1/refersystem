<?php 
require 'comp/db.php';
     if(isset($_COOKIE['user_id'])){
      $uid = $_COOKIE['user_id'];
      $sql = "SELECT * FROM user WHERE id = '$uid'";
      $query = mysqli_query($GLOBALS['conn'], $sql);
      $data = mysqli_fetch_array($query);
         }
    
?>
<!doctype html>
<html lang="en">
  
<!-- Mirrored from referralsystem.codesler.com/account.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 10:46:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Account</title>
    <meta name="description" content="Neat">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Google Font -->


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
			      <h3>Update your settings</h3>
	  <br>
	  
<br>

      <div class="c-card">
      <p>Account Settings</p>
	  <br>
      <div class="c-card-body">
     <div class="form-group">
      <form id="UpdateForm" method="post">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" name="name" value="<?php echo $data['name'];?>">
</div>
<div class="form-group">
  <label for="usr">Username:</label>
  <input type="text" class="form-control" name="user_name" value="<?php echo $data['user_name'];?>">
</div>
<div class="form-group">
  <label for="usr">Email:</label>
  <input type="text" class="form-control" name="email" value="<?php echo $data['email'];?>">
</div>
<div class="form-group">
  <label for="usr">Mobile No:</label>
  <input type="text" class="form-control" name="mobile_no" value="<?php echo $data['mobile_no'];?>">
</div>
<div class="form-group">
  <label for="usr">Password:</label>
  <input type="text" class="form-control" name="password" value="<?php echo $data['password'];?>">
  <input type="hidden" name="UpdateForm" value="<?php echo $uid;?>">
</div>
<div class="form-group">
  <label for="usr">Refer Code:</label>
  <input type="text" class="form-control" disabled value="<?php echo $data['refer_code'];?>">
</div>
  <input type="submit" class="c-btn c-btn--warning" value="UPDATE PROFILE">
</form>
</div>
</div>
<br>
 <div class="c-card">
    <h4>Set Payment Method</h4>
	<br>
	<button type="button" class="c-btn c-btn--warning" data-toggle="modal" data-target="#modal1">
                  Choose Payment Method
                </button>

	<br>
       <div class="c-card-body">
</div></div>
<?php
include 'comp/db.php';
$sql = "SELECT * FROM payment WHERE user_id='$uid'";
$query = mysqli_query($GLOBALS['conn'], $sql);

?>
<div class="row">
            <div class="col-12">
              <div class="c-table-responsive@wide">
                <table class="c-table">
                  <thead class="c-table__head">
                    <tr class="c-table__row">
                      <th class="c-table__cell c-table__cell--head">Method</th>
                      <th class="c-table__cell c-table__cell--head">ScreenShort</th>
                      <th class="c-table__cell c-table__cell--head">Status</th>
                      
                    </tr>
                  </thead>

                  <tbody>
                  
                  <?php while ($data = mysqli_fetch_array($query)) {?>
                    <tr class="c-table__row">
                    <td class="c-table__cell"><?php echo $data['payment_method'] ?></td>
                    <td class="c-table__cell"> <img class="img-responsive" src="comp/<?php echo $data['screen_shot'] ?>" width="450px;" ></td>
                    <td class="c-table__cell"> 
                    <?php if($data['status'] == 0){
                    echo "<a class='c-badge c-badge--small c-badge--danger'>Not Active</a>";
                    }else{
                    echo"<a class='c-badge c-badge--small c-badge--success'>Active</a>";
                    }
                    ?>
                    </td>
                    </tr>
                    <?php } ;?>
                    
				     </tbody>
                </table>
              </div>
            </div>
       
	  </div>
</div>
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
			 
            </div>		</div>
		</main>
    </div>
<!-- Modal -->
               
				
				<div class="c-modal modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1">
                    <div class="c-modal__dialog modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="u-p-medium" style="max-width:500px;">
                            <div id="messages"></div>
                            <form action="comp/uploads.php" method="post" enctype="multipart/form-data"
                                    id="uploadImageForm">
                                <h3>Payment Method</h3>
								<br>
                <input type="hidden" class="form-control" id="userid" value="<?php echo $uid; ?>"  name="userid">
                <select name="payment_method" class="form-control">
                <option>----Select Method----</option>
                               <option >JazzCash</option>
                               <option>EasyPaisa</option>
									<br /></select>
								<br>
                
    <input type="file" class="form-data" name="userImage">
    <br>
								<br>
								<input type="submit" class="c-btn c-btn--success" value="ADD"/>
								</form>
                            </div>
							
                        </div>
						
                    </div>
					
                </div>
				
    <!-- Main JavaScript -->

    <script src="js/neat.minc6191.js?v=1.0"></script>
    <script>

       $(function () {
            $('#UpdateForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'comp/actions.php',
                    data: $('#UpdateForm').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0" || val == "") {
                          alert("Error!");
                          setTimeout(function () {
                            location.reload();
                            }, 500);
                        } else {
                              alert("Updated!");
                              setTimeout(function () {
                                location.replace('account.php');
                              }, 500);

                        }
                    }
                });

            });
        })

        $(document).ready(function () {
                                    $("#uploadImageForm").unbind('submit').bind('submit', function () {

                                        var form = $(this);
                                        var formData = new FormData($(this)[0]);

                                        $.ajax({
                                            url: form.attr('action'),
                                            type: form.attr('method'),
                                            data: formData,
                                            dataType: 'json',
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            async: false,
                                            success: function (response) {
                                                if (response.success == true) {
                                                    $("#messages").html(
                                                        '<div class="alert alert-success alert-dismissible" role="alert">' +
                                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                        response.messages +
                                                        '</div>');
                                                    setTimeout(function () {
                                                        location.replace(
                                                            'account.php');
                                                    }, 2500);
                                                } else {
                                                    $("#messages").html(
                                                        '<div class="alert alert-warning alert-dismissible" role="alert">' +
                                                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                        response.messages +
                                                        '</div>');
                                                        setTimeout(function () {
                                                        location.replace(
                                                            'account.php');
                                                    }, 2500);
                                                }
                                            }
                                        });

                                        return false;
                                    });
                                });
        </script>
  </body>

<!-- Mirrored from referralsystem.codesler.com/account.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 10:46:02 GMT -->
</html>