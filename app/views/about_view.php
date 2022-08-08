<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <?php include('head_view.php') ?>
</head>
<body class="d-flex h-100 text-center">
    <div class="d-flex w-100 h-100 mx-auto flex-column">
        <header class="shadow-sm">
			<div class="cover-container m-auto">
				<nav class="navbar">
					<div class="container-fluid navbar-layout">
						<a href="../" class="navbar-brand d-flex">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#344563" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
								<path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							</svg>
							<div class="ms-2 navbar-title">SPARRING</div>
						</a>
						<div class="nav nav-masthead justify-content-center float-md-end align-items-center">
							<a class="nav-link" href="../">Beranda</a>
							<a class="nav-link" href="../app/researcher.php">Daftar Peneliti</a>
							<a class="nav-link active" href="../app/about.php">Tentang Algoritma</a>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<main class="px-3">
            <div class="cover-container m-auto p-3 mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-window" viewBox="0 0 16 16">
                                <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1H2z"/>
                            </svg>
                            <h4 class="ms-2 mt-2">Tentang Algoritma</h4>
                        </div>
                    </div>
                </div>

                <hr>
            </div>

            <div class="cover-container m-auto p-3 text-start">
                <p>Sistem Partner Research Matching merupakan program perekomendasi rekan peneliti dengan menggunakan pendekatan algoritma klasifikasi Naive Bayes dan fungsi aktivasi Sigmoid. Data yang digunakan adalah dari publikasi yang telah dihasilkan oleh civitas akademika IT Telkom Surabaya baik dari pengindeks Google Scholar maupun Scopus.</p>

				<p>Kata kunci (keywords) dari tiap publikasi menjadi data masukan, lalu dikalkulasi total publikasi untuk setiap peneliti/dosen. Fungsi aktivasi Sigmoid berperan sebagai pengubah keluaran algoritma klasifikasi menjadi rentang 0-1. Kemudian nilai keluaran diubah menjadi persentase.</p>

				<p>Program ini dibangun dalam rangka penelitian penugasan skema terapan LPPM periode Januari 2022 yang beranggotakan:</p>

				<ul>
					<li>Mochamad Nizar Palefi Ma'ady, S.Kom., M.Kom., M.IM.</li>
					<li>Purnama Anaking, S.Kom., M.Kom.</li>
					<li>Muhammad Dzulfikar Fauzi, S.Kom., M.Cs.</li>
				</ul>

				<p>Kode program dapat diunduh melalui Github berikut: <a href="https://github.com/purnamaanaking/sparring" target="_blank">https://github.com/purnamaanaking/sparring</a></p>
            
                <p><strong>Version code: 1.0</strong></p>
            </div>
		</main>

		<?php include('footer_view.php') ?>
	</div>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/top.js"></script>
</body>
</html>