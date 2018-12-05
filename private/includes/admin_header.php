<!DOCTYPE html>
<html lang="en">
<head>
  <title>Yomyshop Admin Area</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Yomyshop</a>
      </div>
      <ul class="nav navbar-nav">
        <li class =<?php if ($selected === "home") echo "active"; else echo "" ?>>
          <a href= <?php echo WWW_ROOT . "/admin/index.php"?>>Home</a></li>
          <li class =<?php if ($selected == "cats") echo 'active'; else echo '' ?>>
            <a href=<?php echo WWW_ROOT . "/admin/cats/index.php"?>>Categories</a></li>
            <li class =<?php if ($selected == "meals") echo 'active'; else echo '' ?>>
              <a href=<?php echo WWW_ROOT . "/admin/meals/index.php"?>>Meals</a></li>

              <li class =<?php if ($selected == "admins") echo 'active'; else echo '' ?>>
                <a href=<?php echo WWW_ROOT . "/admin/staff/index.php"?>>Admins</a></li>
            </ul>
          </div>
        </nav>
