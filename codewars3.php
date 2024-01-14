<?php
function solution($number)
{
    $result =0;
    for ($n=1; $n < $number; $n++)
    {
        if ($n % 3 === 0 || $n % 5 === 0)
            $result += $n;
    }
    return $result;
}
echo solution(10);

//foreach (range(1, 23) as $v) {
//    if ($v % 3 === 0 || $v % 5 === 0) echo $v;
//}
