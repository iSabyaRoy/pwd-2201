<!DOCTYPE html>
<html>
<head>
	<title>This is my first website</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>

	<?php include_once 'partials/navbar.php'; ?>

	<div class="container">

		<div class="row mt-5">
			<div class="col-lg-6">
				<form action="controller/personcontroller.php" method="POST">

					<div class="form-group mb-3">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control">
					</div>

					<div class="form-group mb-3">
						<label for="phone">Phone Number</label>
						<input type="text" name="phone" id="phone" class="form-control">
					</div>

					<button type="submit" name="save" class="btn btn-primary">Save</button>
				</form>
			</div>
		</div>

	</div>


	



	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>