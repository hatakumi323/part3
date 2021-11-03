<?php
// kg : キログラム, mpss(meter per second squared) =　m / s ^ 2 : メートル毎秒の2乗
// kgの質量とmpssの加速度に基づいて、力をニュートンで表すdouble型を返します。
// forceNewtonsは物体の質量と加速度に基づいて、物体に働く力を算出する関数です。

function forceNewtons($kg, $mpss)
{
  return $kg * $mpss;
}
echo forceNewtons(80, 9.807) . PHP_EOL;

// さまざまな惑星の重力加速度を返す関数を作成します。デフォルトで無重力とします。
function planeGravityMpss($planet)
{
  if ($planet === "Earth") {
    return 9.80665;
  }
  if ($planet === "Jupiter") {
    return 24.79;
  }
  if ($planet === "Neptune") {
    return 11.15;
  }

  return 0;
}

function poundsToKg($pounds)
{
  return $pounds * 0.453592;
}

echo forceNewtons(poundsToKg(175), planeGravityMpss("Neptune"));
