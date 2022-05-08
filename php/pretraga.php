<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style/style21.css" >
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

</head>
<body style="background-image:url(../slike/pcarx.jpg);">
	
 <form class="d1"  method="POST" style="height: 450px;margin-left: 400px;" >
	
	<span style="font-weight: bold;color: white;font-size: 26pt;text-align: center;margin-left: 150px;margin-top: 3px;">Pretraga automobila</span>
	
	<hr>
	 <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
	<br>
	<span class="s1" >*Unesite marku automobila:</span>
	<br>
	<input type="text" name="markap"  placeholder="Marka" class="i1">
	<br>
	<span class="s1">*Unesite model automobila</span>
	<br>
	<input type="text" name="modelp"  placeholder="Model" class="i1">
	<br>
	<span class="s1">*Unesite broj vrata automobila:</span>
	<br>
	<input type="text" name="brojvp"  placeholder="Broj vrata" class="i1">
	<br>
	<button type="submit" name="trazi" class="b1" style="margin-right: 180px;">Pretrazi</button>
	
</form>

	<div class="d6">
		<?php
        include "db_conn.php";
        if(isset($_POST['trazi']))
        {
		
  
 
        	if(!empty($_POST['markap']) && !empty($_POST['modelp']) && !empty($_POST['brojvp'])){
        		
        		$marka=$_POST['markap'];
        		$model=$_POST['modelp'];
        		$brojvrata=$_POST['brojvp'];
        		$sql="SELECT * from automobili_stanje where marka='$marka' and model='$model' and broj_vrata='$brojvrata'";
        	}
        	elseif (!empty($_POST['markap']) && empty($_POST['modelp']) && empty($_POST['brojvp'])) {
        		$marka=$_POST['markap'];
        		$sql="SELECT * from automobili_stanje where marka='$marka'";
        		}
        		elseif (!empty($_POST['modelp'])) {
        		$model=$_POST['modelp'];
        		$sql="SELECT * from automobili_stanje where model='$model'";
        		}
        		elseif (!empty($_POST['brojvp'])) {
        		$brojvrata=$_POST['brojvp'];
        		$sql="SELECT * from automobili_stanje where broj_vrata='$brojvrata'";
        		}
        		else {
        		$sql="select *from automobili_stanje";
        	}

        	echo "<table class='d5'>
  		<tr>
  			<th>";echo "BROJ SASIJE" ;echo "</th>
  			<th>";echo "MARKA" ;echo "</th>
  			<th>";echo "MODEL"; echo"</th>
  			
  			<th>";echo "GODISTE";echo "</th>
  			<th>";echo "BOJA";echo "</th>
  			<th>";echo "BROJ VRATA";echo "</th>
  			<th>";echo "VRSTA GORIVA";echo "</th>
  			<th>";echo "MENJAC";echo "</th>
  			<th>";echo "STANDARD";echo "</th>
  			<th>";echo "CIJENA(euro)";echo "</th>
 
  		</tr>";
        		$run=mysqli_query($conn,$sql);
        		if(mysqli_num_rows($run)>0)
        		{
        			while ($row=mysqli_fetch_assoc($run)) {
        				echo "<tr><td>".$row['broj_sasije']."</td><td>".$row['marka']."</td><td>".$row['model']."</td><td>".$row['godiste']."</td><td>".$row['boja']."</td><td>".$row['broj_vrata']."</td><td>".$row['vrsta_goriva']."</td><td>".$row['menjac']."</td><td>".$row['standard']."</td><td>".$row['cijena_iznajmljivanja']."</td></tr>";
        			}
        			echo "</table>";
        		}
        		
      
        		

        	
        }      
        $conn->close();
   ?>
   </div>

</body>
</html>