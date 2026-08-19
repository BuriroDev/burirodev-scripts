<?php

namespace BuriroDev\Helpers;

class DateHelper
{
    /**
     * Format a timestamp into Pakistan Standard Time (UTC+5)
     * Example: 19-08-2026 11:45 PM
     */
    public static function formatPakistani($timestamp)
    {
        return date('d-m-Y h:i A', $timestamp);
    }

    /**
     * Get the current time in Pakistan with a custom format.
     */
    public static function now($format = 'd-m-Y h:i A')
    {
        return date($format, time());
    }
}
