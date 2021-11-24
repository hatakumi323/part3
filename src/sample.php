<?php
// 文字列が与えられるので、再帰を用いて、文字列の長さをカウントする、lengthStringという関数

// function lengthString($string)
// {
//   if ($string == "") {
//     return 0;
//   }

//   return 1 + lengthString(substr($string, 1));
// }

// echo lengthString("hello");

// 入力がstr型、出力がint型なので、パラメーターを追加してより多くのデータを追跡することもできます。

function lenString($string)
{
  return lenStringHelper($string, 0);
}

function lenStringHelper($string, $count)
{
  if ($string == "") {
    return $count;
  }
  return lenStringHelper(substr($string, 1), $count + 1);
}
