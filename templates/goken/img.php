<!--<?php
require_once template('head');
$clom = $class_list[$classnow][index_num]; //获取当前栏目的栏目标识，转换为简短的变量，以便在下面使用
if($clom){ //栏目标识默认为0，为0则采用默认模板文件
require_once template('img'.$clom);//调用不同的模版文件，如果栏目标识为1，则调用 about1.html
}else{ //如果栏目标识为0，则执行下面的代码
$tem_proce         = tmpcentarr($lang_proce_id);
echo <<<EOT
-->
<script type="text/javascript" src="{$img_url}js/mootools-core.js"></script>
<script type="text/javascript" src="{$img_url}js/mediabox.js"></script>
<!--case-container start-->
<div class="case-container w-1200">
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

  <!--效果开始-->
	<div class="mod_gallerylist">

<!--
EOT;
foreach($img_list as $key=>$val){
$val0[imgurl] ="{$thumb_src}dir={$val[imgurl]}&x={$met_imgs_x}&y={$met_imgs_y}";
echo <<<EOT
-->
		<div class="layout_default">
			<p class="info"><span class="date"></span> <span class="author"></span></p>
			<div class="image_container">
				<a href="{$val[imgurl]}" rel="lightbox[ostec]">
					<img src="{$val0[imgurl]}" alt="{$val[title]}">
					<span class="trant"></span>
					<div class="meta">{$val[title]}</div>
					<div class="icon trant"></div>
				</a>
			</div>
		</div>
<!--
EOT;
}
echo <<<EOT
-->


		<div class="clear"></div>
	</div>
    <!--page start-->
	<div class="page">
	{$page_list}
	</div>
    <!--page end-->

		<script type="text/javascript">
        Mediabox.scanPage = function() {
            var links = $$("a").filter(function(el) {
                return el.rel && el.rel.test(/^lightbox/i);
            });
            $$(links).mediabox({/* Put custom options here */}, null, function(el) {
                var rel0 = this.rel.replace(/[[]|]/gi," ");
                var relsize = rel0.split(" ");
                return (this == el) || ((this.rel.length > 8) && el.rel.match(relsize[1]));
            });
        };
        window.addEvent("domready", Mediabox.scanPage);
    </script>

</div>


<!--
EOT;
require_once template('gap');
}
require_once template('foot');
?>
