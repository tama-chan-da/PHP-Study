<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;
    // 拡張マガジン
    private $extendNum;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($name, $maxMagazine, $maxMAgazine)
    {
        // 問題1
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = $maxMAgazine;
        $this->extendNum = 0;
    }

    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }

    // リロード
    function relaod()
    {
        // 問題2
        if ($this->currentMagazine == $this->maxMagazine) {
            echo "リロードの必要はありません";
            return;
        }
        $this->currentMagazine = $this->maxMagazine;
    }

    // 発砲
    function fire()
    {
        // 問題3
        if ($this->currentMagazine == 0) {
            echo "リロードしてください\n";
            return;
        }
        $this->currentMagazine--;
        echo "$this->name を発砲しました。残弾： $this->currentMagazine 発" . "\n";
        if ($this->currentMagazine == 0) {
            echo "リロードしてください\n";
        }
    }

    // 拡張マガジンを装着
    function setExtendedMagazine($extendNum)
    {
        // 問題4

        if (!is_int(filter_var($extendNum, \FILTER_VALIDATE_INT,  ['options' => ['min_range' => 1]]))) {
            if (!is_numeric($extendNum) && intval($extendNum) == $extendNum > 0) {
                echo "引数は不正です\n";
                return;
            }
        }
        $this->maxMagazine = $this->maxMagazine + $extendNum;
        $this->extendNum = $extendNum;
        $this->currentMagazine = $this->maxMagazine;
    }

    // 拡張マガジンを取外し
    function unsetExtendedMagazine()
    {
        // 問題4
        if ($this->extendNum <= 0) {
            echo "拡張マガジンはそうちゃくされていません\n";
            return;
        }

        $this->maxMagazine = $this->maxMagazine - $this->extendNum;

        $this->extendNum = 0;

        if ($this->maxMagazine < $this->currentMagazine) {
            $this->currentMagazine = $this->maxMagazine;
        }
    }
}
