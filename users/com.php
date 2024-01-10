<?php
require '../conn.php';
session_start();

if (!isset($_SESSION['user'])) {
  header('location:../login');
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>DGM</title>

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

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="../files/assets/pages/jqpagination/jqpagination.css">

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
      if (isset($_POST['submit'])) {
        extract($_POST);

        $type_doc = htmlspecialchars($_POST['type_doc']);
        $ref_client = $_SESSION['user'];


        $check_query = "SELECT * FROM commande 
            WHERE type_doc=:type_doc AND ref_client=:ref_client
           ";
        $statement = $db->prepare($check_query);
        $check_data = array(
          ':type_doc' => $type_doc,
          ':ref_client' => $ref_client

        );
        if ($statement->execute($check_data)) {
          if ($statement->rowCount() > 1) {
            echo "
                <script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'vous avez deja commander!',
                         footer: ''
                          })
                  </script>
                ";
          } else {
            if ($statement->rowCount() == 0) {



              $reque = $db->prepare("INSERT INTO commande (ref_client,type_doc) VALUES (:ref_client,:type_doc) ");

              $result = $reque->execute(
                array(

                  'ref_client' => $_SESSION['user'],
                  'type_doc' => $type_doc

                )
              );
              if ($result) {
                echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Commande inserer avec success',
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
                      text: 'Commande non inserer !',
                         footer: ''
                          })
                  </script>";
              }
            }
          }
        }
      }



      ?>



            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <?php include 'partials/_menu.php' ?>

                    <div class="pcoded-content">

                        <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="feather icon-box bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Other</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="../index.html"><i class="feather icon-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Components</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!">Other</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Documents disponibles</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive dt-responsive">
                                                            <table id="dom-jqry"
                                                                class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nom du document</th>
                                                                        <th>Satus</th>
                                                                        <th>Date creation</th>
                                                                        <th>Date expiration</th>
                                                                        <th>Passe une autre commande</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                  $id_ch = $_SESSION['user'];

                                  $requete = $db->query("SELECT * FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_doc=type_doc.id_doc WHERE ref_client = $id_ch");
                                  while ($g = $requete->fetch()) {
                                    $dateDuJour = date('Y-m-d');
                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?= $g['nom_doc']; ?> </br>

                                                                            duree :
                                                                            <?= $g['dure']; ?> </br>
                                                                            montant :
                                                                            <?= $g['montant']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($g['expire_date'] <= $dateDuJour):?>
                                                                            <span class="badge badge-danger">
                                                                                expirée</span>
                                                                            <?php elseif ($g['status'] == 0): ?>
                                                                            <span class="badge badge-primary">En
                                                                                cours</span>
                                                                            <?php elseif ($g['status'] == 1):?>
                                                                            <span
                                                                                class="badge badge-success">Accepter</span>
                                                                            <?php else :?>
                                                                            <span
                                                                                class="badge badge-danger">Refuser</span>
                                                                            <?php endif ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $g['created_com']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?= $g['expire_date']; ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php if ($g['expire_date'] <= $dateDuJour):?>
                                                                            <a href="docs"
                                                                                class="btn btn-primary btn-sm">Commander</a>
                                                                            <?php elseif ($g['status'] == 0): ?>
                                                                            <button type="button" id="myButton"
                                                                                disabled>Commander</button>

                                                                            <?php elseif ($g['status'] == 1):?>

                                                                            <button type="button" id="myButton"
                                                                                disabled>Commander</button>


                                                                            <?php else :?>

                                                                            <a href="docs"
                                                                                class="btn btn-primary btn-sm">Commander</a>
                                                                            <?php endif ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                </tbody>

                                                            </table>
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





    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

    <script src="../files/assets/pages/waves/js/waves.min.js"></script>

    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script type="text/javascript" src="../files/assets/pages/jqpagination/jquery.jqpagination.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
    $('.pagination').jqPagination({
        paged: function(page) {
            // do something with the page variable
        }
    });
    </script>

    <script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>


</html>