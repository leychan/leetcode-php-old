<?php
/**
 * Created by chenlei
 * Date 2020/6/5
 * Time 上午10:32
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
/**
 * 思路:
 * 判断是否对称,首先如果根节点是null,则对称
 * 如果根节点不为null:
 *   左子树与右子树对称,则此树为镜像对称
 * 如何判断左子树与右子树镜像对称:
 *   左子树的根节点值等于右子树的根结点值,且左子树的左子树结点值等于右子树的右子树结点值,且左子树的右子树结点值等于右子树的左子树结点值
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        if ($root->val === null) {
            return true;
        }
        return $this->check($root->left, $root->right);
    }

    function check($left, $right) {
        if ($left === null && $right === null) {
            return true;
        }
        if ($left->val !== $right->val) {
            return false;
        }
        return $this->check($left->left, $right->right) && $this->check($left->right, $right->left);
    }
}