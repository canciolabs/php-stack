<?php

namespace CancioLabs\Ds\Stack\Iterator;

use CancioLabs\Ds\Stack\StackInterface;
use Iterator;

class StackIterator implements Iterator
{

    private StackInterface $stack;
    private int $index = 0;

    public function __construct(StackInterface $stack)
    {
        $this->stack = $stack;
    }

    public function current(): mixed
    {
        return $this->stack->pop();
    }

    public function next(): void
    {
        $this->index++;
    }

    public function key(): mixed
    {
        return $this->index;
    }

    public function valid(): bool
    {
        return !$this->stack->isEmpty();
    }

    public function rewind(): void
    {
        $this->index = 0;
    }

}