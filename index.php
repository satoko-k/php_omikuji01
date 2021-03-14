<?php

// ブラウザに表示
    echo "phpの勉強をしています";
    echo "セミコロンは忘れない";
    echo "<br>";

    // 演習２
    echo 5+7;
    echo "<br>";
    echo "5+7";

    echo "<p>"."5+7"."</p>";

    // 変数　変数名は分かりやすくすること。
    $name = "変数を作る。変数はデータを入れる箱。全角は不可。スペースの全角も不可";
    echo $name;


    $keisan=7;
    $goukei = $keisan*$keisan;

    echo $goukei;

    echo "<br>";
    // 演習4
    $apple = "りんご";
    $num = 10+10;
    echo $apple;
    echo "<br>"; 
    echo $num;
    echo "<br>";


    // if文の実習

    $a = 1;
    $b = 2;

    if ($a ===1){
        echo "1が表示されました"."<br>";
    }
    

    if ($b ===2){
        echo "2が表示されました";
        echo "<br>"; 
    }


    //乱数の範囲を指定して乱数生成のおまじない（＝関数）

    echo mt_rand(1,6)."ランダムな数字を表示";
    // mt_rand();これが関数

    // 画像を表示させる
    // <img src="img/image01.jpg" />
    // if文をつかう
    echo "<br>"; 
    echo "ここからおみくじ課題"; 
    echo "<br>"; 
    $num = mt_rand(1,5);
    echo $num;  
    echo "<br>"; 
    if($num===1){
        echo '<img src="img/daikiti.jpg" />';
    }else if($num===2){
        echo '<img src="img/kiti.jpg" />';
    }else if($num===3){
        echo '<img src="img/kyou.jpg" />';
    }else if($num===4){
        echo '<img src="img/syoukiti.jpg" />';
    }else if($num===5){
        echo '<img src="img/tyuukiti.jpg" />';
    }



    // $num = mt_rand(1,5);
    // echo $num;  
    // echo "<br>"; 
    // if($num===1){
    //     echo '<img src="img/daikiti.jpg" />';
    // }
    // if($num===2){
    //     echo '<img src="img/kiti.jpg" />';
    // }
    // if($num===3){
    //     echo '<img src="img/kyou.jpg" />';
    // }
    // if($num===4){
    //     echo '<img src="img/syoukiti.jpg" />';
    // }
    // if($num===5){
    //     echo '<img src="img/tyuukiti.jpg" />';
    // }





    ?>

