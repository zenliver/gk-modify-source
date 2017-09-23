<!--<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved. 

defined('IN_MET') or exit('No permission');

require $this->template('ui/head');
echo <<<EOT
-->
<link rel="stylesheet" href="{$_M[url][own_tem]}css/metinfo.css?{$jsrand}" />
<script>
var chartdata = '{$chartdata}';
var ownlangtxt = {"installations":"{$_M[word][installations]}"};
</script>
<!--[if lte IE 8]><script src="{$_M[url][own_tem]}js/excanvas.js"></script><![endif]-->
<input id="met_automatic_upgrade" type="hidden" value="{$_M['config']['met_automatic_upgrade']}" />
<div class="index_box">
	<section class="index_stat">
		<h3>{$_M['word']['upfiletips30']}</h3>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 index_stat_chart">
					<div class="index_stat_chart_tips">
						<ul>
							<li><i class="ip"></i>IP</li>
							<li><i class="uv"></i>{$_M['word']['statvisitors']}</li>
							<li><i class="pv"></i>{$_M['word']['sys_views']}（PV）</li>
						</ul>
						{$_M['word']['sys_nearly']}8{$_M['word']['Traffic_trends']}
					</div>
					<canvas id="myChart" height="188"></canvas>
				</div>
				<div class="col-md-5 index_stat_table">
					<table cellpadding="0" cellspacing="1" class="stat_table">
						<tr>
							<th width="25%">{$_M['word']['statips35']}</th>
							<th width="25%">PV</th>
							<th width="25%">{$_M['word']['statvisitors']}</th>
							<th width="25%">IP</th>
						</tr>
<!--
EOT;
foreach($stat as $key=>$val){
echo <<<EOT
-->
						<tr>
							<td>{$val[day]}</td>
							<td>{$val[pv]}</td>
							<td>{$val[alone]}</td>
							<td>{$val[ip]}</td>
						</tr>
<!--
EOT;
}
echo <<<EOT
-->
					</table>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</section>
<!--
EOT;
if(($privilege['navigation'] == 'metinfo' || strstr($privilege['navigation'], '1507')) && $_M['config']['met_agents_app']) {
echo <<<EOT
-->
	
<!--
EOT;
}
if ($_M['config']['met_agents_type'] < 2) {
echo <<<EOT
-->
	
<!--
EOT;
}
echo <<<EOT
-->
</div>
<!--
EOT;
require $this->template('ui/foot');
# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>