<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class EmailThreeTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            EmailThree::class,
            EmailThree::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        EmailThree::fromString('user@example.com');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            EmailThree::fromString('user@example.com')
        );
    }
}
