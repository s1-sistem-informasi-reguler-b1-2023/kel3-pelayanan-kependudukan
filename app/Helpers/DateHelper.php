<?php

namespace App\Helpers;

class DateHelper
{
    public static function formatAsIndonesianDate($date, $showHour = false, $showMinute = false, $showSecond = false)
    {
        // Convert the date to Unix timestamp
        $unixDate = strtotime($date);

        // Array of month names in Indonesian
        $monthNames = array(
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        );

        // Format the Indonesian date
        $indonesianDate = date('d', $unixDate) . ' ' . $monthNames[date('n', $unixDate)] . ' ' . date('Y', $unixDate);

        // Add hour, minute, and second format if needed
        if ($showHour) {
            $indonesianDate .= ' ' . date('H', $unixDate);
            if ($showMinute) {
                $indonesianDate .= ':' . date('i', $unixDate);
                if ($showSecond) {
                    $indonesianDate .= ':' . date('s', $unixDate);
                }
            }
        }

        return $indonesianDate;
    }
}
