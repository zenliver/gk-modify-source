<!--<?php
require_once template('head'); 
$clom = $class_list[$classnow][index_num]; //获取当前栏目的栏目标识，转换为简短的变量，以便在下面使用
if($clom){ //栏目标识默认为0，为0则采用默认模板文件
require_once template('about'.$clom);//调用不同的模版文件，如果栏目标识为1，则调用 about1.html 
}else{ //如果栏目标识为0，则执行下面的代码
echo <<<EOT
-->
<div>

		    {$show[content]}
					<div class="clear"></div>

</div>

<!--
EOT;
require_once template('gap');
}
require_once template('foot');
?>