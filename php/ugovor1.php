<?php
include "db_conn.php";
session_start();
if (isset($_POST['ugovor']))
{
	 if(!empty($_POST['sasija'])  && !empty($_POST['maticni']) && !empty($_POST['daniznaj']) && !empty($_POST['danvr']) )
	 {
	 	$sasija=$_POST['sasija'];
	 	$maticni=$_POST['maticni'];
	 	$dani=$_POST['daniznaj'];
	 	$danv=$_POST['danvr'];
	 	$sql="select * from automobili_stanje where broj_sasije='$sasija'";
       $result=mysqli_query($conn,$sql);
       $sql1="select *from klijenti where maticni_broj='$maticni'";
       $result1=mysqli_query($conn,$sql1);
       if (mysqli_num_rows($result) === 1 && mysqli_num_rows($result1) === 1) { 
       	$row=mysqli_fetch_assoc($result);
       	$row1=mysqli_fetch_assoc($result1);
       	$marka=$row['marka'];
       $model=$row['model'];
       $cijenad=$row['cijena_iznajmljivanja'];
       $ime=$row1['ime'];
       $prezime=$row1['prezime'];
       $mat_broj=$row1['maticni_broj'];
       $brl=$row1['broj_licne'];
     


	 }

$sql2="insert into ugovori(broj_sasije,marka,model,cijena_dan,ime,prezime,maticni_broj,broj_licne,datum_iznajmljivanja,datum_vracanja,iznos_racuna) values ('$sasija','$marka','$model','$cijenad','$ime','$prezime','$mat_broj','$brl','$dani','$danv',datediff('$danv','$dani')*'$cijenad')";
	 $run=mysqli_query($conn,$sql2);
	 
	 if($run){
	 	echo '<script>alert("Uspjesno kreiran ugovor")</script>';
	 	 $_SESSION['broj'] = $row['broj_sasije'];
            	
            	$_SESSION['maticni'] = $row1['maticni_broj'];
            	header("Location: ugovor.php");
		        exit();

	 }
           
	}
	else 
	{
		
		echo '<script>alert("Potrebno je unijeti sve podatke !!!")</script>';

	}
}
?>

