<?php
#注册插件
RegisterPlugin("FY_Sitemap","ActivePlugin_FY_Sitemap");
function ActivePlugin_FY_Sitemap() {
    Add_Filter_Plugin('Filter_Plugin_Admin_SettingMng_SubMenu','FY_Sitemap_AddMenu');
}

function FY_Sitemap_AddMenu(){
	global $zbp;
	echo '<a href="'. $zbp->host .'zb_users/plugin/FY_Sitemap/main.php"><span class="m-left">FY_Sitemap生成器</span></a>';
}

//初始化数据
function InstallPlugin_FY_Sitemap() {
    global $zbp;
    if(!$zbp->Config('FY_Sitemap')->HasKey('Version')){
		$zbp->Config('FY_Sitemap')->Version = '1.0';
        $zbp->Config('FY_Sitemap')->XML_FileName = 'sitemap';
		$zbp->Config('FY_Sitemap')->Enabled_XML_Sitemap = 'true';
		$zbp->Config('FY_Sitemap')->home_priority = '1.0';
		$zbp->Config('FY_Sitemap')->home_frequency = 'Daily';
		$zbp->Config('FY_Sitemap')->category_select = 'true';
		$zbp->Config('FY_Sitemap')->category_priority = '0.8';
		$zbp->Config('FY_Sitemap')->category_frequency = 'Weekly';
		$zbp->Config('FY_Sitemap')->post_select = 'true';
		$zbp->Config('FY_Sitemap')->post_priority = '0.6';
		$zbp->Config('FY_Sitemap')->post_frequency = 'Monthly';
		$zbp->Config('FY_Sitemap')->page_select = 'true';
		$zbp->Config('FY_Sitemap')->page_priority = '0.3';
		$zbp->Config('FY_Sitemap')->page_frequency = 'Weekly';
		$zbp->Config('FY_Sitemap')->tag_priority = '0.3';
		$zbp->Config('FY_Sitemap')->tag_frequency = 'Weekly';
		$zbp->SaveConfig('FY_Sitemap');
	}
}


?>