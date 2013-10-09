<!--
1. start
2. input data meliputi isi nama pemesan, nomor duduk
3. pilih "pilihan makanan" dan "pilihan minuman" dengan menggunakan checkbox , dan snack dengan data seleksi
4. tekan tombol submit "show"
5. output nama yang sudah diisikan
6. end 
-->

<!DOCTYPE html>
<html>
<head>
<title>Studi Kasus 2</title>		<!-- digunakan untuk menuliskan judul -->
</head>
<body>

<h1>Warung Anti Lapar</h1>		<!-- digunakan untuk menuliskan teks dengan ukuran heading 1 -->
<H3>Daftar Menu</h3>			<!-- digunakan untuk menuliskan teks dengan ukuran heading 3 -->


<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->


<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<form>
<table>					<!-- digunakan untuk membuat tabel -->

 <td id="poin"><strong>Nota Pemesanan</strong></td>		<!-- strong digunakan untuk memperjelas teks menjadi poin pertama -->
<tr><td>Nama Pemesan</td><td>:</td><td>
<input input type="text" name="nama"  value="
<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''?>"/> </td></tr>

<tr><td>Nomor Duduk</td><td>:</td><td>
<input input type="text" name="ttl"  value="
<?php echo isset($_POST['ttl']) ? $_POST['ttl'] : ''?>"/> </td></tr>

<tr><td>Pilihan Makanan</td><td>:</td><td>

	<input type="checkbox" name="makanan[]" value="Soto Ayam" 
 	<?php 
		if($_POST['makanan'] == 'Soto Ayam'){
		echo ' checked="checked"';}
	?> 
		/>Soto Ayam <br />

   	 <input type="checkbox" name="makanan[]" value="Mie Goreng" 
   	 <?php 
		if(!isset($_POST['makanan']) or $_POST['makanan'] == 'Mie Goreng'){
		echo ' checked="checked"';}
	?>
		/>Mie Goreng <br /> 
   	 
	<input type="checkbox" name="makanan[]" value="Ayam Goreng" 
   	<?php 
		if($_POST['makanan'] == 'Ayam Goreng'){
		echo ' checked="checked"';}
	?> 
		/>Ayam Goreng <br />

</td></tr>

<tr><td>Pilihan Minuman</td><td>:</td><td>

	<input type="checkbox" name="minuman[]" value="Jus Melon">Jus Melon <br /> 	
									<!-- memiliki nilai pada checkbox pertama dengan keluaran Jus Melon -->
 
    <input type="checkbox" name="minuman[]" value="Jus Jeruk" 				

    />Jus Jeruk <br />						<!-- memiliki nilai pada checkbox kedua dengan keluaran Jus Jeruk -->
 
    <input type="checkbox" name="minuman[]" value="Es Susu" 		

    />Es Susu <br /> 						<!-- memiliki nilai pada checkbox ketiga dengan keluaran Es Susu -->

</td></tr>

<tr><td>Snack</td><td>:</td><td>
		
	<select name="snack">
		<option value="Kerupuk">Kerupuk
		<option value="Kentang">Kentang
		<option value="Cilok">Cilok
		<option value="Sosis">Sosis
		<option value="Roti Bakar">Roti Bakar
	</select> <br /> </td></tr>

</table>


<input type="submit" value="Show" />
</form>


<!-- 
checkbox digunakan untuk menyatakan pilihan bawaan yang akan ditampilkan pada keadaan awal
kotak checkbox memungkinkan pengguna memilih dengan mencetang atau tidak mencetang pilihannya
--> 

<!-- 
selected digunakan untuk menyatakan pilihan bawaan yang akan ditampilkan pada keadaan awal
-->

<!--
1. kata text berarti membentuk kotak teks
2. kata setelah submit untuk membentuk tombol
3. name adalah variabel yang akan menerima data yang dimasukkan pemakai pada kotak teks
4. value adalah keterangan yang akan ditaruh pada tombol
5. kata disebelah kanan method adalah metode yang digunakan untuk mengirim variabel ke skrip yang dipanggil yaitu dengan menggunakan metod post
6. <br/> kode html untuk berpindah baris
-->


<br />
<br />
<?php
if(isset($_POST['nama'])){
echo $_POST['nama']; 
}
?>
<br />

<?php
if(isset($_POST['ttl'])){
echo $_POST['ttl']; 
}
?>
<br />


<?php 
// Ekstraksi nilai 
if (isset($_POST['makanan'])) { 
  foreach ($_POST['makanan'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 

<?php 
// Ekstraksi nilai 
if (isset($_POST['minuman'])) { 
  foreach ($_POST['minuman'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 

<?php 
// Ekstraksi nilai 
if (isset($_POST['makanan'])) { 
  foreach ($_POST['makanan'] as $key => $val) { 
    echo $val . '<br />'; 
  } 
} 
?> 
<?php
if (isset($_POST['snack'])){

echo $_POST['snack'];
}

?>

<!--
1. ektraksi nilai digunakan untuk memeriksa variabel nama, job, dan agama ada atau tidak
2. variabel ini akan ada sekiranya pemakai mencentang misalnya agama islam
   dan isinya berupa islam.
-->

<br /> <br /> <br /> <br /> 


<p>Silvia Wahyuningrum</p>
<p>110533430653</p>
</body>
</html>