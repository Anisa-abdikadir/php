PHP Basics – Variables, Constants, Conditions & Switch

Project Description

This project is a simple PHP practice file that demonstrates some basic PHP concepts.

The main topics covered are:

echo and prin`
Variables
String interpolation
HTML `<br>`
Constants using `define()`
if
elseif
else
switch
case
break
default



1. Echo and Print

PHP uses echo and print to display output.

 Example

php
echo "Hello World";
print "Welcome to PHP";

Output

Hello World
Welcome to PHP


2. Variables

A variable is used to store data.

In PHP, variables start with $.


 4. Constants

A constant is a value that is not normally changed after it is defined.

PHP can create constants using `define()`.

Example

define("AGE", "The age must be");

echo AGE;

Output
The age must be

Important

A variable uses $:

$name = "Anisa";

A constant does not use $:

define("AGE", 20);

echo AGE;


5. String vs Constant

There is an important difference between:

echo "Welcome AGE"; and:

echo "Welcome ", AGE;

First example

echo "Welcome AGE";

AGE is treated as normal text because it is inside quotation marks.

Output:

Welcome AGE

Second example

echo "Welcome ", AGE;

Here, AGE is treated as a constant.

If:

define("AGE", "The age must be");

the output is:

Welcome The age must be


6. If Statement

The if statement is used to check a condition.
Example

$Age = 20;

if ($Age > 20) {
    echo "Adult";
}

The condition is: $Age > 20

If the condition is true, the code inside { } runs.


7. Elseif

elseif is used when the first condition is false and we want to check another condition.

Example

$Age = 20;
$Grade = 4;

if ($Age > 20) {
    echo "Adult";
}
elseif ($Grade < 2) {
    echo "Poor";
}
else {
    echo "Other";
}

The program checks conditions from top to bottom.

8. Else

else runs when all previous conditions are false.

Example

$Age = 18;

if ($Age > 20) {
    echo "Older";
}
else {
    echo "Adult";
}


Since 18 > 20 is false, the else block runs.

9. Switch Statement

A switch statement is useful when we want to compare one value with multiple possible values.

Example


$Answer = "N";

switch ($Answer) {

    case "Y":
        echo "The answer was yes";
        break;

    case "N":
        echo "The answer was no";
        break;

    default:
        echo "Invalid";
}


10. Case

A case represents a possible value.

For example:

case "Y":

means:

If $Answer is "Y", execute this code.

11. Break

break stops the switch statement.

Example

case "Y":
    echo "The answer was yes";
    break;

After displaying the message, PHP exits the switch.


12. Default

default runs when none of the cases match.

Example

$Answer = "X";

switch ($Answer) {

    case "Y":
        echo "Yes";
        break;

    case "N":
        echo "No";
        break;

    default:
        echo "Invalid";
}

Since "X" does not match "Y" or "N", the output is:

```text
Invalid
```


13. Supporting Uppercase and Lowercase

The project also demonstrates how to handle both uppercase and lowercase values.

$Answer = "N";

switch ($Answer) {

    case "Y":
    case "y":
        echo "The answer was yes";
        break;

    case "N":
    case "n":
        echo "The answer was no";
        break;

    default:
        echo "Invalid";
}





Important Correction

When using `if`, do not put an unnecessary semicolon after the condition.

 Incorrect:

```php
if ($Age > 20);
```
Correct:

```php
if ($Age > 20) {
    echo "Adult";
}
```

Also, when using `switch`, use `case` correctly.

For checking ranges such as marks, `if / elseif / else` is usually easier.

### Example

```php
$Marks = 87;

if ($Marks >= 90) {
    echo "Excellent";
}
elseif ($Marks >= 80) {
    echo "Very Good";
}
elseif ($Marks >= 50) {
    echo "Minimal Pass";
}
else {
    echo "Not Pass";
}
```

Output:

```text
Very Good
```

---

 Concepts Summary

| Concept     | Purpose                        |
| ----------- | ------------------------------ |
| `echo`      | Displays output                |
| `print`     | Displays output                |
| `$variable` | Stores data                    |
| `define()`  | Creates a constant             |
| `<br>`      | Creates a new line             |
| `if`        | Checks a condition             |
| `elseif`    | Checks another condition       |
| `else`      | Runs when conditions are false |
| `switch`    | Compares one value with cases  |
| `case`      | Defines a possible value       |
| `break`     | Stops the switch               |
| `default`   | Runs when no case matches      |



