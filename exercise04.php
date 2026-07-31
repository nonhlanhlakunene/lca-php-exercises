<!-- a PHP for loop that displays numbers from 0 to 10, with each number displayed on a new
line following the format 'i is equal to X' where X is the current number -->

<?php echo "Task 1 <br>";
for ($i=0; $i <=10 ; $i++) { 
  echo "i is equal to ". $i , "<br>";
}
?>
<br>
<!-- an array containing three car names: 'Jaguar F-Type', 'Supra', and 'Porsche 911'. Write a
for loop that displays each car name on a new line. -->

<?php echo "Task 2 <br>";
$cars = array("Jaguar F-Type", "Supra", "Porsche 911" );
for ($x=0; $x < count($cars); $x++) { 
  echo $cars[$x] . "<br>";
}
?>
<br> 

<!-- Using the same cars array from the previous question, write a foreach loop that displays each car
name on a new line. Your code should be able to handle any number of cars in the array. -->
<?php echo "Task  <br>";
$cars = array("Jaguar F-Type", "Supra", "Porsche 911" );
foreach ($cars as $value) {
  echo "$value <br>";
}
?>
<br>


<!-- a while loop that displays numbers from 0 to 5, with each line showing 'X is equal to: Y'
where Y is the current number. Remember to include proper counter initialization and increment. -->
<?php echo "Task 4 <br>"; 
$m = 0;
while ($m<=5) {
  echo "X is equal to: ".$m, "<br>";
  $m++;
}
?>
<br>

<!-- Create a do-while loop that starts with Y = 6 and continues while Y <= 5. For each iteration, display
'Y is equal to: Z' where Z is the current value. What do you observe about the output? -->
<?php echo "Task 5 <br>";
$y = 6;
do {
  echo "Y is equal to: ".$y. "<br>" ;
} while ($y<=5) ;
?>
<!-- A do-while loop always runs its block at least once, no matter what the condition says - because it only checks the condition after running, not before. -->
<br>

<!-- A function called printMyName that accepts a name parameter and displays it. Test your
function by calling it with the argument 'Jack'. -->
<?php echo "Task 6 <br>";
function printMyName($name) {
  echo "Hello, ".$name."!";
}
printMyName("Jack");
?>
<br></br>

<!-- A function called multiply that accepts two numbers as parameters, multiplies them
together, and returns the result. Test your function by multiplying 5 and 2 and displaying the
result. -->
<?php echo "Task 7 <br>";
function multiply($num1, $num2) {
   echo "Answer: ".$num1 * $num2;
}
multiply(5, 2);
?>
<br></br>

<!-- A function called arrayLooper that accepts an array as a parameter and displays each
element on a new line. Test your function with an array containing the following fruits: 'Apple',
'Orange', 'Mango', and 'Banana'. -->
<?php echo "Task 8 <br>";
function arrayLooper(array $fruits) {
  for ($m=0; $m < count($fruits) ; $m++) { 
    echo $fruits[$m] . "<br>" ;
  }
}
$fruits = ['Apple', 'Orange', 'Mango', 'Banana'];
arrayLooper($fruits);
?>
<br>
