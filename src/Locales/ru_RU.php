<?php

// locale: Русский (Russia) (ru_RU)
// author: Oleg Bogdanov https://github.com/wormen

/**
 * returns ending for plural form of word by number and array of variants (1, 4, 5)
 * example variants for apples ['яблоко', 'яблока', 'яблок']
 */

/**
 * @param int $number
 * @param array $endingArray
 *
 * @return string
 */
return array(
    'months'            => explode('_', 'Января_Февраля_Марта_Апреля_Мая_Июня_Июля_Августа_Сентября_Октября_Ноября_Декабря'),
    'monthsNominative'  => explode('_', 'Январь_Февраль_Март_Апрель_Май_Июнь_Июль_Август_Сентябрь_Октябрь_Ноябрь_Декабрь'),
    'monthsShort'       => explode('_', 'янв_фев_мрт_апр_май_июн_июл_авг_сен_окт_нбр_дек'),
    'weekdays'          => explode('_', 'понедельник_вторник_среда_четверг_пятница_суббота_воскресенье'),
    'weekdaysShort'     => explode('_', 'пн_вт_ср_чт_пт_сб_вс'),
    'calendar'          => array(
        'sameDay'  => '[сегодня]',
        'nextDay'  => '[завтра]',
        'lastDay'  => '[вчера]',
        'lastWeek' => 'l',
        'sameElse' => 'l',
        'withTime' => '[в] H:i',
        'default'  => 'd/m/Y',
    ),
    'relativeTime'      => array(
        'future' => 'через %s',
        'past'   => '%s назад',
        's'      => 'несколько секунд',
        'ss'     => '%d секунд',
        'm'      => 'минуту',
        'mm'     => '%d минут',
        'h'      => 'час',
        'hh'     => '%d часов',
        'd'      => 'день',
        'dd'     => '%d дней',
        'M'      => 'месяц',
        'MM'     => '%d месяцев',
        'y'      => 'год',
        'yy'     => '%d лет',
    ),
    'ordinal'    => 'e',
    'week'          => array(
        'dow' => 1, // Monday is the first day of the week.
        'doy' => 4  // The week that contains Jan 4th is the first week of the year.
    ),
);
