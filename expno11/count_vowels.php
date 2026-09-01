<!DOCTYPE html>
<html>
<head>
 <title>Count Vowels in String</title>
</head>
<body style="font-family: Arial; padding: 20px;">
 <h2>Count Vowels in a String</h2>
 <form method="post" action="">
 Enter a string:
 <input type="text" name="inputString" required>
 <input type="submit" value="Count Vowels">
 </form>
 <?php
 
 function countVowels($str) {
  $str = strtolower($str); 
  $count = 0;
  for ($i = 0; $i < strlen($str); $i++) {
  $ch = $str[$i];
  if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || 
  $ch == 'u') {
  $count++;
 }
 }
 return $count;
 }
 
 if (isset($_POST['inputString'])) {
  $input = $_POST['inputString'];
  $total = countVowels($input);
  echo "<h3>Input String: " . htmlspecialchars($input) . 
  "</h3>";
  echo "<h3>Total Number of Vowels: " . $total . "</h3>";
 }
 ?>
</body>
</html>
