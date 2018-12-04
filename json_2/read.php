<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
		body{
                  font-family: 'Source Code Pro', monospace;
              }
              input {
                  width: 10%;
                  margin: auto;
                  padding: 1px 1px;
                  border-radius: 4px;
              }
              input[type=text], select {
									text-align: center;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
              }
              input:focus {
                  background-color: orange;
              }
							input[type=submit]:focus {
									background-color: RED;
							}
              input[type=submit] {
                  background-color: #4CAF50;
                  color: white;
                  border: none;
                  cursor: pointer;
              }
              input:hover {
                  background-color: #45a049;
              }
              form {
								text-align: center;

              }
		</style>
	</head>
	<body>

<?php
$file = 'read.json'; // path and name of the fiLe
function readjson($file)
{

if(file_exists($file)) {// check if the fiLe exists
	$filedata = file_get_contents($file);//read fiLe
	$objson = json_decode($filedata, true); // true geeft associatieve array
 $objson = AddSchool($objson);
	echo"<hr><code><pre>";
		print_r($objson); //Laat de array zien
		echo"</pre></code><hr>";
		file_put_contents('text.json', json_encode($objson));
}
 else echo $file .' not exists'; }
 //test de output


function AddSchool($objson)
{
	$school = phpCheck('school');
	$category = phpCheck('category');
	$nr_students = phpCheck('nr_students');
  $courses1	= phpCheck('courses1');
  $courses2	= phpCheck('courses2');

	$objson['school'][$school]["category"] = $category;
	$objson['school'][$school]["nr_students"] = $nr_students;
	$objson['school'][$school]["courses"]["AV"] = $courses1;
	$objson['school'][$school]["courses"]["AT"] = $courses2;


	return $objson;
}

readjson($file);

function phpCheck($name)
{	if (empty($_POST[$name])){$$name ='not';}else{$$name =$_POST[$name];}
return $$name;
}



?>
<form action="#" method="post">
school: <br><input type="text" name="school" value="<?php $school = phpCheck('school'); echo  $school; ?>" ><br>
category: <br><input type="text" name="category" value="<?php $category = phpCheck('category'); echo  $category; ?>"><br>
$nr_students: <br><input type="text" name="nr_students" value="<?php $nr_students = phpCheck('nr_students'); echo  $nr_students; ?>"><br>
courses1: <br><input type="text" name="courses1" value="<?php $courses1 = phpCheck('courses1'); echo  $courses1; ?>"><br>
courses2: <br><input type="text" name="courses2" value="<?php $courses2 = phpCheck('courses2'); echo  $courses2; ?>"><br>
<input type="submit"><br>
</form>

</body>
</html>
