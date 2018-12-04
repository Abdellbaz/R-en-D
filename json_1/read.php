<?php
$file = 'read.json'; // path and name of the fiLe
if(file_exists($file)) {// check if the fiLe exists
	$filedata = file_get_contents($file);//read fiLe
	$objson = json_decode($filedata, true); // true geeft associatieve array
	echo"<hr><code><pre>";
  print_r($objson); //Laat de array zien
	echo"</pre></code><hr>";
}
 else echo $file .' not exists';
 //test de output
	echo($objson['school']['Mediacollege']['courses']['GD' ]);
	echo("<br>");
  echo($objson['school']['Horizoncollege']['courses']['HM']);

?>
