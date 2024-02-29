<?php

namespace Test\CancioLabs\Ds\Stack;

use CancioLabs\Ds\Stack\Exception\EmptyStackException;
use CancioLabs\Ds\Stack\Iterator\StackIterator;
use CancioLabs\Ds\Stack\Stack;
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{

    public function testInitialState(): void
    {
        $stack = new Stack();

        $this->assertCount(0, $stack);
        $this->assertTrue($stack->isEmpty());
    }

    /**
     * @after testInitialState
     */
    public function testStackWithOneElement(): void
    {
        $stack = new Stack();

        $stack->push('A');

        $this->assertFalse($stack->isEmpty());
        $this->assertCount(1, $stack);

        $this->assertSame('A', $stack->top());

        // Ensure the top method does not remove the top element.
        $this->assertSame('A', $stack->top());

        $poppedElement = $stack->pop();
        $this->assertSame('A', $poppedElement);

        $this->assertTrue($stack->isEmpty());
        $this->assertCount(0, $stack);
    }

    /**
     * @after testStackWithOneElement
     */
    public function testStackWithThreeElements(): void
    {
        $stack = new Stack();

        $stack->push('A');
        $stack->push('B');
        $stack->push('C');

        $this->assertFalse($stack->isEmpty());

        $this->assertCount(3, $stack);

        // Make sure the top element is always the last one.
        $this->assertSame('C', $stack->top());

        // Make sure the popped element is always the top element.
        $poppedElement = $stack->pop();
        $this->assertSame('C', $poppedElement);

        $this->assertFalse($stack->isEmpty());
        $this->assertCount(2, $stack);

        $this->assertSame('B', $stack->top());
    }

    /**
     * @after testStackWithThreeElements
     */
    public function testClear(): void
    {
        $stack = new Stack();

        $stack->push('A');
        $stack->push('B');
        $stack->push('C');

        $this->assertFalse($stack->isEmpty());
        $this->assertCount(3, $stack);

        $emptyStack2 = $stack->clear();

        $this->assertSame($emptyStack2, $stack);

        $this->assertTrue($stack->isEmpty());
        $this->assertCount(0, $stack);
    }

    public function testGetIterator(): void
    {
        $stack = new Stack();

        $it = $stack->getIterator();

        $this->assertInstanceOf(StackIterator::class, $it);
    }

    public function testPopWhenStackIsEmpty(): void
    {
        $stack = new Stack();

        $this->expectException(EmptyStackException::class);
        $this->expectExceptionMessage('Unable to pop an element as the stack is empty.');

        $stack->pop();
    }

    public function testTopWhenStackIsEmpty(): void
    {
        $stack = new Stack();

        $this->expectException(EmptyStackException::class);
        $this->expectExceptionMessage('Unable to return the top element as the stack is empty.');

        $stack->top();
    }

}