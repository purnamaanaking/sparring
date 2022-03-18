<html>
	<head>
		<title>NBC</title>
	</head>
	
	<body>
		<form action="<? echo $formAction; ?>" method="post" enctype="multipart/form-data">			
			<table style="border-collapse:collapse;">
				<tr>
					<td>
						<h1>Program Klasifikasi Teks Naive Bayes</p>
					</td>						
				</tr>
				<tr>
					<td>
					<label for="file">Masukkan Kata Kunci:</label>
						<input type="text" name="keyword" id="keyword">
						<input type="submit" name="submit" value="Submit">			
					</td>
				</tr>
			</table>			
		</form>
	</body>
</html>
