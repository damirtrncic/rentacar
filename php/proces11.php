<?php

  include "db_conn.php";
 if(isset($_POST['ugovor'])){
  if(isset($_POST['sasija']) && isset($_POST['maticni']) )
  {
  	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$maticnibroj=validate($_POST['maticni']);
	$sasijabroj=validate($_POST['sasija']);
	$dani=validate($_POST['daniznaj']);
	$danv=validate($_POST['danvr']);
	
	if (empty($maticnibroj)){
		header("Location:iznamljivanje.php?error=Obavezno je unijeti maticni broj");
		exit();
	}
	else if (empty($sasijabroj)){
		header("Location:iznamljivanje.php?error=Obavezno je unijeti broj sasije");
	    exit();
	}
	else
	{
       $sql="select * from automobili_stanje where broj_sasije='$sasijabroj'";
       $result=mysqli_query($conn,$sql);
       $sql1="select *from klijenti where maticni_broj='$maticnibroj'";
       $result1=mysqli_query($conn,$sql1);
       if (mysqli_num_rows($result) === 1 && mysqli_num_rows($result1) === 1) { 
       	$row=mysqli_fetch_assoc($result);
       	$row1=mysqli_fetch_assoc($result1);
       	 if ($row['broj_sasije'] === $sasijabroj && $row1['maticni_broj'] === $maticnibroj){
       	 	$sql2="INSERT into ugovori VALUES( $row['broj_sasije'],$row['marka'],$row['model'],$row['cijena_iznajmljivanja'],$row1['ime'],$row1['maticni_broj'],'$dani','$danv',datediff('$danv','$dani')*cijena_sat) ";
       	 	$run=mysqli_query($conn,$sql2);
       	 	if($run){
       	 		echo "uspesno uneti podaci u atbelu";
       	 	}
       	 	else 
       	 		echo "lose unijeti podaci";
       	 }

       }
	}

  }
}

  
?>