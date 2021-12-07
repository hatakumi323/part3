<?php

function g($i)
{
  return $i;
}

function summationOfi($a, $b)
{
  if ($b < $a) {
    return 0;
  }
  return g($b) + summationOfi($a, $b - 1);
}

// 1から5までを求めます。
echo summationOfi(1, 5) . PHP_EOL; // 15
