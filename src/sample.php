<?php
// 年齢 age と身長 height を受け取り、ジェットコースターに乗れるかどうか判断する、canRideRollerCoaster という関数を作成します。年齢 8 歳以上、かつ身長 120cm 以上でジェットコースターに乗れるとします。

function canRideRollerCoaster($age, $height)
{
  if ($age >= 8 && $height >= 120) {
    return true;
  } else {
    return false;
  }
}

echo canRideRollerCoaster(9, 145) ? "True" :  "False" . PHP_EOL;
echo canRideRollerCoaster(7, 125) ? "True" :  "False" . PHP_EOL;
echo canRideRollerCoaster(10, 115) ? "True" :  "False" . PHP_EOL;
