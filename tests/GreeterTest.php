<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        // Arrange: siapkan objek yang diuji
        $greeter = new Greeter();

        // Act: jalankan perilaku yang diuji
        $greeting = $greeter->greet('Alice');

        // Assert: bandingkan hasil dengan harapan
        $this->assertEquals('Hello, Alice!', $greeting);
    }
}