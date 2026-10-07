Chapter 3
Arrays and Functions in PHP
1. Chapter Topics
Introduction to arrays.
Numerically indexed arrays.
foreach...as loop.
Associative arrays.
Access mechanism operator =>.
Multi-dimensional arrays.
Two-dimensional numerical indexed arrays.


2. What is an Array?
An array is a variable that holds multiple values under one name.
Each value in an array is called an element.
Example: $fruits = array("Apple", "Orange", "Banana");
​
The elements can be accessed using indexes or keys.
PHP arrays can contain different data types.

3. Types of Arrays
three types:
1-Numerically indexed array.
2-Associative array.
3-Multidimensional array.
4. Numerically Indexed Array
A numerically indexed array uses numbers as indexes.
Indexes start at: 0
​
Example: $fruits = array("Apple", "Orange", "Banana");
​
The indexes are:
0 → Apple
1 → Orange
2 → Banana
​
Access an element:
echo $fruits[0];      Output: Apple
​
5. Manually Assigning Indexes
You can also assign indexes manually.
$fruits = array();

$fruits[0] = "Apple";
$fruits[1] = "Orange";
$fruits[2] = "Banana";
​
You can also add items without explicitly writing the index:
$fruits[] = "Apple";
$fruits[] = "Orange";
$fruits[] = "Banana";
​
6. print_r()
print_r() shows the structure of an array in a readable way.
Example: echo "<pre>";
print_r($fruits);
echo "</pre>";
​
<pre> is commonly used with print_r() to display the array clearly in a web browser.

7. for Loop with an Array
You can use a for loop to access array elements.
Example:
$info = array(
    "101",
    "Mohamed Abdi Ali",
    20,
    "Hodan District",
    "single"
);

for ($i = 0; $i < count($info); $i++) {
    echo $info[$i] . "<br>";
}
​
Important
count() returns the number of elements in an array.
8. foreach...as Loop
foreach is a special loop for working with arrays.
It goes through the array from the first element to the last element.
Example: $numbers = array(26, 11, 13);
foreach ($numbers as $n)
    echo "$n, ";    Output:26, 11, 13
​

Structure
foreach ($array as $value)
​
Here:
$array is the array.
$value holds the current element.

9. Adding Array Elements Using foreach

Example: $numbers = array(10, 10, 15);
$total = 0;

foreach ($numbers as $n)
    $total += $n;

echo "Total of all elements is: $total";
​
Output: Total of all elements is: 35
​
10. Associative Arrays
An associative array uses names/strings as keys instead of numeric indexes.
Associative arrays are useful for name/value pairs.
Example:
$info = array(
    "id" => "101",
    "name" => "Mohamed Abdi Ali",
    "age" => 20,
    "address" => "Hodan District",
    "status" => "single",
    "weight" => 160.5
);
​
The keys are:
id,name,age,address,status,weight
​
The values are the information assigned to those keys.
11. The => Operator
The double arrow operator connects a key with its value.
Example:"name" => "Mohamed Abdi Ali"
​
Here:"name" = key
"Mohamed Abdi Ali" = value
​
12. Accessing Associative Array Values
Example:echo $info["name"];
​
This accesses the value stored under the "name" key.
13. foreach with Key and Value
You can access both the key and value using:
foreach ($info as $k => $v)
    echo "[$k]: $v<br>";
​
Here:
$k = key
$v = value
​
14. Multidimensional Arrays
A multidimensional array is an array that contains one or more arrays.
A two-dimensional array is an array of arrays.
They are useful when data is arranged in a table-like structure.
Example:
$student = array(
    array("Mohamed", 1990, "Hodan", "0608124390"),
    array("Ahmed", 2001, "Yaaqshiid", "0608124391"),
    array("Jaamac", 1986, "Shangaani", "0608124392")
);
​
You can access values using multiple indexes.
For example: $student[0][0]
​
refers to the first value in the first inner array.
15. Nested foreach with Multidimensional Arrays
Example:
foreach ($student as $s) {
    foreach ($s as $v)
        echo "$v<br>";
}
​
The first foreach gets each inner array.
The second foreach gets each value inside that inner array.


