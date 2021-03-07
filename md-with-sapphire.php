<?php
    require "vendor/autoload.php";

    class MarkdownWithSapphire extends \Noi\ParsedownNewline /* or ParsedownExtra or etc. */ {
      // 1. RubyTextTrait と AozoraRubyTextTrait の両方をuse
      use \Noi\Parsedown\AozoraRubyTextTrait;
      use \Noi\Parsedown\RubyTextTrait;

      // 2. registerAozoraRubyTextExtension()をコンストラクタかどこかで実行
      public function __construct() {
        $this->registerAozoraRubyTextExtension();

      }
    }

    // // テスト用
    // $p = new MarkdownWithSapphire();
    // echo $p->text('Parsedownは' . "\n" . 'とても' . "\n" . '｜便利《べんり》ですね');
    // echo "\n";
?>