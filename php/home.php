<?php 
include "db_conn.php";
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['ime'])) {
    

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
     <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body 
      style="background-image: url(../slike/bst.jpg);
      
      background-size: cover;

     display: flex;
     justify-content: top;
     align-items: center;
     height: 100vh;
     flex-direction: column;">
     <h1 style="color:#4169E1">Dobrodosli, <?php echo $_SESSION['ime']; ?></h1>
     <table style="border-spacing: 30px">
          <tr>
               <td></td>
               <td colspan="2">
                    <?php
                    echo "<span style='color:#4169E1'>Trenutno vrijeme:<span> ".date('h:i');
                    ?>
               </td>
               <td colspan="2">
                    <?php
                   echo "<span style='color:#4169E1'>Danasnji datum:<span> ".date("d-m-y");
                    ?>
               </td>
               

          </tr>
     	<tr>
     		<td><a href="opcije.php"> <img src="../slike/opcije.jpg"></a></td>
     		<td><a href="automobil.php"><img src="../slike/ferari.jpg"></a></td>
     		<td><a href="klijent.php"><img src="../slike/user.jpg"></a></td>
     		<td><a href="statistika.php"><img src="../slike/racunovodstvo.jpg"></td>
               <td><a href="nalog.php"><img src="../slike/account.jpg"></a></td>
     	</tr>
     	<tr>
     		<th style="color: #4169E1;font-size: 16pt">OPCIJE</th>
     		<TH style="color: #4169E1;font-size: 16pt">AUTOMOBILI</TH>
     		<TH style="color: #4169E1;font-size: 16pt">KLIJENTI</TH>
     		<TH style="color: #4169E1;font-size: 16pt">STATISTIKA</TH>
               <TH style="color: #4169E1;font-size: 16pt">NALOG</TH>
     	</tr>
     </table>
     <br>
     <a href="logout.php">Logout</a>
     
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>