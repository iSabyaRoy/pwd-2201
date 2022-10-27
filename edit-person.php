<?php include_once 'controller/db.php'; ?>
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
				<?php 
				$id = $_GET['id'];

				$sql = "SELECT * FROM person WHERE id = $id";

				$query = $conn->query($sql);

				if($query->num_rows > 0){
					while ($person = $query->fetch_assoc()) {
						
						?>
						<form action="controller/personcontroller.php" method="POST">

							<input type="hidden" name="id" value="<?php echo $person['id']; ?>">

							<div class="form-group mb-3">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" class="form-control" value="<?php echo $person['name']; ?>">
							</div>

							<div class="form-group mb-3">
								<label for="phone">Phone Number</label>
								<input type="text" name="phone" id="phone" class="form-control" value="<?php echo $person['phone']; ?>">
							</div>

							<button type="submit" name="update" class="btn btn-primary">Save</button>
						</form>

						<?php
					}
				}
				?>
				
			</div>
		</div>

	</div>


	



	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>