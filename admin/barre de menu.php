<h1>
<?php 
session_start();
$eid=$_SESSION['create_account_logged_in'];
error_reporting(1);
?> 
</h1>
<!--Menu Bar Close Here-->
<nav style="background-color: black; height:75px" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="logo/logo2.jpg"/width="165px"height="35px"style="margin-top:17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div style="margin-top: 13px;" class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php"title="Home">Accueil</a></li>
        <li><a href="../à propos.php"title="About">à propos </a></li>
		    <li><a href="../galerie des images.php"title="Gallery">Galerie </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href="admin/index.php"title="Admin Login"><span class="glyphicon glyphicon-user"></span>Connexion administrateur</a></li>

        <?php 
      if($_SESSION['create_account_logged_in']!="")
      {
        ?>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Afficher détails<span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="profil.php">Profil</a></li>
              <li><a href="détails de réservation.php">Détails de réservation</a></li>
              <li><a href="se déconnecter.php">Se déconnecter</a></li>
        	</ul>
        </li>
        <?PHP } else
		{
		?>
		<li><a href="../identifier.php" title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Connexion Utilisateur</a>
        </li>
		<?php 
		} ?>
      </ul>
    </div>
  </div>
</nav>   