<!--<?php
echo <<<EOT
-->
<div class="solution-container-tit">
<!--
EOT;
$i = 0;
foreach($nav_list2[$class1] as $key=>$val){
$navnow=$classnow==$val[id]?'class="hover trant"':'';
$i++;
if ($i <= 5) {
echo <<<EOT
-->
    <a href="{$val[url]}" title="{$val[name]}" {$navnow}>{$val[name]}</a>
<!--
EOT;
}
}
echo <<<EOT
-->

</div>
<!--
EOT;
?>
