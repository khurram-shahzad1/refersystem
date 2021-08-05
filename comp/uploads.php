<?php
    require 'db.php';
   if($_POST) {
    $valid = array('success' => false, 'messages' => array());

    $payment_method = $_POST['payment_method'];
    $userid = $_POST['userid'];
	$type = explode('.', $_FILES['userImage']['name']);
	$type = $type[count($type) - 1];
	$url = 'uploads/' . uniqid(rand()) . '.' . $type;

	if(in_array($type, array('jpg', 'jpeg', 'png'))) {
		if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			if(move_uploaded_file($_FILES['userImage']['tmp_name'], $url)) {

				// insert into database
				$sql = "INSERT INTO payment (user_id,payment_method,screen_shot) VALUES ('$userid','$payment_method','$url')";

				if($GLOBALS['conn']->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Successfully Uploaded! Your status will be updated after admin approved your payment screenshot";
				} 
				else {
					$valid['success'] = false;
					$valid['messages'] = "Error while uploading";
				}

				$GLOBALS['conn']->close();

			}
			else {
				$valid['success'] = false;
				$valid['messages'] = "Error while uploading";
			}
		}
    }
    else {
        $valid['success'] = false;
        $valid['messages'] = "Only jpg, jpeg, png Files Are Accepted";
    }

	echo json_encode($valid);

	// upload the file 
}

?>