<?php

namespace Test\CancioLabs\Ds\Stack\Iterator;

use CancioLabs\Ds\Stack\Iterator\StackIterator;
use CancioLabs\Ds\Stack\Stack;
use PHPUnit\Framework\TestCase;

class StackIteratorTest extends TestCase
{

    public function testIterator(): void
    {
        $stack = new Stack();
        $stack->push('A');
        $stack->push('B');
        $stack->push('C');

        $actualKeys = [];
        $actualElements = [];

        foreach (new StackIterator($stack) as $key => $element) {
            $actualKeys[] = $key;
            $actualElements[] = $element;
        }

        $expectedElements = ['C', 'B', 'A'];
        $expectedKeys = [0, 1, 2];

        $this->assertSame($expectedKeys, $actualKeys);
        $this->assertSame($expectedElements, $actualElements);
    }

    public function testIteratorWithPushInsideLoop(): void
    {
        $stack = new Stack();
        $stack->push('A');
        $stack->push('B');
        $stack->push('C');

        $actualKeys = [];
        $actualElements = [];

        foreach (new StackIterator($stack) as $key => $element) {
            if ($element === 'B') {
                $stack->push('D');
            }

            $actualKeys[] = $key;
            $actualElements[] = $element;
        }

        $expectedElements = ['C', 'B', 'D', 'A'];
        $expectedKeys = [0, 1, 2, 3];

        $this->assertSame($expectedKeys, $actualKeys);
        $this->assertSame($expectedElements, $actualElements);
    }

    public function testIteratorWithPopInsideLoop(): void
    {
        $stack = new Stack();
        $stack->push('A');
        $stack->push('B');
        $stack->push('C');
        $stack->push('D');

        $actualKeys = [];
        $actualElements = [];

        foreach (new StackIterator($stack) as $key => $element) {
            if ($element === 'C') {
                $stack->pop();
            }

            $actualKeys[] = $key;
            $actualElements[] = $element;
        }

        $expectedElements = ['D', 'C', 'A'];
        $expectedKeys = [0, 1, 2];

        $this->assertSame($expectedKeys, $actualKeys);
        $this->assertSame($expectedElements, $actualElements);
    }

}