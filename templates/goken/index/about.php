<!--<?php
echo <<<EOT
-->
<!--
EOT;
$tem_about = tmpcentarr($lang_about_id);
$tem_abous = tmpcentarr($lang_abous_id);
if($lang_about_img1)$tem_aboutimg[1]  = $lang_about_img1;
if($lang_about_img2)$tem_aboutimg[2]  = $lang_about_img2;
if($lang_about_img3)$tem_aboutimg[3]  = $lang_about_img3;
$txtwd100 = $tem_aboutimg||$lang_about_video?'':'txtwd100';
$tem_wp1 = $lang_waypointsok==1?'tem_wp1':'';
echo <<<EOT
-->


<!--index-about start-->
	<div class="index-about">
    <div class="blank-20"></div>
    <div class="main-title"><span class="icon">left</span><span>{$lang_about_title}</span><span class="icon">right</span> </div>
    <div class="main-txt">{$lang_about_desc}</div>
<!--index-about-nav start-->

    <ul class="index-about-nav w-1200">
			<li>
				<a href="about.html">
					<div class="img">
						<img src="{$img_url}icon1-9.jpg">
						<div class="shu-xian"></div>
					</div>
					<div class="txt tc">
						<div class="blank-10"></div>
						<div class="t">20</div>
						<div class="c"> million square metersof warehouse</div>
					</div>
					<div class="clear"></div>
				</a>
			</li>
			
			<li>
				<a href="about.html">
					<div class="img">
						<img src="{$img_url}icon1-10.jpg">
						<div class="shu-xian"></div>
					</div>
					<div class="txt tc">
						<div class="blank-10"></div>
						<div class="t">100</div>
						<div class="c"> Appearance patent</div>
					</div>
					<div class="clear"></div>
				</a>
			</li>
			
			<li>
				<a href="about.html">
					<div class="img">
						<img src="{$img_url}icon1-11.jpg">
						<div class="shu-xian"></div>
					</div>
					<div class="txt tc">
						<div class="blank-10"></div>
						<div class="t">2000</div>
						<div class="c">million  paid for the  research</div>
					</div>
					<div class="clear"></div>
				</a>
			</li>
			
			<li>
				<a href="about.html">
					<div class="img">
						<img src="{$img_url}icon1-12.jpg">
						<div class="shu-xian"></div>
					</div>
					<div class="txt tc">
						<div class="blank-10"></div>
						<div class="t">5</div>
						<div class="c">years warranty</div>
					</div>
					<div class="clear"></div>
				</a>
			</li>
			
			<li>
				<a href="about.html">
					<div class="img">
						<img src="{$img_url}icon1-13.jpg">
						<div class="shu-xian"></div>
					</div>
					<div class="txt tc">
						<div class="blank-10"></div>
						<div class="t">20</div>
						<div class="c"> million square metersof warehouse</div>
					</div>
					<div class="clear"></div>
				</a>
			</li>
			
			<div class="clear"></div>
			<div class="heng-xian"></div>
    </ul>

<!--index-about-nav end-->
		
<!---index-about-bg start-->
    <div class="index-about-bg" style=" background: url({$lang_about_bgimg}) no-repeat 50% 0px;">
			<div class="index-about-txt w-1200">
				<div class="about-txt">
<!--left start-->
					<div class="left">
						<div id="slideBox-img" class="slideBox-img">
							<div class="hd">
									<ul>
<!--
EOT;
$i=0;
foreach(methtml_getarray($lang_about_id,'','','',$lang_about_num) as $key=>$val){
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
							
							<div class="bd">
								<ul>
<!--
EOT;
foreach(methtml_getarray($lang_about_id,'','','',$lang_about_num) as $key=>$val){
$val[imgurl]="{$thumb_src}dir=../{$val[imgurl]}&x=470&y=370";
echo <<<EOT
--> 								
									<li>
									<a href="{$val[url]}" title="{$val[title]}">
										<img src="{$val[imgurl]}" alt="{$val[title]}"/>
										<span></span>
										<div class="span-txt"><div class="txt">{$val[title]}</div> </div>
									</a>
									</li>
<!--
EOT;
}
echo <<<EOT
--> 									
								</ul>
							</div>
							
							<a class="next" href="javascript:void(0)"><i class="icon-chevron-right"></i></a>
						</div>

						<div class="right-xian"></div>
						<div class="bottom-xian"></div>
					</div>
<!--left end-->
						
						
<!--right start-->
					<div class="right">
						<div class="con1">
							<div class="t">{$lang_about_contitle}</div>
							<div class="blank-40"></div>
							<div class="c">{$lang_about_content}
							</div>
						</div>
						<div class="con2">
							<ul>
<!--
EOT;
$i=0;
foreach($nav_list2[$tem_abous[id]] as $key=>$val){
$i++;
echo <<<EOT
--> 							
								<li><a href="{$val[url]}" title="{$val[name]}"><i class="icon-bullseye"></i>&nbsp;&nbsp;{$val[name]}</a> </li>
<!--
EOT;
if($i>=$lang_abous_num)break;
}
echo <<<EOT
--> 								
								<div class="clear"></div>
							</ul>
						</div>
					</div>
					<!--right end-->
					<div class="clear"></div>
				</div>
			</div>
    </div>
    <!--index-about-bg end-->
	</div>
<!--index-about end-->




<!--
EOT;
?>