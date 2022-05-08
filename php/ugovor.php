<?php
include "db_conn.php";
session_start();
if (isset($_SESSION['broj']) && isset($_SESSION['maticni']))
{
$br=$_SESSION['broj'];
	$mat=$_SESSION['maticni'];
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
      <h2>Ugovor o iznajmljivanju</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>ID-ugovora</th>
            <?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['id']; ?></td>
           
          </tr>
          
          
          <tr>
          	<th>Broj sasije</th>
          	<?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['broj_sasije']; ?></td>
          </tr>
           <tr>
          	<th>Marka i model </th>
          	<?php
          
           $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['marka']; ?><?php echo "  ";?><?php echo $user_data['model']?></td>
          </tr>
           <tr>
          	<th>Ime i prezime klijenta</th>
          	<?php
          
           $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['ime']; ?><?php echo "  ";?><?php echo $user_data['prezime']?></td>
          </tr>
          <tr>
          	<th>Maticni broj</th>
          	<?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['maticni_broj']; ?></td>
          </tr>
          <tr>
          	<th>Broj licne</th>
          	<?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['broj_licne']; ?></td>
          </tr>
          <tr>
          	<th>Datum iznajmljivanja</th>
          	<?php
          
           $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['datum_iznajmljivanja']; ?></td>
          </tr>
          <tr>
          	<th>Datum vracanja</th>
          	<?php
          
           $user_qry="SELECT * from ugovori where broj_sasije='$br' and maticni_broj='$mat'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['datum_vracanja']; ?></td>
          </tr>
        </thead>
      
      </table>

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
     header("Location: iznamljivanje.php");
     exit();
}
 ?>