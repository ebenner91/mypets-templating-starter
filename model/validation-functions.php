<?php

    function validColor($color)
    {
        $colors = array('Pink', 'Blue', 'Red', 'Green', 'Yellow', 'Orange', 'Purple');
        return in_array($color, $colors);
    }
    
    function validType($type)
    {
        return !empty($type) && ctype_alpha($type);
    }
    
    function validName($name)
    {
        return (strlen($name) >= 2) && ctype_alnum($name);
    }