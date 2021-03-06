<?php
    require "vendor/autoload.php";

    class YourParsedown extends \Noi\ParsedownNewline /* or ParsedownExtra or etc. */ {
      // 1. RubyTextTrait と AozoraRubyTextTrait の両方をuse
      use \Noi\Parsedown\AozoraRubyTextTrait;
      use \Noi\Parsedown\RubyTextTrait;
      use \Noi\Parsedown\JapaneseNewlineTrait;

      // 2. registerAozoraRubyTextExtension()をコンストラクタかどこかで実行
      public function __construct() {
        $this->registerAozoraRubyTextExtension();

        // 3. RubyTextTraitのルビ記法 "[親文字]^(ルビ)" 形式も必要なら以下を実行する
        // $this->registerRubyTextExtension();
      }
    }

    $p = new YourParsedown();
    echo $p->text('Parsedownは' . "\n" . 'とても' . "\n" . '｜便利《べんり》ですね');
    echo "\n";
?>