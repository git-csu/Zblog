<?php
#注册插件
RegisterPlugin("BaiduShare","ActivePlugin_BaiduShare");

function ActivePlugin_BaiduShare() {
	Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','BaiduShare');

}
function BaiduShare(&$template){
	global $zbp;
		$a=$template->GetTags('article');
	$a->Content .= '<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到QQ好友" href="#" class="bds_sqq" data-cmd="sqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到百度云收藏" href="#" class="bds_bdysc" data-cmd="bdysc"></a><a title="分享到豆瓣网" href="#" class="bds_douban" data-cmd="douban"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';	
}
function InstallPlugin_BaiduShare() {}
function UninstallPlugin_BaiduShare() {}