<?php
	require 'conn.php';
	session_start();
    if(ISSET($_SESSION['user'])){
        $id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `client` WHERE `id_client`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
                $name = $fetch['noms'];
    }		

?>
	
<div class="top-wrap">
<div class="container">
<div class="row">
<div class="col-md-3 d-flex align-items-center mb-2 mb-md-0">
<div class="con">
<p class="mb-0"><span class="fa fa-phone"></span> Contact: +243 972 800 949</p>
</div>
</div>
<div class="col-md-3 d-flex align-items-center mb-2 mb-md-0">
<div class="con">
<p class="mb-0"><span class="fa fa-map-o"></span> Location: Nord-Kivu, Goma, RDC</p>
<div>
<?php
 if(!ISSET($_SESSION['user'])) {
     echo '
     <p></p>
     
     ';
  } else {
     echo "Connecter en tant que : $name";
  }
 ?>
</div>

</div>
</div>
<div class="col-md d-flex justify-content-start justify-content-md-end align-items-center">
<p class="ftco-social d-flex">
<a href="https://twitter.com/dgmdrc?lang=fr" target="_bank" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
<a href="https://www.facebook.com/dgmrdc/?locale=fr_FR" target="_bank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
<a href="https://www.instagram.com/p/Blr_QnUB2K5/" target="_bank" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
</p>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg  ftco-navbar-light">
<div class="container-xl">
<a class="navbar-brand" href="acceuil">
<img src="images/dgm-logo.png" alt=" logo dgm" style="width: 40%; heigt:auto">
<!-- Union<small>corp.</small>
<span>Finance &amp; Consultation</span> -->
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link active" href="acceuil">Acceuil</a></li>
<li class="nav-item"><a class="nav-link" href="about">A propos</a></li>
<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
<?php
if(!ISSET($_SESSION['user'])){
    echo '<li class="nav-item"><a class="nav-link" href="login">Connexion</a></li>';
} else {
    echo '<li class="nav-item"><a class="nav-link" href="users/logout.php">Deconnexion</a></li>';
}
 ?>
</ul>
</div>
</div>
</nav>