<?php
// 7 × n を計算する関数
// 自身を使って定義する再帰的処理

function multiplyOf7($n)
{
  if ($n <= 0) {
    return 0;
  }
  return multiplyOf7($n - 1) + 7;
}

echo multiplyOf7(5) . PHP_EOL;
