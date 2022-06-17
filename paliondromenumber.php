<?php  

class Solution {

    /**
     * @param Integer $number
     * @return Boolean
     */
    function isPalindrome($number) {
        $reversedNumber = strrev($number);
        if($reversedNumber==$number) return true;
        return false;
    }
}

$solution = new Solution;
echo $solution->isPalindrome(121);