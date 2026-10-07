php readme file 

This PHP code is a practice example for learning different types of Arrays in PHP.

1.Indexed Array
2.for loop with an array
3.foreach loop
4.Associative Array
5.print_r()
6.Multidimensional Array


1. Indexed Array

An Indexed Array stores values using numeric indexes.
Example
$info = array(
    "c1231115",
    "anisa abdikadir",
    20,
    "dharkeyley",
    "single"
);
We can access a value using its index:
echo $info[0];

Output:c1231115

2. Using for Loop with an Array

for($i = 0; $i < count($info); $i++){
    echo $info[$i] . "<br>";
}
The for loop goes through the array one value at a time using the index.

3. foreach Loop
Take every value from the array one by one.

4. Associative Array
An Associative Array uses keys and values.
![Associative arrray code](/WEEK2//Screenshot//Associative%20Array.png)
![Associative arrray Output](/WEEK2//Screenshot//Associative%20ArrayOutput.png)

5. print_r()
print_r() is used to display the contents of an array in a readable format.

The <pre> tag makes the output easier to read by preserving spacing and formatting.


6. Multidimensional Array
A Multidimensional Array is an array that contains other arrays.

![Multidimensional Array](/WEEK2//Screenshot//Multidimensional%20Array.png)
![Multidimensional ArrayOutput.png](/WEEK2//Screenshot//Multidimensional%20ArrayOutput.png)
