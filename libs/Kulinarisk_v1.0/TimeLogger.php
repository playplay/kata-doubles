<?php

declare(strict_types=1);

namespace AKEI;

final class TimeLogger
{
    private static ?int $executionTime = null;

    static public function resetTimer() {
        static::$executionTime = null;
    }

    static public function getExecutionTime() {
        return static::$executionTime;
    }

    static public function setExecutionTime(int $executionTime):void {
        static::$executionTime = $executionTime;
    }
}