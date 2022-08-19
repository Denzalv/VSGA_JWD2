<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas3_Denialpiana</title>
</head>
<body>
	<?php

	// memasukan judul dalam variabel $judul
	$judul = "=============== CETAK BILANGAN GANJIL GENAP 1-100 ===============";
	
	// memasukan tag <br> dalam variabel $nl
	$nl = "<br>";

	// menampilkan variabel $judul
	echo $judul;

	// menampilkan variabel $nl
	echo $nl;

	// memncetak bilangan ganjil genap 1-100 menggunakan perulangan for
	// $x = 1 --> menyatakan bahwa variabel $x bernilai 1, sebagai titik awal 
	// $x <=100 --> menyatakan batasan perulangan harus sampai pada kurang atau sama dengan 100
	// $x++ --> increment (variabel $x secara terus menerus nilainya ditambah 1)
	for ($x = 1; $x <=100; $x++){
		// menggunakan if else untuk mengatur kondisi 
		// $x % 2 != 0 --> rumus untuk menentukan ganjil "apabila variabel $x di mod dengan nilai 2 hasilnya tidak sama dengan 0 berarti ganjil"
		if ($x % 2 != 0){
			//menampilkan nilai hasil dalam kondisi
			echo "{$x} adalah Bilangan Ganjil. {$nl}";
		} else {
			//menampilkan nilai hasil diluar kondisi
			echo "{$x} adalah Bilangan Genap. {$nl}";
		}
	}

	/*
	//sama hanya saja beda kondisi
	for ($x = 1; $x <= 100; $x++) {
		 if ($x % 2 == 0){
				echo "{$x} adalah Bilangan Genap. {$nl}";
		} else {
			echo "{$x} adalah Bilangan Ganjil. {$nl}";
		}
	} 
	*/

	?>
</body>
</html>