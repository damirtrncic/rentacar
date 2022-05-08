<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['ime']) && isset($_POST['pass'])) {

	 function validate($data){
$data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;}
	$uname = validate($_POST['ime']);
	$pass = validate($_POST['pass']);

	if (empty($uname)) {
		header("Location: pocetna.php?error=Ime je obavezno");
	    exit();
	}else if(empty($pass)){
        header("Location: pocetna.php?error=Šifra je obavezna");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['ime'] = $row['ime_prezime'];
            	
            	$_SESSION['id'] = $row['id'];
            	header("Location:home.php");
                
		        exit();
		       
     

		        
            }else{
				header("Location: pocetna.php?error=Ime ili šifra je netačna");
		        exit();
			}
		}else{
			header("Location: pocetna.php?error=Ime ili šifra je netačna");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}