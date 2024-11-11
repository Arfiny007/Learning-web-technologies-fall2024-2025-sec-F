<?php

$array = array(53,32,43,553,142,41,165,16,22);
$S_Element = 165;



for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $S_Element) {
        echo "Element {$S_Element} found at index {$i}.";
        
        break;
    }
}


?>
