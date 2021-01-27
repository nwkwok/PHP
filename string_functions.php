<?php

# substr(<str>, start, end)
# Returns a portion of a string

$output = substr('Hello', 1, 5);
$output2 = substr('Hello', -2);
echo "{$output} {$output2}";

# strlen()
# Returns the length of a string


# strpos()
# Finds the position of the first occurence of a sub string
$output = strpos('Hello World', 'o');
// returns index of the last 'o'

# strrpost()
# Finds the position of the last occurence of a subt string
$output = strrpos('Hello World', 'o');
// returns index of the first 'o'

# trim()
# Strips whitespace after variable
# Often used during form submission.

$text = 'Hello World                ';
var_dump($text);
// returns string(chars including whitespace)

$trimmed = trim($text);
var_dump($trimmed);
// return string(chars after stripping whitespace)

# strtoupper - makes everything upper case
# strtolower - makes everything lower case
# ucwords - makes everything pascal case

# str_replace()
# Replace all occurences of a serach string with a replacement

// $text = 'Hello World';
// $outout = str_replace('World', 'Everyone', $text);
// returns 'Hello Everyone', instead of 'Hello World'

# is_string() 
# Check if string

# gzcompress()
# Compresses a long string that becomes unreadable

# gzuncompress(<compressed string>)
# Returns uncompressed text
