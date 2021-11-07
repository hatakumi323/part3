<?php
// 例題1
// 文字列が与えられるので、再帰を用いて、文字列の長さをカウントする、lengthStringという関数を作成してください。

function lengthString($string)
{
  if ($string == "") {
    return 0;
  }
  return 1 + lengthString(substr($string, 1));
}

// 5
echo lengthString("hello") . PHP_EOL;

// 10
echo lengthString("helloworld") . PHP_EOL;
