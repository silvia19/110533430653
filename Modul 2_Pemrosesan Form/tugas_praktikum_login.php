<!--
1. start
2. input form login yang berisi username dan password
3. jika input username dan password benar maka akan muncul tampilan "SELAMAT DATANG SILVI"
4. jika input username dan password salah maka akan muncul tampilan "Username atau Password anda salah"
5. jika input username atau password tidak diisi maka akan muncul tampilan "Maaf", Username belum diisi atau Maaf, Password Belum diisi "
6. pilih tombol submit "login"
5. output nama yang sudah diisikan
6. end 
-->

<!DOCTYPE html>
<html> 					<!-- HTML tags merupakan keyword yang dikeliling i kurung -->
<head>					<!-- digunakan untuk menyatakan informasi mengenai dokumen HTML-->

	<title>Tugas Praktikum</title>			<!-- digunakan untuk menuliskan judul atau title bar di browser -->

 <style>

<!-- 
style digunakan untuk mempercantik tampilan suatu dokument HTML
-->
          body{
	
            font-family:Garamond,Century Ghotic; <!-- jenis huruf yang ditampilkan pada browser -->
            margin: 0 auto;
            text-align:left; 			<!-- teks mengarah kekiri -->
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
    
#photo{
            float: left;
            margin-left: 100px;
			border-radius:5px;
            border:2px solid white;
            box-shadow: rgba(0,0,0,0.2) 5px 5px;
          }
        
          .content{
            border-radius: 30px;
            width:200px;
            float: right;
            margin: 20px auto;
		padding: 5px 20px 20px 20px;
            background-color:#86d5f2;
            border: 2px solid white;
            font-size:15px;
            text-align:center;
            color: black;
            opacity:1.0;
          }
          td{
          color:white;
          margin-top:10px;
          }
          li{
             
             text-align:left;
          }
		  .content2{
            border-radius: 40px;
            width:850px;
            float: Right;
            margin: 45 150 50 50;
            background-color:violet;
            border: 2px solid purple;
            font-size:18px;
			font-family:Futura; <!-- jenis huruf Futura -->
            text-align:left;
            color: black;
            opacity:0.5;
          }
      </style>
  </head>
<body background="backgound.jpg"> 			<!-- digunakan untuk melingkupi semua teks yang terdapat di halaman HTML -->
  
	<div class="header"><marquee><img src="logo.jpg" /> <img src="logo2.jpg" /></marquee><br><h1></h1><p style = "font-size: 16px"><marquee><b>Welcome to Your Account		Welcome to Your Account		Welcome to Your Account</b></marquee></p></div>
	
	<!-- isi dari div class digunakan untuk mengelompokkan, berisi logo yang bergerak dengan
	penambahan fungsi marquee dan tulisan dengan ukuran heading 1
	 -->

<?php //awal php

//menggunakan pernyataan if untuk inputan user dan password

	if(isset($_POST['user'])&&isset($_POST['pass'])){
	if($_POST['user']=='silvi'&&$_POST['pass']=='silvi'){
echo "
<script>
	alert('SELAMAT DATANG SILVI');		//menampilkan teks ke layar ketika inputan yang dimasukkan benar
</script>";
}else{
echo "
<script>
	alert('Username atau Password Anda Salah');	//menampilkan teks ke layar ketika inputan yang dimasukkan salah
</script>
";
}
}
?>

<!--
1. ektraksi nilai digunakan untuk memeriksa variabel user dan pass ada atau tidak
-->

<!-- 
 </form> merupakan  berfungsi untuk perintah HTML yang menangani formulir/form
 -->

	<form name="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validateForm()">


<div class="content">			<!-- div digunakan untuk mengelompokkan elemen HTML yang lain-->			
<div class="min_content">
<h1>Login</h1>
</div>
<hr color="#a4d7f5" />
<div class="min_content">
<label>Username</label>
	<input type="text" name="user" id="user" autofocus />
<label>Password</label>
	<input type="password" name="pass" />
<br />
<br />
<input type="submit" value="Login" />
<br />
</div>
</div>
</form>
<script>


	function validateForm(){
		var x=document.forms["login"]["user"].value;
			if (x==null || x==""){
			alert("Maaf, Username Belum Diisi !!!");

	document.getElementById("user").focus();
	return false;
}
		var y=document.forms["login"]["pass"].value;
			if (y==null || y==""){
			alert("Maaf, Password Belum Diisi");
	document.getElementById("user").focus();
	return false;
}
		var alphaExp = /^[a-zA-Z]+$/;
		if(x.match(alphaExp)){
	if(y.match(alphaExp)){
	return true;
}else{
		alert("Maaf, Password Harus Huruf");
	document.getElementById("user").focus();
	return false;
}
}else{
		alert("Maaf, Username Harus Huruf");
	document.getElementById("user").focus();
	return false;
}
}
</script>

</body>
</html>