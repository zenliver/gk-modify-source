<?php

defined('IN_MET') or exit('No permission');

$_M['syslist'] = array();
$_M['sysnews'] = '5.3.8';
$_M['syslist']['5.3.0'] = '5.3.1'; 
$_M['syslist']['5.3.1'] = '5.3.2'; 
$_M['syslist']['5.3.2'] = '5.3.3'; 
$_M['syslist']['5.3.3'] = '5.3.4'; 
$_M['syslist']['5.3.4'] = '5.3.5'; 
$_M['syslist']['5.3.5'] = '5.3.6'; 
$_M['syslist']['5.3.6'] = '5.3.7'; 
$_M['syslist']['5.3.7'] = '5.3.8';
$_M['syslist']['5.3.8'] = '5.3.9';
// if($_M['config']['met_weburl'] == 'http://localhost/metx5/'){
// 	$_M['sysnews'] = '5.3.9';
// 	$_M['syslist']['5.3.8'] = '5.3.9'; 
// }


$syslist = $_M['syslist'];
class install {
	public $syslist;
	public $step;
	public $html;
	function __construct() {
		global $_M;		
		$this->syslist = $_M['syslist'];
		$this->sysnews = $_M['sysnews'];
	}
	public function dosql() {
		global $_M;
		foreach ($this->syslist as $keysyslist => $valsyslist) {
			if ($keysyslist == $_M['config']['metcms_v']) {
				require_once $this->requirefile("file/v{$valsyslist}/install.class.php");
				if($return) {
					return $return;
				}
				$query = "SELECT * FROM {$_M['table']['config']} WHERE name='metcms_v'";
				$value = DB::get_one($query);
				
				if($this->sysnews != $value['value']){
					if(file_exists(PATH_WEB."{$_M['config']['met_adminfile']}/update/cms/auto.lock")){
						$this->step = 0;
						return 'next';
					}else{
						return 'recheck';
					}
				}
			}
		}
		deldir(PATH_WEB."{$_M['config']['met_adminfile']}/update/cms/");
		return 'complete';
	}
	public function getfile() {
		global $_M;
		foreach ($this->syslist as $key => $val) {
			if ($key == $_M['config']['metcms_v']) {
				return "file/v{$val}/file/";
			}
		}
		return 'notcopy';
	}
	public function html() {
		global $_M;		
		if($this->html){
			$re = $this->html;
			//$this->html = '';
			return $re;
		}else{
			return "升级到MetInfo{$this->syslist[$_M['config']['metcms_v']]}完成";
		}
	}
	
	public function requirefile($file) {
		$dir = dirname(__FILE__);
		return $dir.'/'.$file;
	}
	
	public function config_insert($name, $value, $lang = '') {
		global $_M;
		if($lang == 'metinfo'){
			$query = "SELECT * FROM {$_M['table']['config']} WHERE name='{$name}' AND lang='metinfo'";
			if(!DB::get_one($query)){
				$query = "INSERT INTO {$_M['table']['config']} SET name='{$name}',value='{$value}',mobile_value='',columnid=0,flashid=0,lang='metinfo'";
				DB::query($query);
			}
		}else{
			foreach($_M['langlist']['web'] as $key=>$val){
				$query = "SELECT * FROM {$_M['table']['config']} WHERE name='{$name}' AND lang='{$val['mark']}'";
				if(!DB::get_one($query)){
					$query = "INSERT INTO {$_M['table']['config']} SET name='{$name}',value='{$value}',mobile_value='',columnid=0,flashid=0,lang='{$val['mark']}'";
					DB::query($query);
				}	
			}
		}
	
	}
	
	public function config_upate($name, $value, $lang) {
		global $_M;
		$query = "UPDATE {$_M['table']['config']} SET value='{$value}' WHERE name='{$name}' AND lang='{$lang}'";
		DB::query($query);
	}
	
	public function config_del($name) {
		global $_M;
		$query = "DELETE FROM {$_M['table']['config']} WHERE name='{$name}'";
		DB::query($query);
	}
	
	public function lang_insert($ver) {
		global $_M;
		foreach($_M['langlist']['web'] as $key=>$val){
			if($val['synchronous'])$lang = $val['synchronous'];
			if($val['mark'])$lang = $val['mark'];
			if($val['synchronous'])
			$tablepre = $_M['config']['tablepre'];
			require $this->requirefile("file/v{$ver}/lang/{$lang}.php");
		}
	}
}

?>