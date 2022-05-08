<?php
include "db_conn.php";
include "iznamljivanje.php";
include "ugovor.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP Print</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>Ugovor o iznamljivanju</h2>
      <table class="table table-bordered print">
       <thead>
          <tr>
            <th>ID-ugovora</th>
            <?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$sasija' and maticni_broj='$maticni'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['id']; ?></td>
           
          </tr>
         
          <tr>
            <th>Broj sasije</th>
            <?php
          
          $user_qry="SELECT * from ugovori where broj_sasije='$sasija' and maticni_broj='$maticni'";
          $user_res=mysqli_query($conn,$user_qry);
          $user_data=mysqli_fetch_assoc($user_res);
          
          ?>
          
            <td><?php echo $user_data['broj_sasije']; ?></td>
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
