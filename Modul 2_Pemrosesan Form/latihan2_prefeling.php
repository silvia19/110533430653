<!--
1. start
2. input nama
3. tekan tombol submit "ok"
4. output nama "Halo,"
5. end 
-->

<!DOCTYPE html>
<html>
<head>
<title>Prefilling Text Field</title>	<!-- digunakan untuk menuliskan judul -->
</head>
<body>

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">	<!-- kata setelah action adalah nama berkas yang akan sekiranya tombol submit diklik -->
Nama <input type="text" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '' ?>"/> <br />	
<!-- digunakan untuk perintah memasukkan tpe berupa teks -->

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
if(isset($_POST['nama'])){ //menggunakan pernyataan if

echo $_POST['nama'];
}
// akhir php?>
</body>
</html>

