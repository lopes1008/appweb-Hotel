<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from create_account where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> Le compte existe déjà</h1>";    
  }
  else
  {

      $sql="insert into create_account(name,email,password,mobile,address,gender,country,pictrure) values('$fname','$email','$Passw','$mobi','$addr','$gend','$countr','$pict')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Informations enregistrées avec succès</h1>"; 
   header('location:identifier.php'); 
   }
  }
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
<div class="container-fluid"style="background-color:#4286f4;color:#000;">
  <div class="container">
    <div class="row">
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Créer un nouveau compte</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Nom :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Entrer votre nom"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Entrer votre Email" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mot de passe :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Entrer votre mot de passe"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Numéro de téléphone:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Entrer votre numéro de téléphone"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Addresse :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control" placeholder="Entrer votre addresse" required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">genre :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required><b>Homme</b>&emsp;
              <input type="radio" name="gend"value="male"required><b>Femme</b>&emsp;
              <input type="radio" name="gend"value="male"required><b>Autre</b>
          </div>
          </div>

          <div class="form-group">
            <div class="control-label col-sm-5"><h4>Pays :</h4></div>
          <div class="col-sm-7">
            <select name="countr" class="form-control"required>
              <option>Maroc</option>
              <option>Algérie</option>
              <option>Tunisie</option>
            </select>
        </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Photo de profil :</h4></div>
          <div class="col-sm-7">
              <input type="file" name="pict"accept="image/*"required>
          </div>
          <div class="row">
            <div class="col-sm-6"style="text-align:right;"><br>
            <input type="submit" value="Submit" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
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
