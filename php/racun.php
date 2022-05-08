<?php
include "db_conn.php";
session_start();

if (isset($_SESSION['broj']) && isset($_SESSION['maticni']) && isset($_SESSION['idugovora'])) {
	$br=$_SESSION['broj'];
	$mat=$_SESSION['maticni'];
	$id=$_SESSION['idugovora'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="../style/print.css" media="print">
     <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>RACUN</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>Naziv firme:</th>
          
          
            <td>FIRMA</td>
          </tr>
          <tr>
            <th>ID-računa:</th>
            <?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat' and id='$id'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['id']; ?><?php echo "  ";?></td>
          </tr>
          <tr>
            <th>Ime i prezime klijenta</th>
            <?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat' and id='$id'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['ime']; ?><?php echo "  ";?><?php echo $user_data['prezime']?></td>
          </tr>
          
          
          <tr>
          	<th>Broj sasije, marka i model automobila</th>
          	<?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat' and id='$id'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['broj_sasije']; ?><?php echo " , ";?><?php echo $user_data['marka']?><?php echo " - ";?><?php echo $user_data['model'];?></td>
          </tr>
           <tr>
          	<th>Ukupno za naplatu </th>
          	<?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat' and id='$id'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['iznos_racuna']; ?><?php echo "evra"?></td>
          </tr>
        
        </thead>
      
      </table>
        <?php
              $qry="select * from iznajmljena where sasija='$br'";
              $res=mysqli_query($conn,$qry);
              $row=mysqli_fetch_assoc($res);
         $sasija=$row['sasija'];
       	$marka=$row['marka'];
       	$model=$row['model'];
       	$godiste=$row['godiste'];
       	$boja=$row['boja'];
       	$vrata=$row['broj_vrata'];
       	$gorivo=$row['vrsta_goriva'];
       	$menjac=$row['menjac'];
       	$standard=$row['standard'];
       	$cijena=$row['cijena_iznajmljivanja'];

       	$sql="INSERT into automobili_stanje values('$sasija','$marka','$model','$godiste','$boja','$vrata','$gorivo','$menjac','$standard','$cijena')";
       	$run=mysqli_query($conn,$sql) or die(mysqli_error());

       	if($run){
       		echo '
          <script> alert("Uspesno vracen automobil u bazu")</script>
          ';
          $sql5="delete from iznajmljena where sasija='$br'";
          $run=mysqli_query($conn,$sql5);

       	}
       	else
       	{
       		echo '
          <script> alert("Neuspesno vracen automobil u bazu")</script>
          ';
       	}
      
         ?>
      <div class="text-center">
         <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php 
}else{
     header("Location: povracaj.php");
     exit();
}
 ?>