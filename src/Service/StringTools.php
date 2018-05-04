<?php

namespace Service;

/**
 *  class StringTools
 */
class StringTools
{

    public static function trimWhiteSpaces(string $str):string
    {
        $maxLen = strlen($str);
        $stop = false;

        for ($i = 0; $i < $maxLen; $i++) {
            if ($str[$i] == CHR(32) && $stop != true) {
                $str[$i] = '';
            } else {
                $stop = true; //on n'est plus dans le cas du début de chaine
            }
        }
        return $str;
    }
}