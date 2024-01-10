<?php 
require "../config/database.php";
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:32:30 GMT -->
<head>
<title>Admindek | Admin Template</title>




<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css"><link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
</head>
<?php

   
if(isset($_SESSION['PROFILE']['id_utilisateur'])) {
    switch ($_SESSION['PROFILE']['designation']) {
        
        
        case 'admin':
            header('location: dashboard');
        break;
        
        
        default:
            header('location: ./');
            die('aucune service');
        break;
    }
}

if(isset($_POST['btn_submit'])) {
    extract($_POST);
    $sql = "SELECT * FROM authentification  WHERE (username=:username OR email=:email) AND password=:password";
    $req = $db->prepare($sql);
    $req->execute([
        'username' => htmlspecialchars(trim($username)),
        'email' => $username,
        'password' => sha1($password)
    ]);
    
    if($informations = $req->fetch()) { /*Si l'adresse et le mot de passe sont vrai*/
        $_SESSION['TMP_PROFILE'] = $informations;
        //echo $_SESSION['TMP_PROFILE']['ref_utilisateur'];
        
        $recup_informations = $db->prepare("SELECT * FROM fonction INNER JOIN tbl_agent ON fonction.id_fonction=tbl_agent.ref_fonction WHERE id_utilisateur=:id_utilisateur");
        $recup_informations->execute([
        'id_utilisateur' => $_SESSION['TMP_PROFILE']['ref_utilisateur']
        ]);

        while($session = $recup_informations->fetch()) {
            $_SESSION['PROFILE'] = $session;
        }
        
        switch ($_SESSION['PROFILE']['designation']) {
             
           
             case 'admin':
            header('location: dashboard');
             break;
             
            default:
                header('location: ./');
                die('aucune service');
            break;
        }
    }
    else{
        $error = '';
    }
}

?>
<body themebg-pattern="theme1">

<div class="theme-loader">
<div class="loader-track">
<div class="preloader-wrapper">
<div class="spinner-layer spinner-blue">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-yellow">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-green">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>
</div>

<section class="login-block">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" method="POST" action="">
<div class="text-center">
<img src="../files/assets/images/logo.png" alt="logo.png">
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Sign In</h3>
</div>
</div>
<div class="row m-b-20">
<div class="col-md-6">
<button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
</div>
<div class="col-md-6">
<button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
</div>
</div>
<p class="text-muted text-center p-b-5">
<div id="errorConnection" style="margin-top: 30px; margin-bottom: 30px">
                                    <?php if(isset($error)) : ?>
                                    <div class="alert alert-danger" onclick="document.querySelector('#errorConnection').style.display = 'none';">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="color: red"><b>Informations incorrectes !</b></span>
                                    </div>
                                    <?php endif; ?>
                                </div> 
</p>
<div class="form-group form-primary">
<input type="text" name="username" class="form-control" value="<?= (isset($username)) ? $username : ''; ?>"  required>
<span class="form-bar"></span>
<label class="float-label">Username ou email</label>
</div>
<div class="form-group form-primary">
<input type="password" name="password" class="form-control" value="<?= (isset($password)) ? $password : ''; ?>"  required>
<span class="form-bar"></span>
<label class="float-label">Mot de passe</label> 
</div>
<div class="row m-t-25 text-left">
<div class="col-12">
<div class="checkbox-fade fade-in-primary">
<label>
<input type="checkbox" value>
<span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
<span class="text-inverse">Remember me</span>
</label>
</div>

</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" name="btn_submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
</div>
</div>
<p class="text-inverse text-left">Don't have an account?<a href="auth-sign-up-social.html"> <b>Register here </b></a>for free!</p>
</div>
</div>
</form>

</div>

</div>

</div>

</div>

</section>




<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
<script type="text/javascript" src="../files/assets/js/common-pages.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:32:32 GMT -->
</html>
