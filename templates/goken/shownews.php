<!--<?php
require_once template('head'); 
$met_newsnext=methtml_prenextinfo(1,1);
echo <<<EOT
-->



<!--news-container start-->
<div class="news-container w-1200">
    <!--news-container-fl start-->
	<div class="news-container-fl">
		<ul>
			<li>
				<div class="date">
<!--
EOT;
$date  =  $val[updatetime];
$vym   =  date('Y', strtotime($date));    //年
$vdm   =  date('M', strtotime($date));	   //月
$vdd   =  date('d', strtotime($date));    //日
echo <<<EOT
-->					
					<div class="t">{$vdd}</div>
					<div class="f-14">{$vdm}</div>
					<div class="xian"></div>
					<div class="f-14">{$vym}</div>
				</div>
				<div class="img">
{$news[content]}
					<div class="blank-20"></div>
					<div class="xian"></div>
					<div class="blank-20"></div>
					<div class="news-pn">
						<a href="{$preinfo[url]}" title="{$preinfo[title]}">Previous</a> 
						<a href="{$nextinfo[url]}" title="{$nextinfo[title]}">Next</a> 
					</div>
				</div>
				<div class="clear"></div>
			</li>
		</ul>
	</div>
    <!--news-container-fl end-->
		
		
		
    <!--news-container-fr start-->
	<div class="news-container-fr">
	
			<!--news-search start-->

		<div class="news-search">
						<form method="POST" name="myform1" action="{$navurl}search/search.php?lang={$lang}" target="_self">
							<input type="hidden" name="lang" value="{$lang}">&nbsp;
							<input type="hidden" name="searchtype" value="{$searchtype}">&nbsp;
							<span class="navsearch_input">
								<input class="seword" type="text" name="searchword" value="" size="20" placeholder="search ">
							</span>&nbsp;
							<input class="searchimage" type="image" src="{$img_url}search.png">
		</div>
	
		
		<!--news-search end-->
		
		
		<div class="blank-20"></div>
		
		<div class="news-container-fr-t">{$lang_newside_title}</div>
		<div class="xian"></div>
<!--
EOT;
foreach($nav_list2[$class1] as $key=>$val){
echo <<<EOT
-->
		<a class="news-a trant" href="{$val[url]}" title="{$val[name]}">{$val[name]}</a>

<!--
EOT;
}
echo <<<EOT
-->		
		<div class="blank-20"></div>
		<div class="news-container-fr-t">{$lang_met_module2_related}</div>
		<div class="xian"></div>
		<ul class="news-ul">
<!--
EOT;
$i=0;
foreach($news_list as $key=>$val){
$i++;
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x=265&y=177";
$val['title']=utf8substr($val['title'],0,$lang_met_module2_word);
echo <<<EOT
-->		
			<li>
				<a class="trant" href="">
					<img src="{$val[imgurl]}" alt="{$val[title]}">
					<div class="c">{$val['title']}</div>
				</a>
			</li>

<!--
EOT;
if($i>=$lang_met_module2_relatednum)break;
}
echo <<<EOT
-->				
		</ul>
	</div>
	<!--news-container-fr end-->
	<div class="clear"></div>
</div>
<!--news-container end-->







<!--
EOT;
require_once template('foot'); 
?>