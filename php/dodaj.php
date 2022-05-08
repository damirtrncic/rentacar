<!DOCTYPE html>
<html>
<head>
	<title>NOVI AUTOMOBIL</title>
	<link rel="stylesheet" type="text/css" href="../style/style21.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body style="background-image:url(../slike/pcarx.jpg);">
     <form class="d1"  method="POST" style="height: 1000px;margin-left: 450px;" action="insertc.php" ">
     
	<span style="font-weight: bold;color: white;font-size: 26pt;text-align: center;margin-left: 150px;margin-top: 3px;">Dodavanje automobila</span>
	
	<hr>
	 
	<br>
	<span class="s1" >*Unesite broj sasije automobila:</span>
	<br>
	<input type="text" name="sasijad"  placeholder="Broj sasije (velikm slovima)" class="i1">
	<br>
	<span class="s1">*Unesite marku automobila</span>
	<br>
	<input type="text" name="marka" id="maticni" placeholder="Marka" class="i1">
	<br>
	<span class="s1">*Unesite model automobila:</span>
	<br>
	<input type="text" name="model" class="i1" placeholder="Model">
	<br>
	<span class="s1">*Unesite godiste automobila:</span>
	<br>
	<input type="text" name="godiste" class="i1" placeholder="Godiste">
	<br>
	<span class="s1">*Unesite boju automobila:</span>
	<br>
	<input type="text" name="boja" class="i1" placeholder="Boja">
	<br>
	<span class="s1">*Unesite broj vrata automobila:</span>
	<br>
	<input type="text" name="vrata" class="i1" placeholder="Broj vrata">
	<br>
	<span class="s1">*Unesite vrstu goriva automobila:</span>
	<br>
	<input type="text" name="gorivo" class="i1" placeholder="dizel/benzin/benzin-gas/hibrid">
	<br>
	<span class="s1">*Unesite vrstu menjaca:</span>
	<br>
	<input type="text" name="menjac" class="i1" placeholder="automatski/manuelni">
	<br>
	<span class="s1">*Unesite euro standard automobila:</span>
	<br>
	<input type="text" name="standard" class="i1" placeholder="euro-3/euro-4/euro-5/">
	<br>
	<span class="s1">*Unesite cijenu iznajmljivanja po danu:</span>
	<br>
	<input type="text" name="cijena" class="i1" placeholder="Cijena iznajmljivanja">
	<br>
	<button type="submit" name="unesi" class="b1">Unesi</button>
	

</body>
</html>