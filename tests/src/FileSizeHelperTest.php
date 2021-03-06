<?php

namespace Nameless\Utilities\Tests;

use Nameless\Utilities\FileSizeHelper;

class FileSizeHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testHumanize()
    {
        self::assertEquals('512.00B', FileSizeHelper::humanize(512));
        self::assertEquals('1KB', FileSizeHelper::humanize(1024, 0));
        self::assertEquals('953.67MB', FileSizeHelper::humanize(1000000000));
        self::assertEquals('954MB', FileSizeHelper::humanize(1000000000, 0));
        self::assertEquals('953.6743MB', FileSizeHelper::humanize(1000000000, 4));
        self::assertEquals('827180612553YB', FileSizeHelper::humanize(1000000000000000000000000000000000000, 0));
    }

    public function testUnhumanize()
    {
        self::assertEquals(1024, FileSizeHelper::unhumanize('1KB'));
        self::assertEquals(999995474, FileSizeHelper::unhumanize('953.67MB'));
        self::assertEquals(1000341504, FileSizeHelper::unhumanize('954MB'));
    }
}
