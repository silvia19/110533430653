<!--
1. start
2. pilih radio button untuk memilih inuot pria atau wanita
3. tekan tombol submit "ok"
4. output nama
5. end
-->

<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
 
<head> 
  <title>Prefill Data Radio Button</title> <!--digunakan untuk menulis judul -->		
</head> 
 
<body> 

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->
 
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> <!-- kata setelah action adalah nama berkas yang akan sekiranya tombol submit diklik -->
    Jenis Kelamin 
    	<!-- digunakan untuk perintah memasukkan tpe berupa teks -->
	<input type="radio" name="sex" value="Pria" checked 


      <?php //awal php
      if ($_POST['sex'] == 'Pria') { 		//menggunakan pernyataan if

        echo 'checked="checked"'; 
      } 
      ?> 
    />Pria

    <input type="radio" name="sex" value="Wanita" 
      <?php 
      if ($_POST['sex'] == 'Wanita') { //menggunakan pernyataan if

        echo 'checked="checked"';  //echo untuk mencetak variabel yang dipilih
      } 
      ?> 
    />Wanita <br /> 
 
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

 
<?php 				// awal php
if (isset($_POST['sex'])) { 
  echo $_POST['sex']; 
} 
 ?> 
 
</body> 
 
</html> 