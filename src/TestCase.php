<?php

namespace Shield\Testing;

use Illuminate\Http\Request;
use Orchestra\Testbench\TestCase as TestBench;

/**
 * Class TestCase
 *
 * @package \Shield\Testing
 */
class TestCase extends TestBench
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ShieldServiceProvider::class
        ];
    }


    /**
     * @param null $content
     *
     * @return static
     */
    protected function request($content = null)
    {
        return Request::create('http://example.com', 'POST', [], [], [], [], $content);
    }
}
