<?php

class Solution {

    /**
     * @param String $version1
     * @param String $version2
     * @return Integer
     */
    static function compareVersion($version1, $version2) {
        $version1_arr = explode('.', $version1);
        $version2_arr = explode('.', $version2);
        $len = max(count($version1_arr), count($version2_arr));
        $result = 0;
        for ($i = 0; $i < $len; $i++) {
            $tmp1 = self::removeZeroAtFront($version1_arr[$i] ?? 0);
            $tmp2 = self::removeZeroAtFront($version2_arr[$i] ?? 0);
            if ( $tmp1 === $tmp2) {
                continue;
            }
            if ($tmp1 < $tmp2) {
                return -1;
            }
            if ($tmp1 > $tmp2) {
                return 1;
            }
        }
        return $result;
    }

    static function removeZeroAtFront($num) {
        return (int)ltrim($num, '0');
    }
}

echo Solution::compareVersion('1.001.2', '1.01');