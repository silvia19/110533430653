<!--
1. start
2. input pilhan pada radio button
3. tekan tombol submit "ok"
4. output nama "Halo,"
5. end 
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 4.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Data Radio Button</title> <!-- digunakan untuk menuliskan judul -->
</head>

<body>

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">	<!-- kata setelah action adalah nama berkas yang akan sekiranya tombol submit diklik -->

Jenis Kelamin
<!-- digunakan untuk perintah memasukkan tpe berupa teks dalam bentuk radio button -->
	<input type="radio" name="sex" value="Pria"/> Pria
	<input type="radio" name="sex" value="Wanita"/> Wanita <br />
	
	<input type="submit" value="OK" />
	</form>
<!--
1. kata text berarti membentuk kotak teks
2. kata setelah submit untuk membentuk tombol
3. name adalah variabel yang akan menerima data yang dimasukkan pemakai pada kotak teks
4. value adalah keterangan yang akan ditaruh pada tombol
5. kata disebelah kanan method adalah metode yang digunakan untuk mengirim variabel ke skrip yang dipanggil yaitu dengan menggunakan metod post
6. <br/> kode html untuk berpindah baris
-->


<?php //awal php
if (isset($_POST['sex'])){ //menggunakan pernyataan if


echo $_POST['sex']; //perintah untuk mencetak hasil inputan
}

// akhir php?>

</body>
</html>