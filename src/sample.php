<?php
// 3の倍数のときfizz、5の倍数のときbuzz、15の倍数の時、fizzbuzzと返す、echoFizzBuzzという関数を作成してください。
// これ以外の時は、NOT FOUND! と返してください。

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo "FizzBuzz" . PHP_EOL;
  } else if ($i % 3 == 0) {
    echo "Fizz" . PHP_EOL;
  } else if ($i % 5 == 0) {
    echo "Buzz" . PHP_EOL;
  } else {
    echo $i . PHP_EOL;
  }
  echo " ";
}
