<?php
function tolink($text){
        $text = html_entity_decode($text);
        $text = " ".$text;
        $text = str_replace('(((f|ht){1}tp://)[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
                '<a href="\\1">\\1</a>', $text);
        $text = str_replace('([[:space:]()[{}])(www.[-a-zA-Z0-9@:%_\+.~#?&//=]+)',
        '\\1<a href="http://\\2">\\2</a>', $text);
        $text = str_replace('([_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3})',
        '<a href="mailto:\\1">\\1</a>', $text);
        return $text;
}
?>