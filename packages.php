<DOCTYPE html>
<html>
	<head>
		<?php
		include 'includes/headTag.php'
		?>
		<title></title>
	</head>
	<body>
		<?php
		include 'includes/header.php'
		?>
			
		<div class="container">
			<div class="row">
				<div class="col-md-12 citySearch">

				</div>
			</div>
			<div class="row packages">
				<div class="col-md-4 searchPanel">
				<form action="packages.php" method="GET">
				City:
				<select name="cities">
					<option value="Mackinac+Island">Mackinac Island</option>
					<option value="Ann+Arbor">Ann Arbor</option>
					<option value="Traverse+City">Traverse City</option>
					<br />
				<input type ="submit">
				</form>
				</div>
				<div class="col-md-8">
				<?php
				include 'includes/singlepackage.php'
				?>
				</div>
			</div>
		</div>

		<?php
		include 'includes/footer.php'
		?>
	</body>
</html>