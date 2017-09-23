<!--<?php
require_once template('head');
// require_once template('sidebar');
echo <<<EOT
-->


<!--case-container start-->
<div class="case-container w-1200">

<!--
EOT;
require_once template('img_include');
echo <<<EOT
-->

        <div id="showdownload">
			<h1 class="title">{$download[title]}</h1>
            <ul class="paralist">
                <li><span>{$lang_showdownload1}</span>{$download[updatetime]}</li>
<!--
EOT;
foreach($download_paralist as $key=>$val){
// echo '<li><span>{$val[name]}</span>{$download[$val[para]]}</li>';
echo <<<EOT
-->



<!--
EOT;
}
echo <<<EOT
-->
			</ul>

<!--
EOT;
// print_r($download_paralist);
// print_r($download);
$md5_salt = '564zenliver78797877sfsfsfsfs';
$showdownload_pwd_set_md5 = md5(md5(md5($download[$download_paralist[0][para]].$md5_salt)));
$showdownload_page_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
// print_r($showdownload_page_url);
if($download[$download_paralist[0][para]] != '') {
echo <<<EOT
-->
            <div class="showdownload_pwd_input">
                <div class="showdownload_pwd_input_desc">{$lang_download_pwd_input_desc}</div>
                <form class="showdownload_pwd_input_form" action="/templates/goken/showdownload_pwd_verify.php" method="post">
                    <input type="password" name="showdownload_pwd" value="" placeholder="{$lang_download_pwd_input_placeholder}">
                    <input type="hidden" name="showdownload_pwd_set" value="{$showdownload_pwd_set_md5}">
                    <input type="hidden" name="showdownload_page_url" value="{$showdownload_page_url}">
                    <input type="submit" name="showdownload_pwd_btn" value="{$lang_download_pwd_input_submit_btn_txt}" class="showdownload_pwd_input_form_submit_btn">
                </form>
            </div>

<!--
EOT;
    $url_dlcode_start_pos = strpos($showdownload_page_url,'dlpwdcode');
    $url_dlcode_end_pos = strrpos($showdownload_page_url,'=');
    $url_dlcode_length = $url_dlcode_end_pos-$url_dlcode_start_pos;
    $url_dlcode = substr($showdownload_page_url,$url_dlcode_start_pos,$url_dlcode_length);
    $url_dlcode_before = substr($showdownload_page_url,0,($url_dlcode_start_pos-1));
    $cuurent_time = date('YmdHis');
    $dlcode_salt_salt = '523zenliver546565';
    // print_r($cuurent_time);
    $cuurent_time_md5 = md5(md5(md5($cuurent_time.$dlcode_salt_salt)));
    $cuurent_time_md5_1 = md5(md5(md5(($cuurent_time-1).$dlcode_salt_salt))); // 相隔1s的情况
    $cuurent_time_md5_2 = md5(md5(md5(($cuurent_time-2).$dlcode_salt_salt))); // 相隔2s的情况
    if ($url_dlcode == 'dlpwdcode'.$cuurent_time_md5 || $url_dlcode == 'dlpwdcode'.$cuurent_time_md5_1 || $url_dlcode == 'dlpwdcode'.$cuurent_time_md5_2) {
        $url_dlcode_val = $_GET[$url_dlcode];
        print_r($url_dlcode_val);
        if($url_dlcode_val == $showdownload_pwd_set_md5) {
echo <<<EOT
-->
            <div class="downloadbox">
                <a href="{$download[downloadurl]}" target="_blank" title="{$lang_showdownload3}">
                    {$lang_showdownload3}
                </a>
            </div>
            <style media="screen">
                .showdownload_pwd_input {
                    display: none;
                }
            </style>
<!--
EOT;
        }
    } else if ($url_dlcode_start_pos) {
echo <<<EOT
-->
    <script type="text/javascript">alert("Your password is incorrect!");window.location.href = "{$url_dlcode_before}";</script>
<!--
EOT;
    }


} else {
echo <<<EOT
-->
            <div class="downloadbox">
                <a href="{$download[downloadurl]}" target="_blank" title="{$lang_showdownload3}">
                    {$lang_showdownload3}
                </a>
            </div>
<!--
EOT;
}
echo <<<EOT
-->




<!--
EOT;
if($download[content]){
echo <<<EOT
-->
			<h3 class="ctitle"><span>{$lang_detailtxt}</span></h3>
<!--
EOT;
}
echo <<<EOT
-->
			<div class="met_editor"">
				{$download[content]}
				<div class="met_clear"></div>
			</div>
			<div class="met_tools">
				{$met_tools_code}
				<span class="met_Clicks met_none"><!--累计浏览次数--></span>
				<ul class="met_page">
					<li class="met_page_preinfo"><span>{$lang_Previous}</span><a href='{$preinfo[url]}'>{$preinfo[title]}</a></li>
					<li class="met_page_next"><span>{$lang_Next}</span><a href='{$nextinfo[url]}'>{$nextinfo[title]}</a></li>
				</ul>
			</div>
        </div>

</div>



<!--
EOT;
require_once template('gap');
require_once template('foot');
?>
