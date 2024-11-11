<?php
    
    $vatRate = 0.15; 
    $amount = 7300; 
    $vat = $amount * $vatRate;
    
    $totalAmount = $amount + $vat;
    
    echo "Amount: " . $amount . "tk<br>";
    echo "VAT (15%): " . $vat . "tk<br>";
    echo "Total Amount (including VAT): " . $totalAmount. "tk<br>";
    
    


?>