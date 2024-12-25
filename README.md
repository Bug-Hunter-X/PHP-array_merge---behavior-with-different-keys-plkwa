# PHP array_merge() behavior with different keys
This example demonstrates unexpected behavior of `array_merge()` when merging arrays with different keys in a recursive function.

## Bug
The provided code attempts to flatten a multidimensional array using `array_merge()`. However, `array_merge()` overwrites keys if they exist in both arrays.  This leads to incorrect results when arrays have different keys at different levels.

## Solution
The solution uses `array_push()` which avoids key conflicts.  Alternatively, one could use a different array flattening technique such as `array_reduce()` or recursive function that builds the result using a key value pair.