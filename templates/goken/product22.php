<!--<?php
echo <<<EOT
-->
<!--solution-container start-->
<div class="solution-container w-1200">

	<div class="solution-container-tit">
<!--
EOT;
foreach($nav_list2[$class1] as $key=>$val){
$navnow=$classnow==$val[id]?'class="hover trant"':'';
echo <<<EOT
--> 	
		<a href="{$val[url]}" title="{$val[name]}" {$navnow}>{$val[name]}</a>

<!--
EOT;
}
echo <<<EOT
--> 
	</div>
<!--
EOT;
foreach($product_list as $key=>$val2){
	
	dump($product_list);
$val2[imgurl]="{$thumb_src}dir=../{$val2[imgurl]}&y=555";
echo <<<EOT
-->	
		<dl class="solution-dl trant">
		
			<dt>
				<a href="{$val2[url]}" title="{$val2[title]}">
					<img src="{$val2[imgurl]}" alt="{$val2[title]}">
					<span class="trant"></span>
				</a> 
			</dt>
			
			<dd>
				<div class="blank-20"></div>
				<div class="dd-t">{$val2[title]}</div>
				<div class="blank-20"></div>
				
				<div class="dd-c">{$val2[description]}</div>
				
				<div class="blank-40"></div>
				
				<div class="dd-img">
				


<!--
EOT;
if($val2[displayimg]){
$imgarr = explode("|",$val2[displayimg]);
for($i=0;$i<count($imgarr);$i++){
$imgurl=explode("*",$imgarr[$i]);
echo <<<EOT
-->				
					<a href="{$val2[url]}" title="{$val2[title]}"><img src="{$thumb_src}dir={$imgurl[1]}&x=120&y=120"></a>

<!--
EOT;
}}
echo <<<EOT
-->					
				</div>
				
			</dd>
			
			<a class="icon" href="{$val2[url]}" title="{$lang_gengduo}">{$lang_gengduo}</a>
			<div class="clear"></div>
		</dl>
	
<!--
EOT;
}
echo <<<EOT
-->		
    <!--page start-->
    <div class="page">
		{$page_list}
    </div>
    <!--page end-->
</div>
<!---solution-container end-->

<!--
EOT;
require_once template('gap'); 
?>