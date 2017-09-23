<!--<?php
$tem_news     = tmpcentarr($lang_news_id);
$tem_news['name']   = $lang_news_title?$lang_news_title:$tem_news['name'];
echo <<<EOT
-->


<!--index-news start-->
	<div class="index-news w-1200">
    <div class="blank-20"></div>
    <div class="main-title"><span class="icon">left</span><span>{$tem_news['name']}</span><span class="icon">right</span> </div>
    <div class="main-txt">{$lang_news_desc}</div>
    <ul>
<!--
EOT;
$i=0;
foreach(methtml_getarray($lang_news_id,$lang_news_type,'','',$lang_news_num) as $key=>$val){
$val[imgurl] ="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_news_x}&y={$lang_news_y}";
$date  =  $val[updatetime];
$vym   =  date('Y', strtotime($date));    //年
$vdm   =  date('M', strtotime($date));	   //月
$vdd   =  date('d', strtotime($date));    //日
$vdh   =  date('h:i:s', strtotime($date));//时间
$i++;
$dmargi=$i%3==0?"style='margin-right:0px;'":"";
echo <<<EOT
-->
			<li {$dmargi}>
				<a href="{$val[url]}" title="{$val[title]}">
					<img src="{$val[imgurl]}">
					<div class="blank-20"></div>
					<div class="t trant">{$val[title]} </div>
					<div class="xian"></div>
					<div class="time">{$vdm} {$vdd},{$vym} {$vdh}</div>
					<div class="blank-10"></div>
					<div class="c">{$val[description]}</div>
				</a>
			</li>
<!--
EOT;
}
echo <<<EOT
-->			
			<div class="clear"></div>
    </ul>
	</div>
<!--index-news end-->


<!--
EOT;
?>