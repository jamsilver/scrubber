<?php

namespace ClntDev\Scrubber\Tests;

use ClntDev\Scrubber\Tests\Support\Fakes\Log;
use ClntDev\Scrubber\Tests\Support\HandlerFactory;
use PHPUnit\Framework\TestCase as PHPUnit;

class TestCase extends PHPUnit
{
    protected function setUp(): void
    {
        $this->handlerFactory = new HandlerFactory();
        $this->logger = new Log();

        parent::setUp();
    }
}
