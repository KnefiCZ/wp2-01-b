<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
<h1>Auto</h1>
<?php
$submit=filter_input(INPUT_POST,'submit');
$auta=filter_input(INPUT_POST, 'auta');
$spz=filter_input(INPUT_POST, 'spz');
$rok=filter_input(INPUT_POST, 'rok');
?>
<span style="color:<<?php echo $rok ?>"  >
</span>
<?php
  if (($rok>1980)&&($rok<2018)) {
    $color="green";
  }
  else {
    $color="red";
  }

  echo "Vaše auto : $auta s poznávcí značkou : $spz , rok : $rok . ";
  ?>

  </body>
</html>
