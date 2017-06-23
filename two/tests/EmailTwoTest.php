<?php

use PHPUnit\Framework\TestCase;

/**
 * @covers Email
 */
final class EmailTwoTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            EmailTwo::class,
            EmailTwo::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        $this->expectException(InvalidArgumentException::class);

        EmailTwo::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            EmailTwo::fromString('user@example.com')
        );
    }
}
