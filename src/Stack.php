<?php

namespace CancioLabs\Ds\Stack;

use CancioLabs\Ds\Stack\Exception\EmptyStackException;

class Stack implements StackInterface
{

    private array $stack = [];

    public function push(mixed $element): static
    {
        $this->stack[] = $element;

        return $this;
    }

    public function pop(): mixed
    {
        if ($this->isEmpty()) {
            throw new EmptyStackException('Unable to pop an element as the stack is empty.');
        }

        return array_pop($this->stack);
    }

    public function top(): mixed
    {
        if ($this->isEmpty()) {
            throw new EmptyStackException('Unable to return the top element as the stack is empty.');
        }

        return end($this->stack);
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function count(): int
    {
        return count($this->stack);
    }

}