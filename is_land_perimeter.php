<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    static function islandPerimeter($grid) {
        $len = count($grid);
        $width = count($grid[0]);
        $perimeter = 0;
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $width; $j++) {
                if ($grid[$i][$j] == 1) {
                    if (empty($grid[$i-1][$j]) || $grid[$i-1][$j] == 0) {
                        $perimeter++;
                    }
                    if (empty($grid[$i][$j-1]) || $grid[$i][$j-1] == 0) {
                        $perimeter++;
                    }
                    if (empty($grid[$i+1][$j]) || $grid[$i+1][$j] == 0) {
                        $perimeter++;
                    }
                    if (empty($grid[$i][$j+1]) || $grid[$i][$j+1] == 0) {
                        $perimeter++;
                    }
                }
            }
        }
        return $perimeter;
    }
}

$grid = [[0,1,0,0],
    [1,1,1,0],
    [0,1,0,0],
    [1,1,0,0]];
echo Solution::islandPerimeter($grid);