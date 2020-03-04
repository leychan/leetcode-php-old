<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    private static $keyboard = [
        ['Q', 'W', 'E', 'R', 'T', 'Y', 'U', 'I', 'O', 'P'],
        ['A', 'S', 'D', 'F', 'G', 'H', 'J', 'K', 'L'],
        ['Z', 'X', 'C', 'V', 'B', 'N', 'M']
    ];
    static function findWords($words) {
        $record = [];
        foreach ($words as $word) {
            $character_arr = str_split($word);
            $flag = [];
            foreach ($character_arr as $character) {
                if (count($flag) > 1) {
                    break;
                }
                foreach (self::$keyboard as $k => $v) {
                    if (in_array(strtoupper($character), $v)) {
                        if (!in_array($k, $flag)) {
                            array_push($flag, $k);
                        }
                    }
                }
            }

            if (count($flag) == 1) {
                array_push($record, $word);
            }
        }
        return $record;
    }
}

$words = ["Hello", "Alaska", "Dad", "Peace"];
var_dump(Solution::findWords($words));