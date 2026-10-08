<?php
include 'calculation.php';
?>
<html>
    <head>
        <title>Calculate House Electricity Bill</title>
    </head>
    <body>
        <h1>Calculate House Electricity Bill</h1>
<?php
if($error != "")
{
    echo "<p> warning</b> . $error</p>";

    
}
 ?>
<div style="margin-bottom: 50px">
<table border="1">
  <tr>
    <th>Block Tariff (per month)</th>
    <th>Unit</th>
    <th>Rate</th>
  </tr>
  <tr>
    <td>For the first 200 kWh (1-200 kWh) per month</td>
    <td>1-200 kWh</td>
    <td>0.218</td>
  </tr>
   <tr>
    <td>For the next 100 kWh (201 – 300 kWh) per month</td>
    <td>201-300 kWh</td>
    <td>0.344</td>
  </tr>
  <tr>
    <td>For the next 300 kWh (301 – 600 kWh) per month</td>
    <td>301-600 kWh</td>
    <td>0.516</td>
  </tr>
  <tr>
    <td>For the next 100 kWh (601 – 900 kWh) per month</td>
    <td>601-900 kWh</td>
    <td>0.546</td>
  </tr>
  <tr>
    <td>For the next kWh (901 kWh onwards) per month</td>
    <td>901 kWh onwards</td>
    <td>0.571</td>
  </tr>
    <tr>
    <td colspan="3">The minimum monthly charge is RM300</td> 
  </tr>
</table>
</div>

<br></br>

<form method="post">
   Enter your first 200kwh (1-200 kwh) per month:
    <input type="text" name="block2" value="">

    <br>

Enter your next 100kwh (201-300 kwh) per month:
    <input type="text" name="block3" value="">

    <br>
  Enter your next 300kwh (301-600 kwh) per month:
    <input type="text" name="block4" value="">

    <br>
Enter your next 100kwh (601-900 kwh) per month:
    <input type="text" name="block5" value="">
<br>
 Enter your next kwh (901 kwh onwards) per month:
    <input type="text" name="block6" value="">
    <br>

    <input type="submit" name="calculate" value="Calculate">
    <input type="submit" name="reset" value="Reset">
</form>

</body>

 <body>
  <h2>Your Electricity Bill byEiril.com</h2>
  </body>

<?php
echo "<h3>Electricity Bill Calculation</h3>";
     if($showBill) {


  echo "1-200 kwh: " . $block2 . " kwh x 0.218 = RM " . number_format($charge2, 2) . "<br>";
  echo "201-300 kwh: " . $block3 . " kwh x 0.344 = RM " . number_format($charge3, 2) . "<br>";
  echo "301-600 kwh: " . $block4 . " kwh x 0.516 = RM " . number_format($charge4, 2) . "<br>";
  echo "601-900 kwh: " . $block5 . " kwh x 0.546 = RM " . number_format($charge5, 2) . "<br>";
  echo "901 kwh onwards: " . $block6 . " kwh x 0.571 = RM " . number_format($charge6, 2) . "<br>";

  echo "<br>";

  echo "Total electricity consumption : " . $totalkwh . " kwh<br>";
  echo "Total consumption : RM " . number_format($totalcharge, 2) . "<br>";
  echo "SST 6%: RM " . number_format($sst, 2) . "<br>";
  echo "<h3>Total Current Bill: RM " . number_format($totalbill, 2) . "</h3>";
}

?>

</html>