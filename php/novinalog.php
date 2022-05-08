<?php 
include "db_conn.php";
$errors= array();
if(isset($_POST['reg_user']))
{
    $ime=$_POST['ime'];
        $kime=$_POST['kime'];
        $pass=$_POST['password_1'];
        $email=$_POST['email'];
        $telefon=$_POST['telefon'];
        $datum=$_POST['d1'];
        $rukovodilac=$_POST['rukovodilac'];
        $admin="ne";
          $sql3="select username from user where username='$kime'";
        $run1=mysqli_query($conn,$sql3);
        if(mysqli_num_rows($run1)>0){
       $errors['k']="Korisnicko ime je vec iskoristeno";

           }
            $sql4="select password from user where password='$pass'";
        $run1=mysqli_query($conn,$sql4);
        if(mysqli_num_rows($run1)>0){
       $errors['p']="Sifra  je vec iskoristena,unesite drugu";

           }
        if(empty($ime))
        {
          $errors['i']="Ime i prezime su neophodni";
        }
        if(empty($kime))
        {
          $errors['k']="Korisnicko ime je neophodno";
        }
        if(empty($pass))
        {
          $errors['p']="Sifra je neophodna";
        }
        if(empty($email))
        {
          $errors['e']="Email je neophodan";
        }
        if(empty($telefon))
        {
          $errors['t']="Telefon je  neophodno unijeti";
        }
        if(empty($datum))
        {
          $errors['d']="Datum je obavezan";
        }
        if(empty($rukovodilac))
        {
          $errors['r']="rukovodilac je neophodan";
        }
       
            
          
       
       
       if(count($errors)==0){
       
        
        $sql1="select id from user where ime_prezime='$rukovodilac'";
        $run2=mysqli_query($conn,$sql1);
        $result=mysqli_fetch_assoc($run2);
        $ruk=$result['id'];

        $sql="INSERT into user(ime_prezime,username,password,email,telefon,datum_zaposlenja,admin,rukovodilac) values('$ime','$kime','$pass','$email','$telefon','$datum','$admin','$ruk')";
        $run=mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($run){
          echo '
          <script> alert("Uspesno ste uneli novog zaposlenog u bazu")</script>
          ';
        }
        else
        {
          echo '
          <script> alert("Neuspesno unet novi zaposleni")</script>
          ';
        }
        

}
     
    

}



 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body style="background-image:reg.jpg;background-size: cover;">

  <div class="header">
    <h2>Registracija</h2>
    <link rel="stylesheet" type="text/css" href="style6.css">
  </div>
  
  <form method="POST" >

    

    <div class="input-group">
      <label>Ime i prezime</label>
      <input type="text" name="ime" placeholder="Name">
       <?php if (isset($errors['i'])) { ?>
        <p class="error"><?php echo $errors['i']; ?></p>
      <?php } ?>
    </div>
    <div class="input-group">
      <label>Korisnicko ime</label>
      <input type="text" name="kime" placeholder="Username">
     <?php if (isset($errors['k'])) { ?>
        <p class="error"><?php echo $errors['k']; ?></p>
      <?php } ?>
    </div>
    <div class="input-group">
      <label>Sifra</label>
      <input type="text" name="password_1" placeholder="Password">
     <?php if (isset($errors['p'])) { ?>
        <p class="error"><?php echo $errors['p']; ?></p>
      <?php } ?>
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email" placeholder="Email address">
      <?php if (isset($errors['p'])) { ?>
        <p class="error"><?php echo $errors['p']; ?></p>
      <?php } ?>
    </div>
     <div class="input-group">
      <label>Telefon</label>
      <input type="text" name="telefon" placeholder="Phone number">
      <?php if (isset($errors['t'])) { ?>
        <p class="error"><?php echo $errors['t']; ?></p>
      <?php } ?>
    </div>
     <div class="input-group">
      <label>Datum zaposlenja</label>
      <input type="date" name="d1" >
      <?php if (isset($errors['d'])) { ?>
        <p class="error"><?php echo $errors['d']; ?></p>
      <?php } ?>
    </div>
     <div class="input-group">
      <label>Rukovodilac</label>
      <input type="text" name="rukovodilac" placeholder="Manager">
     <?php if (isset($errors['r'])) { ?>
        <p class="error"><?php echo $errors['r']; ?></p>
      <?php } ?>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Registracija</button>
    </div>
   
  </form>

</body>
</html>

</head>

