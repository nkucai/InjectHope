<?php 

function clean($string) {
    return strip_tags($string);
}

function get ($key) {
    if (isset($_GET[$key])) {
        return clean($_GET[$key]);
    }
    
    else {
        return '';
    }
}

function post ($key) {
    if (isset($_POST[$key])) {
        return clean($_POST[$key]);
    }
    
    else {
        return '';
    }
}

function session ($key) {
    if (isset($_SESSION[$key])) {
        return clean($_SESSION[$key]);
    }

    else {
        return '';
    }
}


function get_sql($sqlName) {
    return file_get_contents(ROOT . "sql/$sqlName.sql");
}

function humanTiming ($time)
{
    $time = strtotime($time);
    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }
}

