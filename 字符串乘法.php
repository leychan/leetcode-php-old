<?php
/**
 * Created by chenlei
 * Date 2020/6/4
 * Time 上午9:20
 * Desc
 */

class Solution {

    function s($s1, $s2) {
        $len1 = strlen($s1);
        $len2 = strlen($s2);

        $res = array_fill(0, $len1 + $len2, 0);

        for ($i = $len1 - 1; $i >= 0; $i--) {
            for ($j = $len2 - 1; $j >= 0; $j--) {
                $mul = $s1[$i] * $s2[$j];
                $p1 = $i + $j;
                $p2 = $i + $j + 1;
                $sum = $mul + $res[$p2];
                $res[$p2] = $sum % 10;
                $res[$p1] += intdiv($sum, 10); //加上进位

            }
        }

        $i = 0;
        while (($i <= $len1 + $len2 - 1) && $res[$i] == 0) {
            unset($res[$i]);
            $i++;
        }

        return implode("", $res);
    }
}

$s1 = '123';
$s2 = '45';

$solution = new Solution();
echo $solution->s($s1, $s2);