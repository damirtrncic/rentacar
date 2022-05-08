
<!DOCTYPE html>
<html>
<head>
	<title>POVRACAJ</title>
	<link rel="stylesheet" type="text/css" href="../style/style21.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

</head>
<body style="background-image: url(pcar.jpg);overflow: auto;display: flex;
     justify-content: top;">
<form class="d1" a method="POST"  style="height: 650px;margin-left: 100px;margin-top: 20px;" action="pov.php">
	<span style="font-weight: bold;color: white;font-size: 26pt;text-align: center;margin-left: 150px;margin-top: 3px;">Povracaj automobila</span>
	<hr>
	 <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
	<br>
	<span class="s1" >*Unesite broj sasije automobila:</span>
	<br>
	<input type="text" name="sasija" id="sasija" placeholder="Broj sasije (velikm slovima)" class="i1">
	<br>
	<span class="s1">*Unesite maticni broj klijenta</span>
	<br>
	<input type="text" name="maticni" id="maticni" placeholder="Maticni broj" class="i1">
	<br>
	<span class="s1">*ID - ugovora:</span>
	<br>
	<input type="text" name="idugovora" class="i1">
	<br>
	
	<br>
	<span class="s1">Klikom na dugme ispod automobil ce biti vracen u bazu i korisnik ce dobiti racun</span>
	<br>
	<button type="submit" name="racun" class="b1">Napravi racun</button>
</form>
<form style="width: 600px;
	
	border-style:ridge;
	margin-left: 850px;
	margin-bottom: 410px;
	position: absolute;
	background: rgba(0, 0, 0, .5);
	padding-top: 15px;
	padding-left: 50px;
	padding-right: 20px;
	border-radius: 15px;
	align-items: center;" method="POST" action="produzi.php" > 
	<span class="s1" style="font-weight:bold;">*Korisnik mozda zeli da produzi ugovor do datuma:</span>
	<br>
	<input type="date" name="danvr"  class="i1">
	<br>
	<span class="s1">*Unesite ID-ugovora:</span>
	<br>
	<input type="number" name="id1" class="i1" min=0>
	<br>
	<input type="submit" name="produzi" value="Produzi" class="b1" style="margin-top: 18px">
	<br>
	</form>
</body>
</html>