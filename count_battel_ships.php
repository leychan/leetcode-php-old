<?php

class Solution {

    /**
     * @desc 核心就是按照每一行扫描元素是否等于X,如果等于X，就找左边或者上边的元素是否也是X,如果是X，则说明当前X已被统计过，跳过，否则就加一
     * @user chenlei
     * @param string[][] $board
     * @return int
     */
    function countBattleships($board) {
        $h = count($board);
        $len = count($board[0]);
        $count = 0;
        for ($i = 0; $i < $h; $i++) {
            for ($j = 0; $j < $len; $j++) {
                if ($board[$i][$j] == 'X') {
                    if ((empty($board[$i-1][$j]) ||  $board[$i-1][$j] != 'X')
                        && (empty($board[$i][$j-1]) || $board[$i][$j-1] != 'X')) {
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
}

$board = [["X",".",".","X"],[".",".",".","X"],[".",".",".","X"]];
$sol = new Solution();
echo $sol->countBattleships($board);