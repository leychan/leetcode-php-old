<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $s_arr = str_split($s);
        $t_arr = str_split($t);
        $len = strlen($s);
        $s_arr_unique = array_unique($s_arr);
        $t_arr_unique = array_unique($t_arr);
        $arr = array_flip($s_arr_unique);
        for ($i = 0; $i < $len; $i++) {
            $s_arr[$i] = $t_arr_unique[$arr[$s_arr[$i]]];
        }
        $s = implode('', $s_arr);
        return $s == $t;
    }
}
$s = 'agg';
$t = 'err';
$so = new Solution();
var_dump($so->isIsomorphic($s, $t));