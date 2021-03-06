<?php

namespace Nameless\Utilities\Tests;

use Nameless\Utilities\PathHelper;

class PathHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testToUrl()
    {
        self::assertEquals(
            '/path/to/url',
            PathHelper::toURL(
                '/var/www/example.com/public/path/to/url',
                '/var/www/example.com/public/'
            )
        );

        self::assertEquals(
            '/path/to/url',
            PathHelper::toURL(
                '/var/www/example.com/public/path/to/url',
                '/var/www/example.com/public/'
            )
        );

        self::assertEquals(
            '/path/to/url',
            PathHelper::toURL(
                '/var/www/example.com/public/path/to/url',
                '/var/www/example.com/public'
            )
        );

        self::assertEquals(
            '/path/to/url',
            PathHelper::toURL(
                'C:\www\example.com\public\path\to\url',
                'C:\www\example.com\public\\'
            )
        );

        self::assertEquals(
            '/path/to/url',
            PathHelper::toURL(
                '/var/www/example.com/public/path/to/url',
                '\var\www\example.com\public'
            )
        );
    }
}
