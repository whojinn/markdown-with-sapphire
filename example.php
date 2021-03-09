<!DOCTYPE html>
<html>
    <!--phpを何も知らない人(たとえば自分)の為の実践的な使い方の一例。
    linuxの場合、「php -S localhost:8080」でテストサーバーを立ち上げて
    「localhost:8080/example.com」と打つと、読み込んだマークダウンをHTMLに
    してくれるはずである。文章そのものの単純なプレビューならばこれで十分のはず-->
    <head>
        <meta charset="utf-8", lang="ja">
    </head>
    <body>
        <?php
            // クラスを読み込む
            require_once "md-with-sapphire.php";

            // クラスに必要なクラスを纏めて読み込む
            require_once "vendor/autoload.php";

            // クラスをインスタンス化
            $sapphire = new MarkdownWithSapphire();

            // 半角文字が片方隣にある時だけ"\n"を残す
            $sapphire ->setSingleByteSymbolSeparated(true);

            // ファイルを読み込む。勿論、file_get_contents()の引数はファイルのパスだ
            // 自作のマークダウンを読み込ませたいときはfile_get_contents()の引数を書き換えてね
            $file = file_get_contents('./example.md');

            // マークダウンをHTML化して出力。echoを忘れないように。
            echo $sapphire->text($file);
        ?>
    </body>
</html>
