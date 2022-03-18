<html>
	<head>
		<title>NBC</title>
	</head>
	
	<body>
		<form action="<?php echo $form_link; ?>" method="post" enctype="multipart/form-data">			
			<table width = 360 border = 1>
				<tr>
					<td>
						<p align=center>.:Program Klasifikasi Teks Naive Bayes:.</p>
						<hr>
						<label for="file">Masukkan File:</label>
						<input type="file" name="file" id="file"><br>
						<input type="submit" name="submit" value="Submit">			
					</td>						
				</tr>
			</table>			
		</form>
	</body>
</html>
