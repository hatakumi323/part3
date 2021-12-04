<?php
//PHP implementation to find the length of
//longest common subsequence which contains
//all vowel characters

//function to check whether 'ch'
//is a vowel or not
function isVowel($ch)
{
  if (
    $ch == 'a' || $ch == 'e' ||
    $ch == 'i' || $ch == 'o' || $ch == 'u'
  )
    return true;
  return false;
}

//function to find the length of longest common
//subsequence which contains all vowel characters
function lcs($X, $Y, $m, $n)
{
  $L = array_fill(0, $m + 1, array_fill(0, $n + 1, NULL));

  //Following steps build L[m+1][n+1] in bottom
  //up fashion. Note that L[i][j] contains length
  //of LCS of X[0..i-1] and Y[0..j-1]
  for ($i = 0; $i <= $m; $i++) {
    for ($j = 0; $j <= $n; $j++) {
      if ($i == 0 || $j == 0)
        $L[$i][$j] = 0;

      else if (($X[$i - 1] == $Y[$j - 1]) &&
        isVowel($X[$i - 1])
      )
        $L[$i][$j] = $L[$i - 1][$j - 1] + 1;

      else
        $L[$i][$j] = max(
          $L[$i - 1][$j],
          $L[$i][$j - 1]
        );
    }
  }

  //L[m][n] contains length of LCS for X[0..n-1]
  //and Y[0..m-1] which contains all vowel characters
  return $L[$m][$n];
}

//Driver Code
$X = "aieef";
$Y = "klaief";

$m = strlen($X);
$n = strlen($Y);

echo "Length of LCS = " . lcs($X, $Y, $m, $n);

//This code is contributed by ita_c
