<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year";
    } else {
        return "This year is not a leap year";
    }
}
$year = 2013;
echo isLeapYear($year);
////////////////////////////////////////////////////////////////////////////

function checkSeason($temperature) {
    return ($temperature < 20) ? "It is winter!" : "It is summertime!";
}
$temperature = 27;
echo checkSeason($temperature);
////////////////////////////////////////////////////////////////////////////

function calculateSum($firstInteger, $secondInteger) {
    if ($firstInteger == $secondInteger) {
        return "(" . $firstInteger . " + " . $secondInteger . ") * 3 = " . (($firstInteger + $secondInteger) * 3);
    } else {
        return $firstInteger . " + " . $secondInteger . " = " . ($firstInteger + $secondInteger);
    }
}
$firstInteger = 2;
$secondInteger = 2;
echo calculateSum($firstInteger, $secondInteger);
//////////////////////////////////////////////////////////////////////////////////

function checkSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;

    return ($sum == 30) ? $sum : "false";
}
$firstInteger = 10;
$secondInteger = 10;
echo checkSum($firstInteger, $secondInteger);

///////////////////////////////////////////////////////////////////////////////////

function isMultipleOfThree($number) {
    return ($number % 3 == 0) ? "true" : "false";
}

$number = 20;

echo isMultipleOfThree($number);

///////////////////////////////////////////////////////////////////////////////////

function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? "true" : "false";
}
$number = 50;
echo isInRange($number);

///////////////////////////////////////////////////////////////////////////////////

function findLargest($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}

$num1 = 1;
$num2 = 5;
$num3 = 9;
echo findLargest($num1, $num2, $num3);

///////////////////////////////////////////////////////////////////////////////////////

function calculate($num1, $num2, $operation) {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            if ($num2 == 0) {
                return "Error: Division by zero is not allowed.";
            }
            return $num1 / $num2;
        default:
            return "Invalid operation.";
    }
}
$num1 = 10;
$num2 = 5;
$operation = 'add'; 
echo "Result: " . calculate($num1, $num2, $operation);

/////////////////////////////////////////////////////////////////////////////////////////////

function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "Eligible to vote.";
    } else {
        return "Not eligible to vote.";
    }
}
$age = 15;
echo checkVotingEligibility($age);

/////////////////////////////////////////////////////////////////////////////////////////////////

function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}
$number = -60;
echo checkNumber($number);

/////////////////////////////////////////////////////////////////////////////////////////////////////

function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);
     if ($average < 60) {
        return "F";
    } elseif ($average < 70) {
        return "D";
    } elseif ($average < 80) {
        return "C";
    } elseif ($average < 90) {
        return "B";
    } else {
        return "A";
    }
}
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo "Grade: " . calculateGrade($scores);


/////////////////////////////////////////////////////////////////////////////////////////////////////////

?>
</body>
</html>