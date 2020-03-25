<?php
$comment = <<<'COMMENT'
Bitwise example:

$a = 5;
$b = 5 >> 2;
$c = 5 << 2;

$b * $c = 
COMMENT;

$a = 5;
$b = 5 >> 2;
$c = 5 << 2;
echo $comment . ($b * $c) . PHP_EOL; //20
