<?php 
include "db_conn.php";
if (isset($_POST['iznajmi']))
{
	 if(!empty($_POST['sasija'])  && !empty($_POST['maticni']) && !empty($_POST['daniznaj']) && !empty($_POST['danvr']) )
	 {
	 	$sasija=$_POST['sasija'];
	 	$maticni=$_POST['maticni'];
	 	$sql="select * from automobili_stanje where broj_sasije='$sasija'";
	 	$run=mysqli_query($conn,$sql);
	 	 if (mysqli_num_rows($run) === 1){
	 	$row=mysqli_fetch_assoc($run);
	 	$marka=$row['marka'];
       $model=$row['model'];
       $boja=$row['boja'];
       $gorivo=$row['vrsta_goriva'];
       $vrata=$row['broj_vrata'];
       $standard=$row['standard'];
       $cijenai=$row['cijena_iznajmljivanja'];
       $god=$row['godiste'];
       $menjac=$row['menjac'];
       $sql2="insert into iznajmljena values('$sasija','$marka','$model','$god','$vrata','$cijenai','$standard','$menjac','$boja','$gorivo')";
       $run1=mysqli_query($conn,$sql2);
       if($run1){
       	echo '<script>alert("Automobil je iznajmljen i nije na raspolaganju do daljnjeg!!!")</script>';

       }
       $sql3="delete from automobili_stanje where broj_sasije='$sasija'";
       $run3=mysqli_query($conn,$sql3);
   }
   else{
   	echo '<script>alert("Trenutno nije dostupan automobil sa trazenim brojem sasije !!!")</script>';
   

   }
       

}
}
 ?>