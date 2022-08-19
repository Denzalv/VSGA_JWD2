<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas4_Denialpiana</title>
  </head>
  <body>
    <!-- form dengan method post -->
    <form method="post">
      Jumlah Bintang = <input type="text" name="bintang" />
      <br />
      <input type="submit" value="kirim" />
    </form>
    <?php
      // Memasukan hasil post pada sebuah variabel, supaya mudah di panggil
      $z = $_POST['bintang'];

      // memasukan tag <br> dalam variabel $nl
      $nl = "<br>";

      echo $nl;

      // Memakai Perulangan For
      // Menentukan nilai awal --> $x = 1
      // Menentukan batasan berdasar pada variabel $z yang merupakan hasil dari inputan dari form --> $x <= $z
      // Increment --> $x++
      for ($x = 1; $x <= $z; $x++){
        // memakai satu buah for lagi, karena apabila hanya satu hasilkan akan satu bintang terus kebawah
        // menentukan nilai awal --> $y = 1
        // menentukan batasan berdasar pada nilai variabel $x
        // Increment --> $y++
        for ($y = 1; $y <= $x; $y++){
          //menampilkan dengan bintang
            echo "*";
        }
        // menampilkan br supaya menurun tidak kesamping
        echo "{$nl}";
      }
		?>
  </body>
</html>

