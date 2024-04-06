<?php

/**
 * date: https://leetcode.com/problems/third-maximum-number/
 * date: 06.04.2023
 * @param int[] $nums
 * @return int
 */
function thirdMax($nums)
{
    $count=count($nums);
    
    if($count<=2){

        return $nums[$count - 1];
    }
    
    $nums = array_unique($nums);
    
    rsort($nums);
    
    $count = count($nums);

    if ($count <= 2) { 

        return $nums[0];
    }

    return $nums[2];
}
echo thirdMax([1,2]);

// Example 1:
// Input: nums = [3,2,1]
// Output: 1
// Explanation:
// The first distinct maximum is 3.
// The second distinct maximum is 2.
// The third distinct maximum is 1.

// Example 2:
// Input: nums = [1,2]
// Output: 2
// Explanation:
// The first distinct maximum is 2.
// The second distinct maximum is 1.
// The third distinct maximum does not exist, so the maximum (2) is returned instead.

// Example 3:
// Input: nums = [2,2,3,1]
// Output: 1
// Explanation:
// The first distinct maximum is 3.
// The second distinct maximum is 2 (both 2's are counted together since they have the same value).
// The third distinct maximum is 1.
