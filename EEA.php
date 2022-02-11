<?php
# fonction de algorithme d'Euclide etendu.
#INPUT: a, b deux nombre. 
#OUTPUT: [u, v, d] u, v: les coefficients de BachetBezout, d : le plus grand diviseur commun.
function EEA($a, $b)
{
    $d = $a; $u = 1;
    if($b == 0)
    {
        $v = 0;
        return [$u, round($v), $d]; 
    }
    else{
        $u1 = 0;
        $d1 = $b;
    }
    while(TRUE){
        if($d1 == 0)
        {
            $v = ($d - $a * $u) / $b;
            return [$u, round($v), $d];
        }
        $q = (int) ($d / $d1);
        $d2 = $d % $d1;
        $u2 = $u - ($q * $u1);
        $u = $u1; $d = $d1;
        $u1 = $u2; $d1 = $d2;
    }
}

#fonction qui retourne l'inverse de e, d tel que de = 1 [m].
#INPUT: a, b deux nombre avec a > b. 
#OUTPUT: l'inverse de b .
function Inverse($a, $b)
{
    return EEA($a, $b)[1];
}


// le test de la fonction EEA
print(json_encode(EEA(40, 23))."\n");

// le test de la fonction Inverse
print(Inverse(40, 23));