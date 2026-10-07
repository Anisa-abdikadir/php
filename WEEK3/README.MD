Chapter 3 Topics

Chapter 3 covers:
1- Array functions.
2- Introduction to functions.
3- Parameters vs arguments.
4- Returning a value.
5- Passing by value vs by reference.
6- Default argument value.





 1. Array Functions
The array functions allow you to access and manipulate arrays. 
The array functions are part of the PHP core. 
There is no installation needed to use these functions. 
Sample of these functions are:


| Function | Purpose |

is_array()  Checks whether a variable is an array 
in_array()  Checks whether a value exists in an array 
count()     Returns the number of elements 
sort()      Sorts an array in ascending order 
rsort()     Sorts an array in descending order 
asort()     Sorts an associative array by value in ascending order 
arsort()    Sorts an associative array by value in descending order 
max()       Returns the highest value 
min()       Returns the lowest value 
implode()   Converts an array into a string 
explode()   Converts a string into an array 
shuffle()   Randomly rear ranges array elements 
array_merge() Merges arrays 
array_reverse() Reverses an array 
array_push()     Adds elements to the end 
array_pop()      Removes the last element 
end()           Moves the internal pointer to the last element and returns its value |


2. is_array()

Checks whether a variable is an array.

3. in_array()

Checks whether a specific value exists in an array.


4. count()

Returns the number of elements in an array.

5. sort() and rsort()
Sorts an array in ascending order.`

rsort()
Sorts an array in descending order.

6. explode()

`explode()` takes a string separated by a character and puts the parts
into an array.



7. shuffle()
`shuffle()` puts array elements in random order.

8. array_merge()
`array_merge()` combines arrays into one array.

9. array_reverse()
`array_reverse()` returns an array in reverse order.

10. array_push()
`array_push()` adds elements to the end of an array.

11. array_pop()
`array_pop()` removes the last element of an array and returns the
removed element.

12. end()
`end()` moves the internal pointer of an array to the last element and
returns its value.

13. What is a Function?
A function is a set of statements that performs a particular task.

Functions help you reuse code.

Instead of writing the same code many times, you can place it inside a
function and call the function when needed.

14. Advantages of Functions

Functions:

- Reduce typing.
- Reduce the amount of code.
- Reduce syntax and programming errors.
- Can accept arguments.
- Can be used for general and specific cases.
- Improve code reusability.
- Are defined once and can be called many times.


15. Defining a Function

General syntax:

function function_name([parameter [, ...]])
{
    // Statements
}


A function does not execute automatically when the page loads. It
executes when it is called.

16. Function Parameters

Parameters are variables listed in the function definition.

Example:

function factorial($a)
{
    // code
}


17. Function Arguments

An argument is the actual value passed to a function.

Example:

factorial(5);
5 = argument


 Easy difference

Parameter = placeholder
Argument  = actual value


18. Returning a Value
A function can return a value using the `return` statement.

Important

When `return` executes, the function stops executing at that point.

19. Returning an Array  A function can return an array.


20. Passing by Value

Passing by value means passing a copy of the argument.

The original value remains unchanged when the function changes its parameter.
This is the default process for passing variables to functions.


 Easy idea

Original value
     ↓
Copy goes to function
     ↓
Function changes copy
     ↓
Original remains the same

 21. Passing by Reference

Passing by reference allows the value passed to the function to be
changed inside the function.

An ampersand `&` is used before the parameter.

22. Default Argument Value

A function can have a default argument value.

 Easy idea

No argument → use default value
Argument given → use given value



