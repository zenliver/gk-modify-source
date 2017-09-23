<!--<?php
echo <<<EOT
-->
<!--index-email start-->
	<div class="index-email" style="background: #f7de36 url({$lang_emt_img}) no-repeat 50% 0px;">
    <div class="img"><img src="{$lang_emo_img}"></div>
    <div class="w-1200">
<!--left start-->
			<div class="left">
				<div class="f-24">{$lang_con_title}</div>
				<div class="c">{$lang_con_desc}</div>
				<div class="blank-10"></div>
				<div class="cc"><i class="icon-phone"></i>&nbsp;{$lang_con_tel}</div>
				<div class="blank-10"></div>
				<div class="cc"><i class="icon-envelope-alt"></i>&nbsp;{$lang_con_net}</div>
				<div class="blank-40"></div>
				<div class="f-24">{$lang_share_title}</div>
				<div class="blank-20"></div>
				<div class="icon">
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
echo <<<EOT
-->					
				</div>
			</div>
        <!--left end-->
        <!--right start-->
        <div class="right">
					<div class="f-24">{$lang_mass_title}</div>
				  <form  action='message/message.php?action=add' method="post" class="get-in-touch-form">
						<input type='hidden' name='lang' value='{$lang}' />
<!--
EOT;
$messagetable=metlabel_message();
foreach($messagetable as $key=>$val){
$val[type_html] = str_replace("type='text'","type='text' class='form-control'",$val[type_html]);
$val[type_html] = str_replace("textarea","textarea class='form-control' rows='3'",$val[type_html]);
$val[type_html] = str_replace("<select","<select class='form-control'",$val[type_html]);
$val[type_html] = str_replace("<label","<label style='margin-right:15px'",$val[type_html]);
$val[type_html] = str_replace("src='/member/","src='member/",$val[type_html]);
$val[type_html] = str_replace("src='../member/","src='member/",$val[type_html]);
echo <<<EOT
--> 
          {$val[type_html]}
<!--
EOT;
}
echo <<<EOT
-->
						<div class="clear"></div>
						<button type="submit" class="submit">Submit<i class="fa fa-arrow-circle-right"></i></button>
					</form>		

				
        </div>
        <!--right end-->
        <div class="clear"></div>
    </div>
	</div>
<!--index-email end-->


<!--
EOT;
?>