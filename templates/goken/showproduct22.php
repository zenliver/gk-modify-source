<!--<?php
$met_productnext=methtml_prenextinfo(1);
echo <<<EOT
-->

<!---solution-detail start-->
<div class="solution-detail w-1200">
<!--solution-img start-->
	<div class="solution-img tc">
		<div class="f-24">{$product[title]}</div>
			
		<div class="c"> 
			<span>
<!--
EOT;
foreach($product_paralist as $key=>$val){
for($i2=0;$i2<$product[$val[para]];$i2++){
echo <<<EOT
-->			
				<i class="icon-gittip"></i>

<!--
EOT;
}}
echo <<<EOT
-->				
			</span>
		{$class_list[$class2][name]} 
		</div>
		
		<div class="picFocus">
			<div class="bd">
				<ul>
				
				
				
<!--
EOT;
if(count($displaylist)>0){
// $dlist = "<li style='display:none;'><img src=\"{$thumb_src}dir={$product[imgurl]}&x=66&y=66\" alt=\"{$product[title]}\" /></li>";
foreach($displaylist as $key=>$val){
$dlist.= "<li><img src='{$val[imgurl]}' alt='{$val[title]}' /></li>";
echo <<<EOT
-->				
					<li><a href="{$val[imgurl]}" title="{$val[title]}"><img src="{$val[imgurl]}" alt="{$val[title]}"/></a></li>

<!--
EOT;
}
}
echo <<<EOT
-->					
				</ul>
			</div>
			<div class="hd">
				<ul>{$dlist}</ul>
			</div>
		</div>
	</div>
    <!--solution-ig end-->
    <!--solution-txt start-->
	<div class="solution-txt">
		<div class="f-18">{$lang_xxxx} </div>
<!--
EOT;
$product[descriptionhtml] = $product[description]?"<p class=\"desc\">{$product[description]}</p>":'';
echo <<<EOT
-->
		<div class="blank-10"></div>{$product[descriptionhtml]}</div>
    <!--solution-txt end-->
    <!--solution-dl-w start-->
<!--
EOT;
$productTablist[0]['title'] = $met_productTabname;
$productTablist[0]['content'] = $product[content];
for($i=1;$i<=($met_productTabok-1);$i++){
	$met_productTabname = 'met_productTabname_'.$i;
	$productTablist[$i]['title']   = $$met_productTabname;
	$productTablist[$i]['content'] = $product['content'.$i];
}
echo <<<EOT
-->

		<div class="solution-dl-w">
<!--
EOT;
$i=0;
foreach($productTablist as $key=>$val){
$i++;
$met_none = $i==1?'':'met_none';
echo <<<EOT
-->		
	<div class="met_editor {$met_none}">{$val[content]}<div class="met_clear"></div></div>
<!--
EOT;
}
echo <<<EOT
-->	
	</div>
	
	
    <!--solution-dl-w end-->
</div>
<!--solution-detail end-->

<!--solution-rec start-->


<div class="solution-rec">
	<div class="tit w-1200">{$lang_so_bot_title}</div>
	<ul>
<!--
EOT;
foreach(methtml_getarray($class2,'','','',$lang_so_bot_num,'','',1) as $key=>$val){
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&y={$lang_so_bot_y}";
echo <<<EOT
-->		
		<li>
			<a href="{$val[url]}" title="{$val[title]}">
				<img src="{$val[imgurl]}" alt="{$val[title]}">
				<div class="blank-10"></div>
				<div class="but">{$val[title]}</div>
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
<!--solution-rec end-->
<!--solution-end start-->
<div class="solution-end w-1200 tc">
	<div class="blank-20"></div>
	<div class="main-title">
		<span>{$lang_sobots_title}</span>
	</div>
	<div class="main-txt">{$lang_sobots_desc}</div>
	<img src="{$lang_sobots_img}" alt="{$lang_sobots_title}">

</div>
<!--solution-end end-->






<!--
EOT;
?>