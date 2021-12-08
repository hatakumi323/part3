<?php
function gcd($m, $n)
{

  if ($m == $n) {
    // ベースケース
    return $m;
  } else if ($m > $n) {
    return gcd($m - $n, $n);
  } else {
    return gcd($m, $n - $m);
  }
}

// 44と242の最大公約数を求める
echo gcd(44, 242) . PHP_EOL;
