<!DOCTYPE html>
<html>

<!--Judul-->
<head><title>Operasi Aritmatika</title></head> 
<body>
<form method="post">
<table>
	<tr>
		<!--header-->
		<td align="center"> <b>Angka 1<b></td> 
		<td><b>Operator</b> </td>              
		<td align="center"> <b>Angka 2<b></td>
	</tr>
	<tr>
		<!--input angka pertama-->
		<td><input type="number" name="angka1" value="" /></td>
		
		<!--operator-->
		<td align="center"><select name="operator">
		<option></option>
		<option value ="+">+</option>
		<option value ="-">-</option>
		<option value ="*">*</option>
		<option value ="/">/</option>
		</select></td>
		
		<!--input angka kedua-->
		<td><input type="number" name="angka2" value="" /></td>
		<td>=</td>

		<?php
			if(isset($_POST['angka1']) or isset($_POST['angka2']) ){
			$angka1 = $_POST['angka1'];
			$angka2 = $_POST['angka2'];
			}else{
			$angka1 = "0";
			$angka2 = "0";
			}
			
			if(isset($_POST['operator'])){
			$operator =$_POST['operator'];
			
			}else{
			$operator ="";
			}
			switch($operator){ 
			case "+":
				$hasil = $_POST["angka1"] + $_POST["angka2"];
			break;
			case "-":
				$hasil = $_POST["angka1"] - $_POST["angka2"];
			break;
			case "*":
				$hasil = $_POST["angka1"] * $_POST["angka2"];
			break;
			case "/":
				$hasil = $_POST["angka1"] / $_POST["angka2"];
			break;
			}
		?>
		<td><input type="text" name="hasil"  value="<?=$hasil;?>"></td>
		<td><input type="submit" name="Aritmatika" value="Hitung"></td>
	</tr>

</table>
</form>
</body>
</html>