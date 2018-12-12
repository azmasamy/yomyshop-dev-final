<!doctype html>
<?php require_once('..//private/initialize.php'); ?>
<html lang="en">
<head>
	<title>YomyShop - Istanbul</title>
	<meta charset="utf-8">
	<link rel="stylesheet" media="all" href="css/public.css">
</head>

<body>


	<?php require_once '../private/includes/header.php'; ?>
	<div>
		<ul id="menu">
			<li><a href="meals.php">View Meals</a></li>
			<li><a href="aboutus.php">About Us</a></li>
		</ul>
	</div>


	<div id="main">
		<div class="container">

			<div class="content">
				<h1>Choose your meal</h1>
			</div>

		<table class="table">
			<?php
			//Get all meals from database
			$menu = MenuItem::find_all();
			if(empty($menu)) {
				die("No meals to be displayed");
			}
			foreach ($menu as $menuItem) {
				?>

				<tr>
					<td> <img height='100' width='100' src= 'img/<?php echo $menuItem->getPhoto(); ?>'></img> </td>
					<div>
						<td>
							<h5> <?php echo  $menuItem->getName(); ?> </h5>
							<div>
								<h5> <?php echo  $menuItem->getPrice(); ?>$ </h5>
								<p> <?php echo  $menuItem->getDecription(); ?> </p>
							</td>
							<td>
								<a href="#" class="btn btn-primary">Order</a>
							</td>
						</div>
					</div>

				</tr>

				<?php
			}

			?>
			<br>
			<br>
			<br>
		</table>
		<hr>
	</div>

	<?php require_once '../private/includes/footer.php'; ?>
</div>

</body>
</html>
