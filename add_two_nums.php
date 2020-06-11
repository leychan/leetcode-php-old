<?php
/**
 * Created by chenlei
 * Date 2020/6/10
 * Time 下午4:50
 * Desc
 */

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}

class Solution {
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $carry = 0;
        $result = new ListNode($carry);
        $head = $result;
        while ($l1 !== null || $l2 !== null) {
            $tmp = 0;
            if ($l1 !== null) {
                $tmp += $l1->val;
                $l1 = $l1->next;
            }
            if ($l2 !== null) {
                $tmp += $l2->val;
                $l2 = $l2->next;
            }

            //临时存放上一轮进位值和这一轮相加值的和
            $tmp2 = $result->val + $tmp;

            $result->val = $tmp2 % 10;
            $carry = intdiv($tmp2, 10);
            //如果两个链表都是空,并且没有进位,退出循环
            if ($l2 === null && $l1 === null && $carry === 0) {
                break;
            }

            //新建结点, 结点初始值是进位值
            $result->next = new ListNode($carry);
            $result = $result->next;
        }
        return $head;
    }
}

$l1 = new ListNode(1);
$l2 = new ListNode(9);
$l2->next = new ListNode(9);

print_r((new Solution())->addTwoNumbers($l1, $l2));
