<?php

class Solution {

    /**
     * // 把每个3[ac]当作一个单元处理，每次匹配到这个，肯定是最小的或者是包含在最里层的单元，解码最小的单元，一层层解码得到最后的字符串
     * @user chenlei
     * @param $s
     * @return string|string[]|null
     */
    function decodeString($s) {
        while (preg_match('/([\d]+\[\w+\])/', $s, $matches)) {
            $match = $matches[1];
            $s = preg_replace('/([\d]+\[\w+\])/', ' ', $s, 1);
            $s = str_replace(' ', $this->translate($match), $s);
        }
        return $s;
    }


    function translate($str) {
        preg_match('/[\d]+/', $str, $matches);
        //print_r($matches);
        $repeat_num = $matches[0];
        preg_match('/\[(\w+)\]/', $str, $matches);
        //print_r($matches);

        $repeat_str = $matches[1];
        return str_repeat($repeat_str, $repeat_num);
    }
}