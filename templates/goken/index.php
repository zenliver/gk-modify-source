<!--<?php
require_once template('head');
echo <<<EOT
-->
<!--
EOT;
if($lang_product_open){
require_once template('index/product');
}
if($lang_case_open){
require_once template('index/case');
}
if($lang_solution_open){
require_once template('index/solution');
}
if($lang_about_open){
require_once template('index/about');
}
if($lang_news_open){
require_once template('index/news');
}
if($lang_customer_open){
require_once template('index/customer');
}
if($lang_email_open){
require_once template('index/email');
}
echo <<<EOT
-->
<!--
EOT;
require_once template('foot');
?>