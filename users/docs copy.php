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
  <title>Tableau de board client</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
  <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
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

              $reque = $db->prepare("INSERT INTO commande (ref_client,type_doc,expire_date) VALUES (:ref_client,:type_doc,'') ");

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
                          <form action="" method="post">
                            <div class="card-block">
                              <div class="row">


                                <?php $requete = $db->query("SELECT * FROM type_doc");
                                while ($g = $requete->fetch()) {
                                ?>

                                  <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                      <div class="card-header">
                                        <h5>Non du document :
                                          <?= $g['nom_doc']; ?>
                                        </h5>
                                        <input type="hidden" name="type_doc" value="<?= $g['id_doc']; ?>">
                                      </div>
                                      <div class="card-block">
                                        <h5>Montant :
                                          <?= $g['montant']; ?> $
                                        </h5>
                                        <h5>Durer :
                                          <?= $g['dure']; ?> Jours
                                        </h5>
                                      </div>
                                      <div class="card-footer">
                                        <input type="submit" name="submit" class="btn btn-primary btn-round waves-effect waves-light" value="Commander">
                                       

                                      </div>
                                    </div>
                                  </div>


                                <?php } ?>


                              </div>
                            </div>
                          </form>
                          <form action="https://marchand.maishapay.online/payment/vers1.0/merchant/checkout" method="POST">
                                          <input type="hidden" name="gatewayMode" value=0>
                                          <input type="hidden" name="publicApiKey" value="MP-SBPK-eA/ftkZrJbR9E02cHE$vRoNo2ecG.v.scqGuDEufM2mU32pFLBkY7XceNYO/HMhLBR$5$Q0m1J1S2wV$3i3T5e$W9v1UxryyHW8yFszGTageaJtqt0SaHB$0">
                                          <input type="hidden" name="secretApiKey" value="MP-SBPK-0x5z5P1gKCbQELxGDY8kEMSQu0q1.Ijt0$O2NBx0knlNRZF3RRoyj$jqOgF$9vgEVWdF5ePlveO2auSQCdrxHj$sbW$sLJ2piVy6q9tRyA8B3lk9wB8o$s2I">
                                          <div class="row mb-3">
                                            <div class="col-sm-10">

                                              <input type="hidden" name="montant" class="form-control" value="<?= $g['montant']; ?>" required>
                                            </div>
                                          </div>
                                          <input type="hidden" name="devise" value="FC">
                                          <div class="row mb-3">
                                            <div class="col-sm-10">
                                              <input type="submit" name="submit" class="btn btn-primary btn-round" value="Payer        ">
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