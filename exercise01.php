<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercise 01</title>
</head>
<body>
<?php
// TODO 1: Use `echo` to print your name, your favourite programming language, and why
// you like it. Example output: "My name is {insert your name}. My favourite programming
// language is PHP because it is easy to use."

echo "My name is Nonhlanhla Kunene. My favorite programming language is Python because it is the easiest backend language to learn and it is easy to understand.<br></br>" ;

//  Write a script that calculates and prints the sum of two numbers (e.g., 15 +
// 25).
$num1 = 5;
$num2 = 10;
$total = $num1 + $num2;
echo "Sum of the two numbers is ". $total, ".", "<br></br>";

// TODO 3: Create a PHP script to display today's date using the `date()` function.
// Format the output as "Today is [Day], [Month] [Date], [Year]."
echo "Today is " . date("l, F j, Y") . ".";

// TODO 4: Embed PHP into an HTML file to create a "Welcome" page.
// The PHP script should output: "Welcome to PHP Programming!" in an `<h1>` tag.

?>

<!-- TODO 4: Embed PHP into an HTML file to create a "Welcome" page. -->
<h1><?php
echo "Welcome to PHP Programming!"; ?></h1>
</body>
</html>

<!--  TODO 5: Write a script that uses PHP to generate a random number between 1 and 100
and outputs it with the message "Your lucky number today is: [number]." -->
<?php $luckyNumber = rand(1, 100);
echo "Your lucky number today is: " . $luckyNumber . "."; ?>


