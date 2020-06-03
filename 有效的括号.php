<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $length = strlen($s);
        // 空字符串
        if ($length == 0) {
            return true;
        }

        // 字符串长度不为偶数
        if ($length % 2 == 1) {
            return false;
        }

        $arr_raw = str_split($s);
        $arr_front = [];
        foreach ($arr_raw as $value) {
            if (in_array($value, ['(', '[', '{'])) {
                array_unshift($arr_front, $value);
            } else {
                switch ($value) {
                    case ')':
                        if ($arr_front[0] == '(') {
                            array_shift($arr_front);
                        }
                        break;
                    case ']':
                        if ($arr_front[0] == '[') {
                            array_shift($arr_front);
                        }
                        break;
                    case '}':
                        if ($arr_front[0] == '{') {
                            array_shift($arr_front);
                        }
                        break;
                    default:
                }
            }
        }
        $count = count($arr_front);
        if ($count) {
            return false;
        }
        return true;
    }

    function isValid2($s) {
        while(strpos($s, '()') !== false || strpos($s, '[]') !== false || strpos($s, '{}') !== false) {
            str_replace('()', '', $s);
            str_replace('[]', '', $s);
            str_replace('{}', '', $s);
        }
        return $s == '';
    }
}

