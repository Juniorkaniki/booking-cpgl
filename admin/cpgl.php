<?php include'../config/base.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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



  <div class="container pm-certificate-container">
    <div class="outer-border"></div>
    <div class="inner-border"></div>
    
    <div class="pm-certificate-border col-xs-12">
    

      <div class="row pm-certificate-header">
      <h3 style="font-family: cursive;text-align:center;font-size: 25px;">AUTORISATION SPECIALE DE CIRCULATION C.E.P.G.L</h3>
      </div>
      

      <div class="row pm-certificate-body">

      
            <img style="width:70px;" src="img/af.jpg" alt="">
         
          
       
            <img style="width:100px;margin-left:580px;margin-top:-100px;" src="img/arm.png" alt="">
       
        
        <div style="margin-top: -70px;" class="pm-certificate-block">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2">Nom, post nom et prenom</div>
                <div class="pm-certificate-name underline margin-0 col-xs-8 text-center">
                  <span class="pm-name-text bold"><?=ucwords($carte->noms); ?> </span>
                </div>
                <div class="col-xs-2"></div>
              </div>
            </div>   
                   

            <div class="col-xs-12">
              <div class="row">
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="pm-earned col-xs-8 text-center">
                  <span class="pm-name-text bold">Date et lieur de naissnace : <?=ucwords($carte->lieu); ?> <?=ucwords($carte->date_naiss); ?> </span> <br>
                  <span class="pm-name-text bold">Nationnalite : Congolaise </span> <br>
                  <span class="pm-name-text bold">Proffesion : <?=ucwords($carte->proffession); ?></span> <br>
                  <span class="pm-name-text bold">Adresse : <?=ucwords($carte->lieu); ?> <?=ucwords($carte->date_naiss); ?> </span> <br>
                  <span class="pm-credits-text block bold sans">Delivrer le <?=ucwords($carte->created_com); ?> Expirer le <?=ucwords($carte->expire_date); ?> </span>
                  <span class="pm-name-text bold">LE DIRECTEUR GENERALE </span>
                  <!-- <img width="70px;" ;style="margin-left:400px;" ; src="../prof/<?= $carte->photo; ?>" alt=""> -->
            <img style="width:70px;margin-left:580px;margin-top:-100px;" src="../prof/<?= $carte->photo; ?>" alt="">

                  
                </div>
                <div class="col-xs-2"><!-- LEAVE EMPTY --></div>
                <div class="col-xs-12"></div>
                <h3 style="font-family: cursive;text-align:center;">AUTORISATION SPECIALE DE CIRCULATION C.E.P.G.L</h3>
              </div>
            </div>
            
           

        </div>       
        
      

      </div>

    </div>
  </div>
  <script>
  var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

style.type = 'text/css';
style.media = 'print';

if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);

window.print();


  </script>
</body>
</html>