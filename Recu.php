<?php
$i=0;

/**
 * @param type array $w
 * @param type int $i
 * @return type string
 */
function recu ($array, &$i)
{
    for ($i;$i<=1;$i++){
    if (!is_array ($array)){
        return $array . "<br/>";
    }
    $result=null;    
    foreach ($array as $array_part){
        $result .= recu($array_part, &$i);
    }
    
    return $result;
    }    
}
$my_array = array(1,2,3,4, array(51,52,53, array(541,542, array(5421,5422, array(54221)))),6,7, array(81,82,83));
echo recu($my_array,$i);