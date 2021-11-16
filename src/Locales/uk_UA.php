<?php

// locale: Українська (Ukrainian) (uk_UA)
// author: Mykola Pukhalskyi

/**
 * returns ending for plural form of word by number and array of variants (1, 4, 5)
 * example variants for apples ['яблуко', 'яблука', 'яблук']
 */

return array(
    'months'            => explode('_', 'Січня_Лютого_Березня_Квітня_Травня_Червня_Липня_Серпня_Вересня_Жовтня_Листопада_Грудня'),
    'monthsNominative'  => explode('_', 'Січень_Лютий_Березень_Квітень_Травень_Червень_Липень_Серпень_Вересень_Жовтень_Листопад_Грудень'),
    'monthsShort'       => explode('_', 'січ_лют_бер_квіт_трав_черв_лип_серп_вер_жовт_лист_груд'),
    'weekdays'          => explode('_', 'понеділок_вівторок_середа_четвер_п’ятниця_субота_неділя'),
    'weekdaysShort'     => explode('_', 'пн_вт_ср_чт_пт_сб_нд'),
    'calendar'          => array(
        'sameDay'  => '[сьогодні]',
        'nextDay'  => '[завтра]',
        'lastDay'  => '[вчора]', // or "учора".
        'lastWeek' => 'l',
        'sameElse' => 'l',
        'withTime' => '[о] H:i',
        'default'  => 'd-m-Y',
    ),
    'relativeTime'      => array(
//        'future' => 'о %s', // or "об"
        'future' => 'о %s',
        'past'   => '%s тому',
        's'      => 'кілька секунд',
        'ss'      => 'кілька секунд',   // needs review by native speaker see https://github.com/fightbulc/moment.php/issues/166
        'm'      => 'хвилину',
        'mm'     => '%d хвилин',
        'h'      => 'година',
        'hh'     => '%d годин',
        'd'      => 'день',
        'dd'     => '%d днів',
        'M'      => 'місяць',
        'MM'     => '%d місяців',
        'y'      => 'рік',
        'yy'     => '%d років',
    ),
    'ordinal'       => '[th]',
    'week'          => array(
        'dow' => 1, // Monday is the first day of the week.
        'doy' => 4  // The week that contains Jan 4th is the first week of the year.
    ),
);
