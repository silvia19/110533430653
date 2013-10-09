<!--
1. start
2. input data meliputi isi Nama Lengkap dan Tempat Lahir
3. pilih pekerjaan dan agama dengan menggunakan data seleksi
4. tekan tombol submit "show"
5. output nama yang sudah diisikan
6. end 
-->

<!DOCTYPE html>
<html>
<head>
<title>Studi Kasus 1</title>		<!-- digunakan untuk menuliskan judul -->
</head>
<body>

<h1>CURRICULUM VITAE</h1>		<!-- digunakan untuk menuliskan teks dengan ukuran heading 1 -->

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->


<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<form>
<table>									<!-- digunakan untuk membuat tabel -->

 <td id="poin"><strong>Biodata</strong></td> 				<!-- strong digunakan untuk memperjelas teks menjadi poin pertama -->
<tr><td>Nama Lengkap</td><td>:</td><td>

<input input type="text" name="nama"  value="
<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''?>"/> </td></tr>

<tr><td>Tempat Lahir</td><td>:</td><td>
<input input type="text" name="ttl"  value="
<?php echo isset($_POST['ttl']) ? $_POST['ttl'] : ''?>"/> </td></tr>

<tr><td>Pekerjaan</td><td>:</td><td>
		
	<select name="job"> 			<!-- variabelnya adalah job -->
	<option value="Mahasiswa"

	<?php if ($_POST['job'] == 'Mahasiswa') {echo ' selected="selected"';} ?> 
		>Mahasiswa 

	<option value="ABRI"
	<?php if ($_POST['job'] == 'ABRI') {echo ' selected="selected"';} ?> 
		>ABRI 

	<option value="PNS"
	<?php if (!isset($_POST['job']) or $_POST['job'] == 'PNS') {echo 'selected="selected"';}?>
		>PNS 

	<option value="Swasta"
	<?php if ($_POST['job'] == 'Swasta') {echo ' selected="selected"';}?> 
		>Swasta 
	
	</select> 
			<br/> 
	 </td></tr>

<tr><td>Agama</td><td>:</td><td>
		
	<select name="agama">
		<option value="Islam">Islam
		<option value="Kristen">Kristen
		<option value="Katolik">Katolik
		<option value="Hindhu">Hindhu
		<option value="Budha">Budha
	</select> <br /> </td></tr>

</table>


<input type="submit" value="Show" />
</form>


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

<!-- ekstraksi nilai -->

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
if (isset($_POST['job'])){

echo $_POST['job'];
}

?>
<br />
<?php
if (isset($_POST['agama'])){

echo $_POST['agama'];
}

?>

<!--
1. ektraksi nilai digunakan untuk memeriksa variabel nama, job, dan agama ada atau tidak
2. variabel ini akan ada sekiranya pemakai mencentang misalnya agama islam
   dan isinya berupa islam.
-->

<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />


<p>Silvia Wahyuningrum</p>
<p>110533430653</p>
</body>
</html>