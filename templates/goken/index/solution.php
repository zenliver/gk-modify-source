<!--<?php
$tem_solution         = tmpcentarr($lang_solution_id);
$tem_solution['name'] = $lang_solution_title?$lang_solution_title:$tem_solution['name'];

echo <<<EOT
-->



<!--index-solution start-->
	<div class="index-solution">
    <div class="blank-20"></div>
    <div class="main-title"><span class="icon">left</span><span>{$tem_solution['name']}</span><span class="icon">right</span> </div>
    <div class="main-txt">{$lang_solution_desc}</div>
<!---picScroll-left-solution start-->
    <div class="picScroll-left-solution">
		
			<div class="hd">
				<ul></ul>
				<a class="prev"><i class="icon-long-arrow-left"></i></a>
				<a class="next"><i class="icon-long-arrow-right"></i></a>
				<span class="pageState"></span>
			</div>
			
			<div class="bd">
			
				<ul class="picList">
<!--
EOT;
foreach(methtml_getarray($lang_solution_id,'','','',$lang_solution_num) as $key=>$val){
$val[imgurl] ="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_solution_x}&y={$lang_solution_y}";
echo <<<EOT
--> 				
					<li>
						<a href="{$val[url]}" title="{$val[title]}">
							<div class="pic"><img src="{$val[imgurl]}" alt="{$val[title]}"></div>
							<span class="trant"></span>
							<div class="but trant">{$val[title]}</div>
						</a>
					</li>

<!--
EOT;
}
echo <<<EOT
--> 					
				</ul>
				
			</div>
			
    </div>
    <!---picScroll-left-solution end-->
	</div>
<!--index-solution end-->

<!--big-img start-->
	<div class="big-img"><img src="{$lang_solution_img}" title="{$tem_solution['name']}"></div>
<!--big-img end-->


<!--
EOT;
?>