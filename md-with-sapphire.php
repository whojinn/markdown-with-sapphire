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

    /**
    * CLIやCGIのスクリプトの元になるクラス。
    * note1: 使用前に必ずphp-mbstringをdnfにてインストールしておくこと。
    * note2: もし、composer installの後でphp-mbstringをインストールした場合はcomposer updateをすること
    * note3: vscodeで使用の際は以下の設定をしておくことを勧める。
    */
    class MarkdownWithSapphire extends \Noi\ParsedownNewline {
        // 1. RubyTextTrait と AozoraRubyTextTrait の両方をuse
        use \Noi\Parsedown\AozoraRubyTextTrait;
        use \Noi\Parsedown\RubyTextTrait;
        
        // 2. registerAozoraRubyTextExtension()をコンストラクタかどこかで実行
        public function __construct() {
            $this->registerAozoraRubyTextExtension();
        }
    }

    // テスト用
    $p = new MarkdownWithSapphire();
    echo $p->text('Parsedownは' . "\n" . 'とても' . "\n" . '｜便利《べんり》ですね');
    echo "\n";
?>