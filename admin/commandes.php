
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:31:03 GMT -->

<head>
    <title>Admindek | Admin Template</title>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"
        href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
        href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

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




            <?php
      if (isset($_POST['btn_submit'])) {
        extract($_POST);

        $ref_ville = htmlspecialchars($_POST['ref_ville']);
        $nom_com = htmlspecialchars($_POST['nom_com']);


        $check_query = "SELECT * FROM commune
            WHERE nom_com=:nom_com
           ";
        $statement = $db->prepare($check_query);
        $check_data = array(
          ':nom_com' => $nom_com

        );
        if ($statement->execute($check_data)) {
          if ($statement->rowCount() > 1) {
            echo "
                <script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'le pays existe deja!',
                         footer: ''
                          })
                  </script>
                ";
          } else {
            if ($statement->rowCount() == 0) {
              $reque = $db->prepare("INSERT INTO commune (nom_com,ref_ville) VALUES (:nom_com,:ref_ville) ");
              $result = $reque->execute(
                array(

                  'nom_com' => $nom_com,
                  'ref_ville' => $ref_ville

                )
              );
              if ($result) {
                echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Commune inserer avec success',
      showConfirmButton: false,
      timer: 1500
    })
     </script>
     ";
              } else {
                echo "<script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'commune non inserer !',
                         footer: ''
                          })
                  </script>";
              }
            }
          }
        }
      }



      ?>


            <?php
      if (isset($_POST['submit'])) {
        extract($_POST);
        $id_com = htmlspecialchars($_POST['id_com']);
        $statut = htmlspecialchars($_POST['satut']);
        $req = $db->prepare("CALL country_hos(:satut,:id_com)");
        $res = $req->execute(
          array(
            'satut' => $statut,
            'id_com' => $id_com
          )
        );
        if ($res) {
          echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'etat modifier avec success',
      showConfirmButton: false,
      timer: 1500
    })
     </script>
     ";
        } else {
          echo "<script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'province non modifier !',
                         footer: ''
                          })
                  </script>";
        }


      }



      ?>






            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php include 'partials/_menu.php' ?>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-4">
                                    <div class="page-header-title">
                                        <i class="feather icon-inbox bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Commandes</h5>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 ">
                                    <div class="page-header-breadcrumb ">
                                        <form action="rapport.php" method="get">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="date" value="" class="form-control" name="date1">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="date" value="" class="form-control" name="date2">
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary waves-effect"><i
                                                            class="feather icon-printer"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>Material Tab</h5>
                                    </div>
                                    <div class="card-block">

                                        <div class="row m-b-30">
                                            <div class="col-lg-12 col-xl-12">
                                                <div class="sub-title">Default</div>

                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home3"
                                                            role="tab">Tenant lieu</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile3"
                                                            role="tab">CPGL</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#messages3"
                                                            role="tab">Demande de visa</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings3"
                                                            role="tab">Settings</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>

                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="home3" role="tabpanel">
                                                        <p class="m-0">



                                                        <div class="card-block">
                                                            <div class="table-responsive dt-responsive">
                                                                <table id="dom-jqry"
                                                                    class="table table-striped table-bordered nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Num</th>
                                                                            <th>Nom du client</th>
                                                                            <th>Nom du document</th>
                                                                            <th>Date creation</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $requete = $db->query("SELECT * FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_d=type_doc.id_doc Where type_d=10");
                              while ($g = $requete->fetch()) {
                                ?>
                                                                        <div class="modal fade"
                                                                            id="large-Modal<?= $g['id_com']; ?>"
                                                                            tabindex="-1" role="dialog">
                                                                            <div class="modal-dialog modal-lg"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Modifier
                                                                                            le statut de la commande
                                                                                        </h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="" method="post">
                                                                                            <input type="hidden"
                                                                                                name="id_com"
                                                                                                value="<?= $g['id_com']; ?>">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <select
                                                                                                        class="form-control"
                                                                                                        name="satut"
                                                                                                        id="">
                                                                                                        <option
                                                                                                            value="0">En
                                                                                                            cours
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="1">
                                                                                                            Accepter
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2">
                                                                                                            Refuser
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-2">

                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <?php if ($g['status'] == 0): ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-primary">En
                                                                                                            cours</span>
                                                                                                    </p>
                                                                                                    <?php elseif ($g['status'] == 1): ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-success">Accepter</span>
                                                                                                    </p>
                                                                                                    <?php else: ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-danger">Refuser</span>
                                                                                                    </p>
                                                                                                    <?php endif ?>

                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-danger waves-effect "
                                                                                            data-dismiss="modal">Fermer</button>
                                                                                        <button type="submit"
                                                                                            name="submit"
                                                                                            class="btn btn-success waves-effect waves-light ">Confirmer</button>
                                                                                    </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <tr>
                                                                            <td>
                                                                                <?= $g['id_com']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['noms']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['nom_doc']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['created_com']; ?>
                                                                            </td>


                                                                            <td>
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect"
                                                                                    data-toggle="modal"
                                                                                    data-target="#large-Modal<?= $g['id_com']; ?>"><i
                                                                                        class="feather icon-check"></i></button>
                                                                                <a class="btn btn-primary waves-effect"
                                                                                    href="pcard?id_com=<?= $g['id_com']; ?>"
                                                                                    target="_top"><i
                                                                                        class="feather icon-printer"></i></a>


                                                                            </td>



                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>



                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="profile3" role="tabpanel">
                                                        <p class="m-0">

                                                        <div class="card-block">
                                                            <div class="table-responsive dt-responsive">
                                                                <table id="dom-jqry"
                                                                    class="table table-striped table-bordered nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Num</th>
                                                                            <th>Nom du client</th>
                                                                            <th>Nom du document</th>
                                                                            <th>Date creation</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $requete = $db->query("SELECT * FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_d=type_doc.id_doc WHERE type_d=11");
                              while ($g = $requete->fetch()) {
                                ?>
                                                                        <div class="modal fade"
                                                                            id="large-Modal<?= $g['id_com']; ?>"
                                                                            tabindex="-1" role="dialog">
                                                                            <div class="modal-dialog modal-lg"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Modifier
                                                                                            le statut de la commande
                                                                                        </h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="" method="post">
                                                                                            <input type="hidden"
                                                                                                name="id_com"
                                                                                                value="<?= $g['id_com']; ?>">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <select
                                                                                                        class="form-control"
                                                                                                        name="satut"
                                                                                                        id="">
                                                                                                        <option
                                                                                                            value="0">En
                                                                                                            cours
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="1">
                                                                                                            Accepter
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2">
                                                                                                            Refuser
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-2">

                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <?php if ($g['status'] == 0): ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-primary">En
                                                                                                            cours</span>
                                                                                                    </p>
                                                                                                    <?php elseif ($g['status'] == 1): ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-success">Accepter</span>
                                                                                                    </p>
                                                                                                    <?php else: ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-danger">Refuser</span>
                                                                                                    </p>
                                                                                                    <?php endif ?>

                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">


                                                                                        <button type="button"
                                                                                            class="btn btn-danger waves-effect "
                                                                                            data-dismiss="modal">Fermer</button>
                                                                                        <button type="submit"
                                                                                            name="submit"
                                                                                            class="btn btn-success waves-effect waves-light ">Confirmer</button>
                                                                                    </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <tr>
                                                                            <td>
                                                                                <?= $g['id_com']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['noms']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['nom_doc']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['created_com']; ?>
                                                                            </td>


                                                                            <td>
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect"
                                                                                    data-toggle="modal"
                                                                                    data-target="#large-Modal<?= $g['id_com']; ?>"><i
                                                                                        class="feather icon-check"></i></button>
                                                                                <a class="btn btn-primary waves-effect"
                                                                                    href="cpgl?id_com=<?= $g['id_com']; ?>"
                                                                                    target="_top"><i
                                                                                        class="feather icon-printer"></i></a>


                                                                            </td>



                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>



                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="messages3" role="tabpanel">
                                                        <p class="m-0">
                                                        <div class="card-block">
                                                            <div class="table-responsive dt-responsive">
                                                                <table id="dom-jqry"
                                                                    class="table table-striped table-bordered nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Num</th>
                                                                            <th>Nom du client</th>
                                                                            <th>Nom du document</th>
                                                                            <th>Date creation</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $requete = $db->query("SELECT * FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_d=type_doc.id_doc WHERE type_d=12");
                              while ($g = $requete->fetch()) {
                                ?>
                                                                        <div class="modal fade"
                                                                            id="large-Modal<?= $g['id_com']; ?>"
                                                                            tabindex="-1" role="dialog">
                                                                            <div class="modal-dialog modal-lg"
                                                                                role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Modifier
                                                                                            le statut de la commande
                                                                                        </h4>
                                                                                        <button type="button"
                                                                                            class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-label="Close">
                                                                                            <span
                                                                                                aria-hidden="true">&times;</span>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="" method="post">
                                                                                            <input type="hidden"
                                                                                                name="id_com"
                                                                                                value="<?= $g['id_com']; ?>">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <select
                                                                                                        class="form-control"
                                                                                                        name="satut"
                                                                                                        id="">
                                                                                                        <option
                                                                                                            value="0">En
                                                                                                            cours
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="1">
                                                                                                            Accepter
                                                                                                        </option>
                                                                                                        <option
                                                                                                            value="2">
                                                                                                            Refuser
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-2">

                                                                                                </div>
                                                                                                <div class="col-md-4">
                                                                                                    <?php if ($g['status'] == 0): ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-primary">En
                                                                                                            cours</span>
                                                                                                    </p>
                                                                                                    <?php elseif ($g['status'] == 1): ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-success">Accepter</span>
                                                                                                    </p>
                                                                                                    <?php else: ?>
                                                                                                    <p class="mr-5">Etat
                                                                                                        Actuel : <span
                                                                                                            class="badge badge-danger">Refuser</span>
                                                                                                    </p>
                                                                                                    <?php endif ?>

                                                                                                </div>
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">


                                                                                        <button type="button"
                                                                                            class="btn btn-danger waves-effect "
                                                                                            data-dismiss="modal">Fermer</button>
                                                                                        <button type="submit"
                                                                                            name="submit"
                                                                                            class="btn btn-success waves-effect waves-light ">Confirmer</button>
                                                                                    </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <tr>
                                                                            <td>
                                                                                <?= $g['id_com']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['noms']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['nom_doc']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $g['created_com']; ?>
                                                                            </td>


                                                                            <td>
                                                                                <button type="button"
                                                                                    class="btn btn-success waves-effect"
                                                                                    data-toggle="modal"
                                                                                    data-target="#large-Modal<?= $g['id_com']; ?>"><i
                                                                                        class="feather icon-check"></i></button>
                                                                                <a class="btn btn-primary waves-effect"
                                                                                    href="visa?id_com=<?= $g['id_com']; ?>"><i
                                                                                        class="feather icon-printer"></i></a>


                                                                            </td>



                                                                        </tr>
                                                                        <?php } ?>
                                                                    </tbody>

                                                                </table>
                                                            </div>
                                                        </div>
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane" id="settings3" role="tabpanel">
                                                        <p class="m-0">4.Cras consequat in enim ut efficitur. Nulla
                                                            posuere elit quis auctor interdum praesent sit amet nulla
                                                            vel enim amet. Donec convallis tellus neque, et imperdiet
                                                            felis amet.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pcoded-inner-content">

                                            <div class="main-body">
                                                <div class="page-wrapper">

                                                    <div class="page-body">

                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5>DOM/Jquery</h5>


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
                    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js">
                    </script>
                    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
                    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js">
                    </script>

                    <script src="../files/assets/pages/waves/js/waves.min.js"></script>

                    <script type="text/javascript"
                        src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

                    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
                    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js">
                    </script>

                    <script src="../files/assets/pages/waves/js/waves.min.js"></script>

                    <script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js">
                    </script>
                    <script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
                    <script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
                    <script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
                    <script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
                    <script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
                    <script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js">
                    </script>
                    <script
                        src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js">
                    </script>

                    <script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
                    <script src="../files/assets/js/pcoded.min.js"></script>
                    <script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
                    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
                    <script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:31:03 GMT -->

</html>