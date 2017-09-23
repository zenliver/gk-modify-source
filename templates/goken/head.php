<!--<?php
$methtml_head  = metlabel_html5(0);//基于Html5
$topnav        = metlable_lang('<li class="line">|</li>',1,0);//右上角功能导航（间隔代码,文字链接或图标链接,是否获取语言列表）
echo <<<EOT
-->
{$methtml_head}
<link rel="stylesheet" href="{$img_url}css/font-awesome.min.css">
<link rel="stylesheet" href="{$img_url}css/iconfont.css">

</head>
<body>
	<div class="header trant">
		<div class="header-top">
			<div class="w-1200">
				<div class="header-tel fl"><i class="icon-phone-sign"></i>{$met_seo}</div>
				<div class="header-icon fr">
<!--
EOT;
if($lang_twitter_open){
echo <<<EOT
-->
					<a href="{$lang_twitter_url}"><i class="icon-twitter"></i></a>
<!--
EOT;
}
if($lang_linkedin_open){
echo <<<EOT
-->
					<a href="{$lang_linkedin_url}"><i class="icon-linkedin"></i></a>
	<!--
EOT;
}
if($lang_facebook_open){
echo <<<EOT
-->
					<a href="{$lang_facebook_url}"><i class="icon-facebook"></i></a>
<!--
EOT;
}
if($lang_google_open){
echo <<<EOT
-->
					<a href="{$lang_google_url}"><i class="icon-google-plus"></i></a>
<!--
EOT;
}
if($lang_youtube_open){
echo <<<EOT
-->
					<a href="{$lang_youtube_url}"><i class="icon-youtube"></i></a>
<!--
EOT;
}
print_r("\$lang_home:".$lang_home);
echo <<<EOT
-->
				</div>
				<div class="clear"></div>
			</div>
		</div>





    <div class="header-logo-old w-1200 trant" style="display: none;">
			<ul>

		<li><a href="{$index_url}" title="{$lang_home}" class="trant {$navnow}" >{$lang_home}</a></li>
<!--
EOT;
$i=0;
foreach($nav_list as $key=>$val){
$i++;
$navnow = $val[id]==$navdown?'hover':'';
echo <<<EOT
-->
<!--
EOT;
if($i<=3){
echo <<<EOT
-->
				<li><a class="trant {$navnow}" href="{$val[url]}" title="{$val[name]}">{$val[name]}</a></li>
<!--
EOT;
}}
$h=$classnow==10001?'1':'2';
echo <<<EOT
-->
				<li class="logo">
					<h{$h}>
						<a href="{$index_url}" title="{$met_webname}">
							<img src="{$met_logo}" style="margin:{$lang_LogoTop}px 0px 0px {$lang_LogoLeft}px;" alt="{$met_webname}">
						</a>
					</h{$h}>
				</li>
<!--
EOT;
$i=0;
foreach($nav_list as $key=>$val){
$i++;
$navnow = $val[id]==$navdown?'hover':'';
echo <<<EOT
-->
<!--
EOT;
if($i>=4&&$i<=6){
echo <<<EOT
-->
				<li><a class="trant {$navnow}" href="{$val[url]}" title="{$val[name]}">{$val[name]}</a></li>
<!--
EOT;
}}
echo <<<EOT
-->
				<div class="clear"></div>
			</ul>
    </div>





<!-- 20170902修改 by zenliver 顶部菜单新代码 start -->
    <div class="header-logo w-1200 trant">
			<ul>
<!--
EOT;

            $h=$classnow==10001?'1':'2';
echo <<<EOT
-->
            				<li class="logo">
            					<h{$h}>
            						<a href="{$index_url}" title="{$met_webname}">
            							<img src="{$met_logo}" style="margin:{$lang_LogoTop}px 0px 0px {$lang_LogoLeft}px;" alt="{$met_webname}">
            						</a>
            					</h{$h}>
            				</li>
		<li><a href="{$index_url}" title="{$lang_home}" class="trant {$navnow}" >{$lang_home}</a></li>
<!--
EOT;
foreach($nav_list as $key=>$val) {
$navnow = $val[id]==$navdown?'hover':'';
echo <<<EOT
-->

				<li><a class="trant {$navnow}" href="{$val[url]}" title="{$val[name]}">{$val[name]}</a></li>


<!--
EOT;
}
echo <<<EOT
-->
				<div class="clear"></div>
			</ul>
    </div>
<!-- 20170902修改 by zenliver 顶部菜单新代码 end -->





    <a class="m-logo" href="{$index_url}" title="{$met_webname}"><img src="{$met_logo}" alt="{$met_webname}"></a>
    <div class="menu"><i class="icon-reorder"></i></div>
	</div>
<!--
EOT;
if($met_flasharray[$classnow][type]==1){
echo <<<EOT
-->
	<div class="index-banner">

		<div id="slideBox" class="slideBox">

			<div class="hd">
				<ul>
<!--
EOT;
$i=0;
foreach($met_flashimg as $key=>$val){
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
$i=0;
foreach($met_flashimg as $key=>$val){
$i++;
echo <<<EOT
-->
					<li>
						<a href="{$val[img_link]}" title="{$val[img_title]}"><img src="{$val[img_path]}" alt="{$val[img_title]}"/></a>
						<div class="txt-bg"></div>
						<div class="txt">
<!--
EOT;
if($lang_xuhao){
echo <<<EOT
-->
							<div class="f-24">{$lang_banner_word}-{$i}</div>
<!--
EOT;
}else{
echo <<<EOT
-->
							<div class="f-24">{$lang_banner_word}</div>

<!--
EOT;
}
echo <<<EOT
-->
							<div class="blank-20"></div>
							<div class="f-90">{$val[img_title]}</div>
							<div class="blank-20"></div>
							<a class="but-yellow" href="{$val[img_link]}" title="{$val[img_title]}">{$lang_banner_anniu}</a>
						</div>
					</li>

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
}else{
$methtml_flash=metlabel_flash();
echo <<<EOT
-->
	<div class="nei-banner">
<!--
EOT;
foreach($met_flashimgall as $key=>$val){
echo <<<EOT
-->
	<a href="{$val[img_link]}" title="{$val[img_title]}"><img src="{$val[img_path]}" alt="{$val[img_title]}"></a>
<!--
EOT;
}
$class_list[$classnow][description]=utf8substr($class_list[$classnow][description],0,30);
echo <<<EOT
-->
	<div class="txt">
		<div class="f-24">{$class_list[$classnow][description]}</div>
		<div class="f-55"><strong>{$class_list[$classnow][namemark]}</strong></div>
		<div class="position">
			<a href="{$index_url}" title="{$lang_home}">{$lang_home}</a> &gt; {$nav_x[name]}
		</div>
	</div>
</div>
<!--
EOT;
}
echo <<<EOT
-->
<!--
EOT;
?>
