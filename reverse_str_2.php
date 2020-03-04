<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    static function reverseStr($s, $k) {
        $len = strlen($s);
        $return = '';
        if ($len < $k) {
            return strrev($s);
        } elseif ($k <= $len && $len < ($k * 2)) {
            $return = strrev(substr($s, 0, $k)) . substr($s, $k);
        } else {
            $repeat = floor($len / ($k * 2));
            for ($i = 0; $i < $repeat; $i++) {
                $tmp = substr($s, $i * $k * 2, $k * 2);
                $return .= strrev(substr($tmp, 0, $k)) . substr($tmp, $k, $k);
                echo $return, PHP_EOL;
            }
            $left = $len % (2 * $k);
            //echo 'left ', $left, PHP_EOL;
            if ($left < $k && $left != 0) {
                $return .= strrev(substr($s, $repeat * $k * 2));
            } else {
                $return .= strrev(substr($s, $repeat * $k * 2, $k)) . substr($s, $repeat * $k * 2 + $k);
            }
        }
        return $return;
    }
}
$s = 'abcdefg'; //bacdgfe
var_dump(Solution::reverseStr($s, 8));