<?php

class Solution {

    /**
     * @desc 核心就是统计字符串中的字母的个数，把偶数个字母的个数相加， 然后把奇数个字母的统计结果，每个字母的统计结果减一（变成偶数个），
     *       然后相加，最后加一，因为中间可以放一个单独的字母
     * @user chenlei
     * @param $s
     * @return int|mixed
     */
    function longestPalindrome($s) {
        $arr = str_split($s);
        $count_arr = array_count_values($arr);
        print_r($count_arr);
        $is_odd = 0;
        $result = 0;
        foreach ($count_arr as $value) {
            if ($value % 2 === 0) {
                $result += $value;
            } else {
                $is_odd = 1;
                $result += $value - 1;
            }
        }
        if ($is_odd) {
            $result++;
        }
        return $result;
    }
}

$s = 'civilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedicatedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoheregavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsecratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldadswfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinishedworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromthesehonoreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothavediedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth';
$sol = new Solution();
echo $sol->longestPalindrome($s);