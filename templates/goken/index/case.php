<!--<?php
$tem_case         = tmpcentarr($lang_case_id);
$tem_case['name'] = $lang_case_title?$lang_case_title:$tem_case['name'];
$tem_case['list'] = methtml_getarray($lang_case_id,$lang_case_type,'','',$lang_case_num);
$tem_wp4 = $lang_waypointsok==1?'tem_wp4':'';
echo <<<EOT
-->


<!--index-case start-->
	<div class="index-case w-1200">
		<div class="blank-20"></div>
    <div class="main-title"><span class="icon">left</span><span>{$tem_case['name']}</span><span class="icon">right</span> </div>
    <div class="main-txt">{$lang_case_desc}</div>
		
<!---picScroll-left-case start-->
    <div class="picScroll-left-case">
			<div class="hd">
				<a class="next"><i class="icon-chevron-right"></i></a>
				<ul></ul>
				<a class="prev"><i class="icon-chevron-left"></i></a>
				<span class="pageState"></span>
			</div>
			
			<div class="bd">
				<ul class="picList">
<!--
EOT;
$i=0;$k=1;$c=count($tem_case['list']);
foreach($tem_case['list'] as $key=>$val){
$i++;
$qq = $i==1?"<li>":'';
if($i==$k+2){$k = $i;$qq = "<li>";}
$qz = $i%2==0||$i==$c?"</li>":'';
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_case_x}&y={$lang_case_y}";
echo <<<EOT
-->			
					{$qq}
						<div class="pic">
							<a href="{$val[url]}" title="{$val[title]}">
								<img src="{$val[imgurl]}" alt=="{$val[title]}">
								<div class="tit"><span>{$val[title]}</span></div>
								<div class="tit-t"><span>{$val[description]}</span></div>
							</a>
						</div>
					{$qz}
					

					


<!--
EOT;
}
echo <<<EOT
--> 					
				</ul>
				
			</div>
			
    </div>
    <!---picScroll-left-case end-->
</div>
<!--index-case end-->




<!--
EOT;
?>