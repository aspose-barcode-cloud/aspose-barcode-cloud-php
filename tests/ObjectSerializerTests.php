<?php

declare(strict_types=1);

use Aspose\BarCode\ObjectSerializer;
use PHPUnit\Framework\TestCase;

final class ObjectSerializerTests extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testToString($obj, $expected): void
    {
        $strVal = ObjectSerializer::toString($obj);
        $this->assertEquals($expected, $strVal);
        $this->assertSame($expected, $strVal);
    }

    public function dataProvider(): array
    {
        return [
            [0, "0"],
            [0.1, "0.1"],
            ["string", "string"],
            [new DateTime("2023-02-09"), "2023-02-09T00:00:00+00:00"],
        ];
    }
}
