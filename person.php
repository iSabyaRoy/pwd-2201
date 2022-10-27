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
				<table class="table">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Name</th>
							<th scope="col">Phone</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$sql = "SELECT * FROM person";
						$query = $conn->query($sql);


						if($query->num_rows > 0){

							while ($person = $query->fetch_assoc()) {
								?>
								<tr>
									<th scope="row">1</th>
									<td><?php echo $person['name']; ?></td>
									<td><?php echo $person['phone']; ?></td>
									<td class="d-flex gap-2">
										<a href="edit-person.php?id=<?php echo $person['id']; ?>" class="btn btn-primary btn-sm">Edit</a>

										<form action="controller/personcontroller.php" method="POST" onsubmit="return confirm('Do you want to delete?')">
											<input type="hidden" name="id" value="<?php echo $person['id']; ?>">

											<button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>
										</form>
										
									</td>
								</tr>
								<?php
							}

						}else{

							?>
							<tr>
								<td colspan="4" >No data found</td>
							</tr>
							<?php

						}
						?>
						

					</tbody>
				</table>
			</div>
		</div>

	</div>


	



	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>