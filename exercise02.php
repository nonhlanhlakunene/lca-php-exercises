<!-- 1. ### Personal Bio with Variables
    Create variables for your name, age, favorite color, and favorite hobby. Display them as a formatted paragraph:
    • *"Hi, I'm John. I'm 25 years old, my favorite color is blue, and I love playing chess."* -->
<?php 
$name = "Nonhlanhla Kunene";
$age = 21;
$fav_color = "pink";
$hobby = "soccer";
echo "Hi, I'm ".$name, "."," I'm ".$age, "years old, my favorite color is ".$fav_color, ", and I love playing ".$hobby,".<br></br>";
?>

<!-- 2. ### BMI Calculator
    Write a script to calculate BMI given height (in meters) and weight (in kilograms). Print the result in the format:
    • "Your BMI is: 22.3 (Normal weight)." -->
<?php 
$height = 12;
$weight = 15;
$category = "Normal weight";

$bmi = $weight / ($height*$height) ;
$bmi = round($bmi, 3);
echo "Your BMI is : " . $bmi . " (" .$category . ").<br><br>";

?>

<!-- 3. ### Global vs Local Variables
    Declare a global variable $globalVar. Use a function to demonstrate how global variables behave differently from local ones by modifying the global value. -->

<?php
$globalVar = "I am global"; // declared outside any function

function modifyGlobal() {
    global $globalVar; // tells PHP: "use the global variable, not a new local one"
    $globalVar = "I was changed inside the function";
    
    $localVar = "I only exist inside this function";
    echo "Inside function - globalVar: " . $globalVar . "<br>";
    echo "Inside function - localVar: " . $localVar . "<br>";
}

modifyGlobal(); // call the function so it actually runs

echo "Outside function - globalVar: " . $globalVar . "<br></br>";
// echo $localVar; // this would cause an error - $localVar doesn't exist out here
?>

<!-- 4. ### Type Conversion Experiment
    Assign a float value to a variable and convert it to an integer using intval(). Print both the original and converted value -->
<?php
$originalValue = 9.75; // a float (decimal number)
$convertedValue = intval($originalValue); // convert it to an integer

echo "Original value: " . $originalValue . "<br>";
echo "Converted value: " . $convertedValue . "<br><br>";
?>

<!-- 5. ### Data Type Identification
    Use the gettype() function to identify and print the types of various variables (integer, float, string, and array). -->
<?php
$myInt = 42;
$myFloat = 3.14;
$myString = "Hello world";
$myArray = array(1, 2, 3);

echo "myInt is of type: " . gettype($myInt) . "<br>";
echo "myFloat is of type: " . gettype($myFloat) . "<br>";
echo "myString is of type: " . gettype($myString) . "<br>";
echo "myArray is of type: " . gettype($myArray) . "<br>";
?>