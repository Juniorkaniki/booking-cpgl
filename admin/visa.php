<?php include '../config/base.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title></title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="card.css">
  <style type="text/css">
    body {
      display: flex;
    }

    @media (orientation: landscape) {
      body {
        flex-direction: row;

      }
    }
  </style>

</head>


<body onload="window.print(); window.close();">


  <?php


  $id_com = $_GET['id_com'];
  // $req = $db->prepare('');
  // $req->execute(array($id_card));
  

  $card = $db->prepare("SELECT * FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_doc=type_doc.id_doc WHERE id_com=:id_com");
  $card->execute([
    'id_com' => $id_com
  ]);
  $carte = $card->fetch(PDO::FETCH_OBJ);


  ?>

  <div>



    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <h1 style="padding-left:110px;font-family: 'Brush Script MT', cursive;" class="text-primary text-center">
          AMBASADE DE LA REPUBLIQUE</h1>
        <h1 style="padding-left:110px;font-family: 'Brush Script MT', cursive;" class="text-primary text-center">
          DEMOCRATIQUE DU CONGO</h1>

      </div>
      <div class="col-md-2">
        <img width="115px;" ; style="padding-left:90px;" src="img/dddd.PNG" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <img width="100px;" src="img/arm.png" alt="">
          <h3 class="text-primary" style="padding-left:80px;">Laisser passer tenant lieu du passeport</h3>
          <hr>
        </div>

      </div>
    </div>


    <div class="row">
      <div class="col-md-6 offset-2">


        <h3 style="padding-left:80px;text-align:left;"> Nom complet : <?= ucwords($carte->noms); ?></h3>
        <h3 style="padding-left:80px;text-align:left;"> Date & lieu de naissance :
          <?= ucwords($carte->date_naiss); ?>,<?= ucwords($carte->lieu); ?></h3>
        <h3 style="padding-left:80px;text-align:left;"> Etat civil : <?= ucwords($carte->etat_civil); ?></h3>
        <h3 style="padding-left:80px;text-align:Left;"> Proffession : <?= ucwords($carte->proffession); ?></h3>

        <h3 style="padding-left:80px;text-align:left;"> Nom du pere : <?= ucwords($carte->nom_pere); ?></h3>
        <h3 style="padding-left:80px;text-align:left;"> Nom de la mere : <?= ucwords($carte->nom_mere); ?></h3>

        <h3 style="padding-left:80px;text-align:left;"> Province d'origine : <?= ucwords($carte->province_org); ?></h3>
        <h3 style="padding-left:80px;text-align:left;"> Teritoire d'origine: <?= ucwords($carte->teritoire_org); ?></h3>
        <h3 style="padding-left:80px;text-align:left;"> Date d'expiration: <?= ucwords($carte->expire_date); ?></h3>



        <h3 style="padding-left:130px;text-align:right;"> Fait a Goma le <?= ucwords($carte->created_com); ?></h3>


      </div>
      <div class="col-md-2">
        <img width="200px;" ; style="padding-left:80px;" ; src="img/1.png" alt="">
        <img width="200px;" ;style="padding-left:80px;" ; src="../prof/<?= $carte->photo; ?>" alt="">

      </div>

    </div>


  </div>

</body>

</html>