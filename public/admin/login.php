<?php $selected = "home";?>
<?php require_once('../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>

<?php
$errors = [];
$username = '';
$password = '';

//print_r($session);

//if(!$session->is_logged_in())
//echo "not logged in";
//else
//echo "logged in";

if(is_post_request()) {

  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    $admin = Admin::find_by_username($username);
    // test if admin found and password is correct
  //print_r($admin);
    //echo "<br>";

    if($admin != false && $admin->verify_password($password)) {
      echo "true";
      // Mark admin as logged in
      $session->login($admin);
      redirect_to('index.php');
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }

  }

} // END IF POST REQUEST

?>
<?php $page_title = 'Log in'; ?>
<div class="container">
  <h1>Log in</h1>

  <?php //print_r($errors); ?>

  <form role="form" action="login.php" method="post">
    Username:<br />
    <input class="form-control" type="text" name="username" value="" /><br />
    Password:<br />
    <input class="form-control" type="password" name="password" value="" /><br />
    <input class="form-control" type="submit" name="submit" value="Submit"  />
  </form>

</div>
