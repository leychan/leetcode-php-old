<?php

/**
 * Created by chenlei
 * Date 2020/6/2
 * Time 下午4:09
 * Desc
 */
class Solution
{

    function numIslands($grid)
    {
        if (empty($grid)) {
            return 0;
        }

        $count = 0;
        $x_len = count($grid);
        $y_len = count($grid[0]);

        for ($x = 0; $x < $x_len; $x++) {
            for ($y = 0; $y < $y_len; $y++) {
                if ($grid[$x][$y] == 1) {
                    $count++;
                    $this->infect($grid, $x, $y);
                }
            }
        }
        return $count;
    }

    //参照leetcode @mata川 的感染方法
    function infect(&$grid, $x, $y)
    {
        if ($x < 0 || $x > count($grid) || $y < 0 || $y > count($grid[0]) || $grid[$x][$y] != 1) {
            return false;
        }
        $grid[$x][$y] = 2;
        $this->infect($grid, $x - 1, $y);
        $this->infect($grid, $x + 1, $y);
        $this->infect($grid, $x, $y - 1);
        $this->infect($grid, $x, $y + 1);
    }
}

$grid = [
    [1, 1, 1, 1, 0],
    [1, 1, 0, 1, 0],
    [1, 1, 0, 0, 0],
    [0, 0, 0, 0, 0]
];

$solution = new Solution();
echo $solution->numIslands($grid);