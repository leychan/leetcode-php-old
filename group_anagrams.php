<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    static function groupAnagrams($strs) {
        $len = count($strs);
        if ($len <= 1) {
            return [$strs];
        }
        $tmp_arr = [];
        for ($i = 0; $i < $len; $i++) {
            $cur = $strs[$i];
            $cur_arr = str_split($cur);
            sort($cur_arr);
            $tmp_arr[implode('', $cur_arr)][] = $cur;
        }
        return array_values($tmp_arr);
    }
}

$strs = ["eat", "tea", "tan", "ate", "nat", "bat"];
$strs = ['aa', 'aa'];
print_r(Solution::groupAnagrams($strs));