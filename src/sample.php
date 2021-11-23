<?php
//Catherine は与えられた単語や文章を逆側から読み上げる遊びを友達とやっています。文字列 string が与えられるので、string を反転した文字列を返す reverseString という関数を再帰を使って定義してください。

function reverseString(string $s): string
{
  return reverseStringHelper($s[0], 1, $s);
}

function reverseStringHelper($reversedString, $index, $originalString)
{
  // ベースケース indexが元の文字列より長い時
  if ($index >= strlen($originalString)) return $reversedString;
  return reverseStringHelper($originalString[$index] . $reversedString, $index + 1, $originalString);
}

echo (reverseString("abcd")) . PHP_EOL; // dcba
echo (reverseString("recursion")) . PHP_EOL; // noisrucer
echo (reverseString("I am a software engineer")) . PHP_EOL;// reenigne erawtfos a ma I
