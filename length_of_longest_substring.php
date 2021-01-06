<?php
/**
 * Created by chenlei
 * Date 20-10-27
 * Time 下午3:14
 * Desc 3. 无重复字符的最长子串 https://leetcode-cn.com/problems/longest-substring-without-repeating-characters/
 */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    static function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        if ($len == 1) {
            return 1;
        }
        if ($len == 0) {
            return 0;
        }
        $max = 1;
        $left = substr($s, 0, 1);
        $tmp[] = $left;
        for ($i = 1; $i <= $len - 1; $i++) {
            $right = substr($s, $i, 1);
            if (!in_array($right, $tmp)) {
                $tmp[] = $right;
                $max = count($tmp) > $max ? count($tmp) : $max;
            } else {
                $pos = array_search($right, $tmp);
                $tmp = array_slice($tmp, $pos + 1);
                $tmp[] = $right;
            }
//            var_dump($tmp);
        }
        return $max;
    }
}

$s = "aabaab!bb";
//$s = "pwwkew";
echo Solution::lengthOfLongestSubstring($s);