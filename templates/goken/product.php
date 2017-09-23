<!--<?php
require_once template('head'); 
$clom = $class_list[$classnow][index_num]; //获取当前栏目的栏目标识，转换为简短的变量，以便在下面使用
if($clom){ //栏目标识默认为0，为0则采用默认模板文件
require_once template('product'.$clom);//调用不同的模版文件，如果栏目标识为1，则调用 about1.html 
}else{ //如果栏目标识为0，则执行下面的代码
$tem_proce         = tmpcentarr($lang_proce_id);

echo <<<EOT
-->
<!--product start-->
<div class="product-container w-1200">
    <!--product-fl start-->
	<div class="product-fl">
			<!--product-fl-nav start-->
		<div class="product-fl-nav">
<!--
EOT;
foreach($nav_list2[$class1] as $key=>$val){
//循环2级栏目
echo <<<EOT
-->		
			<div class="nav-t">
				<a href="javascript:void(0);">
					<img src="{$val[columnimg]}">{$val[name]}
<!--
EOT;
if($nav_list3[$val[id]]){
echo <<<EOT
-->					
					<i class="icon-plus fr"></i>
<!--
EOT;
}
echo <<<EOT
-->
					<div class="clear"></div> 
				</a> 
			</div>
<!--
EOT;
if($nav_list3[$val[id]]){
echo <<<EOT
-->			
			<div class="nav-tc">
			
<!--
EOT;
foreach($nav_list3[$val[id]] as $key=>$val2){
echo <<<EOT
-->			
				<a href="{$val2[url]}" title="{$val2[name]}">{$val2[name]}</a>

<!--
EOT;
}
echo <<<EOT
-->				
				
			</div>
<!--
EOT;
}
echo <<<EOT
-->

<!--
EOT;
}
//循环2级栏目
echo <<<EOT
-->			
		</div>
			<!--product-fl-nav end-->
			
			
			
			<!--product-fl-img start-->
			
		<div class="product-fl-img">
			<div class="t">{$tem_proce[name]}</div>
			<div class="xian"></div>
			<ul>
<!--
EOT;
foreach(methtml_getarray($lang_proce_id,'','','',$lang_proce_num,'',1) as $key=>$val){
echo <<<EOT
-->
			
				<li>
					<a href="{$val[url]}" title="{$val[title]}">
						<img src="{$val[imgurl]}">
						<div class="but trant"><span>{$val[title]} </span></div>
					</a>
				</li>


<!--
EOT;
}
echo <<<EOT
-->				
			</ul>
		</div>
			<!--product-fl-img end-->
	</div>
    <!--product-fl end-->
    <!--product-fr start-->
	<div class="product-fr">
		<ul>
<!--
EOT;
foreach($product_list as $key=>$val){
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x={$met_productimg_x}&y={$met_productimg_y}";
echo <<<EOT
-->			
			<li>
				<a href="{$val[url]}" title="{$val[title]}">
					<img src="{$val[imgurl]}" alt="{$val[title]}">
					<div class="blank-10"></div>
					<div class="f-14 h-24">{$val['title']}</div>
					<div class="but trant">{$lang_gengduo}</div>
					<span class="trant"></span>
					<div class="icon trant"></div>
				</a>
			</li>

<!--
EOT;
}
echo <<<EOT
-->				
			<div class="clear"></div>
		</ul>
		<!--page start-->
		<div class="page">
		{$page_list}
		</div>
			<!--page end-->
	</div>
    <!--product-fr end-->
  <div class="clear"></div>
</div>
<!--product end-->







<!--
EOT;
require_once template('gap');
}
require_once template('foot'); 
?>