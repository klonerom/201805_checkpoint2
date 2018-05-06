<?php

namespace Service;

/**
 *  class StringTools
 */
class StringTools
{

    /**
     * @param string $str
     * @return string
     */
    public static function trimWhiteSpaces(string $str):string
    {
        $maxLen = strlen($str);
        $positionFirstCaract = 0;
        $stopLoop = false;

        for ($i = 0; $i < $maxLen; $i++) {
            if ($str[$i] === CHR(32) && $stopLoop !=true) {
                $positionFirstCaract++;
                echo $str[$i]."\n";
            } else {
                $stopLoop = true;//Stop loop because 1st charact no space
            }
        }

        $str = substr($str, $positionFirstCaract);

        return $str;
    }
}
//
//$test = new StringTools();
//echo $test->trimWhiteSpaces('       hello wilder');
