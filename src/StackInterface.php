<?php

namespace CancioLabs\Ds\Stack;

use Countable;

interface StackInterface extends Countable
{

    /**
     * Add a new element to the top of the stack.
     */
    public function push(mixed $element): static;

    /**
     * Remove and return the top element.
     */
    public function pop(): mixed;

    /**
     * Returns the top element of the stack.
     */
    public function top(): mixed;

    /**
     * Test whether the stack is empty.
     */
    public function isEmpty(): bool;

}