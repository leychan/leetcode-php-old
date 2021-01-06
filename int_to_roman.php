<?php
/**
 * Created by chenlei
 * Date 20-10-28
 * Time 下午2:43
 * Desc 12. 整数转罗马数字 https://leetcode-cn.com/problems/integer-to-roman/
 */

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    static function intToRoman($num) {
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
        $result = '';
        $thousand = (int)($num / 1000);
        $hundred = (int)($num % 1000 / 100);
        $ten = (int)($num % 100 / 10);
        $single = (int)($num % 10);
        if ($thousand) {
            $result .= str_repeat('M', $thousand);
        }
        if ($hundred) {
            if (isset($map[$hundred . '00'])) {
                $result .= $map[$hundred . '00'];
            } else {
                if ($hundred < 5) {
                    $result .= str_repeat('C', $hundred);
                } else {
                    $result .= $map['500'] . str_repeat('C', $hundred - 5);
                }
            }
        }
        if ($ten) {
            if (isset($map[$ten . '0'])) {
                $result .= $map[$ten . '0'];
            } else {
                if ($ten < 5) {
                    $result .= str_repeat('X', $ten);
                } else {
                    $result .= $map['50'] . str_repeat('X', $ten - 5);
                }
            }
        }
        if ($single) {
            if (isset($map[$single])) {
                $result .= $map[$single];
            } else {
                if ($single < 5) {
                    $result .= str_repeat('I', $single);
                } else {
                    $result .= 'V' . str_repeat('I', $single - 5);
                }
            }
        }
        return $result;
    }
}

$num = 58;
echo Solution::intToRoman($num);