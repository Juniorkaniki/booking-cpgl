<?php include '../config/base.php'; ?>
<?php 

    $date1 = $_GET['date1'];
    $date2 = $_GET['date2'];

    $requete = $db->query("SELECT * FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_doc=type_doc.id_doc WHERE DATE_FORMAT(created_com, '%Y-%m-%d') BETWEEN '$date1' AND '$date2';");
    
?>
<?php 

$date1 = $_GET['date1'];
$date2 = $_GET['date2'];

$req = $db->query("SELECT montant, SUM(montant) AS montant FROM commande inner join client on ref_client = client.id_client inner join type_doc on commande.type_doc=type_doc.id_doc WHERE DATE_FORMAT(created_com, '%Y-%m-%d') BETWEEN '$date1' AND '$date2';");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body onload="window.print(); window.close();">
<div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <h1 style="padding-left:20px;font-family: 'Brush Script MT', cursive;" class="text-primary text-center">
          AMBASADE DE LA REPUBLIQUE</h1>
        <h1 style="padding-left:20px;font-family: 'Brush Script MT', cursive;" class="text-primary text-center">
          DEMOCRATIQUE DU CONGO</h1>
          <h1 style="padding-left:30px;font-family: 'Comforta' " class="text-primary text-center">
          LISTE DE COMMANDES JOURNALIERS</h1>

      </div>
      <div class="col-md-2">
        <img width="115px;" ; style="padding-left:90px;" src="img/dddd.PNG" alt="">
      </div>
    </div>
<div class="row">
    <div class="col-md-8">
        <th>Du : <?= $date1 ?> </th>
        <th>Au : <?= $date2 ?></th>
    </div>

</div>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMS CLIENT</th>
            <th>TYPE DOCUMENT</th>
            <th>DUREE</th>
            <th>MONTANT</th>
            <th>DATE COMMANDE</th>
        </tr>

    </thead>
    <tbody>
        <?php while ($g = $requete->fetch()) { 
            
            $total = 0;
            $total += $g['montant'];
            
            ?>
            <tr>
                    <td><?= $g['id_com'] ?></td>
                    <td><?= $g['noms'] ?></td>
                    <td><?= $g['nom_doc'] ?></td>
                    <td><?= $g['dure'] ?> Jours</td>
                    <td><?= $g['montant'] ?></td>
                    
                    <td><?= $g['created_com'] ?></td>

                    

            </tr>
        <?php }?>

        <?php while ($gal = $req->fetch()) { 
            
            
            
            ?>
            <tr>
                <td>Total</td>
                <td></td>
                <td></td>
                <td></td>
                   
                    <td><?= $gal['montant'] ?></td>
                    
                    

                    

            </tr>
        <?php }?>

        
    
    </tbody>
</table>
    
</body>
</html>