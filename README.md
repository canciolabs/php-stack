# CancioLabs / DS / PHP-Stack

This tiny package contains an interface and an array-based implementation of the LIFO Stack data structure.

## Interface

| Method  | Description                                      |
|---------|--------------------------------------------------|
| push    | Adds a new element to the top of the stack.      |
| pop     | Removes and return the top element of the stack. |
| top     | Returns the top element of the stack.            |
| isEmpty | Tests whether the stack is empty.                |
| clear   | Removes all elements from the stack.             |
| count   | Returns the number of elements of the stack.     |
| toArray | Transforms the stack into an array.              |

## How to use it

```
$stack = new Stack(['A', 'B']);

$stack->push('C');
$stack->push('D');

$stack->isEmpty(); // returns false
$stack->count(); // returns 4

$stack->top(); // output 'D'
$stack->pop(); // returns 'D'

$array = $stack->toArray(); // return ['A', 'B', 'C']

foreach ($stack as $element) {
    // i=0: $element = 'C'
    // i=1: $element = 'B'
    // i=2: $element = 'A'
}

$stack->isEmpty(); // returns true 
```

## Tests and Coverage

All tests are passing with no warnings and code coverage is 100%.