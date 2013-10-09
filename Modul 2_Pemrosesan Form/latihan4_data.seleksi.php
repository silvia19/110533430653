<!--
1. start
2. input pilhan
3. tekan tombol submit "ok"
4. output nama "Halo,"
5. end 
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Seleksi</title>	<!-- digunakan untuk menuliskan judul -->
</head>

<body>

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<!-- digunakan untuk perintah memasukkan tipe berupa teks dalam bentuk seleksi data -->
	Pekerjaan
	<select name="job">
		<option value="Mahasiswa">Mahasiswa
		<option value="ABRI">ABRI
		<option value="PNS">PNS
		<option value="Swasta">Swasta
	</select> <br />
<!-- 
selected digunakan untuk menyatakan pilihan bawaan yang akan ditampilkan pada keadaan awal
-->	

<input type="submit" value="ok" />
</form>

<!--
1. kata text berarti membentuk kotak teks
2. kata setelah submit untuk membentuk tombol
3. name adalah variabel yang akan menerima data yang dimasukkan pemakai pada kotak teks
4. value adalah keterangan yang akan ditaruh pada tombol
5. kata disebelah kanan method adalah metode yang digunakan untuk mengirim variabel ke skrip yang dipanggil yaitu dengan menggunakan metod post
6. <br/> kode html untuk berpindah baris
-->

<?php	//awal php

//ekstraksi nilai
if (isset($_POST['job'])){	//menggunakan pernyataan if

echo $_POST['job'];		//perintah untuk mencetak hasil inputan
}

// akhir php ?>

<!--
1. ektraksi nilai digunakan untuk memeriksa variabel job ada atau tidak
2. variabel ini akan ada sekiranya pemakai mencentang misalnya job PNS
   dan isinya berupa PNS.
-->

</body>
</html>