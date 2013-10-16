<!--
Algoritma Program
  1. start
  2. Masukkan angka pada text box ke-1 dan ke-2 yang akan dihitung
        3. Pilih operasi matematika yang diinginkan yaitu +, -, x, /
  4. Tekan tombol hasil untuk mendapatkan hasilnya
  5. hasil tampil pada tekxbox dibawahnya
  6. end
--->


<!DOCTYPE html>
<html>
<head>
<title>Studi Kasus 1</title>

<script type="text/javascript">

function Huruf(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 31 && charCode < 65) || (charCode > 90 && charCode < 97) || charCode > 122) {
        alert('Masukkan User Name dan Password Anda Berupa Angka ');
        return false
    }
    return true
}

</script>

 <style>

<!-- 
style digunakan untuk mempercantik tampilan suatu dokument HTML
-->
          body{
	
            font-family:Garamond,Century Ghotic; <!-- jenis huruf yang ditampilkan pada browser -->
            margin: 0 auto;
            text-align:left; 			<!-- teks mengarah kekiri -->
          	width:1275px;
		}

          div{
            border-radius:5px;			<!-- digunakan untuk menentukan border -->
          }

       .header{
          width:1275px;
            border-radius: 15px;
            background-color:grey;
            border: 1px dashed #666666;
            color:#86d5f2;
            margin:15 auto;
            opacity: 0.9;
          }
<!--
header digunakan untuk menampilkan bagian paling atas dengan
lebar 1275px
background warna abu-abu
margin atau garis tepi 15 auto
opacity atau ketajaman lengkungan 0.9
-->

          td{
          color:white;
          margin-top:10px;
          }
          li{
             
             text-align:left;
          }
	.content{
            
            float: right;
    
            border: 2px solid white;
            font-size:15px;
            text-align:center;
            color: black;
            opacity:1.0;
          }
	.content2{
            border-radius: 40px;
            width:300px;
            float: right;
            margin: 45 150 50 50;
            background-color:violet;
            border: 2px solid purple;
            font-size:18px;
			font-family:Futura; <!-- jenis huruf Futura -->
            text-align:center;
            color: black;
            opacity:0.5;
          }
	
	.h1 {
	float : right;
	}
      
	</style>
  </head>
<body background="kalku.jpg">			<!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML -->
	
	
  
	<div class="header"><marquee><img src="logo.jpg" /> <img src="logo2.jpg" /></marquee><br><h1></h1><p style = "font-size: 16px"><marquee><b>Welcome to Your Account		Welcome to Your Account		Welcome to Your Account</b></marquee></p></div>
	
	<!-- isi dari div class digunakan untuk mengelompokkan, berisi logo yang bergerak dengan
	penambahan fungsi marquee dan tulisan dengan ukuran heading 1
	 -->
<div class="h1">

<h1>Kalkulator Sederhana</h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">


<div class="content">
<div class="content2">
</br>

<input type="text" name="angka1" placeholder="Angka 1" value="<?php echo $_POST['angka1']; ?>" required /> <br>

<select name="ops">
<option value="+" <?php if($_POST['ops']=='+') echo"selected"; ?>>+</option>
<option value="-" <?php if($_POST['ops']=='-') echo"selected"; ?>>-</option>
<option value="x" <?php if($_POST['ops']=='x') echo"selected"; ?>>x</option>
<option value="/" <?php if($_POST['ops']=='/') echo"selected"; ?>>/</option>

</select>
</br>
<input type="text" name="angka2" placeholder="Angka 2" value="<?php echo $_POST['angka2']; ?>" required /> </br>
</br>
<input type="submit" value="Hasil" /> </br>
</br>
<?php
if(isset($_POST['ngka1']) && isset($_POST['angka2'])){
if($_POST['ops']=='+') $hasil=$_POST['angka1'] + $_POST['angka2'];
else if($_POST['ops']=='-') $hasil=$_POST['angka1'] - $_POST['angka2'];
else if($_POST['ops']=='x') $hasil=$_POST['angka1'] * $_POST['angka2'];
else if($_POST['ops']=='/') $hasil=$_POST['angka1'] / $_POST['angka2'];

}

?>
<input type='text' name='hasil' value='<?php echo $hasil;?>' readonly />
 
 
</form>

</body>
</html>