<?php
/* Smarty version 3.1.29, created on 2017-08-04 17:58:05
  from "D:\www\yunjuke\application\admin\views\public_store_of_other.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5984452d408e69_57840216',
  'file_dependency' => 
  array (
    '45b39d1934a6574546c3198f35b56f913869e3ea' => 
    array (
      0 => 'D:\\www\\yunjuke\\application\\admin\\views\\public_store_of_other.html',
      1 => 1501840679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pageheader.html' => 1,
  ),
),false)) {
function content_5984452d408e69_57840216 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '259895984452d197dd7_41235209';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:pageheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<link rel="stylesheet" href="<?php echo TEMPLE;?>
css/kalendae.css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo TEMPLE;?>
js/kalendae.standalone.js"><?php echo '</script'; ?>
>
<style>
.percent{margin-bottom:10px;}
input.input-num{width:60px !important;}
.kalendae .k-calendar {
    display: inline-block;
    zoom:1;
    *display:inline;
    /* width改为100% width:155px;*/ 
    width: 300px; 
    vertical-align:top;
}
.kalendae .k-title,
.kalendae .k-header,
.kalendae .k-days {
    /* width改为100% */
    /* width:154px; */
    width: 300px;
    display:block;
    overflow:hidden;
}
.kalendae .k-header span {
    text-align:center;
    font-weight:bold;
    /* 这里的width要和.kalendae .k-days span 里面的相等 */
    width:12.8%;
    padding:1px 0;
    color:#666;
}
.kalendae .k-days span {
    /* 水平居中 */
    text-align:center;
    width:12.8%;
    /* 高度 4.5em效果比较好 height等于line-height就能垂直居中了 */
    height:2.5em;
    line-height:2.5em;
    padding:2px 3px 2px 2px;
    border:1px solid transparent;
    border-radius:3px;
    color:#999;
}
.check-box{
	padding-left: 0;
	padding-right: 26px;
}
</style>
<body style="background-color: #FFF; overflow: auto;">
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div>
    <div class="page">
        <div class="fixed-bar">
            <div class="item-title">
               <a class="back" href="javascript:history.back(-1)" title="返回列表"><i class="fa fa-arrow-circle-o-left"></i></a>
					<div class="subject">
						<h3>店铺管理 - <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_name'])) {?>(<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_name'];?>
)<?php } else { ?>门店<?php }?>其他信息设置</h3>
						<h5><?php if (isset($_smarty_tpl->tpl_vars['role']->value) && $_smarty_tpl->tpl_vars['role']->value == 'w') {?>微商城<?php } elseif ($_smarty_tpl->tpl_vars['role']->value == 'd') {?>电商<?php } elseif ($_smarty_tpl->tpl_vars['role']->value == 'g') {?>供应仓库<?php } else { ?>平台<?php }?>中的其他信息设置</h5>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {?>
                <ul class="tab-base nc-row">
				        <li><a href="store_edit?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">基本信息</a></li>
				        <li><a href="store_of_goods?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">商品</a></li>
				        <li><a href="store_of_shopping_guide?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=edit&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">导购</a></li>
				        <li><a href="mall_express_tools?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>&op=&id=<?php echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];?>
">运费</a></li>
				        <li><a href="JavaScript:void(0);" class="current">其他</a></li>
			      </ul>
			      <?php }?>
            </div>
        </div>
        <!-- 操作说明 -->
			<div class="explanation" id="explanation">
				<div class="title" id="checkZoom"><i class="fa fa-lightbulb-o"></i>
					<h4 title="提示相关设置操作时应注意的要点">操作提示</h4>
					<span id="explanationZoom" title="收起提示"></span> </div>
				<ul>
					<li> 若绑定云聚客后为未认证公众号，之后通过了微信认证，请重新授权补充权限。</li>
					<li>仅微信认证后的服务号可使用完整云聚客功能，若微信公众号接口异常，根据提示处理后请点击上方重新授权。</li>
					<li> 若公众号为订阅号，需通过微信认证才可支持微信支付；服务号均可支持。</li>
				</ul>
			</div>
        <form method="post" id="settingForm" name="settingForm" action="store_other_set?role=<?php if (isset($_smarty_tpl->tpl_vars['role']->value)) {
echo $_smarty_tpl->tpl_vars['role']->value;
}?>">
            <input type="hidden" name="store_id" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_id'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_id'];
}?>">
            <input type="hidden" name="store_name" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['store_name'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['store_name'];
}?>">
            <div class="ncap-form-default">
                <dl class="row">
                   <dt class="tit">
                        <label for="store_arayacak">自提订单提货码通知:</label>
                    </dt>
                    <dd class="opt">
                        <select name="store_arayacak" class="valid">
                            <option value="1" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['warn_pick_up']) && $_smarty_tpl->tpl_vars['store_data']->value['warn_pick_up'] == 1) {?>selected<?php }?>>仅微信 公众号提醒</option>
                            <option value="2" <?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['warn_pick_up']) && $_smarty_tpl->tpl_vars['store_data']->value['warn_pick_up'] == 2) {?>selected<?php }?>>短信提心及微信公众号提醒</option>
                        </select>
                        <p class="notic">门店自提订单，发送提货码短信给用户；方便未关注用户购买后可直接查询短信；已关注用户48小时内公众号会有推送提醒，在订单内也可查询到。</p>
                        <span class="err"></span>
                    </dd>
                </dl>
                <dl class="row">
						<dt class="tit">
                    <label for="class_name">订单抽成比例</label>
                </dt>
						<dd class="opt">
						    
							<div class="percent">门店订单：<input type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['offline'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['offline'];
}?>" name="order_take_percentage[offline]" id="" class="input-num">
							<span class="err"></span></div>
							
							<div class="percent">微信订单：<input type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['system'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['system'];
}?>" name="order_take_percentage[system]" id="" class="input-num">
							<span class="err"></span></div>
							
							<div class="percent">分销订单：<input type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['agent'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['agent'];
}?>" name="order_take_percentage[agent]" id="" class="input-num">
							<span class="err"></span></div>
							
							<div class="percent">电商订单：<input type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['online'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['order_take_percentage']['online'];
}?>" name="order_take_percentage[online]" id="" class="input-num">
							<span class="err"></span></div>
							
							<p class="notic">请填写小数</p>
						</dd>
						
					</dl>
                <dl class="row">
						<dt class="tit">
                    <label for="class_name">吸粉返利比例</label>
                </dt>
						<dd class="opt">
							<input type="number" value="<?php if (isset($_smarty_tpl->tpl_vars['store_data']->value['follow_user_percentage'])) {
echo $_smarty_tpl->tpl_vars['store_data']->value['follow_user_percentage'];
}?>" name="follow_user_percentage" id="follow_user_percentage" class="input-num">
							<span class="err"></span>
							<p class="notic"></p>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_name">发货时间</label>
                </dt>
						<dd class="opt">
							<div class="check-box">
							    <input type="checkbox" id="checkbox-1">
							    <label for="checkbox-1">周一</label>
							</div>
							<div class="check-box">
							    <input type="checkbox" id="checkbox-2">
							    <label for="checkbox-2">周二</label>
							</div>
							<div class="check-box">
							    <input type="checkbox" id="checkbox-3">
							    <label for="checkbox-3">周三</label>
							</div>
							<div class="check-box">
							    <input type="checkbox" id="checkbox-4">
							    <label for="checkbox-4">周四</label>
							</div>
							<div class="check-box">
							    <input type="checkbox" id="checkbox-5">
							    <label for="checkbox-5">周五</label>
							</div>
							<div class="check-box">
							    <input type="checkbox" id="checkbox-5">
							    <label for="checkbox-5">周六</label>
							</div>
							<div class="check-box">
							    <input type="checkbox" id="checkbox-5">
							    <label for="checkbox-5">周日</label>
							</div>
						</dd>
					</dl>
					<dl class="row">
						<dt class="tit">
                    <label for="class_name">不能发货时间</label>
                </dt>
						<dd class="opt">
						<input type="text" class="auto-kal" data-kal="mode:'multiple'" style="width: 450px;">
						</dd>
					</dl>
               	
                <div class="bot"><a href="JavaScript:;" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a></div>
            </div>
        </form>
    </div>
  	
    <div id="goTop"> <a href="JavaScript:void(0);" id="btntop"><i class="fa fa-angle-up"></i></a><a href="JavaScript:void(0);" id="btnbottom"><i class="fa fa-angle-down"></i></a></div>
</body>
<?php echo '<script'; ?>
 type="text/javascript">

  $(document).ready(function(){
	  valid_rule = {
			  'order_take_percentage[offline]': {
		            //required: true,
		            range: [0.001,0.999],
		          },
			  'order_take_percentage[system]': {
		            //required: true,
		            range: [0.001,0.999],
		          },
			  'order_take_percentage[agent]': {
		            //required: true,
		            range: [0.001,0.999],
		          },
			  'order_take_percentage[online]': {
		            //required: true,
		            range: [0.001,0.999],
		          },
		     'follow_user_percentage': {
		            //required: true,
		            range: [0,0.999],
		          },
		        };
	  valid_msg = {
			  'order_take_percentage[offline]' : {
	              //required : '<i class="icon-exclamation-sign">请填写抽成比例</i>',
	              range : '<i class="icon-exclamation-sign">数字应在0与0.999之间</i>',
	            },
			  'order_take_percentage[system]' : {
	              //required : '<i class="icon-exclamation-sign">请填写抽成比例</i>',
	              range : '<i class="icon-exclamation-sign">数字应在0与0.999之间</i>',
	            },
			  'order_take_percentage[agent]' : {
	              //required : '<i class="icon-exclamation-sign">请填写抽成比例</i>',
	              range : '<i class="icon-exclamation-sign">数字应在0与0.999之间</i>',
	            },
			  'order_take_percentage[online]' : {
	              //required : '<i class="icon-exclamation-sign">请填写抽成比例</i>',
	              range : '<i class="icon-exclamation-sign">数字应在0与0.999之间</i>',
	            },
	            'follow_user_percentage' : {
	              //required : '<i class="icon-exclamation-sign">请填写吸粉返利比例</i>',
	              range : '<i class="icon-exclamation-sign">数字应在0与0.999之间</i>',
	            },
	          };
	  $("#settingForm").validate({
	      errorPlacement: function(error, element){
	        var error_td = element.next('span.err');
	        error_td.append(error);
	      },
	      rules : valid_rule,
	      messages : valid_msg
	    });
		$('#submitBtn').click(function(){
			if($("#settingForm").valid()){
				$('#settingForm').submit();
			  }  
		    
			 
		})
  })
<?php echo '</script'; ?>
>
</html>
<?php }
}
