<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php include 'menu.php'; ?>
		<section class="my-5">
			<div class="py-5">
				<h1 class="text-center">OUR DOCTORS</h1>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="image/doctor1.png" alt="Card image">
							<div class="card-body">
								<h3 class="card-title">Sara Collins</h3>
								<p class="card-text">I founded PlanHealthy because I saw a tremendous need for quality healthcare in Bangladesh. I believe positive, systemic change in Bangladesh's health care sector is as necessary as it is possible.</p>
								<a href="profile1.php" class="btn btn-success">See Profile</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="image/doctor3.png" alt="Card image">
							<div class="card-body">
								<h3 class="card-title">Lucia Parker</h3>
								<p class="card-text">I am part of PlanHealthy team because I share its focused vision on quality, and feel passionately about providing quality health care to ensure patient satisfaction.</p>
								<a href="profile2.php" class="btn btn-success">See Profile</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
						<div class="card">
							<img class="card-img-top" src="image/doctor2.png" alt="Card image">
							<div class="card-body">
								<h3 class="card-title">Kara Jones</h3>
								<p class="card-text">I am a part of PlanHealthy team because it is a project where my experience, skills, and passion can make an impact to the lives of millions..</p>
								<a href="profile3.php" class="btn btn-success">See Profile</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h1 class="text-center">MAKE AN APPOINTMENT</h1>
	</div>
	<div class="w-50 m-auto">
		<form action="uerinfo.php" method="post">
			<div class="form-group">
				<label>PAITENT NAME</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>EMAIL ID</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>CONTACT NO</label>
				<input type="text" name="contact" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>DEPARTMENT</label>
				<input type="text" name="department" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>DATE</label>
				<input type="date" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>ADDITIONAL COMMENT</label>
				<textarea class="form-control">
				
				</textarea>
			</div>
			<li class="nav-item">
				<a class="nav-link btn btn-success" href="payment.php">Make Payment</a>
			</li>
		</form>
		
	</div>
</section>
<footer>
	<h3 class="p-3 bg-dark text-white text-center">planhealthy.com</h3>
</footer>

</body>
</html>