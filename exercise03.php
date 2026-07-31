<!-- Simple Budget Calculator
Create a script where you define a total budget and subtract expenses for groceries, transport, and entertainment. Display the remaining balance. -->

<?php echo "Task 1 <br>";
$budget = 500;
$groceries = 300;
$transport = 100;
$entertainment = 50;

$balance = $budget - ($groceries + $transport + $entertainment ); 
echo "Remaining Balance: R" . $balance . "<br>";
?>
<br>


<!-- 2. ### Age Category Check
    Write a script that takes a user’s age and categorizes them as:
    • Child (under 12)
    • Teen (13–17)
    • Adult (18–64)
    • Senior (65+) -->
<?php echo "Task 2 <br>";
$age = -12 ;
if (0<$age && $age<12) {
  echo "Child";
} elseif (12<$age && $age<=17) {
  echo "Teen";
} elseif (17<$age && $age<=64){
  echo "Adult";
} elseif ($age >=65)  {
  echo "Senior";
} else {
  echo "Enter valid age!";
}
?>
<br> 

<br>
<!-- 3. ### Simple Interest Calculator
    Calculate the simple interest for a principal amount of R10,000, a rate of 5%, and a time period of 3 years. Display the interest and total amount. -->
<?php echo "Task 3 <br>";
$principle_amount = 10000;
$rate = 0.05;
$time_years = 3; 
$interest = $principle_amount * $rate * $time_years;
echo "Simple Interest: " .$interest. "<br>";
?>

<!-- 4. ### Logical Operator Practice
    Write a script to check if a user’s age is between 18 and 35 and if they are registered to vote. Output either:
    • *"Eligible to vote."* OR
    • *"Not eligible to vote."* -->
<br>
<?php echo "Task 4 <br>";
$user_age = 65;
if ($user_age >= 18 && $user_age <=35) {
  echo "Eligible to vote.";
} else {
  echo "Not eligible to vote.";
}

?> 

<br>
<!-- 5. ### Dynamic Discount
    Create a script where a user enters a purchase amount. Apply a discount of:
    • 10% if the amount is greater than R1,000
    • 5% if it’s between R500 and R999
    • 2% if it’s between R250 and R499
    • No discount otherwise. -->
<br>
<?php echo "Task 5 <br>";
$purchaseAmount = 100;
if ($purchaseAmount > 1000) {
  $final_amount = $purchaseAmount - ($purchaseAmount * 0.1);
  echo "Final Purchase Amount: ".$final_amount. "<br>";
} elseif ($purchaseAmount>=500  && $purchaseAmount<=999){
  $final_amount = $purchaseAmount - ($purchaseAmount * 0.05);
  echo "Final Purchase Amount: ".$final_amount. "<br>";
} elseif ($purchaseAmount>=250 && $purchaseAmount<=499) {
  $final_amount = $purchaseAmount - ($purchaseAmount * 0.02);
  echo "Final Purchase Amount: ".$final_amount. "<br>";
} else {
  echo "No discount otherwise.";
}
?>
