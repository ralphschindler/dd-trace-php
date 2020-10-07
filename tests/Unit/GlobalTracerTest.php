<?php

namespace DDTrace\Tests\Unit;

use DDTrace\GlobalTracer;
use DDTrace\Tracer;
use DDTrace\Transport\Noop;

final class GlobalTracerTest extends BaseTestCase
{
    public function testDDTracerIsSetAsIs()
    {
        $tracer = new Tracer(new Noop());
        GlobalTracer::set($tracer);
        $this->assertSame($tracer, GlobalTracer::get());
    }
}
