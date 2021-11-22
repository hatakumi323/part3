<?php
// 文字列が与えられるので、再帰を用いて、文字列の長さをカウントする、lengthStringという関数を作成してください。

function countSquare($x, $y)
{
  // ここから書きましょう
  if ($x == $y) {
    return $x;
  } else if ($x > $y) {
    return countSquare($x - $y, $y);
  } else {
    return countSquare($x, $x - $y);
  }
}

echo countSquare(28, 32);
