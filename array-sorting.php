<?php

function searchInsert($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
}

echo "Enter the elements of the array separated by spaces: ";
$input = trim(fgets(STDIN));
$nums = explode(" ", $input);

$nums = array_map('intval', $nums);

echo "Enter the target number: ";
$target = intval(trim(fgets(STDIN)));

sort($nums);

echo "Output: " . searchInsert($nums, $target) . "\n";
