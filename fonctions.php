<?php
function calculerFacture(int $age,float $tarifbase): float
{
     $total =  $tarifbase*
    if ($age > 65) {
        $total = $total * 1.20;
    }

    return $total;
}
function getBadgeService( string $code): array
{
     switch ($code) {
        case 'CARDIO':
            return ['libelle' => 'cardiologue', 'classe' => 'badge-cardio'];
        case 'DERMA':
            return ['libelle' => 'dermatologie', 'classe' => 'badge-derma'];
        case 'PEDIATRIE':
            return ['libelle' => 'pediatrie', 'classe' => 'badge-pediatre'];
     }
        
    
}
function filtreUrgences(array $patient): array
{
return array_values(
        array_filter($patient,
            fn(array $p): bool => $p['niveau d'urgence'] === 'rouge')
    );
}




    

   

function getLibelleUrgence(string $code): string
{
    switch ($code) {
        case 'ROUGE':
            return 'urgence absolue';
        case 'ORANGE':
            return 'urgence relative';
        case 'VERT':
            return 'consultation standard';
        default:
            return 'code d'urgence inconnu';
    }
}
