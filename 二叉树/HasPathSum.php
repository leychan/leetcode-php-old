<?php
/**
 * Created by chenlei
 * Date 2020/6/18
 * Time 下午2:26
 * Desc
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $sum
     * @return Boolean
     */
    function hasPathSum($root, $sum) {
        if ($root === null) {
            return false;
        }
        //叶子结点的值等于要求的值
        if ($root->left === null && $root->right === null && $root->val === $sum) {
            return true;
        }

        if ($root->left === null && $root->right === null && $root->val !== $sum) {
            return false;
        }

        return $this->hasPathSum($root->left, $sum - $root->val) || $this->hasPathSum($root->right, $sum - $root->val);
    }
}