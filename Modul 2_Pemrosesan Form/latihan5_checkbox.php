<!--
1. start
2. input pilhan dengan memilih checkbox
3. tekan tombol submit "ok"
4. output nama "Halo,"
5. end 
-->

<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Data Checkbox</title> 		<!-- digunakan untuk menuliskan judul -->
</head> 
 
<body> 
 
<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->

  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
    Jenis Kelamin 

<!-- digunakan untuk perintah memasukkan tpe berupa teks dalam bentuk seleksi data -->

    <input type="checkbox" name="hobby[]" value="Membaca" 
    />Membaca 							<!-- memiliki nilai pada checkbox pertama dengan keluaran membaca -->
 
    <input type="checkbox" name="hobby[]" value="Olahraga" 
    />Olahraga 							<!-- memiliki nilai pada checkbox kedua dengan keluaran olahraga -->
 
    <input type="checkbox" name="hobby[]" value="Menyanyi" 
    />Menyanyi <br /> 						<!-- memiliki nilai pada checkbox ketiga dengan keluaran menyanyi  -->
 
    <input type="submit" value="ok" /> 
  </form> 

<!-- 
checkbox digunakan untuk menyatakan pilihan bawaan yang akan ditampilkan pada keadaan awal
kotak checkbox memungkinkan pengguna memilih dengan mencetang atau tidak mencetang pilihannya
--> 

<!--
1. kata text berarti membentuk kotak teks
2. kata setelah submit untuk membentuk tombol
3. name adalah variabel yang akan menerima data yang dimasukkan pemakai pada kotak teks
4. value adalah keterangan yang akan ditaruh pada tombol
5. kata disebelah kanan method adalah metode yang digunakan untuk mengirim variabel ke skrip yang dipanggil yaitu dengan menggunakan metod post
6. <br/> kode html untuk berpindah baris
-->

<?php 						//awal php
// Ekstraksi nilai 
if (isset($_POST['hobby'])) { 				//menggunakan pernyataan if

  foreach ($_POST['hobby'] as $key => $val) {  //menggunakan perulangan foreach
    echo $key . ' -> ' .$val . '<br />'; 
  } 
} 

// akhir php ?> 
<!--
1. ektraksi nilai digunakan untuk memeriksa variabel hobby ada atau tidak
2. variabel ini akan ada sekiranya pemakai mencentang misalnya hobby menyanyi
   dan isinya berupa menyanyi.
-->
 
</body> 
 
</html> 