<?php

namespace CancioLabs\Ds\Stack;

use Countable;
use IteratorAggregate;

interface StackInterface extends Countable, IteratorAggregate
{

    /**
     * Adds a new element to the top of the stack.
     */
    public function push(mixed $element): static;

    /**
     * Removes and return the top element of the stack.
     */
    public function pop(): mixed;

    /**
     * Returns the top element of the stack.
     */
    public function top(): mixed;

    /**
     * Tests whether the stack is empty.
     */
    public function isEmpty(): bool;

    /**
     * Removes all elements from the stack.
     */
    public function clear(): static;

    /**
     * Transforms the stack into an array.
     */
    public function toArray(): array;

}