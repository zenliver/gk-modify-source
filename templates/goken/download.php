<!--<?php
require_once template('head');
// require_once template('sidebar');
$weblist=metlabel_download();
echo <<<EOT
-->


<!--case-container start-->
<div class="case-container w-1200">

<!--
EOT;
require_once template('img_include');
echo <<<EOT
-->

        <div class="active" id="downloadlist">
            <div class="download_list">
<!--
EOT;
// print_r($download_list);
foreach($download_list as $key=>$download_list_item) {
echo <<<EOT
-->
                <div class="download_list_item">
                    <div class="download_list_title"><a href="{$download_list_item[url]}">{$download_list_item[title]}</a></div>
                    <div class="download_list_desc">
                        <span>File Size：{$download_list_item[filesize]} KB</span>
                        <span class="download_list_desc_time">Update Time：{$download_list_item[updatetime]}</span>
                    </div>
                </div>
<!--
EOT;
}
echo <<<EOT
-->


            </div>
            <div class="page">
                {$page_list}
            </div>
		</div>
</div>


<!--
EOT;
require_once template('gap');
require_once template('foot');
?>
