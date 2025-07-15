<?php

// 各人の得点とその評価を表示するコードを書いてください。評価基準は以下とします:
// 90以上: "優"
// 80以上90未満: "良"
// 70以上80未満: "可"
// 70未満: "不可"

// 出力例 「johnの評価は良です」

$scores = array("John" => 85, "Jane" => 92, "Jim" => 78);

foreach ($scores as $name => $score) {
    if ($score >= 90) {
        $rank = "優";
    } elseif ($score >= 80) {
        $rank = "良";
    } elseif ($score >= 70) {
        $rank = "可";
    } else {
        $rank = "不可";
    }

    echo "$name の 評価は $rank です \n";
}
