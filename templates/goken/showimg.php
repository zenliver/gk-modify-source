<!--<?php
require_once template('head');
// require_once template('sidebar');
echo <<<EOT
-->

<div class="case-container w-1200">

<!--
EOT;
require_once template('img_include');
echo <<<EOT
-->

    <link rel="stylesheet" href="/templates/goken/js/libs/videojs/video-js.min.css">
    <style media="screen">
        .met_tools .met_page {
            position: initial;
        }
    </style>

    <div id="showimg">
        <h1 class="met_title" style="text-align: center;">{$img[title]}</h1>
        <div class="showimg_content">{$img[content]}<div class="met_clear"></div></div>
        <div class="met_tools">
            {$met_tools_code}
            <span class="met_Clicks met_none"><!--累计浏览次数--></span>
            <ul class="met_page" style="text-align: center;">
                <li class="met_page_preinfo"><span>{$lang_Previous}</span><a href='{$preinfo[url]}'>{$preinfo[title]}</a></li>
                <li class="met_page_next"><span>{$lang_Next}</span><a href='{$nextinfo[url]}'>{$nextinfo[title]}</a></li>
            </ul>
        </div>
    </div>

</div>

<script src="/templates/goken/js/libs/videojs/video.min.js" charset="utf-8"></script>
<script src="/templates/goken/js/libs/videojs/ie8/videojs-ie8.min.js" charset="utf-8"></script>
<!--
EOT;
require_once template('gap');
require_once template('foot');
?>
