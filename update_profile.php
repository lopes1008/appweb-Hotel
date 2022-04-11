<?php
session_start();
include('connection.php');
error_reporting(1);
$eid=$_SESSION['create_account_logged_in'];
?>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from create_account where email='$eid'");
$result=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update create_account set name='$fname',email='$email',password='$Passw',mobile='$mobi',address='$addr',gender='$gend',country='$countr'where email='$eid'");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hôtel en ligne</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php 
include('barre de menu.php');
  ?>
<div class="container-fluid"style="color:#000;"> <!-- Primary Id-->
  <div class="container">
    <h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Modifier Mon Compte</font></b></h1>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post"enctype="multipart/form-data">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Nom :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" value="<?php echo $result['name']; ?>"class="form-control"placeholder="Entrer votre nom">
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Entrer votre Email">
              <h4 style="color:red">L'email actuel doit être requis *</h4>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mot de passe :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw"value="<?php echo $result['password']; ?>" class="form-control"placeholder="Entrer votre mot de passe">
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Numéro de téléphone :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi"value="<?php echo $result['mobile']; ?>" class="form-control"placeholder="Entrer votre numéro de téléphone">
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Addresse :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control" placeholder="Entrer votre addresse"><?php echo $result['address']; ?></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Genre :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"><b>Homme</b>&emsp;
              <input type="radio"name="gend"value="male"><b>Femme</b>&emsp;
              <input type="radio"name="gend"value="male"><b>Autre</b>
          </div>
          </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4>Pays :</h4></div>
          <div class="col-sm-7">
            <select name="countr"value="<?php echo $result['country']; ?>" class="form-control">
              <option>Maroc</option>
              <option>Algérie</option>
              <option>Tunisie</option>
            </select>
        </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Photo de profil :</h4></div>
          <div class="col-sm-7">
              <input type="file" name="pict"accept="image/*">
          </div>
          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Modifier Profil" name="update"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
          </div>
          </div>
          </div>
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
<?php
    include('bas de page.php')
?>
</body>
</html>