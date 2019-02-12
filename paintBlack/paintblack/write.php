
  <?php
  header("Content-Type: application/json; charset=UTF-8");
  $file = fopen("test.json", "w") or die ("can't open file");
  fwrite($file, $_POST["x"]);
  fclose($file);
  ?>
