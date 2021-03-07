<?php
    /**
     * Copyright 2021 whojinn
     *
     * Licensed under the Apache License, Version 2.0 (the "License");
     * you may not use this file except in compliance with the License.
     * You may obtain a copy of the License at
     *
     *     http://www.apache.org/licenses/LICENSE-2.0
     *
     * Unless required by applicable law or agreed to in writing, software
     * distributed under the License is distributed on an "AS IS" BASIS,
     * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
     * See the License for the specific language governing permissions and
     * limitations under the License.
     */


    // オートローディング
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