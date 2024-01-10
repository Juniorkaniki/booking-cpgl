<?php
  include_once 'config.php';
  $query = "SELECT * FROM country Order by country_name";
  $result = $db->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:22:27 GMT -->
<head>
<title>Unioncorp - Free Bootstrap 5 Template by Colorlib</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/tiny-slider.css">
<link rel="stylesheet" href="css/glightbox.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/datepicker.min.css">
<link rel="stylesheet" href="css/style.css">
<script nonce="c2290886-9015-4e5f-a1b2-dccf7262b7d5">(function(w,d){!function(U,V,W,X){U[W]=U[W]||{};U[W].executed=[];U.zaraz={deferred:[],listeners:[]};U.zaraz.q=[];U.zaraz._f=function(Y){return async function(){var Z=Array.prototype.slice.call(arguments);U.zaraz.q.push({m:Y,a:Z})}};for(const $ of["track","set","debug"])U.zaraz[$]=U.zaraz._f($);U.zaraz.init=()=>{var ba=V.getElementsByTagName(X)[0],bb=V.createElement(X),bc=V.getElementsByTagName("title")[0];bc&&(U[W].t=V.getElementsByTagName("title")[0].text);U[W].x=Math.random();U[W].w=U.screen.width;U[W].h=U.screen.height;U[W].j=U.innerHeight;U[W].e=U.innerWidth;U[W].l=U.location.href;U[W].r=V.referrer;U[W].k=U.screen.colorDepth;U[W].n=V.characterSet;U[W].o=(new Date).getTimezoneOffset();if(U.dataLayer)for(const bg of Object.entries(Object.entries(dataLayer).reduce(((bh,bi)=>({...bh[1],...bi[1]})),{})))zaraz.set(bg[0],bg[1],{scope:"page"});U[W].q=[];for(;U.zaraz.q.length;){const bj=U.zaraz.q.shift();U[W].q.push(bj)}bb.defer=!0;for(const bk of[localStorage,sessionStorage])Object.keys(bk||{}).filter((bm=>bm.startsWith("_zaraz_"))).forEach((bl=>{try{U[W]["z_"+bl.slice(7)]=JSON.parse(bk.getItem(bl))}catch{U[W]["z_"+bl.slice(7)]=bk.getItem(bl)}}));bb.referrerPolicy="origin";bb.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(U[W])));ba.parentNode.insertBefore(bb,ba)};["complete","interactive"].includes(V.readyState)?zaraz.init():U.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body>
<?php include 'partials/_nav.php' ?>
<?php 
include 'config/base.php';
if (isset($_POST['submit'])) {
    extract($_POST);
    $noms= htmlspecialchars($_POST['noms']);
	$sexe = htmlspecialchars($_POST['sexe']);
  $date_naiss = htmlspecialchars($_POST['date_naiss']);
  $lieu = htmlspecialchars($_POST['lieu']);
  $etat_civil = htmlspecialchars($_POST['etat_civil']);
  $proffession = htmlspecialchars($_POST['proffession']);
  $nom_pere = htmlspecialchars($_POST['nom_pere']);
  $nom_mere = htmlspecialchars($_POST['nom_mere']);
  $province_org = htmlspecialchars($_POST['province_org']);
  $teritoire_org = htmlspecialchars($_POST['teritoire_org']);
  $num_avenu = htmlspecialchars($_POST['num_avenu']);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $country = htmlspecialchars($_POST['country']);
  $state = htmlspecialchars($_POST['state']);
  $com = htmlspecialchars($_POST['com']);
  $city = htmlspecialchars($_POST['city']);
  $quart = htmlspecialchars($_POST['quart']);
  $avenue = htmlspecialchars($_POST['avenue']);
  
	
    $fileName = $_FILES['file']['name'];
     $fileTmpName = $_FILES['file']['tmp_name'];
       
       $path = "prof/".$fileName;

            $check_query = "SELECT * FROM client
            WHERE noms=:noms
           ";
          $statement = $db->prepare($check_query);
          $check_data = array(
           
             ':noms'   =>  $noms           
          );
           if($statement->execute($check_data))  
         {
            if($statement->rowCount() > 1)
             {
                echo "
                <script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'Cet eleve existe deja!',
                         footer: ''
                          })
                  </script>
                ";             
            }
        
          else
            {
            if ($statement->rowCount() == 0 ) {

				
  
 

  $req=$db->prepare("INSERT INTO client (noms,sexe,date_naiss,lieu,etat_civil,proffession,photo,nom_pere,nom_mere,province_org,teritoire_org,country,state,com,city,quart,avenue,username,password) VALUES (:noms,:sexe,:date_naiss,:lieu,:etat_civil,:proffession,:photo,:nom_pere,:nom_mere,:province_org,:teritoire_org,:country,:state,:com,:city,:quart,:avenue,:username,:password)");

  $res=$req->execute(array(
    'noms' => $noms,
    'sexe' => $sexe,
    'date_naiss' => $date_naiss,
    'lieu' => $lieu,
    'etat_civil' => $etat_civil,
    'proffession' => $proffession,
    'photo' => $fileName,
    'nom_pere' => $nom_pere,
    'nom_mere' => $nom_mere,
    'province_org' => $province_org,
    'teritoire_org' => $teritoire_org,
    'country' => $country,
    'state' => $state,
    'com' => $com,
    'city' => $city,
    'quart' => $quart,
    'avenue' => $avenue,
    'username' => $username,
    'password' => $password
    
    
    
    
  ));
  if ($res) {
	move_uploaded_file($fileTmpName,$path);
     echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Eleve inserer avec success',
      showConfirmButton: false,
      timer: 1500
    })
     </script>
     ";
  }else{
      echo "<script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'Eleve non inserer!',
                         footer: ''
                          })
                  </script>";
  }
  }
  }
  }
}



 ?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 text-center mb-5">
<p class="breadcrumbs"><span class="me-2"><a href="acceuil">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Inscription <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">Inscription</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section bg-light">
<div class="container-xl">
<div class="row no-gutters justify-content-center">
<div class="col-lg-10">
<div class="wrapper">
<div class="row g-0">
<div class="col-lg-12">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3>Inscription</h3>

<div class="row mb-4">


<form class="contactForm" method="POST" action="" enctype="multipart/form-data">
<div class="row">

<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="noms" id="name" placeholder="Nom complet" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select class="form-control" name="sexe" id="" required>
  <option>--Sexe--</option>
  <option value="Masculin">Masculin</option>
  <option value="Feminin">Feminin</option>
</select>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input type="date" class="form-control" name="date_naiss" id="name" placeholder="" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="lieu" id="email" placeholder="Lieu naissance" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<select class="form-control" name="etat_civil" id="" required>
 <option>--Etat civil--</option>
 <option value="Celibataire">Celibataire</option>
 <option value="Marier">Marier</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="proffession" id="email" placeholder="Proffession" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input type="file" class="form-control" name="file" id="name" placeholder="Nom d'utilisateur" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="nom_pere" id="email" placeholder="Nom du pere" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="nom_mere" id="name" placeholder="Nom de la mere" required>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="province_org" id="email" placeholder="Province d'orgine" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="teritoire_org" id="name" placeholder="Teritoire d'origine" required>
</div>
</div>



<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" name="username" id="email" placeholder="Nom d'utilisateur" required>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="password" id="name" placeholder="Mot depasse" required>
</div>
</div>


<div class="col-md-6">
  <div class="form-group">
<select name="country" id="country" class="form-control" onchange="FetchState(this.value)"  required>
            <option value="">Selectionner le pays</option>
          <?php
            if ($result->num_rows > 0 ) {
               while ($row = $result->fetch_assoc()) {
                echo '<option value='.$row['id'].'>'.$row['country_name'].'</option>';
               }
            }
          ?> 
          </select>
          </div>
</div>

<div class="col-md-6">
   <div class="form-group">
 
          <select name="state" id="state" class="form-control" onchange="FetchCity(this.value)"  required>
            <option>Selectionner province</option>
          </select>
   </div>
</div>

<div class="col-md-6">
<div class="form-group">
        
          <select name="com" id="com" class="form-control" onchange="FetchQ(this.value)"  required>
            <option>Selectionner la ville</option>
          </select>
        </div>
</div>

<div class="col-md-6">
<div class="form-group">
        
          <select name="city" id="city" class="form-control" onchange="FetchCom(this.value)"  required>
            <option>Selectionner la commune</option>
          </select>
        </div>
</div>

<div class="col-md-6">
<div class="form-group">
        
          <select name="quart" id="quart" class="form-control" required>
            <option>Selectionner le quartier</option>
          </select>
        </div>
</div>


<div class="col-md-6">
<div class="form-group">
        
          <input class="form-control" type="text" name="avenue" placeholder="Avenue et numero" required>
        </div>
</div>




<div class="col-md-12">
<div class="form-group">
<input type="submit" name="submit" value="S'inscrire" class="btn btn-primary">

</div>
</div>
</div>
</form>


</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>

<?php include 'partials/_footer.php' ?>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/tiny-slider.js"></script>
<script src="js/glightbox.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7fbbe6965c383e9f","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
<script type="text/javascript">
  function FetchState(id){
    $('#state').html('');
    $('#city').html('<option>Select City</option>');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { country_id : id},
      success : function(data){
         $('#state').html(data);
      }

    })
  }

  function FetchCity(id){ 
    $('#city').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { state_id : id},
      success : function(data){
         $('#city').html(data);
      }

    })
  }

  function FetchCom(id){ 
    $('#com').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { city_id : id},
      success : function(data){
         $('#com').html(data);
      }

    })
  }

  function FetchQ(id){ 
    $('#quart').html('');
    $.ajax({
      type:'post',
      url: 'ajaxdata.php',
      data : { com_id : id},
      success : function(data){
         $('#quart').html(data);
      }

    })
  }

  
</script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:22:27 GMT -->
</html>