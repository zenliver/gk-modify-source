<!--<?php
require_once template('head');
echo <<<EOT
-->
<script type="text/javascript" src="{$img_url}js/mootools-core.js"></script>
<script type="text/javascript" src="{$img_url}js/mediabox.js"></script>
<!--case-container start-->
<div class="case-container w-1200">

<!--
EOT;
require_once template('img_include');
echo <<<EOT
-->

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
				<a href="{$val[url]}">
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
require_once template('foot');
?>
