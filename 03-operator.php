<?php 
	// $x = 2;
	// $y = $x + 2;
	// $y = $x % 2;
	// $y = -$x;
    // echo $y;

    // $x = 2;
	// $x *= 5;
    // echo $x;

    // $x = 10;
    // $y = 8;
    // echo ($x > $y);
    // echo ($x <> $y);

    // $x = 10;
    // $y = 8;
    // echo $x > 1 && $y <br 5;

    $variable = "PHP Tranning";
	$result = (is_string($variable) == 1) ? "Chuỗi" : "Không phải chuỗi";
    
    echo $result;

    echo "</br>";

    $x = 0;
	$result = ($x > 0) ? "Số dương" :( ($x < 0) ? "Số âm" : "Số 0");
    
    echo $result;

?>