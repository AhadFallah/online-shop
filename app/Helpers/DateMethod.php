<?php

use Morilog\Jalali\Jalalian;

if(!function_exists('persianToEnglish')) {
    function persianToEnglish(string $date)
    {
        $jalaliDate = Jalalian::fromFormat('Y/m/d', $date, null);
        $gregorianDate = $jalaliDate->toCarbon();
        return $gregorianDate;

    }
}

if(!function_exists('englishToPersian')) {
    function englishToPersian(string $date)
    {

        $jalaliDate = Jalalian::fromDateTime($date, )->format('Y/m/d');
        return $jalaliDate;

    }
}

if(!function_exists('englishToPersianWithTime')) {
    function englishToPersianWithTime(string $dateAndTime)
    {
        $persianDateTime = Jalalian::fromDateTime($dateAndTime)->format('Y/m/d H:i:s');
        return $persianDateTime;
    }
}

if(!function_exists('englishToPersianWithUnderscore')) {
    function englishToPersianWithUnderscore(string $date)
    {

        $jalaliDate = Jalalian::fromDateTime($date, )->format('Y_m_d_his');
        return $jalaliDate;

    }
}
