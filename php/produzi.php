<?php 
session_start();
include "db_conn.php";

if(isset($_POST['produzi']))
{
	if(!empty($_POST['danvr']) && !empty($_POST['id1']))

	{
		$x=$_POST['danvr'];
		$time=strtotime($x);
		$dob = date('Y-m-d', $time);
		$id=$_POST['id1'];

		
		
		$sql="update  ugovori set datum_vracanja='$dob' where id='$id'";
		$pokreni=mysqli_query($conn,$sql) or die(mysqli_error($conn));
		if($pokreni) 
		{
			echo '<script>alert("Uspjesno ste produzili ugovor")</script>';
			$_SESSION['ID']=$id;
		header("Location:ugovorprod.php");
		}
		else
		{
			echo '<script>alert("Neuspjesno produzen ugovor")</script>';
		}
	}
	else
	{
		echo '<script>alert("Potrebno je popuniti sva polja")</script>';
	}
	


}
?>