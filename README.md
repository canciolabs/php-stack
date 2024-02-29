# CancioLabs / DS / PHP-Stack

This tiny package contains an interface and an array-based implementation of the LIFO Stack data structure.

## Interface

| Method  | Description                                 |
|---------|---------------------------------------------|
| push    | Add a new element to the top of the stack.  |
| pop     | Remove and return the top element of the stack.          |
| top     | Return the top element of the stack.       |
| isEmpty | Test whether the stack is empty.            |
| clear   | Remove all elements from the stack.         |
| count   | Return the number of elements of the stack. |

## How to use it

```
$stack = new Stack();

$stack->push('A');
$stack->push('B');
$stack->push('C');
$stack->push('D');

$stack->isEmpty(); // returns false
$stack->count(); // returns 4

$stack->top(); // output 'D'
$stack->pop(); // returns 'D'

foreach ($stack as $element) {
    // $element = 'C', 'D', 'A'
}

$stack->isEmpty(); // returns true 
```

## Tests and Coverage

All tests are passing with no warnings and code coverage is 100%.