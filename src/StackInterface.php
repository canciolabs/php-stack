<?php

namespace CancioLabs\Ds\Stack;

use Countable;
use IteratorAggregate;

interface StackInterface extends Countable, IteratorAggregate
{

    /**
     * Add a new element to the top of the stack.
     */
    public function push(mixed $element): static;

    /**
     * Remove and return the top element of the stack.
     */
    public function pop(): mixed;

    /**
     * Return the top element of the stack.
     */
    public function top(): mixed;

    /**
     * Test whether the stack is empty.
     */
    public function isEmpty(): bool;

    /**
     * Remove all elements from the stack.
     */
    public function clear(): static;

}