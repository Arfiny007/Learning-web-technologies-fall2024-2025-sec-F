<?php
    function area($length,$width)
    {
        return $length*$width;
    }
    function perimeter($length,$width)
    {
        return $perimeter = 2*($length+$width);
    }

    echo "Area = ".area(16,22)."<br>";
    echo "perimeter =".perimeter(16,22);


?>