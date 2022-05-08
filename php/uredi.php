<?php
include "db_conn.php";

session_start();
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id'];


	$sql="select * from user where id='$id'";
	$run=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	$result=mysqli_fetch_assoc($run);
	$ime=$result['ime_prezime'];
	$username=$result['username'];
	$pass=$result['password'];
	$email=$result['email'];
	$telefon=$result['telefon'];
	$datum=$result['datum_zaposlenja'];
	$admin=$result['admin'];
	$rukov=$result['rukovodilac'];

	$sql3="select ime_prezime from user where id='$rukov'";
	$run=mysqli_query($conn,$sql3);
	$result=mysqli_fetch_assoc($run);
	$rukovodilac=$result['ime_prezime'];
    
    if(isset($_POST['unesifru']))
    {
$ps=$_POST['Promijenisifru'];
    	$sql="update user set password='$ps' where password='$pass'";
    	$run=mysqli_query($conn,$sql);
    }
    if(isset($_POST['unesime']))
    {
    	$pi=$_POST['Promijenime'];
    	$sql="update user set username='$pi' where password='$pass'";
    	$run2=mysqli_query($conn,$sql);
    }
    

}
  


?>


<!DOCTYPE html>
<html>
<head>
	<title>Uredi nalog</title>
	<link rel="stylesheet" type="text/css" href="style51.css">
</head>
<body style="background-image:url(reg1.jpg);background-size: cover;">
	<div class="d1">
		<div class="d2">
			<div class="title">
				<span  style="font-size: 2.3em;
    font-weight: bold;
    color: white;">Podesavanje naloga</span>
			</div>
			<table>
				<tbody>
					<tr class="idrow">
						<td class="id1">
							Ime i prezime
						</td>
						<td class="id2"><?php echo $ime; ?></td>
					</tr>
					<tr class="idrow">
						<td class="id1">
							Korisnicko ime
						</td>
						<td class="id2"><?php echo $username; ?></td>
					</tr>
					<tr class="idrow">
						<td class="id1">
							Sifra
						</td>
						<td class="id2"><?php echo $pass; ?></td>
					</tr>
					<tr class="idrow">
						<td class="id1">
							Email
						</td>
						<td class="id2"><?php echo $email; ?></td>
					</tr>
					<tr class="idrow">
						<td class="id1">
							Telefon
						</td>
						<td class="id2"><?php echo $telefon; ?></td>
					</tr>
					<tr class="idrow">
						<td class="id1">
							Datum zaposlenja
						</td>
						<td class="id2"><?php echo $datum; ?></td>
					</tr>
					<tr class="idrow">
						<td class="id1">
							Rukovodilac
						</td>
						<td class="id2"><?php echo $rukovodilac; ?></td>
					</tr>
					
				</tbody>
			</table>
			<div class="title_sifra ">
				<span style="font-size: 2.3em;
    font-weight: bold;
    color: white;text-decoration: underline;">
    	Promijeni sifru ili korisnicko ime
    </span>
			</div>
			<form method="POST">
				<div class="unos">
					<div class="row">
						<label>Nova sifra</label>
					</div>
					<div class="unos_lijevo">
						<input type="password" name="Promijenisifru">
					</div>
					<div class="unos_desno">
						<button name="unesifru">Sacuvaj sifru</button>
					</div>
				</div>
				<div class="unos">
					<div class="row">
						<label>Novo korisnicko ime</label>
					</div>
					<div class="unos_lijevo">
						<input type="text" name="Promijenime" class="qq">
					</div>
					<div class="unos_desno">
						<button name="unesime">Sacuvaj ime</button>
					</div>
				</div>
				<div class="home" name="home">
					<a href="home.php"></a><button  onclick="window.location=">Prikazi</button></a>
				
					
					</script>
				</div>
			</form>
		</div>
	</div>

</body>
</html>