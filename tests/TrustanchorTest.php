<?php
/**
 * Tests for TrustAnchor
 */

use PHPUnit\Framework\TestCase;
use Trustanchor\Trustanchor;

class TrustanchorTest extends TestCase {
    private Trustanchor $instance;

    protected function setUp(): void {
        $this->instance = new Trustanchor(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Trustanchor::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
