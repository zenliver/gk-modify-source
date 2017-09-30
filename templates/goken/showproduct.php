<!--<?php
require_once template('head');
$clom = $class_list[$classnow][index_num]; //获取当前栏目的栏目标识，转换为简短的变量，以便在下面使用
if($clom){ //栏目标识默认为0，为0则采用默认模板文件
require_once template('showproduct'.$clom);//调用不同的模版文件，如果栏目标识为1，则调用 about1.html
}else{ //如果栏目标识为0，则执行下面的代码
$met_productnext=methtml_prenextinfo(1);
echo <<<EOT
-->



<!--product-detail start-->
<div class="product-detail w-1200">
    <!--product-detail-img start-->
	<div class="product-detail-img">
			<!--left start-->
		<div class="left">
			<div class="picFocus-img">
				<div class="bd">
					<ul>
						<li>
							<a href="{$product[imgurl]}">
								<img src="{$thumb_src}dir={$product[imgurl]}&x={$met_productdetail_x}&y={$met_productdetail_y}" alt="{$product[title]}"/>
							</a>
						</li>



<!--
EOT;
if(count($displaylist)>0){
$dlist="<li><img src=\"{$thumb_src}dir={$product[imgurl]}&x=200&y=200\" alt=\"{$product[title]}\" /></li>";
foreach($displaylist as $key=>$val){
$dlist.= "<li><img src=\"{$thumb_src}dir={$val[imgurl]}&x=200&y=200\" alt=\"{$val[title]}\" /></li>";
echo <<<EOT
-->
						<li>
							<a href="{$val[imgurl]}" title="{$val[title]}">
								<img src="{$thumb_src}dir={$val[imgurl]}&x={$met_productdetail_x}&y={$met_productdetail_y}" alt="{$val[title]}"/>
							</a>
						</li>


<!--
EOT;
}
}
echo <<<EOT
-->
					</ul>
				</div>

				<div class="hd">
					<ul>
					{$dlist}
					</ul>
				</div>
			</div>
		</div>
			<!--left end-->
			<!--right start-->
		<div class="right">
			<div class="tit">{$product[title]}</div>


<!--
EOT;
$i=0;
foreach($product_paralist as $key=>$val){
//循环参数
$i++;
echo <<<EOT
-->

<!--
EOT;
// if($i!=1&&$i!=3){
	if($i!=1&&$i!=3&&$i!=4&&$i!=5){
echo <<<EOT
-->
			<div class="tt">{$val[name]}<span>{$product[$val[para]]}</span></div>
			<div class="blank-20"></div>

<!--
EOT;
}
echo <<<EOT
-->

<!--
EOT;
if($i==1){
//第1个参数
echo <<<EOT
-->
			<div class="ping">
<!--
EOT;
for($i2=0;$i2<$product[$val[para]];$i2++){
echo <<<EOT
-->
			<i class="icon-star"></i>
<!--
EOT;
}
echo <<<EOT
-->

			</div>
<!--
EOT;
}
//第1个参数
echo <<<EOT
-->



<!--
EOT;
if($i==4){
//第3个参数
$product[descriptionhtml] = $product[description]?"<p class=\"desc\">{$product[description]}</p>":'';
echo <<<EOT
-->


			<div class="c">{$product[descriptionhtml]}</div>
			<div class="blank-20"></div>
			<div class="xian"></div>





<!--
EOT;
}
//第3个参数
echo <<<EOT
-->






<!--
EOT;
if($i==4){
//第四个参数
echo <<<EOT
-->
			<div class="blank-20"></div>
			<div class="tt">{$val[name]}</div>
			<div class="blank-20"></div>
			<div class="color">
<!--
EOT;
dump($product[$val[para]]);
$str=explode("|",$product[$val[para]]);
for($i4=0;$i4<count($str);$i4++){
$product_color_name = str_replace('GK','GK-',$str[$i4]);
echo <<<EOT
-->
	  <span>
        <p>
            <i class="{$product_color_name}"></i>
            <i class="{$product_color_name} product_color_img_big"></i>
        </p>
        <p>{$product_color_name}</p>
      </span>
<!--
EOT;
}
echo <<<EOT
-->

			</div>
			<div class="blank-20"></div>
			<div class="xian"></div>
			<div class="blank-20"></div>
<!--
EOT;
}
//第四个参数
echo <<<EOT
-->


<!--
EOT;
	if($i==5){//第五个参数
echo <<<EOT
-->
			<div class="tt">{$val[name]}
			<div class="blank-20"></div>
			<span>{$product[$val[para]]}</span>

			</div>
			<div class="blank-20"></div>

<!--
EOT;
}
echo <<<EOT
-->



<!--
EOT;
}
//循环参数
echo <<<EOT
-->


			<div class="tt-c">share on:
<!--
EOT;
if($lang_facebook_open){
echo <<<EOT
-->
					<a href="{$lang_facebook_url}"><i class="icon-facebook"></i></a>
<!--
EOT;
}
if($lang_twitter_open){
echo <<<EOT
-->
					<a href="{$lang_twitter_url}"><i class="icon-twitter"></i></a>
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
if($lang_pinterest_open){
echo <<<EOT
-->
					<a href="{$lang_pinterest_url}"><i class="icon-youtube"></i></a>
<!--
EOT;
}
echo <<<EOT
-->
			</div>


		</div>

			<!--right end-->
		<div class="clear"></div>
	</div>
    <!--product-detail-img end-->




    <!--product-detail-tab start-->
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
	<div class="product-detail-tab">
		<div class="slideTxtBox">

			<div class="hd">
					<ul>
<!--
EOT;
$i=0;
foreach($productTablist as $key=>$val){
$i++;
$met_now=$i==1?'class="on"':'';
echo <<<EOT
-->
						<li {$met_now}>{$val['title']}</li>

<!--
EOT;
}
echo <<<EOT
-->
					</ul>
			</div>

			<div class="bd">
<!--
EOT;
$i=0;
foreach($productTablist as $key=>$val){
$i++;
$met_none = $i==1?'':'met_none';
echo <<<EOT
-->
				<ul>
						<li>
								{$val[content]}
						</li>
				</ul>

<!--
EOT;
}
echo <<<EOT
-->
			</div>


		</div>
	</div>
    <!--product-detail-tab end-->




    <!--product-detail-rel start-->



	<div class="product-detail-rel">
		<div class="tit">{$lang_product_related_title}<span></span></div>
		<ul>
<!--
EOT;
$i=0;
foreach($product_list as $key=>$val){
$i++;
echo <<<EOT
-->
			<li>
				<a href="{$val[url]}" title="{$val[title]}">
					<img src="{$thumb_src}dir={$val[imgurl]}&x={$met_productimg_x}&y={$met_productimg_y}">
					<div class="blank-10"></div>
					<div class="f-14 h-24">{$val[title]}</div>
					<div class="f-12 h-24">{$val[class2_name]}</div>
					<div class="blank-10"></div>
					<div class="but trant">{$lang_gengduo}</div>
				</a>
			</li>

<!--
EOT;
if($i>=$lang_product_related_num)break;
}
echo <<<EOT
-->

			<div class="clear"></div>
		</ul>
	</div>

    <!--product-detail-rel end-->
</div>
<!--product-detail end-->







<!--
EOT;
}
require_once template('foot');
?>
