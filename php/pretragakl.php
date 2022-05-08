<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style21.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>
 <form class="d1"  method="POST" style="height: 350px;margin-left: 450px;" >
	<span style="font-weight: bold;color: white;font-size: 26pt;text-align: center;margin-left: 150px;margin-top: 3px;">Pretraga klijenata</span>
	<hr>
	 <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
	<br>
	<span class="s1" >*Unesite ime klijeta:</span>
	<br>
	<input type="text" name="imeklp"  placeholder="Ime" class="i1">
	<br>
	<span class="s1">*Unesite prezime klijenta:</span>
	<br>
	<input type="text" name="prezklp"  placeholder="Prezime" class="i1">
	<br>
	
	<button type="submit" name="trazikl" class="b1" style="margin-right: 180px;">Pretrazi</button>

	</form>
	<div class="d6">
		<?php
        include "db_conn.php";
        if(isset($_POST['trazikl']))
        {
		
  
 
        	if(!empty($_POST['imeklp']) || !empty($_POST['prezklp'])){
        		echo "<table class='d5'>
  		<tr>
  			<th>";echo "IME" ;echo "</th>
  			<th>";echo "PREZIME" ;echo "</th>
  			<th>";echo "MATICNI BROJ"; echo"</th>
  			
  			<th>";echo "ADRESA";echo "</th>
  			<th>";echo "BROJ LICNE";echo "</th>
  			<th>";echo "BROJ TELEFONA";echo "</th>
 
  		</tr>";
        		$ime=$_POST['imeklp'];
        		$prezime=$_POST['prezklp'];
        		$sql="SELECT * from klijenti where ime='$ime' and prezime='$prezime' ";
        		$run=mysqli_query($conn,$sql);
        		if(mysqli_num_rows($run)>0)
        		{
        			while ($row=mysqli_fetch_assoc($run)) {
        				echo "<tr><td>".$row['ime']."</td><td>".$row['prezime']."</td><td>".$row['maticni_broj']."</td><td>".$row['adresa']."</td><td>".$row['broj_licne']."</td><td>".$row['telefon']."</td></tr>";
        			}
        		}
        		echo "</table>";

        	}
        	else 
        		{ echo '
          <script> alert("Unesite oba podataka")</script>
          ';
      }
        }
        $conn->close();
   ?>
   </div>
</body>
</html>