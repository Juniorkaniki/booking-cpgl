<?php
	require '../conn.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:../login');
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



<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>User Profile</h4>
<span>lorem ipsum dolor sit amet, consectetur adipisicing
elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item" style="float: left;">
<a href="../index.html"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item" style="float: left;"><a href="#!">User Profile</a>
</li>
<li class="breadcrumb-item" style="float: left;"><a href="#!">User Profile</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">

<div class="row">
<div class="col-lg-12">
<div class="cover-profile">
<div class="profile-bg-img">
<img class="profile-bg-img img-fluid" src="../files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
<div class="card-block user-info">
<div class="col-md-12">
<div class="media-left">
<a href="#" class="profile-image">
<img class="user-img img-radius" src="../files/assets/images/user-profile/user-img.jpg" alt="user-img">
</a>
</div>
<div class="media-body row">
<div class="col-lg-12">
<div class="user-title">
<h2>Josephin Villa</h2>
<span class="text-white">Web designer</span>
</div>
</div>
<div>
<div class="pull-right cover-btn">
<button type="button" class="btn btn-primary m-r-10 m-b-5"><i class="icofont icofont-plus"></i>
Follow</button>
<button type="button" class="btn btn-primary"><i class="icofont icofont-ui-messaging"></i>
Message</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-12">

<div class="tab-header card">
<ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>
<div class="slide"></div>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>
<div class="slide"></div>
</li>
</ul>
</div>


<div class="tab-content">

<div class="tab-pane active" id="personal" role="tabpanel">

<div class="card">
<div class="card-header">
<h5 class="card-header-text">About Me</h5>
<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>
<div class="card-block">
<div class="view-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-12 col-xl-6">
<div class="table-responsive">
<table class="table m-0">
<tbody>
<tr>
<th scope="row">
Full Name
</th>
<td>Josephine
Villa</td>
</tr>
<tr>
<th scope="row">
Gender</th>
<td>Female</td>
</tr>
<tr>
<th scope="row">
Birth Date
</th>
<td>October
25th, 1990
</td>
</tr>
<tr>
<th scope="row">
Marital
Status</th>
<td>Single</td>
</tr>
<tr>
<th scope="row">
Location
</th>
<td>New York,
USA</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="col-lg-12 col-xl-6">
<div class="table-responsive">
<table class="table">
<tbody>
<tr>
<th scope="row">
Email</th>
<td><a href="#!"><span class="__cf_email__" data-cfemail="185c7d7577587d60797568747d367b7775">[email&#160;protected]</span></a>
</td>
</tr>
<tr>
<th scope="row">
Mobile
Number</th>
<td>(0123) -
4567891</td>
</tr>
<tr>
<th scope="row">
Twitter</th>
<td>@xyz</td>
</tr>
<tr>
<th scope="row">
Skype</th>
<td>demo.skype
</td>
</tr>
<tr>
<th scope="row">
Website</th>
<td><a href="#!">www.demo.com</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>

</div>

</div>

</div>

</div>

<div class="edit-info">
<div class="row">
<div class="col-lg-12">
<div class="general-info">
<div class="row">
<div class="col-lg-6">
<table class="table">
<tbody>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-user"></i></span>
<input type="text" class="form-control" placeholder="Full Name">
</div>
</td>
</tr>
<tr>
<td>
<div class="form-radio">
<div class="group-add-on">
<div class="radio radiofill radio-inline">
<label>
<input type="radio" name="radio" checked><i class="helper"></i>
Male
</label>
</div>
<div class="radio radiofill radio-inline">
<label>
<input type="radio" name="radio"><i class="helper"></i>
Female
</label>
</div>
</div>
</div>
</td>
</tr>
<tr>
<td>
<input id="dropper-default" class="form-control" type="text" placeholder="Select Your Birth Date" />
</td>
</tr>
<tr>
<td>
<select id="hello-single" class="form-control">
<option value>
----
Marital
Status
----
</option>
<option value="married">
Married
</option>
<option value="unmarried">
Unmarried
</option>
</select>
</td>
</tr>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-location-pin"></i></span>
<input type="text" class="form-control" placeholder="Address">
</div>
</td>
</tr>
</tbody>
</table>
</div>

<div class="col-lg-6">
<table class="table">
<tbody>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-mobile-phone"></i></span>
<input type="text" class="form-control" placeholder="Mobile Number">
</div>
</td>
</tr>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-social-twitter"></i></span>
<input type="text" class="form-control" placeholder="Twitter Id">
</div>
</td>
</tr>

<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-social-skype"></i></span>
<input type="email" class="form-control" placeholder="Skype Id">
</div>
</td>
</tr>
<tr>
<td>
<div class="input-group">
<span class="input-group-addon"><i class="icofont icofont-earth"></i></span>
<input type="text" class="form-control" placeholder="website">
</div>
</td>
</tr>
</tbody>
</table>
</div>

</div>

<div class="text-center">
<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
<a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
</div>
</div>

</div>

</div>

</div>

</div>

</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h5 class="card-header-text">Description About
Me</h5>
<button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
<i class="icofont icofont-edit"></i>
</button>
</div>
<div class="card-block user-desc">
<div class="view-desc">
<p>But I must explain to you how all this
mistaken idea of denouncing pleasure and
praising pain was born and I will give
you a complete account of the system,
and expound the actual teachings of the
great explorer of the truth, the
master-builder of human happiness. No
one rejects, dislikes, or avoids
pleasure itself, because it is pleasure,
but because those who do not know how to
pursue pleasure rationally encounter
consequences that are extremely painful.
Nor again is there anyone who loves or
pursues or desires to obtain pain of
itself, because it is pain, but because
occasionally circumstances occur in
which toil and pain can procure him some
great pleasure. To take a trivial
example, which of us ever undertakes
laborious physical exercise, except to
obtain some advantage from it? But who
has any right to find fault with a man
who chooses to enjoy a pleasure that has
no annoying consequences, or one who
avoids a pain that produces no resultant
pleasure?" "On the other hand, we
denounce with righteous indignation and
dislike men who are so beguiled and
demoralized by the charms of pleasure of
the moment, so blinded by desire, that
they cannot foresee the pain and trouble
that are bound to ensue; and equal blame
belongs to those who fail in their duty
through weakness of will, which is the
same as saying through shrinking from
toil and pain. These cases are perfectly
simple and easy to distinguish. In a
free hour, when our power of choice is
untrammelled and when nothing prevents
our being able To Do what we like best,
every pleasure is to be welcomed and
every pain avoided. But in certain
circumstances and owing to the claims of
duty or the obligations of business it
will frequently occur that pleasures
have to be repudiated and annoyances
accepted. The wise man therefore always
holds in these matters to this principle
of selection: he rejects pleasures to
secure other greater pleasures, or else
he endures pains to avoid worse pain.
</p>
</div>
<div class="edit-desc">
<div class="col-md-12">
<textarea id="description">
                                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?" "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able To Do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pain.</p>
                                                        </textarea>
</div>
<div class="text-center">
<a href="#!" class="btn btn-primary waves-effect waves-light m-r-20 m-t-20">Save</a>
<a href="#!" id="edit-cancel-btn" class="btn btn-default waves-effect m-t-20">Cancel</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<div class="tab-pane" id="binfo" role="tabpanel">

<div class="card">
<div class="card-header">
<h5 class="card-header-text">User Services</h5>
</div>
<div class="card-block">
<div class="row">
<div class="col-md-6">
<div class="card b-l-success business-info services m-b-20">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">
Shivani Hero</h5>
</a>
</div>
<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
</span>
<div class="dropdown-menu dropdown-menu-right b-none services-list">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
View</a>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<p class="task-detail">Lorem
ipsum dolor sit amet,
consectet ur adipisicing
elit, sed do eiusmod temp or
incidi dunt ut labore
et.Lorem ipsum dolor sit
amet, consecte.</p>
</div>

</div>

</div>

</div>
</div>
<div class="col-md-6">
<div class="card b-l-danger business-info services">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">
Dress and Sarees</h5>
</a>
</div>
<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
</span>
<div class="dropdown-menu dropdown-menu-right b-none services-list">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
View</a>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<p class="task-detail">Lorem
ipsum dolor sit amet,
consectet ur adipisicing
elit, sed do eiusmod temp or
incidi dunt ut labore
et.Lorem ipsum dolor sit
amet, consecte.</p>
</div>

</div>

</div>

</div>
</div>
<div class="col-md-6">
<div class="card b-l-info business-info services">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">
Shivani Auto Port</h5>
</a>
</div>
<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
</span>
<div class="dropdown-menu dropdown-menu-right b-none services-list">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
View</a>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<p class="task-detail">Lorem
ipsum dolor sit amet,
consectet ur adipisicing
elit, sed do eiusmod temp or
incidi dunt ut labore
et.Lorem ipsum dolor sit
amet, consecte.</p>
</div>

</div>

</div>

</div>
</div>
<div class="col-md-6">
<div class="card b-l-warning business-info services">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">
Hair stylist</h5>
</a>
</div>
<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
</span>
<div class="dropdown-menu dropdown-menu-right b-none services-list">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
View</a>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<p class="task-detail">Lorem
ipsum dolor sit amet,
consectet ur adipisicing
elit, sed do eiusmod temp or
incidi dunt ut labore
et.Lorem ipsum dolor sit
amet, consecte.</p>
</div>

</div>

</div>

</div>
</div>
<div class="col-md-6">
<div class="card b-l-danger business-info services">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">BMW
India</h5>
</a>
</div>
<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
</span>
<div class="dropdown-menu dropdown-menu-right b-none services-list">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
View</a>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<p class="task-detail">Lorem
ipsum dolor sit amet,
consectet ur adipisicing
elit, sed do eiusmod temp or
incidi dunt ut labore
et.Lorem ipsum dolor sit
amet, consecte.</p>
</div>

</div>

</div>

</div>
</div>
<div class="col-md-6">
<div class="card b-l-success business-info services">
<div class="card-header">
<div class="service-header">
<a href="#">
<h5 class="card-header-text">
Shivani Hero</h5>
</a>
</div>
<span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip">
</span>
<div class="dropdown-menu dropdown-menu-right b-none services-list">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>
Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>
Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>
View</a>
</div>
</div>
<div class="card-block">
<div class="row">
<div class="col-sm-12">
<p class="task-detail">Lorem
ipsum dolor sit amet,
consectet ur adipisicing
elit, sed do eiusmod temp or
incidi dunt ut labore
et.Lorem ipsum dolor sit
amet, consecte.</p>
</div>

</div>

</div>

</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<h5 class="card-header-text">Profit</h5>
</div>
<div class="card-block">
<div id="main" style="height:300px;width: 100%;"></div>
</div>
</div>
</div>
</div>

</div>


<div class="tab-pane" id="contacts" role="tabpanel">
<div class="row">
<div class="col-xl-3">

<div class="card">
<div class="card-header contact-user">
<img class="img-radius img-40" src="../files/assets/images/avatar-4.jpg" alt="contact-user">
<h5 class="m-l-10">John Doe</h5>
</div>
<div class="card-block">
<ul class="list-group list-contacts">
<li class="list-group-item active"><a href="#">All Contacts</a></li>
<li class="list-group-item"><a href="#">Recent Contacts</a></li>
<li class="list-group-item"><a href="#">Favourite Contacts</a></li>
</ul>
</div>
<div class="card-block groups-contact">
<h4>Groups</h4>
<ul class="list-group">
<li class="list-group-item justify-content-between">
Project
<span class="badge badge-primary badge-pill">30</span>
</li>
<li class="list-group-item justify-content-between">
Notes
<span class="badge badge-success badge-pill">20</span>
</li>
<li class="list-group-item justify-content-between">
Activity
<span class="badge badge-info badge-pill">100</span>
</li>
<li class="list-group-item justify-content-between">
Schedule
<span class="badge badge-danger badge-pill">50</span>
</li>
</ul>
</div>
</div>
<div class="card">
<div class="card-header">
<h4 class="card-title">Contacts<span class="f-15"> (100)</span></h4>
</div>
<div class="card-block">
<div class="connection-list">
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-1.jpg" alt="f-1" data-toggle="tooltip" data-placement="top" data-original-title="Airi Satou">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-2.jpg" alt="f-2" data-toggle="tooltip" data-placement="top" data-original-title="Angelica Ramos">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-3.jpg" alt="f-3" data-toggle="tooltip" data-placement="top" data-original-title="Ashton Cox">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-4.jpg" alt="f-4" data-toggle="tooltip" data-placement="top" data-original-title="Cara Stevens">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-5.jpg" alt="f-5" data-toggle="tooltip" data-placement="top" data-original-title="Garrett Winters">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-1.jpg" alt="f-6" data-toggle="tooltip" data-placement="top" data-original-title="Cedric Kelly">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-3.jpg" alt="f-7" data-toggle="tooltip" data-placement="top" data-original-title="Brielle Williamson">
</a>
<a href="#"><img class="img-fluid img-radius" src="../files/assets/images/user-profile/follower/f-5.jpg" alt="f-8" data-toggle="tooltip" data-placement="top" data-original-title="Jena Gaines">
</a>
</div>
</div>
</div>

</div>
<div class="col-xl-9">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">
<h5 class="card-header-text">Contacts
</h5>
</div>
<div class="card-block contact-details">
<div class="data_table_main table-responsive dt-responsive">
<table id="simpletable" class="table  table-striped table-bordered nowrap">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobileno.</th>
<th>Favourite</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9afbf8f9aba8a9dafdf7fbf3f6b4f9f5f7">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="debfbcbdefeced9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7011121341424330171d11191c5e131f1d">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cbaaa9a8faf9f88baca6aaa2a7e5a8a4a6">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="64050607555657240309050d084a070b09">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed8c8f8edcdfdead8a808c8481c38e8280">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5233303163606112353f333b3e7c313d3f">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a5b58590b08097a5d575b535614595557">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d9dadb898a8bf8dfd5d9d1d496dbd7d5">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="44252627757677042329252d286a272b29">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="eb8a8988dad9d8ab8c868a8287c5888486">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0766656436353447606a666e6b2964686a">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9e9d9ccecdccbf98929e9693d19c9092">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afcecdcc9e9d9cefc8c2cec6c381ccc0c2">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d9dadb898a8bf8dfd5d9d1d496dbd7d5">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f6979495c7c4c5b6919b979f9ad895999b">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6706050456555427000a060e0b4904080a">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3f5e5d5c0e0d0c7f58525e5653115c5052">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4f4c4d1f1c1d6e49434f4742004d4143">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed8c8f8edcdfdead8a808c8481c38e8280">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2041424311121360474d41494c0e434f4d">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94f5f6f7a5a6a7d4f3f9f5fdf8baf7fbf9">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed8c8f8edcdfdead8a808c8481c38e8280">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star-o" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1170737220232251767c70787d3f727e7c">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccadaeaffdfeff8caba1ada5a0e2afa3a1">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8cedeeefbdbebfccebe1ede5e0a2efe3e1">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="05646766343736456268646c692b666a68">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a7c6c5c4969594e7c0cac6cecb89c4c8ca">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1273707123202152757f737b7e3c717d7f">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6302010052515023040e020a0f4d000c0e">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b3a39386a69681b3c363a323775383436">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8c9cacb999a9be8cfc5c9c1c486cbc7c5">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3e3d3c6e6d6c1f38323e3633713c3032">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8aebe8e9bbb8b9caede7ebe3e6a4e9e5e7">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5f5c5d0f0c0d7e59535f5752105d5153">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b7a79782a29285b7c767a727735787476">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e6878485d7d4d5a6818b878f8ac885898b">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0667646537343546616b676f6a2865696b">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8decefeebcbfbecdeae0ece4e1a3eee2e0">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e6f6c6d3f3c3d4e69636f6762206d6163">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="34555657050607745359555d581a575b59">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="afcecdcc9e9d9cefc8c2cec6c381ccc0c2">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f4959697c5c6c7b49399959d98da979b99">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7617141547444536111b171f1a5815191b">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f3929190c2c1c0b3949e929a9fdd909c9e">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e3828180d2d1d0a3848e828a8fcd808c8e">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1071727321222350777d71797c3e737f7d">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4322212072717003242e222a2f6d202c2e">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e1e2e3b1b2b3c0e7ede1e9ecaee3efed">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abcac9c89a9998ebccc6cac2c785c8c4c6">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
<tr>
<td>Garrett Winters</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5736353466656417303a363e3b7934383a">[email&#160;protected]</a>
</td>
<td>9989988988</td>
<td><i class="fa fa-star" aria-hidden="true"></i>
</td>
<td class="dropdown">
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
<div class="dropdown-menu dropdown-menu-right b-none contact-menu">
<a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-eye"></i>Activity</a>
<a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
</div>
</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobileno.</th>
<th>Favourite</th>
<th>Action</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="review" role="tabpanel">
<div class="card">
<div class="card-header">
<h5 class="card-header-text">Review</h5>
</div>
<div class="card-block">
<ul class="media-list">
<li class="media">
<div class="media-left">
<a href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0">Cras sit amet nibh libero,
in gravida nulla. Nulla vel metus
scelerisque ante sollicitudin commodo.
Cras purus odio, vestibulum in vulputate
at, tempus viverra turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
<hr>

<div class="media mt-2">
<a class="media-left" href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
<div class="media-body">
<h6 class="media-heading">Larry
heading <span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0"> Cras sit amet nibh
libero, in gravida nulla. Nulla
vel metus scelerisque ante
sollicitudin commodo. Cras purus
odio, vestibulum in vulputate
at, tempus viverra turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
<hr>

<div class="media mt-2">
<div class="media-left">
<a href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h6 class="media-heading">
Colleen Hurst <span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0">Cras sit
amet nibh libero, in
gravida nulla. Nulla vel
metus scelerisque ante
sollicitudin commodo.
Cras purus odio,
vestibulum in vulputate
at, tempus viverra
turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
</div>
<hr>
</div>
</div>
</div>

<div class="media mt-2">
<div class="media-left">
<a href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h6 class="media-heading">Cedric
Kelly<span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0">Cras sit amet nibh
libero, in gravida nulla. Nulla
vel metus scelerisque ante
sollicitudin commodo. Cras purus
odio, vestibulum in vulputate
at, tempus viverra turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
<hr>
</div>
</div>
<div class="media mt-2">
<a class="media-left" href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
</a>
<div class="media-body">
<h6 class="media-heading">Larry
heading <span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0"> Cras sit amet nibh
libero, in gravida nulla. Nulla
vel metus scelerisque ante
sollicitudin commodo. Cras purus
odio, vestibulum in vulputate
at, tempus viverra turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
<hr>

<div class="media mt-2">
<div class="media-left">
<a href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h6 class="media-heading">
Colleen Hurst <span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0">Cras sit
amet nibh libero, in
gravida nulla. Nulla vel
metus scelerisque ante
sollicitudin commodo.
Cras purus odio,
vestibulum in vulputate
at, tempus viverra
turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
</div>
<hr>
</div>
</div>
</div>
<div class="media mt-2">
<div class="media-left">
<a href="#">
<img class="media-object img-radius comment-img" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</a>
</div>
<div class="media-body">
<h6 class="media-heading">Mark
Doe<span class="f-12 text-muted m-l-5">Just
now</span></h6>
<div class="stars-example-css review-star">
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
<i class="icofont icofont-star"></i>
</div>
<p class="m-b-0">Cras sit amet nibh
libero, in gravida nulla. Nulla
vel metus scelerisque ante
sollicitudin commodo. Cras purus
odio, vestibulum in vulputate
at, tempus viverra turpis.</p>
<div class="m-b-25">
<span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a>
</span>
</div>
<hr>
</div>
</div>
</div>
</li>
</ul>
<div class="input-group">
<input type="text" class="form-control" placeholder="Right addon">
<div class="input-group-append">
<span class="input-group-text"><i class="icofont icofont-send-mail"></i></span></div>
</div>
</div>
</div>
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
<script src="editor.js"></script>
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
