<?php
// 3の倍数のときfizz、5の倍数のときbuzz、15の倍数の時、fizzbuzzと返す、echoFizzBuzzという関数を作成してください。
// これ以外の時は、NOT FOUND! と返してください。

function echoFizzBuzz($fizzbuzz)
{
  if ($fizzbuzz % 3 == 0) {
    return "Fizz";
  } else if ($fizzbuzz % 5 == 0) {
    return "Buzz";
  } else if ($fizzbuzz % 3 == 0 || $fizzbuzz % 5 == 0) {
    return "FizzBuzz";
  } else {
    return "NOT FOUND";
  }
}

echo echoFizzBuzz(3) . PHP_EOL;
