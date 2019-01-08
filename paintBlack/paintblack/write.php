<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8"></meta>
    <meta name="description" content="School"></meta>
    <meta name="keywords" content="HTML,CSS,XML,JavaScript"></meta>
    <meta name="author" content="Abdelaziz"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>

<title>Abdelaziz Elbaze Ajax</title>
</head>
<body>
  <?php
  header("Content-Type: application/json; charset=UTF-8");
  $fileOutput = "test.json";
  $objson =  json_decode($_POST["x"], false);
  
  writeJson($objson, $fileOutput);
  function writeJson($objson, $fileOutput){
  $saveJson = json_encode($objson);
  $file = fopen($fileOutput, "w") or die ("can't open file");
  fwrite($file, $saveJson);
  fclose($file);
  }
  ?>
<script type="text/javascript">
  console.log('<?php echo  $objson; ?>');
</script>
</body>
</html>
