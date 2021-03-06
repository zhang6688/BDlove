<?php
/* Smarty version 3.1.29, created on 2017-04-22 18:28:37
  from "E:\www\yunjuke\application\vmall\views\store_shopping_guide.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58fb3055cc55c7_90314649',
  'file_dependency' => 
  array (
    '98a0716a0d69a65199549579d833952eef73bf60' => 
    array (
      0 => 'E:\\www\\yunjuke\\application\\vmall\\views\\store_shopping_guide.html',
      1 => 1492496536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lib/Hlink.html' => 1,
  ),
),false)) {
function content_58fb3055cc55c7_90314649 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2598658fb3055c4ea50_35065711';
?>
<html lang="zh-cn" style="opacity: 1; font-size: 109.375px;">
	<head>
		<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lib/Hlink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<title>选择服务顾问</title>
			<style>
				body {
					background: #fff;
				}
				
				.smSalesList {
					color: #444;
				}
				
				.smSalesList .brandSalesContainer {
					position: absolute;
					z-index: 1101;
					top: 40px;
					right: 0;
					left: 0;
					bottom: 90px;
					padding: 0 15px;
					overflow: auto;
				}
				
				.smSalesList .selectBtn {
					position: absolute;
					z-index: 1101;
					bottom: 0;
					left: 0;
					right: 0;
					display: block;
					text-align: center;
					height: 75px;
					padding-top: 10px;
					color: #9b9b9b;
				}
				
				.smSalesList .selectBtn.ac {
					color: #000;
					font-size: 17px;
					line-height: 70px;
					display: none;
				}
				
				.smSalesList .brandItem .tit {
					color: #888;
					border-bottom: solid 2px #999;
					line-height: 20px;
					margin-top: 15px;
					font-size: 16px;
				}
				
				.smSalesList .brandItem .item {
					width: 33%;
					text-align: center;
					padding: 15px 0 0;
					float: left;
				}
				
				.smSalesList .brandItem .name {
					padding: 3px 0;
					white-space: nowrap;
					overflow: hidden;
					text-overflow: ellipsis;
					height: 18px;
				}
				
				.smSalesList .brandItem .btn {
					padding: 0;
					text-align: center;
					width: 60px;
					color: #888;
					line-height: 28px;
				}
				
				.smSalesList .brandItem .btn.ac {
					background: #db4437;
					color: #fff;
					border-color: #db4437;
				}
				
				.chooseSalesBox .title {
					text-align: center;
					font-size: 16px;
					padding: 20px 0 10px;
					line-height: 24px;
				}
				
				.chooseSalesBox .tit {
					font-size: 14px;
				}
				
				.chooseSalesBox .storeSales {
					overflow: auto;
					position: absolute;
					top: 78px;
					bottom: 80px;
					left: 0;
					right: 0;
				}
				
				.chooseSalesBox .storeSales .item {
					padding: 10px 0;
					border: none;
					height: 44px;
				}
				
				.chooseSalesBox .storeSales .item:active {
					background: #eee;
				}
				
				.chooseSalesBox .storeSales .name {
					line-height: 44px;
				}
				
				a.gotoStore {
					display: block;
					width: 80px;
					height: 40px;
					line-height: 40px;
					color: #fff;
					background: #e04241;
					text-align: center;
					border-radius: 4px;
					margin: 30px auto 0;
				}
			</style>
	</head>

	<body>
		<input type="hidden" id="redirect" value="chat">
		<input type="hidden" id="suid" value="8">
		<div class="chooseSalesBox">
			<div class="title">
				<div>服务顾问在此恭候多时了</div>
				<div class="tit">请选择一位，他将随时为您提供服务</div>
			</div>
			<div class="storeSales">
			    <?php
$_from = $_smarty_tpl->tpl_vars['guide_info']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$__foreach_val_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
					<div class="item wbox" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['spg_id'];?>
">
						<img src="<?php echo base_url();
echo $_smarty_tpl->tpl_vars['val']->value['head_portrait'];?>
" class="size43 round">
						<div class="name wbox-1 with-go-right">
							<div class="namer"><?php echo $_smarty_tpl->tpl_vars['val']->value['spg_nike_name'];?>
</div>
						</div>
					</div>
				<?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
if ($__foreach_val_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_val_0_saved_key;
}
?>

			</div>
		</div>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TEMPLE;?>
js/zepto.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			var redirect = $("#redirect").val();
			$(".chooseSalesBox .storeSales").on("click", ".item", function(e) {
				var _t = $(this),
					salesId = _t.data("id");
				// $.getJSON("bandingSales.json?salesIds="+salesId,function(data){
				//     if(data.status=="0"){
				if(redirect == "chat") {
					location.href = "<?php echo base_url();?>
vmall.php/store/shopping_guide_chat?spg_id="+salesId;
				} else if(redirect == "mySalesList") {
					location.href = "mySalesList.htm?suid=" + $("#suid").val();
				} else {
					location.href = "getStoreHomePage.htm?storeId=" + getUrlParam("storeId");
				}
				// }else{
				// 	mobileAlert(data.errmsg ? data.errmsg : "系统繁忙，请稍后再试");
				// }
				// });
			});
			
			
		<?php echo '</script'; ?>
>

	</body>

</html><?php }
}
