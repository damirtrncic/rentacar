<!DOCTYPE html>
<html>
<head>
	<title>NOVI KLIJENT</title>
	<link rel="stylesheet" type="text/css" href="../style/style21.css">
</head>
<body>
     <form class="d1"  method="POST" style="height: 700px; margin-left: 450px;" action= "insertm.php">
	<span style="font-weight: bold;color: white;font-size: 26pt;text-align: center;margin-left: 170px;margin-top: 3px;">Dodaj klijenta</span>
	<hr>
	
	<br>
	<span class="s1" >*Unesite ime klijenta:</span>
	<br>
	<input type="text" name="imek"  placeholder="Ime" class="i1">
	<br>
	<span class="s1">*Unesite prezime klijenta:</span>
	<br>
	<input type="text" name="prezimek"  placeholder="prezime" class="i1">
	<br>
	<span class="s1">*Unesite maticni broj:</span>
	<br>
	<input type="text" name="matk" class="i1" placeholder="Maticni broj">
	<br>
	<span class="s1">*Unesite adresu klijenta:</span>
	<br>
	<input type="text" name="adresak" class="i1" placeholder="Adresa">
	<br>
	<span class="s1">*Unesite broj licne karte klijenta:</span>
	<br>
	<input type="text" name="brlk" class="i1" placeholder="Broj licne">
	<br>
	<span class="s1">*Unesite broj telefona klijenta:</span>
	<br>
	<input type="text" name="brtrel" class="i1" placeholder="mob/fax">
	<br>
	
	<button type="submit" name="unesik" class="b1">Unesi</button>
	</form>
	

</body>
</html>