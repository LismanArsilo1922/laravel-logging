<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Log;

class LoggingTest extends TestCase
{

    // public function testLogging()
    // {
    //     Log::info('Hello Info');
    //     Log::warning('Hello Warning');
    //     Log::error("Hello Error");
    //     Log::critical("Hello Critical");

    //     self::assertTrue(true);
    // }

    // public function testContext()
    // {
    //     Log::info('Hello Context', ['user' => 'Lisman']);

    //     self::assertTrue(true);
    // }

    // public function testWithContext()
    // {
    //     Log::withContext(['user' => 'lisman']);

    //     Log::info('Hello Info Context');
    //     Log::warning('Hello Warning Context');
    //     Log::error("Hello Error Context");
    //     Log::critical("Hello Critical Context");

    //     self::assertTrue(true);
    // }

    // public function testChannel()
    // {
    //     $slackLogger = Log::channel('slack');
    //     $slackLogger->error('Hello Slack'); //Send To slack channel

    //     Log::info('Hello Laravel'); //Send to default channel
    //     self::assertTrue(true);
    // }

    public function testHandler()
    {
        $fileLogger = Log::channel('file');
        $fileLogger->error('file error');
        $fileLogger->warning('file error');
        $fileLogger->info('file error');

        self::assertTrue(true);
    }
}
