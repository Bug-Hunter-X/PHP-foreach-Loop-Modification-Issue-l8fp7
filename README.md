# PHP Foreach Loop Modification Bug

This repository demonstrates a common error in PHP involving modifying an array while iterating over it using a `foreach` loop.  The `unset()` function within the loop can cause unexpected behavior as it affects the array's internal pointer.

The `bug.php` file contains the problematic code. The `bugSolution.php` file provides a corrected version. 