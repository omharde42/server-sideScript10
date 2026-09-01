<!DOCTYPE html>
<html>
<head>
 <title>Associative Array Example</title>
</head>
<body style="font-family: Arial; padding: 20px;">
 <h2>PHP Associative Array Operations</h2>
 <?php
 
 $student = array(
  "name" => "Rahul",
  "class" => "12th",
  "age" => 17,
  "city" => "Delhi"
 );

 echo "<b>Original Array:</b><br>";
 foreach ($student as $key => $value) {
  echo $key . " : " . $value . "<br>";
 }

 echo "<br><b>Size of array:</b> " . count($student) . 
 "<br>";

 unset($student["age"]);
 echo "<br><b>Array After Deleting 'age':</b><br>";
 foreach ($student as $key => $value) {
  echo $key . " : " . $value . "<br>";
 }

 echo "<br><b>New size of array:</b> " . count($student);
 ?>
</body>
</html>
