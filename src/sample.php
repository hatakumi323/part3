<?php

echo '名前を入力してください' . PHP_EOL;
$name = trim(fgets(STDIN));

if (mb_strlen($name) < 10) {
  echo '名前の長さはOK！' . PHP_EOL;
} else {
  echo '名前が長すぎます' . PHP_EOL;
}
