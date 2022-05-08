<?php 
session_start();
include "db_conn.php";
if (isset($_POST['racun']))
{
	if(!empty('sasija') && !empty('maticni') && !empty('idugovora'))
	{
		$sasija=$_POST['sasija'];
		$maticni=$_POST['maticni'];
		$id=$_POST['idugovora'];
		$sql="select * from ugovori where  id='$id' and broj_sasije='$sasija' and maticni_broj='$maticni'";

			$run=mysqli_query($conn,$sql);
		$result=mysqli_fetch_assoc($run);
		 if ($result['broj_sasije'] === $sasija && $result['maticni_broj'] === $maticni) {
            	$_SESSION['broj'] = $result['broj_sasije'];
            	
            	$_SESSION['maticni'] = $result['maticni_broj'];
            	$_SESSION['idugovora'] = $result['id'];
            	header("Location: racun.php");
		        exit();
       
	}
	else
	{
		echo '<script>alert("Potrebno je unijeti  sve podatke")</script>';
		header("Location:povracaj.php");
		exit();
	}
}
	else {
		echo '<script>alert("Potrebno je unijeti  sve podatke")</script>';
		header("Location:povracaj.php");
		exit();
	}


	
}
 ?>
