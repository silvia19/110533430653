<!--
1. start
2. input nama
3. tekan tombol submit "ok"
4. output nama
5. end
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> 								
	<title>Identifikasi Metode</title> 	<!--digunakan untuk menulis judul -->		
</head>

<body>

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get"> <!-- kata setelah action adalah nama berkas yang akan sekiranya tombol submit diklik -->
Nama
<input type="text" name="nama"/> <br /> <!-- digunakan untuk perintah memasukkan tpe berupa teks -->

<input type="submit" value="OK" />
</form>

<!--
1. kata text berarti membentuk kotak teks
2. kata setelah submit untuk membentuk tombol
3. name adalah variabel yang akan menerima data yang dimasukkan pemakai pada kotak teks
4. value adalah keterangan yang akan ditaruh pada tombol
5. kata disebelah kanan method adalah metode yang digunakan untuk mengirim variabel ke skrip yang dipanggil yaitu dengan menggunakan metod get
-->

<?php 						//awal php
if (isset($_REQUEST['nama'])){			//menggunakan pernyataan if


echo 'Metode, '. $_SERVER['REQUEST_METHOD'];
}

?> 						<!--akhir php-->

</body>
</html>