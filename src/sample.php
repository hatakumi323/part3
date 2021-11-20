<?php
// さまざまな惑星で物体を yマイルに渡って移動するために必要なエネルギー量を計算してみましょう。

function forceNewtons($kg, $mpss)
{
  return $kg * $mpss;
}

function planetGravityMpss($planet)
{
  if ($planet == "Earth") {
    return 9.80665;
  }
  if ($planet == "Jupiter") {
    return 24.79;
  }
  if ($planet == "Neptune") {
    return 11.15;
  }
  return 0;
}

function poundsTokg($pounds)
{
  return $pounds * 0.453592;
}

function joulesByWork($newtons, $meters)
{
  return $newtons * $meters;
}

function energyMovingPoundsByPlanet($planet, $pounds, $meters)
{
  return joulesByWork(forceNewtons(poundsToKg($pounds), planetGravityMpss($planet)), $meters);
}
// 木星で65ポンドの物体を35メートル移動するのに必要なエネルギー量を返します。
echo energyMovingPoundsByPlanet("Jupiter", 65, 35) . PHP_EOL;
