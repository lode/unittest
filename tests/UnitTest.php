<?php

use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase {
	public function testSuccess() {
		$this->assertTrue(true);
	}
	
	public function testAnything() {
		$this->assertSame(42, 42);
	}
}
