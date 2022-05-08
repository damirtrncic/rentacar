

<!DOCTYPE html>
<html>
<head>
	<title>Iznajmljivanje</title>
	<link rel="stylesheet" type="text/css" href="../style/style21.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body style ="background-image:url(../slike/pcar.jpg)">
	<script type="text/javascript">
		function submitform(action) {
			var form=document.getElementById('forma');
			form.action=action;
			form.submit(); 
			
		}
	</script>
<form class="d1"  method="POST"  id="forma" style="margin-left: 100px;" >
	<span style="font-weight: bold;color: white;font-size: 26pt;text-align: center;margin-left: 100px;margin-top: 3px;">Iznajmljivanje automobila</span>
	<hr>
	 
	<br>
	<span class="s1" >*Unesite broj sasije automobila:</span>
	<br>
	<input type="text" name="sasija" id="sasija" placeholder="Broj sasije (velikm slovima)" class="i1">
	<br>
	<span class="s1">*Unesite maticni broj klijenta</span>
	<br>
	<input type="text" name="maticni" id="maticni" placeholder="Maticni broj" class="i1">
	<br>
	<span class="s1">*Automobil je iznajmljen datuma:</span>
	<br>
	<input type="date" name="daniznaj" class="i1">
	<br>
	<span class="s1">*Bice iznajmljen do datuma:</span>
	<br>
	<input type="date" name="danvr" id="danvr" class="i1">
	<br>
	<button type="submit" name="ugovor" class="b1" onclick="submitform('ugovor1.php')">Napravi ugovor</button>
	<input type="submit" name="iznajmi" value="Iznajmi" class="b1" onclick="submitform('iznajmi.php')">
</form>






</div>
</body>
</html>