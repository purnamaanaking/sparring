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
	<div class="d-flex w-100 h-100 mx-auto flex-column">
		<header class="mb-auto bg-light p-3 border">
			<div class="cover-container m-auto">
				<nav class="navbar">
					<div class="container-fluid navbar-layout">
						<a href="https://ppm.ittelkom-sby.ac.id/" class="navbar-brand">
							<img src="assets/images/lppm-logo.png" width="165.5" alt="Logo LPPM">
						</a>
						<div class="nav nav-masthead justify-content-center float-md-end align-items-center">
							<a class="nav-link active" href="../">Home</a>
							<a class="nav-link" href="#">Daftar Peneliti</a>
							<a class="nav-link" href="#">Tentang Algoritma</a>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<main class="my-5">
			<div class="cover-container m-auto p-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
					<path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
				</svg>
				<h1 class="display-4 mt-2">SPARRING ITTS</h1>
				<p class="lead mb-5">Sistem Partner Riset Matching Untuk Rekomendasi Kolaborasi Riset Berdasarkan Relevansi Topik Penelitian.</p>
				<form action="<?php echo $formAction; ?>" method="POST">
					<div class="row">
						<div class="col-12">
							<div class="mb-2">
								<small>Silakan Ketik Topik Penelitian:</small>
							</div>
							<div class="input-group input-group-lg mb-4">
								<input type="text" name="keyword" class="form-control" id="keyword" placeholder="IoT Enterprise Architecture Machine Learning Database ...">
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
			</div>
		</main>

		<?php include('footer_view.php') ?>
	</div>

	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
