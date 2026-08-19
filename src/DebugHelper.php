<?php

namespace BuriroDev\Helpers;

class DebugHelper
{
    /**
     * My custom die_dump that shows the exact file & line.
     * Inspired by my senior who taught me die() for debugging.
     */
    public static function inspect($data)
    {
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
        $file = $backtrace[0]['file'] ?? 'unknown';
        $line = $backtrace[0]['line'] ?? 'unknown';

        echo "<pre style='background: #1e1e1e; color: #d4d4d4; padding: 15px; border-radius: 6px;'>";
        echo "<strong style='color: #f48771;'>🔍 Debugging at:</strong> " . $file . ":" . $line . "\n\n";
        var_dump($data);
        echo "</pre>";

        die();
    }
}
