<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transition//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transition.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Set Cokie</title>
</head>

<body>

<?php
// Men-set nilai cookie
setcookie('nama_cookie', 'nilai_cookie');

//Mendapatkan nilai cookie
echo $_COOKIE['nama_cookie'];

?>

<p>
	Tekan Refresh (F5)
</body>
</html>
