<?php $selected = "home";?>
<?php require_once('../../private/initialize.php'); ?>
<?php require_once(INCLUDES_PATH.'/admin_header.php'); ?>
<div class="container">
  <h3>Welcome to Yomyshop admin panel</h3>
  <?php

  if($session->is_logged_in())
    echo "Logged in, ". "<a href='logout.php'> logout </a>";
    else {
      echo " " . "<a href='login.php'> Login</a>" . ", to access the admin panel";
    }

   ?>
</div>

</body>
</html>
