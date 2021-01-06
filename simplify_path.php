<?php
/**
 * Created by chenlei
 * Date 20-11-3
 * Time 下午2:21
 * Desc 71. 简化路径 https://leetcode-cn.com/problems/simplify-path/
 */

class Solution {

    /**
     * @param String $path
     * @return String
     */
    static function simplifyPath($path) {
        if (strlen($path) == 0) {
            return $path;
        }
        $path_arr = explode('/', $path);
        $result_arr = [];
        foreach ($path_arr as $p) {
            //遇到'.'和''直接跳过
            if ($p == '.' || $p == '') {
                continue;
            }
            //遇到'..',弹出前一个元素
            if ($p == '..') {
                array_shift($result_arr);
                continue;
            }
            array_unshift($result_arr, $p);
        }
        $result_arr = array_reverse($result_arr);
        return '/' . implode('/', $result_arr);
    }
}

$path = "/home//foo/";
echo Solution::simplifyPath($path);