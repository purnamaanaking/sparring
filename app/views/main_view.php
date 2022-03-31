<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SPARRING - LPPM ITTelkom Surabaya</title>
	<link rel="icon" href="assets/favicon.png" sizes="32x32" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="d-flex h-100 text-center">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="mb-auto">
			<nav class="navbar">
				<div class="container-fluid">
					<a href="https://ppm.ittelkom-sby.ac.id/" class="navbar-brand">
						<img src="assets/images/lppm-logo.png" width="165.5" alt="Logo LPPM">
					</a>
					<div class="nav nav-masthead justify-content-center float-md-end align-items-center">
						<a class="nav-link active" href="../">Home</a>
						<a class="nav-link" href="https://ppm.ittelkom-sby.ac.id/">Website LPPM</a>
					</div>
				</div>
			</nav>
		</header>

		<main class="px-3">
			<h1 class="display-4">SPARRING</h1>
			<p class="lead mb-5">Sistem Partner Riset Matching Untuk Rekomendasi Kolaborasi Riset Berdasarkan Relevansi Topik Penelitian.</p>
			<form action="<? echo $formAction; ?>" method="POST">
				<div class="row">
					<div class="col-12">
						<div class="input-group input-group-lg mb-4">
							<input type="text" name="keyword" class="form-control" id="keyword" placeholder="IoT, Enterprise Architecture, Machine Learning, Database, ...">
							<span class="input-group-text bg-white">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
									<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
								</svg>
							</span>
						</div>
					</div>
					<div class="col-12">
						<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Temukan Partner">
					</div>
				</div>
			</form>
		</main>

		<footer class="mt-auto">
			<p>Copyright © <?php echo date("Y"); ?> LPPM ITTelkom Surabaya. All rights reserved.</p>
		</footer>
	</div>

	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
