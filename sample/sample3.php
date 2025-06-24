<?php

// 参考: https://www.tohoho-web.com/php/function.html


//例1 引数(ひきすう)なし 戻り値なし ====================================================

echo "logMessage()\n";
logMessage(); // 関数が呼ばれました と出力される

function logMessage()
{
    echo "関数が呼ばれました\n";
}

//例2 引数(ひきすう)あり 戻り値なし ====================================================
echo "message()\n";
message("関数を呼び出しました\n"); // 関数を呼び出しました と出力される

function message($message)
{
    echo $message;
}
//例3 引数(ひきすう)なし 戻り値あり ====================================================
echo "getMassage()\n";
echo getMessage(); // 関数からの戻り値 と出力される


function getMessage()
{
    return "関数からの戻り値\n";
}

//例4 引数(ひきすう)あり 戻り値あり ====================================================
echo "add(5, 3)\n";
$c = add(5, 3);
echo "$c\n"; // 8が出力される

function add($x, $y)
{
    return $x + $y;
}
