<?php 
include "db_conn.php";
if(isset($_POST['unesik']))
{
       if(!empty($_POST['imek'])  && !empty($_POST['prezimek']) && !empty($_POST['matk']) && !empty($_POST['adresak']) && !empty($_POST['brlk']) && !empty($_POST['brtrel'])  ){
       	$ime=$_POST['imek'];
       	$prezime=$_POST['prezimek'];
       	$maticni=$_POST['matk'];
       	$adresa=$_POST['adresak'];
       	$brojlicne=$_POST['brlk'];
       	$brojtel=$_POST['brtrel'];
       	

       	$sql="INSERT into klijenti values('$ime','$prezime','$maticni','$adresa','$brojlicne','$brojtel')";
       	$run=mysqli_query($conn,$sql) or die(mysqli_error());

       	
      if($run){
          echo '
          <script> alert("Uspesno ste uneli novog klijenta u bazu")</script>
          ';
        }
        else
        {
          echo '
          <script> alert("Neuspesno unet novi klijent u bazu")</script>
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
