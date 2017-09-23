<!--<?php
$tem_product         = tmpcentarr($lang_product_id);
$tem_product['name'] = $lang_product_title?$lang_product_title:$tem_product['name'];

$tem_product1 = tmpcentarr($lang_product1_id);
$tem_product2 = tmpcentarr($lang_product2_id);
$tem_product3 = tmpcentarr($lang_product3_id);
echo <<<EOT
-->
<!--index-product start-->
	<div class="index-product w-1200">
		<div class="blank-20"></div>
		<div class="main-title"><span class="icon">left</span><span>{$tem_product['name']}</span><span class="icon">right</span> </div>
		<div class="main-txt">{$tem_product[description]}</div>

<!--index-product-nav start-->
		<ul class="index-product-nav tc">




		<li class="w-12">
				<a href="/product/product.php?lang=en&class2=52" title="TABLES" class="trant">
					<img src="upload/201608/1472390213.png" >
                    <img src="upload/201608/1472390213_new.png" alt="" class="index-product-nav-icon-new">
					<div class="f-14">TABLES</div>
				</a>
			</li>


			<li class="w-12">
				<a href="/product/product.php?lang=en&class2=53" title="CHAIR" class="trant">
					<img src="upload/201608/1472389892.png" >
                    <img src="upload/201608/1472389892_new.png" alt="" class="index-product-nav-icon-new">
					<div class="f-14">CHAIR</div>
				</a>
			</li>


			<li class="w-12">
				<a href="/product/product.php?lang=en&class2=54" title="SOFA" class="trant">
					<img src="upload/201608/1472390005.png">
                    <img src="upload/201608/1472390005_new.png" alt="" class="index-product-nav-icon-new">
					<div class="f-14">SOFA</div>
				</a>
			</li>


			<li class="w-12">
				<a href="/product/product.php?lang=en&class2=57" title="BOOKCASE" class="trant">
					<img src="upload/201608/1472390039.png" >
                    <img src="upload/201608/1472390039_new.png" alt="" class="index-product-nav-icon-new">
					<div class="f-14">BOOKCASE</div>
				</a>
			</li>


			<li class="w-12">
				<a href="/product/product.php?lang=en&class2=56" title="SCREEN " class="trant">
					<img src="upload/201608/1472390123.png" tppabs="http://gokeng.6pima.cn/SCREEN">
                    <img src="upload/201608/1472390123_new.png" alt="" class="index-product-nav-icon-new">
					<div class="f-14">SCREEN </div>
				</a>
			</li>


			<li class="w-12">
				<a href="/product/product.php?lang=en&class2=58" title="MEETING TABLE" class="trant">
					<img src="upload/201608/1472390418.png" >
                    <img src="upload/201608/1472390418_new.png" alt="" class="index-product-nav-icon-new">
					<div class="f-14">MEETING TABLE</div>
				</a>
			</li>









			<div class="clear"></div>
		</ul>
<!--index-product-nav end-->


<!---picScroll-left-product start-->
		<div class="picScroll-left-product">

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
foreach(methtml_getarray($lang_product_id,$lang_product_type,'','',$lang_product_num,'',1,1) as $key=>$val){
$val[imgurl] ="{$thumb_src}dir=../{$val[imgurl]}&x={$lang_product_x}&y={$lang_product_y}";
echo <<<EOT
-->
					<li class="trant">
						<div class="index_picList_li_wrapper">
						<a href="{$val[url]}" title="{$val[title]}">
								<div class="pic"><img src="{$val[imgurl]}" alt="{$val[title]}"></div>
								<div class="blank-10"></div>
								<div class="f-14 h-24">{$val[title]}</div>
								<div class="f-12 h-24">{$val[class2_name]}</div>
							</a>
							<a href="{$val[url]}">
								<div class="but trant">view</div>
							</a>
							<a href="/about/show.php?lang=en&id=48">
								<div class="but trant but_index_new_contact">contact</div>
							</a>
							<div class="clear"></div>
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
<!---picScroll-left-product end-->



<!--index-product-ul start-->
		<ul class="index-product-ul">

			<li class="li-left fl">
				<a href="{$tem_product1[url]}" title="{$tem_product1[name]}">
					<div class="blank-40"></div>
					<div class="t">{$tem_product1[name]}</div>
					<div class="blank-10"></div>
					<div class="c">{$tem_product1[description]}</div>
					<div class="blank-10"></div>
					<div class="but tc trant">{$lang_product_more}</div>
					<div class="img"><img src="{$lang_product1_img}" alt="{$tem_product1[name]}"></div>
				</a>
			</li>

			<li class="li-mid fl">
				<a href="{$tem_product2[url]}" title="{$tem_product2[name]}">
					<div class="txt">
							<div class="blank-40"></div>
							<div class="t">{$tem_product2[name]}</div>
							<div class="blank-10"></div>
							<div class="c">{$tem_product2[description]}</div>
							<div class="blank-10"></div>
							<div class="but tc trant">{$lang_product_more}</div>
					</div>
					<div class="img"><img src="{$lang_product2_img}" alt="{$tem_product2[name]}"></div>
				</a>
			</li>

			<li class="li-right fr">
				<a href="{$tem_product3[url]}" title="{$tem_product3[name]}">
					<div class="img"><img src="{$lang_product3_img}" alt="{$tem_product3[name]}"></div>
					<div class="blank-20"></div>
					<div class="t">{$tem_product3[name]}</div>
					<div class="blank-10"></div>
					<div class="c">{$tem_product3[description]}</div>
					<div class="blank-10"></div>
					<div class="but tc trant">{$lang_product_more}</div>
				</a>
			</li>

			<div class="clear"></div>
		</ul>
    <!--index-product-ul end-->
	</div>
<!--index-product end-->
<!--
EOT;
?>
