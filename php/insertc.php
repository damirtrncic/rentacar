<?php 
include "db_conn.php";
if(isset($_POST['unesi']))
{
       if(!empty($_POST['sasijad'])  && !empty($_POST['marka']) && !empty($_POST['model']) && !empty($_POST['godiste']) && !empty($_POST['boja']) && !empty($_POST['vrata']) && !empty($_POST['gorivo']) && !empty($_POST['menjac']) && !empty($_POST['standard']) && !empty($_POST['cijena']) ){
       	$sasija=$_POST['sasijad'];
       	$marka=$_POST['marka'];
       	$model=$_POST['model'];
       	$godiste=$_POST['godiste'];
       	$boja=$_POST['boja'];
       	$vrata=$_POST['vrata'];
       	$gorivo=$_POST['gorivo'];
       	$menjac=$_POST['menjac'];
       	$standard=$_POST['standard'];
       	$cijena=$_POST['cijena'];

       	$sql="INSERT into automobili_stanje values('$sasija','$marka','$model','$godiste','$boja','$vrata','$gorivo','$menjac','$standard','$cijena')";
       	$run=mysqli_query($conn,$sql) or die(mysqli_error());

       	if($run){
       		echo '
          <script> alert("Uspesno ste uneli novi automobil u bazu")</script>
          ';
       	}
       	else
       	{
       		echo '
          <script> alert("Neuspesno unet novi automobil u bazu")</script>
          ';
       	}
       	

}
     
     else
    {
	     echo '
          <script> alert("Obavezno je popuniti svako polje")</script>
          ';
    }


}



 ?>
