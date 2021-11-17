<?php
// ローンの金額initialLoan、期日までに払われたかどうかをブーリアンで表したdidPayOnTime を入力として受け取り、$2.5 の手数料とローンの利子を請求する、interestsPaid という関数を作成します。期限内にお金が支払われなかった場合、15% の利子となり、支払われた場合は 2% の利子が請求されます。

function interestsPaid($initialLoan, $didPayOnTime)
{
  $percentLate = 1.15;
  $percentDefault = 1.02;
  $serviceFee = 2.5;
  $total = $initialLoan;

  if ($didPayOnTime) {
    $total = $total * $percentDefault;
  } else {
    $total = $total * $percentLate;
  }
  return $total + $serviceFee;
}

echo interestsPaid(100, true) . PHP_EOL;
echo interestsPaid(100, false) . PHP_EOL;
