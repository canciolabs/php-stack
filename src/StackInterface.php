<?php

namespace CancioLabs\Ds\Stack;

use Countable;

interface StackInterface extends Countable
{

    public function push(mixed $value): static;

    public function pop(): mixed;

    public function top(): mixed;

    public function isEmpty(): bool;

}