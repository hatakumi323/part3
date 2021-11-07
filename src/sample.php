<?php
// X高校の生徒であるStevenは、友達と一緒にカラオケへ遊びに出かけました。カラオケでは以下の条件によって、値段が変更になります。

// - 明日学校があるかに応じて、値段が変更になります。翌日が祝日または土日の場合、値段が4倍になります。
// - Stevenのクレジットカードの下四桁が閏年の場合、値段が半額になります。閏年の条件は以下の通りです。①4で割り切れる ②100で割り切れる場合は、閏年にしない ③例外として 400 で割り切れる場合は、閏年とする
// - カラオケでは、3人以下では1人8ドル、4人以上では1人6ドル、10人以上では1人5ドルになります。

// では、明日の曜日 day、祝日かどうかをあらわすブーリアン値 isHoliday、クレジットカードの下四桁 lastDigits、友達の人数 num が与えられるので、カラオケで請求される金額を返す、getKaraokeFee という関数を作成してください。

function getKaraokeFee($day, $isHoliday, $lastDigits, $num)
{
  // カラオケの料金を計算する関数を呼び、その結果を変数priceに代入します。
  $price = calculateFee($num);
  // 学校があるか判定する関数を呼びます。falseの時priceは4倍になります。
  if (!isThereSchool($day, $isHoliday)) $price *= 4;
  // 閏年か判定する関数を呼びます。trueなら半額になります。
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
  if ($day === "Sunday" || $day === "Saturday" || $isHoliday) return false;
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

// 120
echo (getKaraokeFee("Sunday", true, 1900, 5)) . PHP_EOL;
// 120
echo (getKaraokeFee("Sunday", true, 2000, 12)) . PHP_EOL;
// 64
echo (getKaraokeFee("Saturday", false, 1900, 2)) . PHP_EOL;
// 48
echo (getKaraokeFee("Saturday", false, 2000, 4)) . PHP_EOL;
// 24
echo (getKaraokeFee("Monday", false, 2002, 3)) . PHP_EOL;
// 200
echo (getKaraokeFee("Monday", true, 2024, 20)) . PHP_EOL;
