<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <?php include('head_view.php') ?>
</head>
<body class="d-flex h-100 text-center">
    <div class="d-flex w-100 h-100 mx-auto flex-column">
        <header class="bg-light p-3 border">
			<div class="cover-container m-auto">
				<nav class="navbar">
					<div class="container-fluid navbar-layout">
						<a href="https://ppm.ittelkom-sby.ac.id/" class="navbar-brand">
							<img src="assets/images/lppm-logo.png" width="165.5" alt="Logo LPPM">
						</a>
						<div class="nav nav-masthead justify-content-center float-md-end align-items-center">
							<a class="nav-link" href="../">Home</a>
							<a class="nav-link" href="#">Daftar Peneliti</a>
							<a class="nav-link" href="#">Tentang</a>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<main class="px-3">
            <div class="cover-container m-auto p-3">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            </svg>
                            <h1 class="display-6 mt-2 ms-2">SPARRING</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-1 text-start">
                            <small>Silakan Ketik Topik Penelitian:</small>
                        </div>
                    </div>
                </div>
                
                <form action="<?php echo $formAction; ?>" method="POST">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="input-group mb-4">
                                <input type="text" name="keyword" class="form-control" id="keyword" value="<?php echo $keyword ?>" placeholder="IoT Enterprise Architecture Machine Learning Database ...">
                                <span class="input-group-text bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary mb-4" style="width: 100%;" name="submit" value="Temukan Partner">
                        </div>
                    </div>
                </form>

                <div class="p-2">
                    <?php foreach($results as $index => $result) { ?>
                        <div class="row mb-3 border-bottom p-4 bg-light">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-md-10 text-start">
                                <div class="row mb-1 border-bottom pb-1">
                                    <div class="col-5 col-md-4"><strong>Nama</strong></div>
                                    <div class="col-7 col-md-8 pe-0"><?php echo $result['name'] ?></div>
                                </div>
                                <div class="row mb-1 border-bottom pb-1">
                                    <div class="col-5 col-md-4"><strong>NIDN</strong></div>
                                    <div class="col-7 col-md-8 pe-0"><?php echo $result['nidn'] ?></div>
                                </div>
                                <div class="row mb-1 border-bottom pb-1">
                                    <div class="col-5 col-md-4"><strong>Program Studi</strong></div>
                                    <div class="col-7 col-md-8 pe-0"><?php echo $result['department'] ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-md-4"><strong>Nilai</strong></div>
                                    <div class="col-7 col-md-8 pe-0">
                                        <div class="badge bg-success">
                                            <?php echo $result['value'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    <?php } ?>
                </div>
            </div>
		</main>

		<?php include('footer_view.php') ?>
	</div>

	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>