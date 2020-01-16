<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        echo $s, PHP_EOL;
        $s = trim($s);
        $arr = explode(' ', $s);
        foreach ($arr as $key => $value) {
            if ($value == '') {
                unset($arr[$key]);
            }
        }
        //$arr = array_filter($arr);
        $arr = array_reverse($arr);
        return implode(' ', $arr);
    }
}

$str = "the sky is blue";
$s = new Solution();
var_dump($s->reverseWords($str));