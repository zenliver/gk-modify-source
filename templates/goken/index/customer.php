<!--<?php
$tem_customer        = tmpcentarr($lang_customer_id);
$tem_customer['name'] = $lang_customer_title?$lang_customer_title:$tem_customer['name'];
echo <<<EOT
-->

	<div class="index-customer w-1200">
    <div class="blank-20"></div>
    <div class="main-title"><span class="icon">left</span><span>{$tem_customer['name']}</span><span class="icon">right</span> </div>
    <div class="main-txt">{$lang_customer_desc}</div>
		
    <div id="slideBox-customer" class="slideBox-customer">
			<div class="bd">
				<ul>
<!--
EOT;
foreach(methtml_getarray($lang_customer_id,'','','',$lang_customer_num,'','',1,'','') as $key=>$val){
echo <<<EOT
-->				
					<li>
						<a href="{$val[url]}" title="{$val[title]}">
							<div class="txt">{$val[description]}
									<div class="icon"><i class="icon-caret-down"></i></div>
							</div>
							<img src="{$val[imgurl]}" alt="{$val[title]}">
							<div class="t">{$val[title]}</div>
						</a>
					</li>
<!--
EOT;
}
echo <<<EOT
-->					
				</ul>
			</div>
			<div class="hd">

				<ul>
<!--
EOT;
$i=0;
foreach(methtml_getarray($lang_customer_id,'','','',$lang_customer_num,'','',1) as $key=>$val){
$i++;
echo <<<EOT
-->						
					<li>{$i}</li>
<!--
EOT;
}
echo <<<EOT
-->						
				</ul>
			</div>
    </div>
	</div>

<!--
EOT;
?>