<!DOCTYPE html>
<html>
<head>
 <title>Voting Eligibility Checker</title>
</head>
<body style="font-family: Arial; padding: 20px;">
 <h2>Check Voting Eligibility</h2>
 <form method="post" action="">
 Enter your age:
 <input type="number" name="age" required>
 <input type="submit" value="Check">
 </form>

<?php
 function checkEligibility($age) {
  if ($age >= 18) {
   return "✅ You are eligible to vote.";
  } else {
   return "❌ You are not eligible to vote. Minimum age 
is 18.";
  }
 }

 if (isset($_POST['age'])) {
  $age = (int)$_POST['age']; // convert input to number
  echo "<h3>" . checkEligibility($age) . "</h3>";
 }
 ?>

</body>
</html>
