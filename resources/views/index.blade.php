
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

    <html>
        @include('layouts.CommonLayout')
    </html>

		<div id="demo" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ul class="carousel-indicators">
				<li data-target="#demo" data-slide-to="0" class="active"></li>
				<li data-target="#demo" data-slide-to="1"></li>
				<li data-target="#demo" data-slide-to="2"></li>
				<li data-target="#demo" data-slide-to="3"></li>
			</ul>
			
			<!-- The slideshow -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="image/1.jpg" alt="Los Angeles" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="image/3.jpg" alt="Chicago" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="image/2.jpg" alt="New York" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="image/4.jpg" alt="New York" width="1100" height="500">
				</div>
			</div>
			
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
		<section class="my-5">
			<div class="py-5">
				<h1 class="text-center">OUR VISSION</h1>
			</div>
			
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="image/5.png" class="img-fluid" class="aboutimg">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						
						<h2 class="display-4">Plan Healthy exists to provide a better patient experience. We are a one-stop-shop for your health, offering caring doctors, world-class diagnostics and much more.</h2>
						<h2 class="py-2">We believe that everyone should have access to convenient, affordable, and high-quality care. We are on a mission to change how healthcare is delivered in Bangladesh.We know how daunting getting access to the right care can be which is why we focus on turning a doctor visit into a delightful experience. Our goal is to make the process intuitive for our patients and provide care where ever you are – in person or at-home.</h2>
						<a href="{{ route('appointment') }}" class="btn btn-success">Consult with our Doctor</a>
					</div>
				</div>
			</div>
			
			
		</section>
	</div>
	<section class="my-5">
		<div class="py-5">
			<h1 class="text-center">OUR TEAM</h1>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
						<img class="card-img-top" src="image/doctor1.png" alt="Card image">
						<div class="card-body">
							<h3 class="card-title">Sara Collins</h3>
							<p class="card-text">I founded PlanHealthy because I saw a tremendous need for quality healthcare in Bangladesh. I believe positive, systemic change in Bangladesh's health care sector is as necessary as it is possible.</p>
							<a href="{{ route('profile1') }}" class="btn btn-success">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
						<img class="card-img-top" src="image/doctor3.png" alt="Card image">
						<div class="card-body">
							<h3 class="card-title">Lucia Parker</h3>
							<p class="card-text">I am part of PlanHealthy team because I share its focused vision on quality, and feel passionately about providing quality health care to ensure patient satisfaction.</p>
							<a href="{{ route('profile2') }}" class="btn btn-success">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
						<img class="card-img-top" src="image/doctor2.png" alt="Card image">
						<div class="card-body">
							<h3 class="card-title">Kara Jones</h3>
							<p class="card-text">I am a part of PlanHealthy team because it is a project where my experience, skills, and passion can make an impact to the lives of millions..</p>
							<a href="{{ route('profile3') }}" class="btn btn-success">See Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</SECTION>
<section class="my-5">
<div class="py-5">
	<h1 class="text-center">GALLERY</h1>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g2.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g2.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g2.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g2.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g.jpg" class="img-fluid pb-4">
		</div>
		<div class="col-lg-4 col-md-4 col-12">
			<img src="image/g2.jpg" class="img-fluid pb-4">
		</div>
		
	</div>
	
</div>
</section>
<footer>
<h3 class="p-3 bg-dark text-white text-center">planhealthy.com</h3>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>