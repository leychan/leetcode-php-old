<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function frequencySort($s) {
        $s_arr = str_split($s);
        $arr = array_count_values($s_arr);
        $result = '';
        arsort($arr);
        foreach ($arr as $key => $value) {
            $result .= str_repeat($key, $value);
        }
        return $result;
    }
}

$s = 'tree';
$sol = new Solution();
echo $sol->frequencySort($s);