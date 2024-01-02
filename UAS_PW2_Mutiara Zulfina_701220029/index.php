<!DOCTYPE html>
<html>
<head>
	<title>Kursus D'LANGUAGE</title>
	<link href="logo.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
	body{
	font-style: 'castellar';
	font-family:serif;
	background: #ffe0e0;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: #e5cfcf;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #2cc3e9;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}
 
.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}

.wrap{
background: lightblue; width: 100%; margin: 10px auto;
}

/*bagian header*/
.wrap .header{
background: lavender;
/*height: 50px;*/
padding: 2px 10px;
}

/*akhir header*/

/*bagian menu*/
.wrap .menu{
background: red;
overflow: hidden;
height: 70px;
}
.wrap .menu ul{ padding: 0; margin: 0;
background: gold;

}

.wrap .menu ul li{
float: left;
list-style-type: none;
padding: 10px;
}
/*akhir menu*/

.clear{
clear: both;
}

.badan{
height: 950px;
}

.wrap .badan .content{ background: white; float: left; height: 100%; width: 100%;
}

.wrap .footer{ width: 100%; padding: 10px;
}

.form{
padding: 10px;
background: black;
font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans- serif;
font-size: 15px;
font-weight: 400;
}
.title{
font-size:26px; font-weight:bold; color:blue; padding:5px 0; margin-bottom:10px;
border-bottom:1px solid #ccc;
}
.fitem{
margin-bottom:5px;

}
.fitem label{
display:inline-block;
width:120px;
}

</style>
<body>
 
	<h1><font-style: castellar>KURSUS BAHASA INGGRIS </h1>
	<h2><center>D'LANGUAGE</h2>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		</form>
		
	</div>
 
 
</body>
</html>