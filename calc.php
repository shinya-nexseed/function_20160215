<?php 
    // 足し算をする関数を定義
    function plus($num1, $num2) {
        $result = $num1 + $num2;
        return $result;
    }

    // 引き算をする関数を定義

    // 掛け算をする関数の定義

    // 割り算をする関数の定義

    // ADVANCE
    // 四則演算すべてができるcalc関数を定義
    // この際ブラウザ上のフォームの入力は3つ
    // 数字1、数字2、四則演算選択
    // 関数の引数も3つ
    

    // フォームがget送信されると関数を実行し
    // 結果を出力します
    if (!empty($_GET)) {
        // フォームに入力した値はどこに？
        // inputタグのname属性をキーに、$_GETに格納されている
        // ひとつ目のinputタグの値は$_GET['num1']
        // ふたつ目のinputタグの値は$_GET['num2']

        // ひとつ目の数字
        $num1 = $_GET['num1'];
        // ふたつ目の数字
        $num2 = $_GET['num2'];

        // 関数実行
        echo plus($num1, $num2);
    }
?>

<!-- HTMLでフォームを作成 -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>計算機サンプル</title>
</head>
<body>

  <form action="" method="get">
    <div>
      <input type="text" name="num1"> +と- <input type="text" name="num2">
    </div>
    <input type="submit" value="計算">
  </form>

</body>
</html>
















