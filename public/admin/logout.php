<?php $selected = "home";?>
<?php require_once('../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>


<?php
// Log out the admin
$session->logout();

redirect_to('login.php');

?>
