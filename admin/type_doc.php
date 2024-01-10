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

            $nom_doc = htmlspecialchars($_POST['nom_doc']);
            $montant = htmlspecialchars($_POST['montant']);
            $dure = htmlspecialchars($_POST['dure']);


            $check_query = "SELECT * FROM type_doc
            WHERE nom_doc=:nom_doc
           ";
            $statement = $db->prepare($check_query);
            $check_data = array(
               ':nom_doc' => $nom_doc

            );
            if ($statement->execute($check_data)) {
               if ($statement->rowCount() > 1) {
                  echo "
                <script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'le document existe deja!',
                         footer: ''
                          })
                  </script>
                ";
               } else {
                  if ($statement->rowCount() == 0) {



                     $reque = $db->prepare("INSERT INTO type_doc (nom_doc,dure,montant) VALUES (:nom_doc,:dure,:montant) ");

                     $result = $reque->execute(
                        array(

                           'nom_doc' => $nom_doc,
                           'dure' => $dure,
                           'montant' => $montant

                        )
                     );
                     if ($result) {
                        echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Type inserer avec success',
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
                      text: 'Type non inserer !',
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
            $id_doc = htmlspecialchars($_POST['id_doc']);
            $nom_doc = htmlspecialchars($_POST['nom_doc']);
            $montant = htmlspecialchars($_POST['montant']);


            $check_query = "SELECT * FROM type_doc 
            WHERE nom_doc=:nom_doc
           ";
            $statement = $db->prepare($check_query);
            $check_data = array(
               ':nom_doc' => $nom_doc

            );
            if ($statement->execute($check_data)) {
               if ($statement->rowCount() > 1) {
                  echo "
                <script>
                         Swal.fire({
                          icon: 'error',
                           title: 'Oops...',
                      text: 'le document existe deja!',
                         footer: ''
                          })
                  </script>
                ";
               } else {
                  if ($statement->rowCount() == 0) {



                     $req = $db->prepare("UPDATE type_doc SET nom_doc=:nom_doc,montant=:montant,dure=:dure WHERE id_doc=:id_doc");

                     $res = $req->execute(
                        array(
                           'id_doc' => htmlspecialchars($_POST['id_doc']),
                           'nom_doc' => htmlspecialchars($_POST['nom_doc']),
                           'montant' => htmlspecialchars($_POST['montant']),
                           'dure' => htmlspecialchars($_POST['dure'])

                        )
                     );
                     if ($res) {
                        echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Type document modifier avec success',
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
                      text: 'type document non modifier !',
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
         if (isset($_POST['supp'])) {
            extract($_POST);
            $id_doc = htmlspecialchars($_POST['id_doc']);



            $rep = $db->prepare("DELETE FROM type_doc WHERE id_doc=:id_doc");

            $res = $rep->execute(
               array(
                  'id_doc' => htmlspecialchars($_POST['id_doc'])

               )
            );
            if ($res) {
               echo "
     <script>
     Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Document supprimer avec success',
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
                      text: 'Commune non supprimer !',
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
                        <div class="col-lg-8">
                           <div class="page-header-title">
                              <i class="feather icon-inbox bg-c-blue"></i>
                              <div class="d-inline">
                                 <h5>Advanced DataTable</h5>
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
                                 <li class="breadcrumb-item"><a href="#!">Data Table</a>
                                 </li>
                                 <li class="breadcrumb-item"><a href="#!">Advanced Initialization</a>
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

                              <div class="card">
                                 <div class="card-header">
                                    <h5>DOM/Jquery</h5>
                                    <span>Events assigned to the table can be exceptionally useful for user interaction,
                                       however you must be aware that DataTables will add and remove rows from the DOM
                                       as they are needed (i.e. when paging only the visible elements are actually
                                       available in the DOM). As such, this can lead to the odd hiccup when working with
                                       events.</span>
                                    <div class="col" align="right">

                                       <button type="button" class="btn btn-success waves-effect" data-toggle="modal"
                                          data-target="#large-Modal"><i class="fa fa-plus"></i> Nouveau </button></li>
                                       </p>
                                    </div>
                                 </div>
                                 <div class="card-block">
                                    <div class="table-responsive dt-responsive">
                                       <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                          <thead>
                                             <tr>
                                                <th>Num</th>
                                                <th>Nom du document</th>
                                                <th>Durée</th>
                                                <th>Montant</th>
                                                <th>Date creation</th>
                                                <th>Action</th>



                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php $requete = $db->query("SELECT * FROM type_doc");
                                             while ($g = $requete->fetch()) {
                                                ?>
                                                <div class="modal fade" id="large-Modal<?= $g['id_doc']; ?>" tabindex="-1"
                                                   role="dialog">
                                                   <div class="modal-dialog modal-lg" role="document">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title">Modifier le document
                                                               <?= $g['nom_doc']; ?>
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                               aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                            </button>
                                                         </div>
                                                         <div class="modal-body">
                                                            <form action="" method="post">
                                                               <input type="hidden" name="id_doc"
                                                                  value="<?= $g['id_doc']; ?>">

                                                               <div class="row">
                                                                  <div class="col-md-6">
                                                                     <input class="form-control form-control-round"
                                                                        name="nom_doc" type="text"
                                                                        value="<?= $g['nom_doc']; ?>"
                                                                        placeholder="Nom du document" required>
                                                                  </div>
                                                                  <div class="col-md-4">
                                                                     <input class="form-control form-control-round"
                                                                        name="dure" type="text"
                                                                        value="<?= $g['dure']; ?> Jours"
                                                                        placeholder="Nom du document" required>
                                                                  </div>
                                                                  <div class="col-md-2">
                                                                     <input class="form-control form-control-round"
                                                                        name="montant" type="text"
                                                                        value="<?= $g['montant']; ?> $"
                                                                        placeholder="Nom du document" required>
                                                                  </div>


                                                               </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect "
                                                               data-dismiss="modal">Fermer</button>
                                                            <button type="submit" name="submit"
                                                               class="btn btn-success waves-effect waves-light ">Modifier</button>
                                                         </div>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>



                                                <div class="modal fade" id="large-Mod<?= $g['id_doc']; ?>" tabindex="-1"
                                                   role="dialog">
                                                   <div class="modal-dialog modal-lg" role="document">
                                                      <div class="modal-content">
                                                         <div class="modal-header">
                                                            <h4 class="modal-title">Suppression de
                                                               <?= $g['nom_doc']; ?>
                                                            </h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                               aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                            </button>
                                                         </div>
                                                         <div class="modal-body">
                                                            <form action="" method="post">
                                                               <input type="hidden" name="id_doc"
                                                                  value="<?= $g['id_doc']; ?>">

                                                               <div class="row">
                                                                  <div class="col-md-6">
                                                                     <p>Etes vous sur de vouloir supprimer
                                                                        <?= $g['nom_doc']; ?> ?
                                                                     </p>
                                                                  </div>



                                                               </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect "
                                                               data-dismiss="modal">Fermer</button>
                                                            <button type="submit" name="supp"
                                                               class="btn btn-success waves-effect waves-light ">Continuer</button>
                                                         </div>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>



                                                <tr>
                                                   <td>
                                                      <?= $g['id_doc']; ?>
                                                   </td>
                                                   <td>
                                                      <?= $g['nom_doc']; ?>
                                                   </td>
                                                   <td>
                                                      <?= $g['dure']; ?> Jours
                                                   </td>
                                                   <td>
                                                      <?= $g['montant']; ?> fc
                                                   </td>
                                                   <td>
                                                      <?= $g['created_type']; ?>
                                                   </td>


                                                   <td>
                                                      <button type="button" class="btn btn-warning waves-effect"
                                                         data-toggle="modal"
                                                         data-target="#large-Modal<?= $g['id_doc']; ?>"><i
                                                            class="feather icon-edit"></i></button>
                                                      <button type="button" class="btn btn-danger waves-effect"
                                                         data-toggle="modal"
                                                         data-target="#large-Mod<?= $g['id_doc']; ?>"><i
                                                            class="feather icon-trash"></i></button>
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

                     <div id="styleSelector">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>



   <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Nouveau Type</h4>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="" method="post">

                  <div class="row">
                     <div class="col-md-6">
                        <input class="form-control form-control-round" name="nom_doc" type="text"
                           placeholder="Nom du document" required>
                     </div>
                     <div class="col-md-4">
                        <input class="form-control form-control-round" name="dure" type="number" placeholder="Dureer"
                           required>
                     </div>
                     <div class="col-md-2">
                        <input class="form-control form-control-round" name="montant" type="number"
                           placeholder="Montant" required>
                     </div>

                     <br>
                     <br>


                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Fermer</button>
               <button type="submit" name="btn_submit"
                  class="btn btn-success waves-effect waves-light ">Enregistrer</button>
            </div>
            </form>
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

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Aug 2023 13:31:03 GMT -->

</html>