<?php
	require '../conn.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:../login');
	}
?>

<?php 
if(isset($_POST['submit'])){
	extract($_POST);
	$id = $_SESSION['user'];
	$noms = htmlspecialchars($_POST['noms']);
	$sexe = htmlspecialchars($_POST['sexe']);
	$etat_civil = htmlspecialchars($_POST['etat_civil']);
	$date_naiss = htmlspecialchars($_POST['date_naiss']);
	$lieu = htmlspecialchars($_POST['lieu']);
	$proffession = htmlspecialchars($_POST['proffession']);
	$nom_pere = htmlspecialchars($_POST['nom_pere']);
	$nom_mere = htmlspecialchars($_POST['nom_mere']);
	$province_org = htmlspecialchars($_POST['province_org']);
	$teritoire_org = htmlspecialchars($_POST['teritoire_org']);
	
	$requete = $conn->prepare("UPDATE client SET noms=:noms,sexe=:sexe,etat_civil=:etat_civil,date_naiss=:date_naiss,lieu=:lieu,proffession=:proffession,nom_pere=:nom_pere,nom_mere=:nom_mere,province_org=:province_org,teritoire_org=:teritoire_org WHERE id_client=:id");
	$requete->execute(array(
		'id'=>$_SESSION['user'],
		'noms' =>$noms,
		'sexe' =>$sexe,
		'etat_civil' => $etat_civil,
		'date_naiss' => $date_naiss,
		'lieu' => $lieu,
		'proffession' => $proffession,
		'nom_pere' => $nom_pere,
		'nom_mere' => $nom_mere,
		'province_org' => $province_org,
		'teritoire_org' => $teritoire_org
	));
	if($requete){
		echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Profile modifier avec success',
      showConfirmButton: false,
      timer: 1500
    })
     </script>
     ";
	}else{
		echo'err';
	}

}


?>
<!DOCTYPE html>
<html lang="en">


<head>
<title>Admin Panel | Admin Pannel</title>




<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
<script src="../files/assets/js/sweetalert.min.js"></script>
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<?php include 'partials/_nav.php' ?>





<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<?php include 'partials/_menu.php' ?>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">

</div>
</div>

<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-body">



<div class="row">
<div class="col-sm-12">

<div class="card">

<div class="card-block tab-icon">

<div class="row">
<div class="col-lg-12 col-xl-6">



<ul class="nav nav-tabs md-tabs " role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><i class="icofont icofont-home"></i>Mes infos</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><i class="icofont icofont-ui-user "></i>Adresse</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><i class="icofont icofont-ui-user "></i>Mes options de connexion</a>
<div class="slide"></div>
</li>

</ul>

<div class="tab-content card-block">
<div class="tab-pane active" id="home7" role="tabpanel">
<p class="m-0">
<div class="row">
   <div class="col-md-6">
	<label for="">Noms</label>
      <input class="form-control" type="text" value="<?php echo $fetch['noms']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Sexe</label>
      <input class="form-control" type="text" value="<?php echo $fetch['sexe']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Etat civil</label>
      <input class="form-control" type="text" value="<?php echo $fetch['etat_civil']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">date de naissance</label>
      <input class="form-control" type="date" value="<?php echo $fetch['date_naiss']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Lieu naissance</label>
      <input class="form-control" type="text" value="<?php echo $fetch['lieu']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Proffesion</label>
      <input class="form-control" type="text" value="<?php echo $fetch['proffession']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Nom du pere</label>
      <input class="form-control" type="text" value="<?php echo $fetch['nom_pere']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Nom de la mere</label>
      <input class="form-control" type="text" value="<?php echo $fetch['nom_mere']?>" disabled>
   </div>
  
   <div class="col-md-6">
	<label for="">Province d'origine</label>
      <input class="form-control" type="text" value="<?php echo $fetch['province_org']?>" disabled>
   </div>
   <div class="col-md-6">
	<label for="">Territoire d'origine</label>
      <input class="form-control" type="text" value="<?php echo $fetch['teritoire_org']?>" disabled>
   </div>
</div>
<br>

<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-edit"></i>
</button>
</p>
</div>

<div class="tab-pane" id="profile7" role="tabpanel">
<p class="m-0">
<div class="row">
       <div class="col-md-6">
		<label for="">Username</label>
         <input class="form-control" type="text" value="<?php echo $fetch['username']?>">
	   </div>
	   <div class="col-md-6">
		<label for="">Mot de passe</label>
         <input class="form-control" type="password" value="<?php echo $fetch['password']?>">
	   </div>
	</div>
</p>
</div>

<div class="tab-pane" id="profile8" role="tabpanel">
<p class="m-0">
	<div class="row">
       <div class="col-md-6">
         <input class="form-control" type="text" value="<?php echo $fetch['teritoire_org']?>">
	   </div>
	</div>
</p>
</div>

</div>
</div>
<div class="col-lg-12 col-xl-6 tab-with-img">


<ul class="nav nav-tabs md-tabs img-tabs b-none" role="tablist">

<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#settings8" role="tab">
<img src="../prof/<?php echo $fetch['photo']?>" class="img-fluid img-circle" alt>

</a>
</li>
</ul>

<div class="tab-content card-block">

<div class="tab-pane active" id="settings8" role="tabpanel">
<p class="text-center m-0"><?php echo $fetch['noms']?></p>
</div>
</div>
</div>
</div>



</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier mn profil <?php echo $fetch['noms']?> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
		<div class="row">
   <div class="col-md-6">
	<label for="">Noms</label>
      <input class="form-control" name="noms" type="text" value="<?php echo $fetch['noms']?>">
   </div>
   <div class="col-md-6">
	<label for="">Sexe</label>
	<select class="form-control" name="sexe" id="">
		<option value="<?php echo $fetch['sexe']?>"><?php echo $fetch['sexe']?></option>
		<option value="masculin">Masculin</option>
		<option value="feminin">Feminin</option>
	</select>
     
   </div>
   <div class="col-md-6">
	<label for="">Etat civil</label>
	<select class="form-control" name="etat_civil" id="">
       <option value="<?php echo $fetch['etat_civil']?>"><?php echo $fetch['etat_civil']?></option>
	</select>
     
   </div>
   <div class="col-md-6">
	<label for="">date de naissance</label>
      <input class="form-control" name="date_naiss" type="date" value="<?php echo $fetch['date_naiss']?>" >
   </div>
   <div class="col-md-6">
	<label for="">Lieu naissance</label>
      <input class="form-control" name="lieu" type="text" value="<?php echo $fetch['lieu']?>">
   </div>
   <div class="col-md-6">
	<label for="">Proffesion</label>
      <input class="form-control" name="proffession" type="text" value="<?php echo $fetch['proffession']?>" >
   </div>
   <div class="col-md-6">
	<label for="">Nom du pere</label>
      <input class="form-control" name="nom_pere" type="text" value="<?php echo $fetch['nom_pere']?>" >
   </div>
   <div class="col-md-6">
	<label for="">Nom de la mere</label>
      <input class="form-control" name="nom_mere" type="text" value="<?php echo $fetch['nom_mere']?>" >
   </div>
  
   <div class="col-md-6">
	<label for="">Province d'origine</label>
      <input class="form-control" name="province_org" type="text" value="<?php echo $fetch['province_org']?>" >
   </div>
   <div class="col-md-6">
	<label for="">Territoire d'origine</label>
      <input class="form-control" name="teritoire_org" type="text" value="<?php echo $fetch['teritoire_org']?>" >
   </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>

		</form>

      </div>
    </div>
  </div>
</div>





<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>


</html>
