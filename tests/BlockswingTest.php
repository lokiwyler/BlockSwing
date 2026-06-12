<?php
/**
 * Tests for BlockSwing
 */

use PHPUnit\Framework\TestCase;
use Blockswing\Blockswing;

class BlockswingTest extends TestCase {
    private Blockswing $instance;

    protected function setUp(): void {
        $this->instance = new Blockswing(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockswing::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
