<!--<?php
$met_foot_nav = methtml_footnav();//底部导航标签（次导航）
$met_foot_txt = metlabel_foot();//底部信息标签
echo <<<EOT
-->


<!--footer start-->
<div class="footer">

<!--foot start-->
	<div class="foot w-1200">
<!--
EOT;
if(count($link_img)>0){
echo <<<EOT
-->	
		<ul class="icon">
<!--
EOT;
foreach($link_img as $key=>$val){
echo <<<EOT
-->		
			<li><a href="{$val[weburl]}" title="{$val[webname]}"><img src="{$val[weblogo]}" alt="{$val[webname]}"></a> </li>

<!--
EOT;
}
echo <<<EOT
-->			
			
			<div class="clear"></div>
		</ul>
<!--
EOT;
}
echo <<<EOT
-->

<!--
EOT;
if(count($link_text)>0){
echo <<<EOT
-->	
		<ul class="icon">
<!--
EOT;
foreach($link_text as $key=>$val){
echo <<<EOT
-->		
			<li><a href="{$val[weburl]}" title="{$val[info]}">{$val[webname]}</a> </li>

<!--
EOT;
}
echo <<<EOT
-->			
			
			<div class="clear"></div>
		</ul>
<!--
EOT;
}
echo <<<EOT
-->




	
		<ul class="foot-nav">
<!--
EOT;
$i0=0;
foreach($navfoot_list as $key=>$val){
$i0++;
//一级循环
echo <<<EOT
-->		
			<li>
				<div class="li-t">{$val[name]}</div>
				<div class="blank-10"></div>
					
				<div class="li-c">
<!--
EOT;
$i=0;$k=1;$c=count($tem_case['list']);
foreach($nav_list2[$val[id]] as $key=>$val2){
$i++;
$qq = $i==1?"<div>":'';
if($i==$k+4){$k = $i;$qq = "<div>";}
$qz = $i%4==0||$i==$c?"</div>":'';
//二级循环
echo <<<EOT
-->	
					{$qq}
						<p><a href="{$val2[url]}" title="{$val2[name]}">{$val2[name]}</a></p>
					{$qz}						
<!--
EOT;
if($i>=8)break;
}
//二级循环
echo <<<EOT
-->				
						<div class="clear"></div>		
				</div>
			
			</li>

<!--
EOT;
if($i0>=8)break;
}
//一级循环
echo <<<EOT
-->			
			<div class="clear"></div>
		</ul>
		
		<div class="blank-10"></div>
	</div>
<!--foot end-->


<!--bottom start-->
	<div class="bottom">
		<img src="{$lang_bottom_img}">
		<p>{$met_foot_txt}</p>
	</div>
<!--bottm end-->








<!-- 20170609修改：增加右侧侧栏 by zenliver -->
    <div class="right_fixedbar">
        <div class="right_fixedbar_wrapper">
            <div class="right_fixedbar_cs">
                <a href="http://wpa.qq.com/msgrd?v=3&uin=3230926690&site=qq&menu=yes" target="_blank">
                    <div class="right_fixedbar_cs_icon">
                        <i class="iconfont icon-kefu"></i>
                    </div>
                    <div class="right_fixedbar_cs_tip">
                        Contact Us
                    </div>
                </a>

            </div>

            <div class="right_fixedbar_tel">
				<a href="tel:400-803-2299">
					<div class="right_fixedbar_tel_icon">
						<i class="icon-phone"></i>
					</div>
					<div class="right_fixedbar_tel_num">
						HOTLINE : 400-803-2299
					</div>
				</a>
            </div>

            <div class="right_fixedbar_backtotop">
                <div class="right_fixedbar_backtotop_icon">
                    <i class="icon-chevron-up"></i>
                </div>
                <div class="right_fixedbar_backtotop_tip">
                    Back to top
                </div>
            </div>
        </div>
    </div>











</div>
<!--footer end-->







<!--js start-->
<script src="{$img_url}js/jquery.js"></script>
<script src="{$img_url}js/slder.js"></script>
<script src="{$img_url}js/common.js"></script>
<!--js end-->


</body>
</html>

<!--
EOT;
?>-->