<?php 
    // 練習問題１
    function nexseed() {
        // 実行したい処理
        echo 'seedくん';
    }

    // 練習問題２
    nexseed();

    // 練習問題３
    function nexseed3($greeting) {
        echo $greeting . 'seedくん';
    }

    nexseed3('おはようございます');
    // 出力結果 → おはようございます、seedくん
    nexseed3('こんにちは');
    // 出力結果 → こんにちは、seedくん

    // 練習問題４    
    function nexseed4($greeting, $name) {
        echo $greeting . '、' . $name . 'さん';
    }

    nexseed4('おはようございます', 'seed');
    nexseed4('こんにちは', 'ほげ');

    // 練習問題５
    function nexseed5($greeting, $name) {
        return $greeting . '、' . $name . 'さん';
    }

    echo nexseed5('おはようございます', 'seed');
    echo nexseed5('こんにちは', 'ほげ');
?>













