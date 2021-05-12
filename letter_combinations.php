<?php

/**
 * Class Solution 17. 电话号码的字母组合
 */
class Solution {

    public static $map = [
            2 => ['a', 'b', 'c'],
            3 => ['d', 'e', 'f'],
            4 => ['g', 'h', 'i'],
            5 => ['j', 'k', 'l'],
            6 => ['m', 'n', 'o'],
            7 => ['p', 'q', 'r', 's'],
            8 => ['t', 'u', 'v'],
            9 => ['w', 'x', 'y', 'z']
        ];

    /**
     * @param String $digits
     * @return String[]
     */
    static function letterCombinations($digits) {
        $result = [];
        if ($digits === '') {
            return $result;
        }

        $digits_arr = str_split($digits);
        if (strlen($digits) === 1) {
            return self::$map[$digits_arr[0]];
        }

        $characters = [];
        foreach ($digits_arr as $digit) {
            $characters[] = self::$map[$digit];
        }
        foreach ($characters as $c) {
            self::makeCombinations($result, $c);
        }
        return $result;
    }

    static function makeCombinations(&$result, $character) {
        if (empty($result)) {
            $result = $character;
            return;
        }

        $tmp = [];
        foreach ($character as $a) {
            foreach ($result as $r) {
                $tmp[] = $r . $a;
            }
        }
        $result = $tmp;
        unset($tmp);
    }
}

$digits = '234';

var_dump(Solution::letterCombinations($digits));