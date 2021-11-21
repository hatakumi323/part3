<?php
// 複雑な処理が必要な場合は、やるべき処理を分解してそれぞれ関数を作ります。
// カラオケの料金を計算する関数、学校があるか判定する関数、閏年か判定する関数の3つをつくり、最終的なカラオケ料金を計算する関数getKaraokeFee()の中から呼び出します。

function getKaraokeFee($day, $isHoliday, $lastDigits, $num)
{
  $price = calculateFee($num);
  if (!isThereSchool($day, $isHoliday)) $price *= 4;
  if (isLeapYear($lastDigits)) $price /= 2;

  return $price;
}

//　カラオケの料金を計算する関数
function calculateFee($people)
{
  $perPerson;

  if ($people <= 3) $perPerson = 8;
  else if ($people < 10) $perPerson = 6;
  else $perPerson = 5;

  return $perPerson * $people;
}

// 学校があるか判定する関数
function isThereSchool($day, $isHoliday)
{
  if ($day == "Sunday" || $day == "Saturday" || $isHoliday) return false;
  else return true;
}

// 閏年かどうか判定する関数
function isLeapYear($year)
{
  if ($year % 400 == 0) return true;
  else if ($year % 100 == 0) return false;
  else if ($year % 4 == 0) return true;
  return false;
}

echo getKaraokeFee("Sunday", true, 1900, 5) . PHP_EOL;

echo (getKaraokeFee("Saturday", false, 1900, 2)) . PHP_EOL;
