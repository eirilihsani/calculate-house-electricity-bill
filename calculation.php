<?php

$error = "";
$showBill = false;

$block2 = "";
$block3 = "";       
$block4 = "";
$block5 = "";
$block6 = "";

if(isset($_POST['calculate'])) {
    $block2 = $_POST['block2'];
    $block3 = $_POST['block3'];
    $block4 = $_POST['block4'];
    $block5 = $_POST['block5'];
    $block6 = $_POST['block6'];

    if($block2 ==""){
        $block2 = 0;
    }
    if($block3 ==""){
        $block3 = 0;
    }
    if($block4 ==""){
        $block4 = 0;
    }
    if($block5 ==""){
        $block5 = 0;
    }
    if($block6 ==""){
        $block6 = 0;
    }

    if(!is_numeric($block2) ||
       !is_numeric($block3) ||
        !is_numeric($block4) ||
        !is_numeric($block5) ||
        !is_numeric($block6)) {

        $error = "Please enter numbers only";
      
    }

    else if ($block2 < 0 ||
     $block3 < 0 || 
     $block4 < 0 ||
      $block5 < 0 ||
       $block6 < 0) {
        $error = "Please enter positive numbers only";
    }

  else if ($block2 > 200) {
        $error = "The first block can only accept a maximum of 200 kwh";
    }

    else if ($block3 > 100) {
        $error = "The second block can only accept a maximum of 100 kwh";
    }

    else if ($block4 > 300) {
        $error = "The third block can only accept a maximum of 300 kwh";
    }

    else if ($block5 > 300) {
        $error = "The fourth block can only accept a maximum of 300 kwh";
    }

   else if( $block2 + $block3 + $block4 + $block5 + $block6 == 0) {
        $error = "Please enter your electricity consumption";
    }

   else{
    $charge2 = $block2 * 0.218;
    $charge3 = $block3 * 0.344;     
    $charge4 = $block4 * 0.516;
    $charge5 = $block5 * 0.546;
    $charge6 = $block6 * 0.571;

    $totalkwh = $block2 + $block3 + $block4 + $block5 + $block6;
    $totalcharge = $charge2 + $charge3 + $charge4 + $charge5 + $charge6;

    if($totalcharge < 3.00){
        $totalcharge = 3.00;
    }

    if($totalkwh >600){
        $sst = $totalcharge * 0.06;

    }
else{
        $sst = 0;
    }

    $totalbill = $totalcharge + $sst;

    $showBill = true;
}
}
?>