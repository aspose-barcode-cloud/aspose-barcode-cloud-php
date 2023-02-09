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
        $this->assertEquals($expected, ObjectSerializer::toString($obj));
    }

    public function dataProvider(): array
    {
        return [
            ["string", "string"],
            [new DateTime("2023-02-09"), "2023-02-09T00:00:00+00:00"],
        ];
    }
}
