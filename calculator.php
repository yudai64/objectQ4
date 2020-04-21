<?php
  class Calculator {

      //3種類の合計金額を計算して表示する
  function CalculateTotalPrice($totals) {
    $total = array_sum($totals);
    if (strlen($total)<=4) {
      //億未満の場合そのまま表示
      echo "全ての車の合計金額は" . $total . "万円です</br>";
    }else {
      //億以上の時は○億○万円の表記で表示
      $bil = substr($total, 0, 1);
      $thou = substr($total, 1, 1);
      if ($thou != 0) {
        $mil = substr($total, 1, 4);
        echo "全ての車の合計金額は" . $bil . "億" . $mil . "万円です</br>";
      } else {
        $hun = substr($total, 2, 1);
        if ($hun != 0) {
          $mil = substr($total, 2, 3);
          echo "全ての車の合計金額は" . $bil . "億" . $mil . "万円です</br>";
        } else {
          $ten = substr($total, 3, 1);
          if ($ten != 0) {
            $mil = substr($total, 3, 2);
            echo "全ての車の合計金額は" . $bil . "億" . $mil . "万円です</br>";
          } else {
            $mil = substr($total, 4,1);
            echo "全ての車の合計金額は" . $bil . "億" . $mil . "万円です</br>";
          }
        }
      }
    }
    return $total;
  }
  
  //平均金額を計算して表示する
  function CalculateAveragePrice($total, $amount) {
    echo "全ての車の平均金額は約" . round($total / $amount, 1) . "万円です</br>";
  }
  
  }
?>