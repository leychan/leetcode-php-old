<?php

class Solution {

    /**
     * // 如果一个数是3的幂次方，那么质因子只包含3，用3的幂次方最大的整数一定可以整除这个数。整数范围内最大的3的幂次是3的19次幂，即1162261467
     * // 求某个整数是不是3的幂，3的幂结束都是1,3,7,9， 所以结尾不是这些的直接false；
     * @user chenlei
     * @param $n
     * @return bool
     */
    function isPowerOfThree($n) {
        if (!in_array(substr($n, -1), ['1','3','7','9'])) {
            return false;
        }
        return $n > 0 && 1162261467 % $n == 0;
    }
}
