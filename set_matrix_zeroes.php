<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    static function setZeroes(&$matrix) {
        $row = count($matrix);
        $col = count($matrix[0]);
        //记录第一行是否需要置零
        $row_need = false;
        //记录第一列是否需要置零
        $col_need = false;
        for ($i = 0; $i < $col; $i++) {
            if ($matrix[0][$i] == 0) {
                $row_need = true;
            }
        }
        for ($i = 0; $i < $row; $i++) {
            if ($matrix[$i][0] == 0) {
                $col_need = true;
            }
        }
        for ($i = 1; $i < $row; $i++) {
            for ($j = 1; $j < $col; $j++) {
                if ($matrix[$i][$j] == 0) {
                    $matrix[0][$j] = 0;
                    $matrix[$i][0] = 0;
                }
            }
        }

        for ($i = 1; $i < $col; $i++) {
            if ($matrix[0][$i] == 0) {
                for ($j = 0; $j < $row; $j++) {
                    $matrix[$j][$i] = 0;
                }
            }
        }
        for ($i = 1; $i < $row; $i++) {
            if ($matrix[$i][0] == 0) {
                for ($j = 0; $j < $col; $j++) {
                    $matrix[$i][$j] = 0;
                }
            }
        }

        if ($row_need) {
            for ($j = 0; $j < $col; $j++) {
                $matrix[0][$j] = 0;
            }
        }
        if ($col_need) {
            for ($j = 0; $j < $row; $j++) {
                $matrix[$j][0] = 0;
            }
        }
    }
}

$matrix = [[0,1,2,0],[3,4,5,2],[1,3,1,5]];
//$matrix = [[1,0,3]];
Solution::setZeroes($matrix);
print_r($matrix);
