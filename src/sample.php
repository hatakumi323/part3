<?php
// 文字列が与えられるので、再帰を用いて、文字列の長さをカウントする、lengthStringという関数を作成してください。

// function lengthString($string)
// {
//   if ($string == "") {
//     return 0;
//   }
//   return 1 + lengthString(substr($string, 1));
// }

// echo lengthString("Hello") . PHP_EOL;

// 同じサイズの文字列s1、s2が与えられるので、それぞれの文字を1->2の順番で交互に組み合わせる、mergeStringという関数

// function mergeString($s1, $s2)
// {
//   if ($s1 == "" || $s2 == "") {
//     return "";
//   }

//   return $s1[0] . $s2[0] . mergeString(substr($s1, 1), (substr($s2, 1))) . PHP_EOL;
// }

// 別解
// 入力がstr型、出力がint型なので、パラメーターを追加してより多くのデータを追跡することもできます。

function lenString($string)
{
  // パラメータを追加する
  return lenStringHelper($string, 0);
}

function lenStringHelper($string, $count)
{
  if ($string == "") {
    return $count;
  }

  return lenStringHelper(substr($string, 1), $count + 1);
}

echo lenString("hello") . PHP_EOL;
echo lenString("helloworld") . PHP_EOL;
