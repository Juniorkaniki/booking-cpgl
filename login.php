
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:22:27 GMT -->
<head>
<title>Login</title>
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
<?php include 'partials/_nav.php'; ?>






<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg3.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-center">
<div class="col-md-9 text-center mb-5">
<p class="breadcrumbs"><span class="me-2"><a href="acceuil">Acceuil <i class="fa fa-chevron-right"></i></a></span> <span>Connexion <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">Conexion</h1>
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
<h3>Connexion</h3>

<div class="row mb-4">

<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>


<form class="contactForm" method="POST" action="login_query.php">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="password" class="form-control" name="password" placeholder="*******">
</div>
</div>


<div class="col-md-12">
<div class="form-group">
<input type="submit" name="login" value="Se connecter" class="btn btn-primary">

</div>
</div>
</div>
</form>

<a class="btn btn-success" href="inscription">S'inscrire</a>



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
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7fbbe6965c383e9f","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/unioncorp/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:22:27 GMT -->
</html>