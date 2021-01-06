<?php
/**
 * Created by chenlei
 * Date 20-10-28
 * Time 下午3:53
 * Desc 13. 罗马数字转整数 https://leetcode-cn.com/problems/roman-to-integer/
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    static function romanToInt($s) {
        $map = [
            '1' => 'I',
            '4' => 'IV',
            '5' => 'V',
            '9' => 'IX',
            '10' => 'X',
            '40' => 'XL',
            '50' => 'L',
            '90' => 'XC',
            '100' => 'C',
            '400' => 'CD',
            '500' => 'D',
            '900' => 'CM',
            '1000' => 'M'
        ];
        $map = array_flip($map); //偷懒
        $result = 0;
        $len = strlen($s);
        for ($i = 0; $i < $len; $i++) {
            $tmp = substr($s, $i, 2);
            if (isset($map[$tmp])) {
                $result += $map[$tmp];
                $i++;
            } else {
                $tmp = substr($s, $i, 1);
                $result += $map[$tmp];
            }
        }
        return $result;
    }
}

$s = 'MCMXCIV';
echo Solution::romanToInt($s);