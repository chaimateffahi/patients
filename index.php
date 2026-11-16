<?php
require_once"config.php";
require_once"fonctions.php";
$patient[["id" =>1,"nom"=>"Benali Sara" , "age"=>70 ,"code_service"=>"CARDIO" , "code d'urgence"=>"urgence absolue" , "facture estimé"=>60 ]; 
   ["id" =>2 ,"nom"=>"Trabelsi Ahmed" , "age"=>45  ,"code_service"=>"DERMA" , "code d'urgence"=>"urgence relative","facture estimé"=>50]; 
   ["id" =>3 ,"nom"=>Jlassi Amina , "age"=> 8 ,"code_service"=>"PEDIATRIE" , "code d'urgence"=>"consultation standard" ,"facture estimé"=>50  ]; 
   ["id" =>4,"nom"=>Ayari Karim , "age"=>68  ,"code_service"=>"CARDIO" , "code d'urgence"=>"consultation standard","facture estimé"=>60  ] ;]
   $urgence = filtreUrgences( $patient);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($patient as $p): ?>
 <?php 
 $badge = getBadgeService($p['code_service']);
 $niveau= getLibelleUrgence($p['code d'urgence']);
 $facture=calculerFacture($p['facture estimé'],TARIF_BASE_CONSULTATION);
 ?>
 <div classe=carte>
<?php endforeach; ?>

    
</body>
</html>